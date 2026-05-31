@extends('student.master')
@section('content')
<!-- main-content-wrap -->
<div class="main-content-wrap">
    <div class="flex items-center flex-wrap justify-between gap20 mb-30">
        <h3>Practice Tests</h3>
        <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
            <li>
                <a href="index.html">
                    <div class="text-tiny">Dashboard</div>
                </a>
            </li>
            <li>
                <i class="icon-chevron-right"></i>
            </li>
            <li>
                <a href="oder-list.html">
                    <div class="text-tiny">Practice Tests</div>
                </a>
            </li>
            <li>
                <i class="icon-chevron-right"></i>
            </li>
            <li>
                <div class="text-tiny">Practice Tests</div>
            </li>
        </ul>
    </div>
    <!-- Result-list -->
    <div class="wg-box">
        <h3>Select your Practice Test</h3>           
    </div>
    <!-- /order-list -->
</div>
<!-- /main-content-wrap -->
@endsection