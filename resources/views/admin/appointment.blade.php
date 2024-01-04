@include('admin/header')

@include('admin/sidebar')
@include('admin/navbar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <h1>Appointment</h1>
    </div>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Appointments</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>UserName</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Date</th>
                                        <th>Number</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointment as $data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ App\Models\User::where('id', $data->u_id)->first()->name }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->address }}</td>
                                            <td>{{ $data->created_at }}</td>
                                            <td>{{ $data->m_number }}</td>
                                            <td><span class="tag tag-success">{{ $data->status }}</span></td>
                                            <td>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-primary me-2"
                                                        onclick="openEditModal('{{ $data->id }}','{{ $data->name }}','{{ $data->address }}','{{ $data->appointment_date }}','{{ $data->m_number }}')">Edit</button>
                                                    <form method="POST" action="{{ route('delete.appointment') }}"
                                                        onsubmit="return confirm('Are you sure you want to delete?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="id"
                                                            value="{{ $data->id }}">
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- edit modle --}}
                                        <div class="modal fade" id="edit" tabindex="-1"
                                            aria-labelledby="editTitle" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="editTitle">Edit Appointment
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Your form -->
                                                        <form method="POST" id="edit"
                                                            action="{{ route('edit.appointment', ['id' => $data->id]) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                                <label for="name">Name:</label>
                                                                <input type="text" class="form-control"
                                                                    id="edit_name" name="edit_name"
                                                                    placeholder="Enter your name" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="address">Address:</label>
                                                                <textarea class="form-control" id="edit_address" name="edit_address" placeholder="Enter your address" required></textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="appointment_date">Appointment Date:</label>
                                                                <input type="date" class="form-control"
                                                                    id="edit_appointment_date"
                                                                    name="edit_appointment_date" required
                                                                    min="<?php echo date('Y-m-d'); ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="m_number">Mobile Number:</label>
                                                                <input type="text" class="form-control"
                                                                    id="edit_m_number" name="edit_m_number"
                                                                    placeholder="Enter your mobile number"
                                                                    pattern="[0-9]+" title="Please enter numbers only"
                                                                    required>
                                                            </div>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary">Update</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>

</div>
<script>
    function openEditModal(id, name, address, appointment_date, m_number) {
        document.getElementById('edit_name').value = name;
        document.getElementById('edit_address').value = address;
        document.getElementById('edit_appointment_date').value = appointment_date;
        document.getElementById('edit_m_number').value = m_number;

        const editModal = new bootstrap.Modal(document.getElementById('edit'));
        editModal.show();
    }
</script>
@include('admin/footer')
