@extends('admin.master')

@section('content')

<div class="row">
<div class="col-xl-12">

<form method="POST" action="#">
@csrf

<!-- ================= ADD QUESTION ================= -->
<div class="card mb-4">
<div class="card-body">

<h4 class="mb-3">Question</h4>

<textarea name="question" id="question_editor"></textarea>

</div>
</div>

<!-- ================= OPTIONS ================= -->
<div class="row">

    <!-- OPTION 1 -->
    <div class="col-md-6 mb-4">
        <label class="fw-bold">
            <input type="radio" name="correct" value="1" checked> Option 1
        </label>
        <textarea name="option1" id="option1"></textarea>
    </div>

    <!-- OPTION 2 -->
    <div class="col-md-6 mb-4">
        <label class="fw-bold">
            <input type="radio" name="correct" value="2"> Option 2
        </label>
        <textarea name="option2" id="option2"></textarea>
    </div>

    <!-- OPTION 3 -->
    <div class="col-md-6 mb-4">
        <label class="fw-bold">
            <input type="radio" name="correct" value="3"> Option 3
        </label>
        <textarea name="option3" id="option3"></textarea>
    </div>

    <!-- OPTION 4 -->
    <div class="col-md-6 mb-4">
        <label class="fw-bold">
            <input type="radio" name="correct" value="4"> Option 4
        </label>
        <textarea name="option4" id="option4"></textarea>
    </div>

</div>

<!-- ================= MARK + CATEGORY ================= -->
<div class="row mb-4">

    <div class="col-md-2">
        <label class="fw-bold">Mark</label>
        <input type="number" name="mark" class="form-control" required>
    </div>

    <div class="col-md-6">
        <label class="fw-bold">Select Question Category</label>

        <div class="mt-2">

            <div><input type="radio" name="category" value="1"> Diploma Office Automation & publishing (DOAP)</div>
            <div><input type="radio" name="category" value="2"> Master Diploma in Computer Application (MDCA)</div>
            <div><input type="radio" name="category" value="3"> Advance Diploma in Computer Teacher Training (ADCTT)</div>
            <div><input type="radio" name="category" value="4"> Advance Diploma in Information Technology & Management</div>
            <div><input type="radio" name="category" value="5"> Programming</div>
            <div><input type="radio" name="category" value="6"> Web Designing</div>
            <div><input type="radio" name="category" value="7"> Basic Hardware and Networking</div>
            <div><input type="radio" name="category" value="8"> Personality Development Program</div>

        </div>
    </div>

</div>

<button type="submit" class="btn btn-success mb-4">Add</button>

</form>

<!-- ================= SEARCH ================= -->
<div class="row mb-4">

    <div class="col-md-6">
        <label>Question/Option wise search</label>
        <input type="text" class="form-control" placeholder="Search Question / Option">
    </div>

    <div class="col-md-2 d-flex align-items-end">
        <button class="btn btn-success w-100">Search</button>
    </div>

</div>

<div class="row mb-4">

    <div class="col-md-4">
        <label>Date wise search</label>
        <input type="date" class="form-control">
    </div>

    <div class="col-md-4">
        <label>&nbsp;</label>
        <input type="date" class="form-control">
    </div>

    <div class="col-md-2 d-flex align-items-end">
        <button class="btn btn-success w-100">Search</button>
    </div>

</div>

<!-- ================= TABLE ================= -->
<h3 class="mb-3">Questions</h3>

<div class="table-responsive">
<table class="table align-middle table-bordered">

    <thead class="bg-light">
        <tr>
            <th>S.No.</th>
            <th>Date</th>
            <th>Status</th>
            <th>Qs.</th>
            <th>Mark</th>
            <th>Option1</th>
            <th>Option2</th>
            <th>Option3</th>
            <th>Option4</th>
            <th>Correct</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        <tr>
            <td>1</td>
            <td>15-07-2025</td>
            <td><span class="text-success fs-5">✔</span></td>
            <td>JBSFIUE...</td>
            <td>1</td>
            <td>1</td>
            <td>2</td>
            <td>6</td>
            <td>4</td>
            <td class="text-success">✔ Option 4</td>
            <td>
                <button class="btn btn-info btn-sm">
                    <i class="fas fa-pen"></i>
                </button>
                <button class="btn btn-danger btn-sm">
                    <i class="fas fa-trash"></i>
                </button>
            </td>
        </tr>

    </tbody>

</table>
</div>

</div>
</div>

@endsection


@section('scripts')

<!-- CKEDITOR -->
<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.21.0/ckeditor.js"></script>
<script>
    CKEDITOR.replace('question_editor');
    CKEDITOR.replace('option1');
    CKEDITOR.replace('option2');
    CKEDITOR.replace('option3');
    CKEDITOR.replace('option4');
</script>

@endsection