@extends('admin.master')

@section('content')

<div class="container mt-3">

    <!-- HEADER -->
    <div class="bg-light p-3 mb-3 rounded shadow-sm d-flex align-items-center">
        <span class="me-2 text-danger fs-5">
            <i class="bi bi-file-earmark-text"></i>
        </span>
        <h5 class="mb-0 text-danger fw-semibold">Sent Message</h5>
    </div>

    <!-- FILTER SECTION -->
    <div class="card shadow-sm mb-3">
        <div class="card-body">

            <div class="row align-items-end">

                <!-- MESSAGE SEARCH -->
                <div class="col-md-4">
                    <label class="fw-semibold mb-1">Message</label>
                    <input type="text" class="form-control" placeholder="Keyword">
                </div>

                <!-- START DATE -->
                <div class="col-md-3">
                    <label class="fw-semibold mb-1">Start Date</label>
                    <input type="date" class="form-control">
                </div>

                <!-- END DATE -->
                <div class="col-md-3">
                    <label class="fw-semibold mb-1">End Date</label>
                    <input type="date" class="form-control">
                </div>

                <!-- SEARCH BUTTON -->
                <div class="col-md-2">
                    <button class="btn btn-success w-100">Search</button>
                </div>

            </div>

        </div>
    </div>

    <!-- MESSAGE LIST -->
    <div class="card shadow-sm">
        <div class="card-body">

            <!-- INFO -->
            <div class="mb-2 text-muted">
                (Showing 1 – entries of entries)
            </div>

            <!-- ITEM -->
            <div class="d-flex justify-content-between align-items-center border-bottom py-2">

                <div>
                    <strong>irshad ali</strong> - test demo ...
                </div>

                <div class="d-flex align-items-center gap-2">
                    <small class="text-muted">2025-07-28 18:05:32</small>

                    <button class="btn btn-light btn-sm border">
                        <i class="bi bi-trash text-danger"></i>
                    </button>
                </div>

            </div>

            <!-- PAGINATION -->
            <div class="mt-3">

                <div class="mb-2">Page 1 of 0</div>

                <button class="btn btn-light btn-sm me-2">Previous</button>
                <button class="btn btn-light btn-sm">Next</button>

            </div>

        </div>
    </div>

</div>

@endsection