@extends('admin.master')

@section('content')

<div class="container mt-4">

    <!-- TITLE -->
    <h4 class="fw-semibold mb-3">Add Video</h4>

    <!-- FORM -->
    <div class="row align-items-end mb-4">

        <div class="col-md-4">
            <label class="text-muted">Title</label>
            <input type="text" class="form-control border-0 border-bottom rounded-0">
        </div>

        <div class="col-md-4">
            <label class="text-muted">Video Slug</label>
            <input type="text" class="form-control border-0 border-bottom rounded-0">
        </div>

        <div class="col-md-2">
            <button class="btn btn-primary shadow-sm">
                <i class="bi bi-plus"></i> Add
            </button>
        </div>

    </div>

    <!-- VIDEO LIST -->
    <h5 class="fw-semibold mb-3">Video List</h5>

    <div class="card shadow-sm">
        <div class="table-responsive">

            <table class="table align-middle mb-0">
                <thead class="border-bottom">
                    <tr>
                        <th>Sr. No.</th>
                        <th>Video</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <!-- ROW 1 -->
                    <tr>
                        <td>1</td>

                        <td>
                            <a href="#" class="text-primary text-decoration-none">
                                ▶ View
                            </a>
                        </td>

                        <td>-</td>

                        <td>
                            <button class="btn btn-warning btn-sm text-white">
                                ✏ Assign
                            </button>

                            <button class="btn btn-danger btn-sm">
                                🗑 Delete
                            </button>
                        </td>
                    </tr>

                    <!-- ROW 2 -->
                    <tr>
                        <td>2</td>

                        <td>
                            <a href="#" class="text-primary text-decoration-none">
                                ▶ View
                            </a>
                        </td>

                        <td>-</td>

                        <td>
                            <button class="btn btn-warning btn-sm text-white">
                                ✏ Assign
                            </button>

                            <button class="btn btn-danger btn-sm">
                                🗑 Delete
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>

</div>

@endsection