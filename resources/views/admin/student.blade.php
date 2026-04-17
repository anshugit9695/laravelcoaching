@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 ">

        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Student Registration</h4>
            </div>

            <div class="card-body">
                <form enctype="multipart/form-data">
                    <div class="row">

                        <!-- LEFT SIDE -->
                        <div class="col-lg-9">
                            <div class="row">

                                <!-- Name -->
                                <div class="col-lg-12 mb-3">
                                    <label>Name</label>
                                    <input type="text" class="form-control">
                                </div>

                                <!-- ID Proof -->
                                <div class="col-lg-4 mb-3">
                                    <label>Id Proof</label>
                                    <select class="form-control">
                                        <option>Aadhar Card</option>
                                        <option>PAN Card</option>
                                    </select>
                                </div>

                                <!-- Aadhaar -->
                                <div class="col-lg-4 mb-3">
                                    <label>Aadhaar No.</label>
                                    <input type="text" class="form-control">
                                </div>

                                <!-- DOB -->
                                <div class="col-lg-4 mb-3">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control">
                                </div>

                                <!-- Guardian -->
                                <div class="col-lg-4 mb-3">
                                    <label>Guardian Type</label>
                                    <select class="form-control">
                                        <option>Father</option>
                                        <option>Mother</option>
                                    </select>
                                </div>

                                <!-- Guardian Name -->
                                <div class="col-lg-8 mb-3">
                                    <label>Guardian's Name</label>
                                    <input type="text" class="form-control">
                                </div>

                                <!-- Mother Name -->
                                <div class="col-lg-9 mb-3">
                                    <label>Mother's Name</label>
                                    <input type="text" class="form-control">
                                </div>

                                <!-- Gender -->
                                <div class="col-lg-3 mb-3">
                                    <label>Gender</label>
                                    <select class="form-control">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>

                                <!-- Communication -->
                                <div class="col-lg-12 mt-2">
                                    <h6 class="text-danger">Communication Details</h6>
                                </div>

                                <!-- Address -->
                                <div class="col-lg-8 mb-3">
                                    <label>Address</label>
                                    <input type="text" class="form-control">
                                </div>

                                <!-- Mobile -->
                                <div class="col-lg-4 mb-3">
                                    <label>Mobile No.</label>
                                    <input type="text" class="form-control">
                                </div>

                                <!-- Guardian Mobile -->
                                <div class="col-lg-6 mb-3">
                                    <label>Guardian Mobile No.</label>
                                    <input type="text" class="form-control">
                                </div>

                                <!-- Education -->
                                <div class="col-lg-12 mt-2">
                                    <h6 class="text-danger">Education Details</h6>
                                </div>

                                <!-- Qualification -->
                                <div class="col-lg-8 mb-3">
                                    <label>Qualification</label>
                                    <input type="text" class="form-control">
                                </div>

                                <!-- Session -->
                                <div class="col-lg-4 mb-3">
                                    <label>Session</label>
                                    <input type="text" class="form-control">
                                </div>

                                <!-- Registration -->
                                <div class="col-lg-12 mt-2">
                                    <h6 class="text-danger">Registration Details</h6>
                                </div>

                                <!-- Course -->
                                <div class="col-lg-4 mb-3">
                                    <label>Course Name</label>
                                    <select class="form-control">
                                        <option>Select Course</option>
                                    </select>
                                </div>

                                <!-- Center -->
                                <div class="col-lg-4 mb-3">
                                    <label>Center</label>
                                    <select class="form-control">
                                        <option>Select Center</option>
                                    </select>
                                </div>

                                <!-- Joining Date -->
                                <div class="col-lg-4 mb-3">
                                    <label>Joining Date</label>
                                    <input type="date" class="form-control">
                                </div>

                                <!-- Username -->
                                <div class="col-lg-6 mb-3">
                                    <label>Username/Email</label>
                                    <input type="text" class="form-control">
                                </div>

                                <!-- Password -->
                                <div class="col-lg-6 mb-3">
                                    <label>Password</label>
                                    <input type="password" class="form-control">
                                </div>

                                <!-- Upload ID -->
                                <div class="col-lg-6 mb-3">
                                    <label>Upload Id</label>
                                    <input type="file" class="form-control">
                                </div>

                                <!-- Educational Proof -->
                                <div class="col-lg-6 mb-3">
                                    <label>Educational Proof</label>
                                    <input type="file" class="form-control">
                                </div>

                                <!-- Remark -->
                                <div class="col-lg-12 mb-3">
                                    <label>Remark</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>

                            </div>
                        </div>

                        <!-- RIGHT SIDE IMAGE -->
                        <div class="col-lg-3">
                            <label>Your Image</label>
                            <div class="border p-3 text-center mb-2" style="height:200px;">
                                Preview
                            </div>
                            <input type="file" class="form-control">
                        </div>

                    </div>

                    <!-- Submit -->
                    <div class="mt-3 text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>

<div class="row">
    <div class="col-xl-12">

        <!-- SEARCH + BUTTON -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div style="width: 300px;">
                <label class="fw-bold">Search Here !!</label>
                <input type="text" class="form-control" placeholder="Search Student Name">
            </div>

            <button class="btn btn-success mt-4">Search</button>
        </div>

        <!-- TITLE + EXPORT -->
        <div class="d-flex justify-content-between align-items-center mb-2">
            <h3>Students</h3>
            <button class="btn btn-warning text-white">
                <i class="fas fa-download"></i> Export
            </button>
        </div>

        <!-- TABLE -->
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">

                    <table class="table align-middle table-hover mb-0">
                        <thead class="bg-light">
                            <tr>
                                <th>S.No.</th>
                                <th>Roll</th>
                                <th>Reg.</th>
                                <th>Name</th>
                                <th>Course</th>
                                <th>Mobile</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <!-- ROW -->
                            <tr>
                                <td>1</td>
                                <td>SKIITM00468</td>
                                <td>REG202500468</td>

                                <!-- NAME WITH IMAGE -->
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="https://via.placeholder.com/40" class="rounded" width="40"
                                            height="40">
                                        <span>Ekta</span>
                                    </div>
                                </td>

                                <td>Diploma in Computer Applications (DCA)</td>
                                <td>9027469576</td>

                                <!-- STATUS TOGGLE -->
                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" checked>
                                    </div>
                                    <small>Active</small>
                                </td>

                                <!-- ACTION -->
                                <td>
                                    <div class="d-flex gap-2">

                                        <a href="#!" class="btn btn-soft-primary btn-sm">
                                            <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18">
                                            </iconify-icon>
                                        </a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm">
                                            <iconify-icon icon="solar:trash-bin-minimalistic-2-broken"
                                                class="align-middle fs-18"></iconify-icon>
                                        </a>
                                    </div>

                                    <button class="btn btn-sm btn-warning mt-1 text-white">
                                        Create Admitcard
                                    </button>
                                </td>
                            </tr>

                            <!-- ROW 2 -->
                            <tr>
                                <td>2</td>
                                <td>SKIITM00467</td>
                                <td>REG202500467</td>

                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="https://via.placeholder.com/40" class="rounded" width="40"
                                            height="40">
                                        <span>Kunal Somaniya</span>
                                    </div>
                                </td>

                                <td>Diploma in Computer Applications (DCA)</td>
                                <td>+91 92590 93623</td>

                                <td>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" checked>
                                    </div>
                                    <small>Active</small>
                                </td>

                                <td>

                                    <div class="d-flex gap-2">

                                        <a href="#!" class="btn btn-soft-primary btn-sm">
                                            <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18">
                                            </iconify-icon>
                                        </a>
                                        <a href="#!" class="btn btn-soft-danger btn-sm">
                                            <iconify-icon icon="solar:trash-bin-minimalistic-2-broken"
                                                class="align-middle fs-18"></iconify-icon>
                                        </a>
                                    </div>

                                    <button class="btn btn-sm btn-warning mt-1 text-white">
                                        Create Admitcard
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