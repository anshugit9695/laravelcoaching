@extends('admin.master')

@section('content')

<div class="container mt-3">

    <!-- TITLE -->
    <h4 class="mb-3">Add Element</h4>

    <!-- INPUT + DROPDOWN + BUTTON -->
    <div class="row align-items-end mb-3">

        <!-- ELEMENT NAME -->
        <div class="col-md-4">
            <label class="text-muted">Element Name</label>
            <input type="text" class="form-control border-0 border-bottom rounded-0">
        </div>

        <!-- TYPE SELECT -->
        <div class="col-md-4">
            <select class="form-select shadow-sm">
                <option>Text</option>
                <option>Textarea</option>
                <option>File</option>
            </select>
        </div>

        <!-- BUTTON -->
        <div class="col-md-4">
            <button class="btn btn-primary shadow-sm">
                + Add Element
            </button>
        </div>

    </div>

    <!-- ELEMENTS TITLE -->
    <h5 class="fw-bold mb-2">ELEMENTS</h5>

    <!-- TABLE -->
    <div class="card shadow-sm">
        <div class="card-body p-0">

            <div class="table-responsive">
                <table class="table align-middle mb-0">

                    <thead class="bg-light">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Text/File</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>

                        <!-- ROW 1 -->
                        <tr>
                            <td>1</td>
                            <td>name</td>
                            <td>SHARE KNOWLEDGE INSTITUTE OF IT AND MANAGEMENT</td>
                            <td>
                                <button class="btn btn-warning btn-sm text-white mb-1">
                                    ✏ Edit
                                </button>
                                <br>
                                <button class="btn btn-danger btn-sm">
                                    🗑 Delete
                                </button>
                            </td>
                        </tr>

                        <!-- ROW 2 (IMAGE) -->
                        <tr>
                            <td>2</td>
                            <td>favicon</td>
                            <td>
                                <img src="https://via.placeholder.com/80"
                                     class="rounded border">
                            </td>
                            <td>
                                <button class="btn btn-warning btn-sm text-white mb-1">
                                    ✏ Edit
                                </button>
                                <br>
                                <button class="btn btn-danger btn-sm">
                                    🗑 Delete
                                </button>
                            </td>
                        </tr>

                        <!-- ROW 3 -->
                        <tr>
                            <td>3</td>
                            <td>phone</td>
                            <td>+91 8191910408</td>
                            <td>
                                <button class="btn btn-warning btn-sm text-white mb-1">
                                    ✏ Edit
                                </button>
                                <br>
                                <button class="btn btn-danger btn-sm">
                                    🗑 Delete
                                </button>
                            </td>
                        </tr>

                        <!-- ROW 4 -->
                        <tr>
                            <td>4</td>
                            <td>email</td>
                            <td>skiitminstitute@gmail.com</td>
                            <td>
                                <button class="btn btn-warning btn-sm text-white mb-1">
                                    ✏ Edit
                                </button>
                                <br>
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