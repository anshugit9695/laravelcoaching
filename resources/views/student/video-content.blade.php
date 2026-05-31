@extends('student.master')

@section('content')
<style>
    .video-content-page {
        background: #fff;
    }

    .video-content-header {
        background: #fafafa;
        border-top: 1px solid #e5e5e5;
        box-shadow: 0 12px 18px rgba(0, 0, 0, 0.12);
        color: #b83c2f;
        font-size: 18px;
        line-height: 1;
        margin: -30px -30px 16px;
        padding: 16px 14px;
    }

    .video-content-header i {
        color: #b83c2f;
        font-size: 18px;
        margin-right: 4px;
        vertical-align: middle;
    }

    .video-content-list {
        background: #fff;
        border-top: 1px solid #f0f0f0;
        padding: 22px 20px 45px;
    }

    .video-content-list-title {
        color: #000;
        font-size: 21px;
        font-weight: 500;
        margin: 0 0 24px;
    }

    .video-content-table {
        margin: 0;
        width: 100%;
    }

    .video-content-table thead th {
        border-bottom: 1px solid #e5e5e5;
        color: #3f4247;
        font-size: 16px;
        font-weight: 700;
        padding: 12px 12px 14px;
        text-align: center;
    }

    .video-content-table tbody td {
        border: 0;
        height: 44px;
        padding: 12px;
        text-align: center;
    }

    .video-content-table th:nth-child(1),
    .video-content-table td:nth-child(1) {
        width: 28%;
    }

    .video-content-table th:nth-child(2),
    .video-content-table td:nth-child(2),
    .video-content-table th:nth-child(3),
    .video-content-table td:nth-child(3),
    .video-content-table th:nth-child(4),
    .video-content-table td:nth-child(4) {
        width: 24%;
    }

    @media (max-width: 767px) {
        .video-content-header {
            margin: -20px -15px 16px;
        }

        .video-content-list {
            padding: 18px 8px 30px;
        }

        .video-content-list-title {
            font-size: 19px;
        }

        .video-content-table thead th {
            font-size: 14px;
            white-space: nowrap;
        }
    }
</style>

<div class="main-content-wrap video-content-page">
    <div class="video-content-header">
        <i class="icon-video"></i>Video Content
    </div>

    <div class="video-content-list">
        <h3 class="video-content-list-title">Video Content List</h3>

        <div class="table-responsive">
            <table class="table video-content-table">
                <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Video</th>
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
