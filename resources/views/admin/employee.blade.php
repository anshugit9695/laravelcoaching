@extends('admin.master')

@section('content')

<div class="container mt-4">

    <!-- HEADER -->
    <div class="bg-light p-2 mb-3 rounded shadow-sm text-danger fw-semibold">
        <i class="bi bi-file-earmark-text me-2"></i> Add Employee
    </div>

    <!-- FORM -->
    <div class="card p-3 shadow-sm mb-4">

        <div class="row g-3">

            <div class="col-md-2">
                <label>Joining Date</label>
                <input type="date" class="form-control">
            </div>

            <div class="col-md-2">
                <label>Roll</label>
                <select class="form-select">
                    <option>Select Roll</option>
                </select>
            </div>

            <div class="col-md-2">
                <label>Name</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-2">
                <label>Gender</label>
                <select class="form-select">
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>

            <div class="col-md-2">
                <label>Mother's Name</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-2">
                <label>Father's Name</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-2">
                <label>Email</label>
                <input type="email" class="form-control">
            </div>

            <div class="col-md-2">
                <label>Date of Birth</label>
                <input type="date" class="form-control">
            </div>

            <div class="col-md-4">
                <label>Address</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-4">
                <label>Image</label>
                <input type="file" class="form-control">
                <small class="text-muted">
                    Image should be 255*255px, jpeg/png format and less than 1 MB.
                </small>
            </div>

            <div class="col-md-2">
                <label>Mobile No.</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-2">
                <label>Qualification</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-2">
                <label>Id Proof</label>
                <select class="form-select">
                    <option>Aadhar Card</option>
                    <option>PAN Card</option>
                </select>
            </div>

            <div class="col-md-2">
                <label>Id Number</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-2">
                <label>Post</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-2">
                <label>Salary</label>
                <input type="text" class="form-control">
            </div>

        </div>

        <!-- BUTTON -->
        <div class="mt-3">
            <button class="btn btn-success">Add</button>
        </div>

    </div>

    <!-- SEARCH -->
    <div class="mb-3">
        <label class="fw-semibold">Search</label>
        <div class="d-flex gap-2">
            <input type="text" class="form-control"
                placeholder="Name/Mobile/Email/Father's name/Dob/Address">
            <button class="btn btn-success px-4">Search</button>
        </div>
    </div>

    <!-- STAFF TABLE -->
    <h3 class="fw-bold">Staffs</h3>

    <div class="card shadow-sm">
        <div class="table-responsive">

            <table class="table align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Qualification</th>
                        <th>Mobile</th>
                        <th>Post</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>

                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <img src="https://via.placeholder.com/40" width="40" class="rounded">
                                <div>Pratap Babu</div>
                            </div>
                        </td>

                        <td>12th</td>
                        <td>8979706581</td>
                        <td>shahabad</td>
                        <td>000</td>

                        <td>
                            <button class="btn btn-info btn-sm text-white">Id Card</button>
                            <button class="btn btn-warning btn-sm text-white">Report</button>
                            <button class="btn btn-success btn-sm">Salary</button>
                            <button class="btn btn-warning btn-sm text-white">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>

</div>

@endsection