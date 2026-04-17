@extends('admin.master')

@section('content')

<div class="container mt-4">

    <!-- HEADER -->
    <div class="bg-light p-3 mb-3 rounded shadow-sm d-flex align-items-center">
        <span class="me-2 text-danger fs-5">
            <i class="bi bi-file-earmark-text"></i>
        </span>
        <h5 class="mb-0 text-danger fw-semibold">Attendence</h5>
    </div>

    <!-- CARD -->
    <div class="card shadow-sm">
        <div class="card-body">

            <!-- TITLE -->
            <h5 class="fw-bold text-primary mb-3">Staff Attendance</h5>

            <!-- DATE -->
            <div class="mb-4" style="max-width:300px;">
                <label class="fw-semibold mb-1">Select Date</label>
                <input type="date" class="form-control">
            </div>

            <!-- TABLE -->
            <div class="table-responsive">
                <table class="table align-middle">

                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Staff</th>
                            <th>
                                Action <br>
                                <small>Check all? 
                                    <input type="checkbox">
                                </small>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pratap Babu</td>
                            <td>
                                P <input type="checkbox">
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>

        </div>

        <!-- FOOTER BUTTON -->
        <div class="card-footer p-0">
            <button class="btn btn-success w-100 rounded-0">
                Save
            </button>
        </div>

    </div>

</div>

@endsection