@extends('student.master')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    .card-box {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .profile-left {
        overflow: hidden;
    }

    .profile-top {
        background: #850c3ca3;
        height: 120px;
    }

    .profile-img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        border: 4px solid #fff;
        margin-top: -60px;
        background: #fff;
        object-fit: cover;
    }

    .profile-name {
        font-weight: 600;
        margin-top: 10px;
    }

    .left-info {
        border-top: 1px solid #ddd;
        padding: 10px 15px;
    }

    .left-info .row {
        padding: 5px 0;
        border-bottom: 1px solid #eee;
        font-size: 14px;
    }

    .right-box {
        padding: 20px;
    }

    .right-title {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .right-row {
        display: flex;
        border-bottom: 1px solid #ddd;
        padding: 8px 0;
        font-size: 14px;
    }

    .right-row .label {
        width: 180px;
        font-weight: 600;
    }

    .right-row .value {
        color: #333;
    }
</style>

<div class="container-fluid mt-4">
    <div class="row">

        <!-- LEFT SIDE -->
        <div class="col-md-4">
            <div class="card-box profile-left text-center">

                <div class="profile-top"></div>

                <img src="https://skiitminstitute.com/certificate/center/upload/73106img20260328_17010908.jpg" class="profile-img">

                <h5 class="profile-name">Ikra Khan</h5>

                <div class="left-info">
                    <div class="row">
                        <div class="col-6 text-start">Roll No :</div>
                        <div class="col-6 text-end fw-bold">SKIITM00463</div>
                    </div>
                    <div class="row">
                        <div class="col-6 text-start">Reg. No :</div>
                        <div class="col-6 text-end fw-bold">REG202500463</div>
                    </div>
                    <div class="row">
                        <div class="col-6 text-start">D.O.B :</div>
                        <div class="col-6 text-end fw-bold">26-02-2012</div>
                    </div>
                    <div class="row border-0">
                        <div class="col-6 text-start">Joining Date :</div>
                        <div class="col-6 text-end fw-bold">08-04-2026</div>
                    </div>
                </div>

            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="col-md-8">
            <div class="card-box right-box">

                <div class="right-title">
                    <i class="fa fa-user me-2"></i>Profile
                </div>

                <div class="right-row">
                    <div class="label">Name</div>
                    <div class="value">Ikra Khan</div>
                </div>

                <div class="right-row">
                    <div class="label">Father's Name</div>
                    <div class="value">Shahnawaz khan</div>
                </div>

                <div class="right-row">
                    <div class="label">Mother's Name</div>
                    <div class="value">Aasiya Khan</div>
                </div>

                <div class="right-row">
                    <div class="label">Mobile</div>
                    <div class="value">9917629255</div>
                </div>

                <div class="right-row">
                    <div class="label">Email</div>
                    <div class="value">asiyakhan621621621@gmail.com</div>
                </div>

                <div class="right-row">
                    <div class="label">Address</div>
                    <div class="value">
                        Ward No 26, Nai Basti, Near Kabristan Gate, Haldwani, Nainital, Uttarakhand - 263139
                    </div>
                </div>

                <div class="right-row border-0">
                    <div class="label">Course</div>
                    <div class="value">Advanced Diploma in Computer Applications (ADCA)</div>
                </div>

            </div>
        </div>

    </div>
</div>

@endsection