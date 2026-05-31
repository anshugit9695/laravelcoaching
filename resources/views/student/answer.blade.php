@extends('student.master')
@section('content')
<!-- main-content-wrap -->
<div class="main-content-wrap">
    <div class="flex items-center flex-wrap justify-between gap20 mb-30">
        <h3>Result List</h3>
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
                    <div class="text-tiny">Result</div>
                </a>
            </li>
            <li>
                <i class="icon-chevron-right"></i>
            </li>
            <li>
                <div class="text-tiny">Result List</div>
            </li>
        </ul>
    </div>
    <!-- Result-list -->
    <div class="wg-box">
        <div class="wg-table table-all-order">
            <ul class="table-title bg-dark-1 flex gap20 mb-14">
                <li>
                    <div class="body-title">Action</div>
                </li>
                <li>
                    <div class="body-title">S No.</div>
                </li>
                <li>
                    <div class="body-title">Date</div>
                </li>
                <li>
                    <div class="body-title">Test Name</div>
                </li>
                <li>
                    <div class="body-title">Minus Marking</div>
                </li>
            </ul>
            <ul class="flex flex-column">
                <li class="wg-product item-row gap20">
                    
                    <div class="body-text text-main-dark mt-4">#7712309</div>
                    <div class="body-text text-main-dark mt-4">1,638</div>
                    <div class="body-text text-main-dark mt-4">20</div>
                    
                    <div>
                        <div class="block-tracking bg-1">Tracking</div>
                    </div>
                    <div class="list-icon-function">
                        <div class="item eye">
                            <i class="icon-eye text-main"></i>
                        </div>
                        <div class="item edit">
                            <i class="icon-edit-3"></i>
                        </div>
                        <div class="item trash">
                            <i class="icon-trash-2"></i>
                        </div>
                    </div>
                </li>
                 <li class="wg-product item-row gap20">
                    
                    <div class="body-text text-main-dark mt-4">#7712309</div>
                    <div class="body-text text-main-dark mt-4">1,638</div>
                    <div class="body-text text-main-dark mt-4">20</div>
                    
                    <div>
                        <div class="block-tracking bg-1">Tracking</div>
                    </div>
                    <div class="list-icon-function">
                        <div class="item eye">
                            <i class="icon-eye text-main"></i>
                        </div>
                        <div class="item edit">
                            <i class="icon-edit-3"></i>
                        </div>
                        <div class="item trash">
                            <i class="icon-trash-2"></i>
                        </div>
                    </div>
                </li>
                 <li class="wg-product item-row gap20">
                    
                    <div class="body-text text-main-dark mt-4">#7712309</div>
                    <div class="body-text text-main-dark mt-4">1,638</div>
                    <div class="body-text text-main-dark mt-4">20</div>
                    
                    <div>
                        <div class="block-tracking bg-1">Tracking</div>
                    </div>
                    <div class="list-icon-function">
                        <div class="item eye">
                            <i class="icon-eye text-main"></i>
                        </div>
                        <div class="item edit">
                            <i class="icon-edit-3"></i>
                        </div>
                        <div class="item trash">
                            <i class="icon-trash-2"></i>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="divider"></div>
        <div class="flex items-center justify-between flex-wrap gap10">
            <div class="text-tiny color-body">Showing 10 entries</div>
            <ul class="wg-pagination">
                <li>
                    <a href="#"><i class="icon-chevron-left"></i></a>
                </li>
                <li>
                    <a href="#">1</a>
                </li>
                <li class="active">
                    <a href="#">2</a>
                </li>
                <li>
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#"><i class="icon-chevron-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /order-list -->
</div>
<!-- /main-content-wrap -->
@endsection