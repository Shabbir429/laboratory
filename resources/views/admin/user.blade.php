@include('admin/header')

@include('admin/sidebar')
@include('admin/navbar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"><button class="btn btn-primary" onclick="addUser()">Add
                                User</button></a>
                    </li>
                    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="editTitle"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="editTitle">Add User
                                    </h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Your form -->
                                    <form method="GET" id="add" action="{{ route('user.add') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Email:</label>
                                            <input class="form-control" id="email" name="email" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="address">Password:</label>
                                            <input class="form-control" id="password" name="password" required>
                                        </div>



                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Add</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </ol>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Users</h3>
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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date</th>
                                        <th>User Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userdata as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            {{-- <td><span class="tag tag-success">Approved</span></td> --}}
                                            <td>{{ $user->created_at }}</td>
                                            <td>{{ App\Models\Role::find($user->roleid)->name }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-primary me-2"
                                                        onclick="openEditModal('{{ $user->id }}','{{ $user->name }}','{{ $user->email }}','{{ $user->roleid }}')">Edit</button>
                                                    <form method="POST" action="{{ route('user.delete') }}"
                                                        onsubmit="return confirm('Are you sure you want to delete?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="id"
                                                            value="{{ $user->id }}">
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        {{-- edit modle --}}
                                        <div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1"
                                            aria-labelledby="editTitle{{ $user->id }}" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="editTitle">Edit User
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Your form -->
                                                        <form method="POST" id="editForm{{ $user->id }}"
                                                            action="{{ route('user.edit', ['id' => $user->id]) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                                <label for="name">Name:</label>
                                                                <input type="text" class="form-control" value="{{ $user->name }}"
                                                                    id="edit_name" name="edit_name" required>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="address">Email:</label>
                                                                <input class="form-control" id="edit_email" value="{{ $user->email }}"
                                                                    name="edit_email" required />
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="address">Role:</label>
                                                                <select name="edit_role" id="edit_role">
                                                                    <option value="" disabled selected>Select a
                                                                        role</option>
                                                                    @foreach (App\Models\Role::pluck('name', 'id') as $id => $name)
                                                                        <option value="{{ $id }}">
                                                                            {{ $name }}</option>
                                                                    @endforeach
                                                                </select>
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
    function openEditModal(id, name, email, roleid) {

        const editModal = new bootstrap.Modal(document.getElementById('editModal' + id));
        editModal.show();
    }

    function addUser() {
        const addModal = new bootstrap.Modal(document.getElementById('add'));
        addModal.show();
    }
</script>
@include('admin/footer')
