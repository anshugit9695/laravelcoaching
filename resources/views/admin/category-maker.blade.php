@extends('admin.master')

@section('content')

<div class="container mt-3">

    <!-- HEADER -->
    <div class="bg-light p-3 mb-3 rounded shadow-sm d-flex align-items-center">
        <span class="me-2 text-danger fs-5">
            <i class="bi bi-box"></i>
        </span>
        <h5 class="mb-0 text-danger fw-semibold">Category Maker</h5>
    </div>

    <!-- ADD CATEGORY -->
    <h5 class="mb-3">Add Category</h5>

    <div class="row align-items-end mb-3">

        <!-- NAME -->
        <div class="col-md-4">
            <label class="text-muted">Name</label>
            <input type="text" class="form-control border-0 border-bottom rounded-0">
        </div>

        <!-- IMAGE -->
        <div class="col-md-4">
            <label class="text-muted">Image</label>
            <input type="file" class="form-control border-0 border-bottom rounded-0">
        </div>

        <!-- BUTTON -->
        <div class="col-md-4">
            <button class="btn btn-primary shadow-sm">
                + Add Category
            </button>
        </div>

    </div>

    <!-- CATEGORY LIST -->
    <h5 class="fw-bold mb-2">CATEGORIES</h5>

    <div class="card shadow-sm">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table align-middle mb-0">

                    <thead class="bg-light">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <!-- ROW 1 -->
                        <tr>
                            <td>1</td>
                            <td>
                                <div style="width:70px;height:70px;border:1px solid #ccc;"></div>
                            </td>
                            <td>Software</td>
                            <td>
                                <button class="btn btn-warning btn-sm text-white me-1">✏ Edit</button>
                                <button class="btn btn-danger btn-sm">🗑 Delete</button>
                            </td>
                        </tr>

                        <!-- ROW 2 -->
                        <tr>
                            <td>2</td>
                            <td>
                                <div style="width:70px;height:70px;border:1px solid #ccc;"></div>
                            </td>
                            <td>Hardware</td>
                            <td>
                                <button class="btn btn-warning btn-sm text-white me-1">✏ Edit</button>
                                <button class="btn btn-danger btn-sm">🗑 Delete</button>
                            </td>
                        </tr>

                        <!-- ROW 3 -->
                        <tr>
                            <td>3</td>
                            <td>
                                <div style="width:70px;height:70px;border:1px solid #ccc;"></div>
                            </td>
                            <td>Beautician</td>
                            <td>
                                <button class="btn btn-warning btn-sm text-white me-1">✏ Edit</button>
                                <button class="btn btn-danger btn-sm">🗑 Delete</button>
                            </td>
                        </tr>

                        <!-- ROW 4 -->
                        <tr>
                            <td>4</td>
                            <td>
                                <div style="width:70px;height:70px;border:1px solid #ccc;"></div>
                            </td>
                            <td>YOGA</td>
                            <td>
                                <button class="btn btn-warning btn-sm text-white me-1">✏ Edit</button>
                                <button class="btn btn-danger btn-sm">🗑 Delete</button>
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

@endsection