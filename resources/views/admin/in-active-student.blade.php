@extends('admin.master')
@section('content')

<div class="row">
    <div class="col-xl-12">

        <!-- TITLE -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3>Students</h3>
            <button class="btn btn-warning text-white">
                <i class="fas fa-download"></i> Export
            </button>
        </div>

        <!-- TABLE -->
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">

                    <table class="table align-middle mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th>S.No.</th>
                                <th>Roll</th>
                                <th>Reg.</th>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Mobile</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <!-- ROW 1 -->
                            <tr>
                                <td>1</td>
                                <td>SKIITM00411</td>
                                <td>REG202500411</td>
                                <td>Akshara Singh</td>
                                <td>Advanced Diploma in Information Technology & System Management</td>
                                <td>7248713755</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input bg-pink" type="checkbox">
                                    </div>
                                    <small class="text-muted">Inactive</small>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>

                            <!-- ROW 2 -->
                            <tr>
                                <td>2</td>
                                <td>SKIITM00397</td>
                                <td>REG202500397</td>
                                <td>Shabana</td>
                                <td>Advanced Diploma in Information Technology & System Management</td>
                                <td>9548689823</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input bg-pink" type="checkbox">
                                    </div>
                                    <small class="text-muted">Inactive</small>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>

                            <!-- ROW 3 -->
                            <tr>
                                <td>3</td>
                                <td>SKIITM00395</td>
                                <td>REG202500395</td>
                                <td>Mayank singh rawat</td>
                                <td>Advanced Diploma in Information Technology & System Management</td>
                                <td>7836863169</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input bg-pink" type="checkbox">
                                    </div>
                                    <small class="text-muted">Inactive</small>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>

                            <!-- ROW 4 -->
                            <tr>
                                <td>4</td>
                                <td>SKIITM00323</td>
                                <td>REG202500323</td>
                                <td>adminxds</td>
                                <td>Basic Computer & C Programming Language</td>
                                <td>98355766</td>
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input bg-pink" type="checkbox">
                                    </div>
                                    <small class="text-muted">Inactive</small>
                                </td>
                                <td>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection