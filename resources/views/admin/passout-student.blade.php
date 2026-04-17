@extends('admin.master')
@section('content')

<div class="row">
    <div class="col-xl-12">

        <!-- TABLE -->
        <div class="container mt-4">

            <!-- SEARCH -->
            <div class="mb-3 d-flex gap-2">
                <input type="text" class="form-control" placeholder="Search Name/Phone/Roll No">
                <button class="btn btn-success px-4">Search</button>
            </div>

            <!-- TITLE + EXPORT -->
            <div class="d-flex justify-content-between align-items-center mb-2">
                <h3 class="fw-bold">passout student</h3>
                <button class="btn btn-warning text-white shadow-sm">Excel Report</button>
            </div>

            <!-- TABLE -->
            <div class="card shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">

                        <table class="table align-middle mb-0">
                            <thead class="bg-light">
                                <tr>
                                    <th>S.No.</th>
                                    <th>Roll</th>
                                    <th>Reg.</th>
                                    <th>Code</th>
                                    <th>Status</th>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <!-- ROW 1 -->
                                <tr>
                                    <td>1</td>
                                    <td>SKIITM00468</td>
                                    <td>REG202500468</td>
                                    <td>SKIITM/UP/1002</td>
                                    <td><span class="text-success fs-5">✔</span></td>

                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="https://via.placeholder.com/40" class="rounded" width="40">
                                            <span>Ekta</span>
                                        </div>
                                    </td>

                                    <td>Diploma in Computer Applications (DCA)</td>
                                    <td>9027469576</td>

                                    <td>
                                        <button class="btn btn-primary btn-sm">Marksheet</button>
                                        <button class="btn btn-primary btn-sm">Certificate</button>
                                        <button class="btn btn-warning btn-sm text-white">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>

                                <!-- ROW 2 -->
                                <tr>
                                    <td>2</td>
                                    <td>SKIITM00467</td>
                                    <td>REG202500467</td>
                                    <td>SKIITM/UP/1002</td>
                                    <td><span class="text-success fs-5">✔</span></td>

                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="https://via.placeholder.com/40" class="rounded" width="40">
                                            <span>Kunal somaniya</span>
                                        </div>
                                    </td>

                                    <td>Diploma in Computer Applications (DCA)</td>
                                    <td>+91 9259093623</td>

                                    <td>
                                        <button class="btn btn-primary btn-sm">Marksheet</button>
                                        <button class="btn btn-primary btn-sm">Certificate</button>
                                        <button class="btn btn-warning btn-sm text-white">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>

                                <!-- ROW 3 -->
                                <tr>
                                    <td>3</td>
                                    <td>SKIITM00466</td>
                                    <td>REG202500466</td>
                                    <td>SKIITM/UP/1002</td>
                                    <td><span class="text-success fs-5">✔</span></td>

                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="https://via.placeholder.com/40" class="rounded" width="40">
                                            <span>Naman Goel</span>
                                        </div>
                                    </td>

                                    <td>Advanced Diploma in Computer Applications (ADCA)</td>
                                    <td>+91 9548431476</td>

                                    <td>
                                        <button class="btn btn-primary btn-sm">Marksheet</button>
                                        <button class="btn btn-primary btn-sm">Certificate</button>
                                        <button class="btn btn-warning btn-sm text-white">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>

                                <!-- ROW 4 -->
                                <tr>
                                    <td>4</td>
                                    <td>SKIITM00459</td>
                                    <td>REG202500459</td>
                                    <td>SKIITM/UP/1001</td>
                                    <td><span class="text-success fs-5">✔</span></td>

                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="https://via.placeholder.com/40" class="rounded" width="40">
                                            <span>Rahul Kumar</span>
                                        </div>
                                    </td>

                                    <td>PGDCA</td>
                                    <td>9520282893</td>

                                    <td>
                                        <button class="btn btn-primary btn-sm">Marksheet</button>
                                        <button class="btn btn-primary btn-sm">Certificate</button>
                                        <button class="btn btn-warning btn-sm text-white">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                </div>

                <!-- PAGINATION -->
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <div>Showing 1 to 4 of 4 entries</div>

                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><a class="page-link">Previous</a></li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item disabled"><a class="page-link">Next</a></li>
                    </ul>
                </div>

            </div>

        </div>

    </div>
</div>

@endsection