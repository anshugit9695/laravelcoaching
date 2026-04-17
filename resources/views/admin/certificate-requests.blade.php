@extends('admin.master')

@section('content')

<div class="container mt-3">

    <!-- HEADER -->
    <div class="bg-light p-3 mb-3 rounded shadow-sm d-flex align-items-center">
        <span class="me-2 text-danger fs-5">
            <i class="bi bi-file-earmark-text"></i>
        </span>
        <h5 class="mb-0 text-danger fw-semibold">Certificate Requests</h5>
    </div>

    <!-- TITLE -->
    <h4 class="mb-3">Students</h4>

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
                            <th>Status</th>
                            <th>Name</th>
                            <th>Educational Proof</th>
                            <th>Id Proof</th>
                            <th>Mobile</th>
                            <th>Center</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>SKIITM00276</td>
                            <td>REG202500276</td>

                            <!-- STATUS -->
                            <td>
                                <span class="text-success fs-5">✔</span>
                            </td>

                            <!-- NAME + IMAGE -->
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="https://via.placeholder.com/40"
                                         width="40" height="40" class="rounded border">
                                    <span>Kausar</span>
                                </div>
                            </td>

                            <!-- EDUCATIONAL PROOF -->
                            <td>
                                <img src="https://via.placeholder.com/60x80"
                                     class="border rounded">
                            </td>

                            <!-- ID PROOF -->
                            <td>
                                <img src="https://via.placeholder.com/60x80"
                                     class="border rounded">
                            </td>

                            <td>8057465228</td>

                            <!-- CENTER -->
                            <td>
                                <a href="#" class="text-primary text-decoration-none">
                                    Lakshya Group Of Institutions
                                </a>
                            </td>

                            <!-- ACTION -->
                            <td>
                                <button class="btn btn-warning btn-sm text-white shadow-sm">
                                    Edit/View
                                </button>
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>

        </div>
    </div>

</div>

@endsection