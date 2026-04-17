@extends('admin.master')

@section('content')

<div class="row">
    <div class="col-xl-12">

        <!-- TITLE -->
        <h4 class="mb-4">Add New</h4>

        <!-- ADD CATEGORY -->
        <div class="row mb-4">

            <div class="col-md-4">
                <label class="fw-bold">Question category</label>
                <input type="text" class="form-control border-0 border-bottom rounded-0"
                    placeholder="Question category">
            </div>

            <div class="col-md-2 d-flex align-items-end">
                <button class="btn btn-primary">
                    <i class="fas fa-plus"></i> Add
                </button>
            </div>

        </div>

        <hr>

        <!-- INFO -->
        <p class="text-muted">(Showing 1 – entries of entries)</p>

        <!-- TABLE -->
        <div class="table-responsive">
            <table class="table align-middle">

                <thead class="bg-light">
                    <tr>
                        <th>S.No.</th>
                        <th>category Name</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Diploma Office Automation & publishing (DOAP)</td>
                        <td class="text-end">
                            <button class="btn btn-warning btn-sm text-white">
                                <i class="fas fa-pen"></i> Edit
                            </button>
                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Master Diploma in Computer Application (MDCA)</td>
                        <td class="text-end">
                            <button class="btn btn-warning btn-sm text-white">
                                <i class="fas fa-pen"></i> Edit
                            </button>
                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Advance Diploma in Computer Teacher Training (ADCTT)</td>
                        <td class="text-end">
                            <button class="btn btn-warning btn-sm text-white">
                                <i class="fas fa-pen"></i> Edit
                            </button>
                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Advance Diploma in Information Technology & Management (ADITM)</td>
                        <td class="text-end">
                            <button class="btn btn-warning btn-sm text-white">
                                <i class="fas fa-pen"></i> Edit
                            </button>
                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>Post Graduate Diploma in Computer Application (PGDCA)</td>
                        <td class="text-end">
                            <button class="btn btn-warning btn-sm text-white">
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

@endsection