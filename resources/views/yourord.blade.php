<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .aligndiv {
            display: flex;
            flex-wrap: wrap;
        }

        .half-width {
            width: 50%;
            height: auto;
            box-sizing: border-box;
            overflow: hidden;
        }

        .half-width img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .backimg {
            top: 0;
            left: 0;
            width: 100%;
            height: 65vh;
            object-fit: cover;
            z-index: -1;
            opacity: 0.6;
        }

        /* Media query for smaller screens */
        @media screen and (max-width: 768px) {
            .half-width {
                width: 100%;
            }
        }
    </style>
    <title>appointment</title>
</head>

<body>
    @include('navbar')
    <div class="container">
        <div class="aligndiv mt-5">
            <div class="half-width">
                <h1><b>Appointment</b></h1>
                <h2>Booking</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A minima est, similique quod consequuntur
                    dignissimos distinctio commodi eveniet omnis quia, maxime molestiae quisquam soluta illum ab sequi
                    illo quas ipsum.</p>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Book Now
                </button>
            </div>
            <div class="half-width">
                <img src="img/appoitment.jpg" class="backimg" alt="appointment">
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Book Now</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Your form -->
                        <form method="POST" action="/yorder">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your name" required>
                            </div>

                            <div class="form-group">
                                <label for="address">Address:</label>
                                <textarea class="form-control" id="address" name="address" placeholder="Enter your address" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="appointment_date">Appointment Date:</label>
                                <input type="date" class="form-control" id="appointment_date" name="appointment_date"
                                    required min="<?php echo date('Y-m-d'); ?>">
                            </div>

                            <div class="form-group">
                                <label for="phone">Mobile Number:</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Enter your mobile number" pattern="[0-9]+"
                                    title="Please enter numbers only" required>
                            </div>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <h1>Your Appointments</h1>
        @if ($userAppointments->isEmpty())
            <p>No appointments found.</p>
        @else
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Ord No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Appointment Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $counter = 1 @endphp
                        @foreach ($userAppointments as $appointment)
                            <tr>
                                <td>{{ $counter }}.</td>
                                <td>{{ $appointment->name }}</td>
                                <td>{{ $appointment->address }}</td>
                                <td>{{ $appointment->appointment_date }}</td>
                                <td><span class="badge rounded-pill"
                                        style="background: 
                                    @php if ($appointment->status === 'Pending') 
                                            echo '#fd7e14'; 
                                        elseif ($appointment->status === 'Success') 
                                            echo 'green'; 
                                        else 
                                            echo 'red'; @endphp">
                                        {{ $appointment->status }}
                                    </span></td>
                                <td>
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-info me-2"
                                            onclick="openEditModal('{{ $appointment->id }}','{{ $appointment->name }}','{{ $appointment->address }}','{{ $appointment->appointment_date }}','{{ $appointment->phone }}')"
                                            style="width: 80px;">Edit</button>

                                        <form method="POST" action="{{ route('delete.appointment') }}"
                                            onsubmit="return confirm('Are you sure you want to delete?')">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $appointment->id }}">
                                            <button type="submit" class="btn btn-danger me-2"
                                                style="width: 100px;">Delete</button>
                                        </form>

                                        <form method="POST"
                                            action="{{ route('pdf.appointments', ['id' => $appointment->id]) }}">
                                            @csrf
                                            <button type="submit" class="btn btn-primary me-2"
                                                style="width: 120px;">View Report</button>
                                        </form>
                                    </div>
                                    {{-- edit modle --}}
                                    <div class="modal fade" id="edit" tabindex="-1"
                                        aria-labelledby="editTitle" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="editTitle">Edit Appointment</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <!-- Your form -->
                                                    <form method="POST" id="edit"
                                                        action="{{ route('edit.appointment', ['id' => $appointment->id]) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" class="form-control" id="edit_id"
                                                            name="edit_id" required>
                                                        <div class="form-group">
                                                            <label for="name">Name:</label>
                                                            <input type="text" class="form-control" id="edit_name"
                                                                name="edit_name" placeholder="Enter your name"
                                                                required>
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
                                                            <label for="phone">Mobile Number:</label>
                                                            <input type="text" class="form-control"
                                                                id="edit_phone" name="edit_phone"
                                                                placeholder="Enter your mobile number"
                                                                pattern="[0-9]+" title="Please enter numbers only"
                                                                required>
                                                        </div>
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @php $counter++ @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif


    </div>
    @include('footer')
    <script>
        function openEditModal(id, name, address, appointment_date, phone) {
            document.getElementById('edit_id').value = id;
            document.getElementById('edit_name').value = name;
            document.getElementById('edit_address').value = address;
            document.getElementById('edit_appointment_date').value = appointment_date;
            document.getElementById('edit_phone').value = phone;

            const editModal = new bootstrap.Modal(document.getElementById('edit'));
            editModal.show();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
