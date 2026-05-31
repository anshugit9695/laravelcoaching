@extends('student.master')
@section('content')
<style>
/* Admit card list simple styles */
.page-header{background:#fafafa;border-bottom:1px solid #eee;padding:10px 16px;margin-bottom:12px}
.page-header h3{color:#b83c2f;margin:0;font-weight:600;display:flex;gap:8px;align-items:center}
</style>

<!-- main-content-wrap -->
<div class="main-content-wrap">
    <div class="page-header">
        <h3><i class="icon-file-text"></i> Admit Card</h3>
    </div>

    <div class="wg-box">
        <div class="wg-table table-admit-card">
            <ul class="table-title bg-dark-1 flex mb-14">
                <li>
                    <div class="body-title">S.No.</div>
                </li>
                <li>
                    <div class="body-title">Center Code</div>
                </li>
                <li>
                    <div class="body-title">Session</div>
                </li>
                <li>
                    <div class="body-title">Action</div>
                </li>
            </ul>
            <ul class="flex flex-column">
                <!-- rows will be populated here -->
            </ul>
        </div>
    </div>
</div>
<!-- /main-content-wrap -->
@endsection