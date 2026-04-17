@extends('admin.master')

@section('content')

<div class="container mt-3">

    <!-- BREADCRUMB -->
    <div class="bg-light p-2 mb-3 rounded">
        <a href="#" class="text-decoration-none text-primary">Home</a>
        <span class="mx-2">></span>
        <span class="text-primary fw-semibold">Create Message</span>
    </div>

    <!-- CARD -->
    <div class="card shadow-sm">
        <div class="card-body">

            <!-- SUBJECT -->
            <div class="mb-3">
                <label class="fw-semibold mb-1">Subject</label>
                <input type="text" class="form-control">
            </div>

            <!-- MESSAGE BODY -->
            <div class="mb-4">
                <label class="fw-semibold mb-1">Message Body</label>
                <textarea id="editor" class="form-control" rows="8"></textarea>
            </div>

            <hr>

            <!-- SELECT SECTIONS -->
            <div class="row">

                <!-- CENTERS -->
                <div class="col-md-6">
                    <h6 class="fw-semibold mb-2">Select Centers</h6>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">
                            Share Knowledge Institute of IT and Management
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">
                            Indian Institute Computer Center
                        </label>
                    </div>
                </div>

                <!-- STUDENTS -->
                <div class="col-md-6">
                    <h6 class="fw-semibold mb-2">Select Students</h6>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">
                            Amit Kumar (SKIITM001)
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">
                            Gautam Kumar (SKIITM002)
                        </label>
                    </div>
                </div>

            </div>

        </div>

        <!-- FOOTER -->
        <div class="card-footer text-end">
            <button class="btn btn-success px-4">Send Message</button>
        </div>

    </div>

</div>
<script src="https://cdn.ckeditor.com/4.25.1-lts/standard/ckeditor.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById('editor')) {
        CKEDITOR.replace('editor');
    }
});
</script>
@endsection