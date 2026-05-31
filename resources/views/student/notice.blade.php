@extends('student.master')

@section('content')
<style>
    .notice-page {
        background: #fff;
    }

    .notice-page-header {
        background: #fafafa;
        border-top: 4px solid #e9e9e9;
        box-shadow: 0 12px 18px rgba(0, 0, 0, 0.12);
        color: #b83c2f;
        font-size: 18px;
        line-height: 1;
        margin: -30px -30px 38px;
        padding: 14px 14px;
    }

    .notice-page-header i {
        color: #b83c2f;
        font-size: 18px;
        margin-right: 4px;
        vertical-align: middle;
    }

    .notice-table-wrap {
        padding: 0 20px 45px;
    }

    .notice-table {
        margin: 0;
        width: 100%;
    }

    .notice-table thead th {
        border-bottom: 1px solid #e5e5e5;
        color: #3f4247;
        font-size: 16px;
        font-weight: 700;
        padding: 0 12px 14px;
    }

    .notice-table tbody td {
        border: 0;
        height: 44px;
        padding: 12px;
    }

    .notice-table th:nth-child(1),
    .notice-table td:nth-child(1) {
        width: 18%;
    }

    .notice-table th:nth-child(2),
    .notice-table td:nth-child(2) {
        width: 34%;
    }

    .notice-table th:nth-child(3),
    .notice-table td:nth-child(3),
    .notice-table th:nth-child(4),
    .notice-table td:nth-child(4) {
        text-align: center;
        width: 24%;
    }

    @media (max-width: 767px) {
        .notice-page-header {
            margin: -20px -15px 28px;
        }

        .notice-table-wrap {
            padding: 0 8px 30px;
        }

        .notice-table thead th {
            font-size: 14px;
            white-space: nowrap;
        }
    }
</style>

<div class="main-content-wrap notice-page">
    <div class="notice-page-header">
        <i class="icon-file-text"></i>Admit Card
    </div>

    <div class="table-responsive notice-table-wrap">
        <table class="table notice-table">
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Center Code</th>
                    <th>Session</th>
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
@endsection
