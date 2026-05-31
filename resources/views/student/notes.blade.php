@extends('student.master')

@section('content')
<style>
    .pdf-notes-page {
        background: #fff;
    }

    .pdf-notes-header {
        background: #fafafa;
        border-top: 1px solid #e5e5e5;
        box-shadow: 0 12px 18px rgba(0, 0, 0, 0.12);
        color: #b83c2f;
        font-size: 18px;
        line-height: 1;
        margin: -30px -30px 16px;
        padding: 16px 14px;
    }

    .pdf-notes-header i {
        color: #b83c2f;
        font-size: 18px;
        margin-right: 4px;
        vertical-align: middle;
    }

    .pdf-notes-list {
        background: #fff;
        border-top: 1px solid #f0f0f0;
        padding: 22px 20px 45px;
    }

    .pdf-notes-list-title {
        color: #000;
        font-size: 21px;
        font-weight: 500;
        margin: 0 0 24px;
    }

    .pdf-notes-table {
        margin: 0;
        width: 100%;
    }

    .pdf-notes-table thead th {
        border-bottom: 1px solid #e5e5e5;
        color: #3f4247;
        font-size: 16px;
        font-weight: 700;
        padding: 12px 12px 14px;
        text-align: center;
    }

    .pdf-notes-table tbody td {
        border: 0;
        height: 44px;
        padding: 12px;
        text-align: center;
    }

    .pdf-notes-table th:nth-child(1),
    .pdf-notes-table td:nth-child(1) {
        width: 28%;
    }

    .pdf-notes-table th:nth-child(2),
    .pdf-notes-table td:nth-child(2),
    .pdf-notes-table th:nth-child(3),
    .pdf-notes-table td:nth-child(3),
    .pdf-notes-table th:nth-child(4),
    .pdf-notes-table td:nth-child(4) {
        width: 24%;
    }

    @media (max-width: 767px) {
        .pdf-notes-header {
            margin: -20px -15px 16px;
        }

        .pdf-notes-list {
            padding: 18px 8px 30px;
        }

        .pdf-notes-list-title {
            font-size: 19px;
        }

        .pdf-notes-table thead th {
            font-size: 14px;
            white-space: nowrap;
        }
    }
</style>

<div class="main-content-wrap pdf-notes-page">
    <div class="pdf-notes-header">
        <i class="icon-layers"></i>PDF Notes
    </div>

    <div class="pdf-notes-list">
        <h3 class="pdf-notes-list-title">PDF Notes List</h3>

        <div class="table-responsive">
            <table class="table pdf-notes-table">
                <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>File</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
