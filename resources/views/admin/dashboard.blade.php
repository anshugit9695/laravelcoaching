@extends('admin.master')

@section('content')

<div class="container mt-3">

    <!-- TITLE -->
    <div class="bg-light p-2 mb-3 rounded">
        <h5 class="text-danger mb-0">Admin Dashboard</h5>
    </div>

    <!-- CARDS -->
    <div class="row g-3">

        <!-- CARD -->
        <div class="col-md-4">
            <div class="card text-white bg-success position-relative p-4 rounded-3 shadow-sm">
                <div class="position-absolute top-0 end-0 m-2 badge bg-light text-dark">392</div>
                <div class="text-center">
                    <i class="bi bi-building fs-1"></i>
                    <h5 class="mt-2">All Student</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-danger position-relative p-4 rounded-3 shadow-sm">
                <div class="position-absolute top-0 end-0 m-2 badge bg-light text-dark">126</div>
                <div class="text-center">
                    <i class="bi bi-file-earmark fs-1"></i>
                    <h5 class="mt-2">Passed Student</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success position-relative p-4 rounded-3 shadow-sm">
                <div class="position-absolute top-0 end-0 m-2 badge bg-light text-dark">14</div>
                <div class="text-center">
                    <i class="bi bi-bank fs-1"></i>
                    <h5 class="mt-2">All Centers</h5>
                </div>
            </div>
        </div>

        <!-- ROW 2 -->
        <div class="col-md-4">
            <div class="card text-white bg-danger p-4 rounded-3 shadow-sm">
                <div class="position-absolute top-0 end-0 m-2 badge bg-light text-dark">74</div>
                <div class="text-center">
                    <i class="bi bi-file-earmark fs-1"></i>
                    <h5 class="mt-2">Add Courses</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success p-4 rounded-3 shadow-sm">
                <div class="position-absolute top-0 end-0 m-2 badge bg-light text-dark">0</div>
                <div class="text-center">
                    <i class="bi bi-laptop fs-1"></i>
                    <h5 class="mt-2">Create Exam</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-danger p-4 rounded-3 shadow-sm">
                <div class="position-absolute top-0 end-0 m-2 badge bg-light text-dark">0</div>
                <div class="text-center">
                    <i class="bi bi-currency-rupee fs-1"></i>
                    <h5 class="mt-2">Pending Transaction</h5>
                </div>
            </div>
        </div>

        <!-- ROW 3 -->
        <div class="col-md-4">
            <div class="card text-white bg-success p-4 rounded-3 shadow-sm">
                <div class="position-absolute top-0 end-0 m-2 badge bg-light text-dark">124,350.00</div>
                <div class="text-center">
                    <i class="bi bi-cash-stack fs-1"></i>
                    <h5 class="mt-2">Transaction History</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-danger p-4 rounded-3 shadow-sm">
                <div class="position-absolute top-0 end-0 m-2 badge bg-light text-dark">1</div>
                <div class="text-center">
                    <i class="bi bi-pencil fs-1"></i>
                    <h5 class="mt-2">Add Questions</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success p-4 rounded-3 shadow-sm">
                <div class="position-absolute top-0 end-0 m-2 badge bg-light text-dark">1</div>
                <div class="text-center">
                    <i class="bi bi-award fs-1"></i>
                    <h5 class="mt-2">Certificate Request</h5>
                </div>
            </div>
        </div>

        <!-- ROW 4 -->
        <div class="col-md-4">
            <div class="card text-white bg-danger p-4 rounded-3 shadow-sm">
                <div class="position-absolute top-0 end-0 m-2 badge bg-light text-dark">15</div>
                <div class="text-center">
                    <i class="bi bi-list fs-1"></i>
                    <h5 class="mt-2">Leads Data</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-danger p-4 rounded-3 shadow-sm">
                <div class="position-absolute top-0 end-0 m-2 badge bg-light text-dark">3</div>
                <div class="text-center">
                    <i class="bi bi-mortarboard fs-1"></i>
                    <h5 class="mt-2">Job Application Data</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success p-4 rounded-3 shadow-sm">
                <div class="position-absolute top-0 end-0 m-2 badge bg-light text-dark"></div>
                <div class="text-center">
                    <i class="bi bi-currency-rupee fs-1"></i>
                    <h5 class="mt-2">Expences</h5>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection