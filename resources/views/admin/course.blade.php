@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-xl-12">

        <!-- PAGE TITLE -->
        <div class="mb-3 p-2 bg-light border">
            <h5 class="mb-0">
                <i class="fas fa-file text-danger"></i> Add Course
            </h5>
        </div>

        <!-- CARD -->
        <div class="card">
            <div class="card-body">

                <!-- FORM TITLE -->
                <h4 class="mb-4">Add New</h4>

                <!-- FORM -->
                <div class="row">

                    <!-- Course Name -->
                    <div class="col-md-3 mb-4">
                        <label class="fw-bold">Course Name</label>
                        <input type="text" class="form-control border-0 border-bottom rounded-0"
                            placeholder="Course Name">
                    </div>

                    <!-- Course Fees -->
                    <div class="col-md-3 mb-4">
                        <label class="fw-bold">Course Fees</label>
                        <input type="text" class="form-control border-0 border-bottom rounded-0"
                            placeholder="Course Fees">
                    </div>

                    <!-- Marksheet Fees -->
                    <div class="col-md-3 mb-4">
                        <label class="fw-bold">Marksheet Fees</label>
                        <input type="text" class="form-control border-0 border-bottom rounded-0"
                            placeholder="Marksheet Fees">
                    </div>

                    <!-- Certificate Fees -->
                    <div class="col-md-3 mb-4">
                        <label class="fw-bold">Certificate Fees</label>
                        <input type="text" class="form-control border-0 border-bottom rounded-0"
                            placeholder="Certificate Fees">
                    </div>

                    <!-- Subject -->
                    <div class="col-md-3 mb-4">
                        <label class="fw-bold">Subject</label>
                        <input type="text" class="form-control border-0 border-bottom rounded-0"
                            placeholder="Subject">
                    </div>

                    <!-- ADD BUTTON -->
                    <div class="col-md-3 d-flex align-items-end mb-4">
                        <button class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add
                        </button>
                    </div>

                </div>

                <hr>

                <!-- TABLE INFO -->
                <p class="text-muted">(Showing 1 – entries of entries)</p>

                <!-- TABLE -->
                <div class="table-responsive">
                    <table class="table align-middle">

                        <thead class="bg-light">
                            <tr>
                                <th>S.No.</th>
                                <th>Course</th>
                                <th>Marksheet Fees</th>
                                <th>Certificate Fees</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            <tr>
                                <td>1</td>
                                <td>Basic Computer</td>
                                <td>-</td>
                                <td>-</td>
                                <td>
                                    <button class="btn btn-success btn-sm">
                                        <i class="fas fa-pen"></i> Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Web Designing</td>
                                <td>-</td>
                                <td>-</td>
                                <td>
                                    <button class="btn btn-success btn-sm">
                                        <i class="fas fa-pen"></i> Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Programming</td>
                                <td>-</td>
                                <td>-</td>
                                <td>
                                    <button class="btn btn-success btn-sm">
                                        <i class="fas fa-pen"></i> Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Desktop Publishing (DTP)</td>
                                <td>-</td>
                                <td>-</td>
                                <td>
                                    <button class="btn btn-success btn-sm">
                                        <i class="fas fa-pen"></i> Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Advance Tally + GST</td>
                                <td>-</td>
                                <td>-</td>
                                <td>
                                    <button class="btn btn-success btn-sm">
                                        <i class="fas fa-pen"></i> Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Advance Basic + Tally Prime</td>
                                <td>-</td>
                                <td>-</td>
                                <td>
                                    <button class="btn btn-success btn-sm">
                                        <i class="fas fa-pen"></i> Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
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