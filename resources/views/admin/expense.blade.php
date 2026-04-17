@extends('admin.master')

@section('content')

<div class="container mt-4">

    <!-- HEADER -->
    <div class="bg-light p-2 mb-3 rounded shadow-sm text-danger fw-semibold">
        <i class="bi bi-cash me-2"></i> Add Expense
    </div>

    <!-- FORM -->
    <div class="card p-3 shadow-sm mb-4">

        <h5 class="mb-3">Add New</h5>

        <div class="row g-3">

            <div class="col-md-3">
                <label>Date</label>
                <input type="date" class="form-control">
            </div>

            <div class="col-md-3">
                <label>Amount (₹)</label>
                <input type="number" class="form-control">
            </div>

            <div class="col-md-3">
                <label>Paid To</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-3">
                <label>Source</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-3">
                <label>Payment Mode</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-3">
                <label>Category</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-3">
                <label>Entry By</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-3">
                <label>Bill/Invoice/Receipt</label>
                <input type="file" class="form-control">
            </div>

            <div class="col-md-12">
                <label>Remarks/Description</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>

        </div>

        <!-- ADD BUTTON -->
        <div class="mt-3">
            <button class="btn btn-primary">
                <i class="bi bi-plus"></i> Add
            </button>
        </div>

    </div>

    <!-- FILTER -->
    <div class="d-flex align-items-center gap-2 mb-3 flex-wrap">
        <label class="fw-semibold">From:</label>
        <input type="date" class="form-control w-auto">

        <label class="fw-semibold">To:</label>
        <input type="date" class="form-control w-auto">

        <button class="btn btn-primary">Search</button>
        <button class="btn btn-light border">Reset</button>
    </div>

    <!-- TABLE -->
    <div class="card shadow-sm">
        <div class="table-responsive">

            <table class="table align-middle mb-0">
                <thead class="bg-light">
                    <tr>
                        <th>S.No</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Paid To</th>
                        <th>Source</th>
                        <th>Mode</th>
                        <th>Category</th>
                        <th>Entry By</th>
                        <th>Receipt</th>
                        <th>Remarks</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- EMPTY -->
                    <tr>
                        <td colspan="11" class="text-center py-4">
                            No records found.
                        </td>
                    </tr>
                </tbody>

            </table>

        </div>
    </div>

</div>

@endsection