@extends('admin.master')
@section('content')

<div class="container mt-4">

    <!-- HEADER -->
    <div class="bg-light p-3 mb-3 rounded shadow-sm d-flex align-items-center">
        <span class="me-2 text-danger fs-5">
            <i class="bi bi-file-earmark-text"></i>
        </span>
        <h5 class="mb-0 text-danger fw-semibold">Import Question</h5>
    </div>

    <!-- CARD -->
    <div class="card shadow-sm">
        <div class="card-body">

            <!-- LABEL -->
            <label class="fw-semibold mb-2">Upload Question</label>

            <!-- FILE + BUTTON -->
            <div class="d-flex align-items-center gap-3 flex-wrap">

                <!-- FILE INPUT -->
                <div style="min-width:300px;">
                    <input type="file" class="form-control border-0 border-bottom rounded-0">
                </div>

                <!-- ADD BUTTON -->
                <button class="btn btn-primary px-3 shadow-sm">
                    <i class="bi bi-plus"></i> Add
                </button>

            </div>

        </div>
    </div>

</div>

@endsection