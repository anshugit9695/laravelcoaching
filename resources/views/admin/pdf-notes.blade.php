@extends('admin.master')

@section('content')

<div class="container mt-3">

    <!-- TITLE -->
    <h4 class="mb-3">Add PDF</h4>

    <!-- FORM ROW -->
    <div class="row align-items-end mb-3">

        <!-- COURSE -->
        <div class="col-md-4">
            <label class="text-muted">Select Course</label>
            <select class="form-select">
                <option>Select Course</option>
                <option>DCA</option>
                <option>ADCA</option>
            </select>
        </div>

        <!-- NAME -->
        <div class="col-md-4">
            <label class="text-muted">Name</label>
            <input type="text" class="form-control border-0 border-bottom rounded-0">
        </div>

        <!-- FILE -->
        <div class="col-md-4">
            <label class="text-muted">File</label>
            <input type="file" class="form-control border-0 border-bottom rounded-0">
        </div>

    </div>

    <!-- ADD BUTTON -->
    <button class="btn btn-primary mb-3 shadow-sm">
        + Add
    </button>

    <!-- PDF NOTES -->
    <h5 class="fw-bold mb-2">PDF Notes</h5>

    <!-- TABLE -->
    <div class="card shadow-sm">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table align-middle mb-0">

                    <thead class="bg-light">
                        <tr>
                            <th>Sr. No.</th>
                            <th>File</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <!-- ROW 1 -->
                        <tr>
                            <td>1</td>

                            <td>
                                <div class="text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png"
                                         width="60">
                                    <div>PDF</div>
                                </div>
                            </td>

                            <td>Sample PDF 1</td>

                            <td>
                                <button class="btn btn-warning btn-sm text-white me-1">
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
                                <div class="text-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/337/337946.png"
                                         width="60">
                                    <div>PDF</div>
                                </div>
                            </td>

                            <td>Sample PDF 2</td>

                            <td>
                                <button class="btn btn-warning btn-sm text-white me-1">
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

</div>

@endsection