@extends('student.master')
@section('content')
<!-- main-content-wrap -->
<div class="main-content-wrap">
    <div class="flex items-center flex-wrap justify-between gap20 mb-30">
        <h3>Order List</h3>
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
                    <div class="text-tiny">Order</div>
                </a>
            </li>
            <li>
                <i class="icon-chevron-right"></i>
            </li>
            <li>
                <div class="text-tiny">Order List</div>
            </li>
        </ul>
    </div>
    <!-- order-list -->
    <div class="wg-box">
        <!-- TOP INFO SECTION -->
        <div style="display:flex; flex-wrap:wrap; gap:15px; margin-bottom:20px;">

            <!-- Left Info -->
            <div style="flex:1; min-width:300px;">
                <div style="background:#ff1493; color:#fff; padding:10px; font-weight:bold; margin-bottom:10px;">
                    Name : Ikra Khan
                </div>

                <div style="background:#ff1493; color:#fff; padding:10px; font-weight:bold;">
                    Course : Advanced Diploma in Computer Applications (ADCA)
                </div>
            </div>

            <!-- Right Info -->
            <div style="flex:1; min-width:300px;">
                <div style="background:#ff1493; color:#fff; padding:10px; font-weight:bold; margin-bottom:10px;">
                    Father Name : Shahnawaz khan
                </div>

                <div style="background:#ff1493; color:#fff; padding:10px; font-weight:bold;">
                    Joining Date : 08-04-2026
                </div>
            </div>
        </div>

        <!-- FEES BOXES -->
        <div style="display:flex; flex-wrap:wrap; gap:15px; margin-bottom:30px;">

            <div
                style="flex:1; min-width:220px; background:linear-gradient(45deg,#7b2ff7,#f107a3); color:#fff; padding:20px; font-weight:bold;">
                Course Fee - ₹ 12000
            </div>

            <div style="flex:1; min-width:220px; background:green; color:#fff; padding:20px; font-weight:bold;">
                Paid Fees - ₹ 0
            </div>

            <div style="flex:1; min-width:220px; background:red; color:#fff; padding:20px; font-weight:bold;">
                Due Fees - ₹ 6000
            </div>

            <div style="flex:1; min-width:220px; background:#7bb3c9; color:#fff; padding:20px; font-weight:bold;">
                Discount - ₹ 6000
            </div>

        </div>

        <div class="wg-table table-all-order">
            <ul class="table-title bg-dark-1 flex gap20 mb-14">
                
                <li>
                    <div class="body-title">S No.</div>
                </li>
                <li>
                    <div class="body-title">Date</div>
                </li>
                <li>
                    <div class="body-title">Ammount</div>
                </li>
                <li>
                    <div class="body-title">Remark</div>
                </li>
                
                <li>
                    <div class="body-title">Action</div>
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