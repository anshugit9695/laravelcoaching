@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="d-flex card-header justify-content-between align-items-center">
                <div>
                    <h4 class="card-title">All Centers</h4>
                </div>
                <div>
                   <button class="badge bg-success text-dark  px-2 py-1 fs-13">Add Center</button>
                </div>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        This Month
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Download</a>
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Export</a>
                        <!-- item-->
                        <a href="#!" class="dropdown-item">Import</a>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-hover table-centered">
                        <thead class="bg-light-subtle">
                            <tr>
                                <th>So. No.</th>
                                <th>status</th>
                                <th>Center Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td> <span class="badge bg-success text-dark  px-2 py-1 fs-13">Unpaid</span></td>
                                <td>
                                    Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.
                                </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#!" >
                                           <span class="badge bg-success text-dark  px-2 py-1 fs-13">Student</span>
                                        </a>
                                        <a href="#!">
                                            <span class="badge bg-success text-dark  px-2 py-1 fs-13">certificate</span>
                                        </a>
                                        <a href="#!">
                                           <span class="badge bg-success text-dark  px-2 py-1 fs-13">Fee</span>
                                        </a>
                                          <a href="#!">
                                           <span class="badge bg-success text-dark  px-2 py-1 fs-13">Edit</span>
                                        </a>
                                          <a href="#!">
                                           <span class="badge bg-success text-dark  px-2 py-1 fs-13">login</span>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
            <div class="card-footer border-top">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</div>

@endsection