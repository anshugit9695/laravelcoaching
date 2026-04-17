@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-xl-12">

        <!-- FORM CARD -->
        <div class="card">
            <div class="card-body">

                <h4 class="mb-4">Add New</h4>

                <!-- FORM -->
                <div class="row">

                    <!-- Exam Name -->
                    <div class="col-md-3 mb-4">
                        <input type="text" class="form-control border-0 border-bottom rounded-0"
                            placeholder="Exam Name">
                    </div>

                    <!-- Paper Code -->
                    <div class="col-md-3 mb-4">
                        <input type="text" class="form-control border-0 border-bottom rounded-0"
                            placeholder="Paper Code">
                    </div>

                    <!-- Minus Marking -->
                    <div class="col-md-3 mb-4">
                        <input type="number" class="form-control border-0 border-bottom rounded-0"
                            placeholder="Minus Marking">
                    </div>

                    <!-- Date -->
                    <div class="col-md-3 mb-4">
                        <input type="date" class="form-control border-0 border-bottom rounded-0">
                    </div>

                    <!-- Time -->
                    <div class="col-md-3 mb-4">
                        <input type="time" class="form-control border-0 border-bottom rounded-0">
                    </div>

                    <!-- Exam Hours -->
                    <div class="col-md-3 mb-4">
                        <input type="text" class="form-control border-0 border-bottom rounded-0"
                            placeholder="Exam Hours">
                    </div>

                    <!-- Semester -->
                    <div class="col-md-3 mb-4">
                        <input type="text" class="form-control border-0 border-bottom rounded-0"
                            placeholder="Semester">
                    </div>

                    <!-- ADD BUTTON -->
                    <div class="col-md-3 d-flex align-items-end mb-4">
                        <button class="btn btn-primary">
                            <i class="fas fa-plus"></i> Add
                        </button>
                    </div>

                </div>

                <hr>

                <!-- SEARCH FILTER -->
                <div class="row mb-4">

                    <div class="col-md-3">
                        <label>Test Name</label>
                        <input type="text" class="form-control" placeholder="Search Test Name">
                    </div>

                    <div class="col-md-3">
                        <label>Start Date</label>
                        <input type="date" class="form-control">
                    </div>

                    <div class="col-md-3">
                        <label>End Date</label>
                        <input type="date" class="form-control">
                    </div>

                    <div class="col-md-3 d-flex align-items-end">
                        <button class="btn btn-success w-50">Search</button>
                    </div>

                </div>

                <!-- INFO -->
                <p class="text-muted">(Showing 1 – entries of entries)</p>

                <!-- TABLE -->
                <div class="table-responsive">
                    <table class="table align-middle">

                        <thead class="bg-light">
                            <tr>
                                <th>S.No.</th>
                                <th>Online Status</th>
                                <th>Test Name</th>
                                <th>No. of Qs.</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center fw-bold py-4">
                                    No Match Found
                                </td>
                            </tr>
                        </tbody>

                    </table>
                </div>

                <!-- PAGINATION -->
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <p class="mb-0">Page 1 of 0</p>

                    <div>
                        <button class="btn btn-outline-secondary btn-sm">Previous</button>
                        <button class="btn btn-outline-secondary btn-sm">Next</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection