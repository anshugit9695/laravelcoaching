@extends('admin.master')
@section('content')

<div class="row">
    <div class="col-xl-12">

        <!-- SEARCH -->
        <div class="mb-3">
            <label class="fw-bold">Search Here</label>
            <div class="d-flex gap-2">
                <input type="text" class="form-control"
                    placeholder="Search Name/Phone/Roll No">
                <button class="btn btn-success">Search</button>
            </div>
        </div>

        <!-- TITLE + EXPORT -->
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h3 class="fw-bold">Students</h3>
            <button class="btn btn-warning text-white">
                Excel Report
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
                                <th>Code</th>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Mobile</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>SKIITM00465</td>
                                <td>REG202500465</td>
                                <td>SKIITM/UK/1011</td>

                                <!-- NAME -->
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="https://via.placeholder.com/40"
                                            class="rounded" width="40" height="40">
                                        <span>Miswah</span>
                                    </div>
                                </td>

                                <td>Advanced Diploma in Computer Applications (ADCA)</td>
                                <td>7351853839</td>

                                <!-- STATUS -->
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" checked>
                                    </div>
                                    <small>Active</small>
                                </td>

                                <!-- ACTION -->
                                <td>
                                    <div class="d-flex flex-wrap gap-1">
                                        <button class="btn btn-info btn-sm text-white">
                                            Create Admit Card
                                        </button>

                                        <button class="btn btn-warning btn-sm text-white">
                                            Edit
                                        </button>

                                        <button class="btn btn-primary btn-sm">
                                            Details
                                        </button>

                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>

            <!-- FOOTER PAGINATION -->
            <div class="card-footer d-flex justify-content-between align-items-center">
                <div>
                    Showing 1 to 10 of 50 entries
                </div>

                <nav>
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link">1</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link">2</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link">3</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>

    </div>
</div>

@endsection