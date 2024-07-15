{{-- header Include --}}
@extends('masterLayout')
@section('title')
Home
@endsection
@section('content')
<div class="modal fade" id="chatmodel" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-right chatbox" role="document">
        <div class="modal-content chat border-0">
            <div class="card overflow-hidden mb-0 border-0 shadow-none">
                <!-- action-header -->
                <div class="action-header clearfix">
                    <div class="float-start hidden-xs d-flex">
                        <div class="avatar avatar-lg rounded-circle me-3">
                            <img src="images/faces/6.jpg" class="rounded-circle user_img" alt="img">
                        </div>
                        <div class="align-items-center mt-2">
                            <h5 class="text-fixed-white mb-0">Daneil Scott</h5>
                            <span class="dot-label bg-success"></span><span class="me-3 text-fixed-white">online</span>
                        </div>
                    </div>
                    <ul class="ah-actions actions align-items-center float-end">
                        <li class="call-icon">
                            <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="#audiomodal">
                                <i class="fe fe-phone"></i>
                            </a>
                        </li>
                        <li class="video-icon">
                            <a href="" class="d-done d-md-block phone-button" data-bs-toggle="modal" data-bs-target="#videomodal">
                                <i class="fe fe-video"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="" data-bs-toggle="dropdown" aria-expanded="true">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li class="dropdown-item"><i class="fa fa-user-circle"></i> View profile</li>
                                <li class="dropdown-item"><i class="fa fa-users"></i>Add friends</li>
                                <li class="dropdown-item"><i class="fa fa-plus"></i> Add to group</li>
                                <li class="dropdown-item"><i class="fa fa-ban"></i> Block</li>
                            </ul>
                        </li>
                        <li>
                            <a href=""  class="" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fe fe-x-circle text-fixed-white"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- action-header end -->

                <!-- msg_card_body -->
                <div class="card-body msg_card_body">
                    <div class="chat-box-single-line">
                        <abbr class="timestamp">February 1st, 2019</abbr>
                    </div>
                    <div class="d-flex justify-content-start">
                        <div class="img_cont_msg">
                            <img src="images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                        <div class="msg_cotainer">
                            Hi, how are you Jenna Side?
                            <span class="msg_time">8:40 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end ">
                        <div class="msg_cotainer_send">
                            Hi Connor Paige i am good tnx how about you?
                            <span class="msg_time_send">8:55 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start ">
                        <div class="img_cont_msg">
                            <img src="images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                        <div class="msg_cotainer">
                            I am good too, thank you for your chat template
                            <span class="msg_time">9:00 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end ">
                        <div class="msg_cotainer_send">
                            You welcome Connor Paige
                            <span class="msg_time_send">9:05 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start ">
                        <div class="img_cont_msg">
                            <img src="images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                        <div class="msg_cotainer">
                            Yo, Can you update Views?
                            <span class="msg_time">9:07 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            But I must explain to you how all this mistaken  born and I will give
                            <span class="msg_time_send">9:10 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start ">
                        <div class="img_cont_msg">
                            <img src="images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                        <div class="msg_cotainer">
                            Yo, Can you update Views?
                            <span class="msg_time">9:07 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            But I must explain to you how all this mistaken  born and I will give
                            <span class="msg_time_send">9:10 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start ">
                        <div class="img_cont_msg">
                            <img src="images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                        <div class="msg_cotainer">
                            Yo, Can you update Views?
                            <span class="msg_time">9:07 AM, Today</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mb-4">
                        <div class="msg_cotainer_send">
                            But I must explain to you how all this mistaken  born and I will give
                            <span class="msg_time_send">9:10 AM, Today</span>
                        </div>
                        <div class="img_cont_msg">
                            <img src="images/faces/9.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                    </div>
                    <div class="d-flex justify-content-start">
                        <div class="img_cont_msg">
                            <img src="images/faces/6.jpg" class="rounded-circle user_img_msg" alt="img">
                        </div>
                        <div class="msg_cotainer">
                            Okay Bye, text you later..
                            <span class="msg_time">9:12 AM, Today</span>
                        </div>
                    </div>
                </div>
                <!-- msg_card_body end -->
                <!-- card-footer -->
                <div class="card-footer border-top">
                    <div class="msb-reply d-flex">
                        <div class="input-group">
                            <input type="text" class="form-control " placeholder="Typing....">
                            <button type="button" class="btn btn-primary ">
                                <i class="far fa-paper-plane" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div><!-- card-footer end -->
            </div>
        </div>
    </div>
</div>
<!--End modal -->

<!--Video Modal -->
<div id="videomodal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-fixed-dark border-0">
            <div class="modal-body mx-auto text-center p-5">
                <h5 class="text-fixed-white">Valex Video call</h5>
                <img src="images/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
                <h4 class="mb-1 fw-semibold text-fixed-white">Daneil Scott</h4>
                <h6 class="loading text-fixed-white">Calling...</h6>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-4">
                            <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                <i class="fas fa-video-slash"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="icon icon-shape rounded-circle text-fixed-white mb-0" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fas fa-phone bg-danger text-fixed-white"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                <i class="fas fa-microphone-slash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- modal-body -->
        </div>
    </div><!-- modal-dialog -->
</div>
<!--End modal -->

<!-- Audio Modal -->
<div id="audiomodal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-0">
            <div class="modal-body mx-auto text-center p-5">
                <h6>Valex Voice call</h6>
                <img src="images/faces/6.jpg" class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3" alt="img">
                <h5 class="mb-1 fw-medium">Daneil Scott</h5>
                <h6 class="loading">Calling...</h6>
                <div class="mt-5">
                    <div class="row">
                        <div class="col-4">
                            <a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
                                <i class="fas fa-volume-up bg-light text-dark"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="icon icon-shape rounded-circle text-fixed-white mb-0" href="javascript:void(0);" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fas fa-phone text-fixed-white bg-success"></i>
                            </a>
                        </div>
                        <div class="col-4">
                            <a class="icon icon-shape  rounded-circle mb-0" href="javascript:void(0);">
                                <i class="fas fa-microphone-slash bg-light text-dark"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- modal-body -->
        </div>
    </div><!-- modal-dialog -->
</div>
<!--End modal -->
<!-- Start::app-sidebar -->
<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="{{route('home')}}" class="header-logo">
            <img src="images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
            <img src="images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
            <img src="images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
            <img src="images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
        </a>
    </div>
    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{route('home')}}" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg>
                        <span class="side-menu__label">Home</span>
                        <span class="badge bg-success ms-auto menu-badge">1</span>
                    </a>
                </li>
                <!-- End::slide -->

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">General</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide">
                    <a href="{{route('users')}}" class="side-menu__item">
                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z" opacity=".3"/><circle cx="15.5" cy="9.5" r="1.5"/><circle cx="8.5" cy="9.5" r="1.5"/><path d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg>
                        <span class="side-menu__label">Users</span>
                    </a>
                </li>
                <!-- End::slide -->
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->

<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div>
                <h4>Hi, welcome back! {{session()->get('name')}}</h4>
                <p class="mb-0 text-muted">Sales monitoring dashboard template.</p>
            </div>
            <div class="main-dashboard-header-right">
                <div>
                    <label class="fs-13 text-muted">Customer Ratings</label>
                    <div class="main-star">
                        <i class="bi bi-star-fill fs-13 text-warning"></i> 
                        <i class="bi bi-star-fill fs-13 text-warning"></i> 
                        <i class="bi bi-star-fill fs-13 text-warning"></i> 
                        <i class="bi bi-star-fill fs-13 text-warning"></i> 
                        <i class="bi bi-star-fill fs-13 text-muted op-8"></i> <span>(14,873)</span>
                    </div>
                </div>
                <div>
                    <label class="fs-13 text-muted">Online Sales</label>
                    <h5 class="mb-0 fw-semibold">563,275</h5>
                </div>
                <div>
                    <label class="fs-13 text-muted">Offline Sales</label>
                    <h5 class="mb-0 fw-semibold">783,675</h5>
                </div>
            </div>
        </div>
        <!-- End Page Header -->

        <!-- row -->
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-primary-gradient">
                    <div class="px-3 pt-3  pb-2 pt-0">
                        <div >
                            <h6 class="mb-3 fs-12 text-fixed-white">TODAY ORDERS</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div >
                                    <h4 class="fs-20 fw-bold mb-1 text-fixed-white">$5,74.12</h4>
                                    <p class="mb-0 fs-12 text-fixed-white op-7">Compared to last week</p>
                                </div>
                                <span class="float-end my-auto ms-auto">
                                    <i class="fas fa-arrow-circle-up text-fixed-white"></i>
                                    <span class="text-fixed-white op-7"> +427</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="compositeline"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-danger-gradient">
                    <div class="px-3 pt-3  pb-2 pt-0">
                        <div >
                            <h6 class="mb-3 fs-12 text-fixed-white">TODAY EARNINGS</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div >
                                    <h4 class="fs-20 fw-bold mb-1 text-fixed-white">$1,230.17</h4>
                                    <p class="mb-0 fs-12 text-fixed-white op-7">Compared to last week</p>
                                </div>
                                <span class="float-end my-auto ms-auto">
                                    <i class="fas fa-arrow-circle-down text-fixed-white"></i>
                                    <span class="text-fixed-white op-7"> -23.09%</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="compositeline2"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-success-gradient">
                    <div class="px-3 pt-3  pb-2 pt-0">
                        <div >
                            <h6 class="mb-3 fs-12 text-fixed-white">TOTAL EARNINGS</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div >
                                    <h4 class="fs-20 fw-bold mb-1 text-fixed-white">$7,125.70</h4>
                                    <p class="mb-0 fs-12 text-fixed-white op-7">Compared to last week</p>
                                </div>
                                <span class="float-end my-auto ms-auto">
                                    <i class="fas fa-arrow-circle-up text-fixed-white"></i>
                                    <span class="text-fixed-white op-7"> 52.09%</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="compositeline3"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                <div class="card overflow-hidden sales-card bg-warning-gradient">
                    <div class="px-3 pt-3  pb-2 pt-0">
                        <div >
                            <h6 class="mb-3 fs-12 text-fixed-white">PRODUCT SOLD</h6>
                        </div>
                        <div class="pb-0 mt-0">
                            <div class="d-flex">
                                <div >
                                    <h4 class="fs-20 fw-bold mb-1 text-fixed-white">$4,820.50</h4>
                                    <p class="mb-0 fs-12 text-fixed-white op-7">Compared to last week</p>
                                </div>
                                <span class="float-end my-auto ms-auto">
                                    <i class="fas fa-arrow-circle-down text-fixed-white"></i>
                                    <span class="text-fixed-white op-7"> -152.3</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div id="compositeline4"></div>
                </div>
            </div>
        </div>
        <!-- row closed -->

        <!-- row opened -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-7">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mb-0">Order status</h4>
                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light bg-transparent rounded-pill" data-bs-toggle="dropdown"><i
                                class="fe fe-more-horizontal"></i></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                <a class="dropdown-item" href="javascript:void(0);">Another
                                    Action</a>
                                <a class="dropdown-item" href="javascript:void(0);">Something Else
                                    Here</a>
                            </div>
                        </div>
                        <p class="fs-12 text-muted mb-0">Order Status and Tracking. Track your order from ship date to arrival. To begin, enter your order number.</p>
                    </div>
                    <div class="card-body">
                        <div class="total-revenue">
                            <div>
                                <h4>120,750</h4>
                                <label><span class="bg-primary"></span>success</label>
                            </div>
                            <div>
                                <h4>56,108</h4>
                                <label><span class="bg-danger"></span>Pending</label>
                            </div>
                            <div>
                                <h4>32,895</h4>
                                <label><span class="bg-warning"></span>Failed</label>
                            </div>
                            </div>
                        <div id="Sales-bar" class="sales-bar mt-4"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-5">
                <div class="card card-dashboard-map-one">
                    <h4 class="card-title">Sales Revenue by Customers in USA</h4>
                    <p class="fs-12 text-muted">Sales Performance of all states in the United States.</p>
                    <div id="us-map1" class="pt-1"></div>
                </div>
            </div>
        </div>
        <!-- row closed -->

        <!-- row opened -->
        <div class="row">
            <div class="col-xl-4 col-md-12 col-lg-12">
                <div class="card overflow-hidden">
                    <div class="card-header pb-1">
                        <h3 class="card-title mb-2">Recent Customers</h3>
                        <p class="fs-12 mb-0 text-muted">A customer is an individual or business that purchases the goods service has evolved to include real-time</p>
                    </div>
                    <div class="card-body p-0 customers mt-1">
                        <div class="list-group list-lg-group list-group-flush">
                            <div class="list-group-item list-group-item-action">
                                <div class="d-flex">
                                    <img class="avatar avatar-md rounded-circle my-auto me-3" src="images/faces/3.jpg" alt="Image description">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-0">
                                                <h5 class="mb-1 fs-15">Samantha Melon</h5>
                                                <p class="mb-0 fs-13 text-muted">User ID: #1234 <span class="text-success ms-2 d-inline-block">Paid</span></p>
                                            </div>
                                            <div class="ms-auto w-45 fs-16 mt-2">
                                                <div id="spark1" class="w-100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action br-t-1">
                                <div class="d-flex">
                                    <img class="avatar avatar-md rounded-circle my-auto me-3" src="images/faces/11.jpg" alt="Image description">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-1">
                                                <h5 class="mb-1 fs-15">Jimmy Changa</h5>
                                                <p class="mb-0 fs-13 text-muted">User ID: #1234 <span class="text-danger ms-2 d-inline-block">Pending</span></p>
                                            </div>
                                            <div class="ms-auto w-45 fs-16 mt-2">
                                                <div id="spark2" class="w-100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action br-t-1">
                                <div class="d-flex">
                                    <img class="avatar avatar-md rounded-circle my-auto me-3" src="images/faces/17.jpg" alt="Image description">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-1">
                                                <h5 class="mb-1 fs-15">Gabe Lackmen</h5>
                                                <p class="mb-0 fs-13 text-muted">User ID: #1234 <span class="text-danger ms-2 d-inline-block">Pending</span></p>
                                            </div>
                                            <div class="ms-auto w-45 fs-16 mt-2">
                                                <div id="spark3" class="w-100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action br-t-1">
                                <div class="d-flex">
                                    <img class="avatar avatar-md rounded-circle my-auto me-3" src="images/faces/15.jpg" alt="Image description">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-1">
                                                <h5 class="mb-1 fs-15">Manuel Labor</h5>
                                                <p class="mb-0 fs-13 text-muted">User ID: #1234 <span class="text-success ms-2 d-inline-block">Paid</span></p>
                                            </div>
                                            <div class="ms-auto w-45 fs-16 mt-2">
                                                <div id="spark4" class="w-100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item list-group-item-action br-t-1 br-be-7 br-bs-7">
                                <div class="d-flex">
                                    <img class="avatar avatar-md rounded-circle my-auto me-3" src="images/faces/6.jpg" alt="Image description">
                                    <div class="flex-grow-1">
                                        <div class="d-flex align-items-center">
                                            <div class="mt-1">
                                                <h5 class="mb-1 fs-15">Sharon Needles</h5>
                                                <p class="b-0 fs-13 text-muted mb-0">User ID: #1234 <span class="text-success ms-2 d-inline-block">Paid</span></p>
                                            </div>
                                            <div class="ms-auto w-45 fs-16 mt-2">
                                                <div id="spark5" class="w-100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header pb-1">
                        <h3 class="card-title mb-2">Sales Activity</h3>
                        <p class="fs-12 mb-0 text-muted">Sales activities are the tactics that salespeople use to achieve their goals and objective</p>
                    </div>
                    <div class="product-timeline card-body pt-2 mt-1">
                        <ul class="timeline-1 mb-0">
                            <li class="mt-0"> <i class="fe fe-pie-chart bg-primary-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Total Products</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">3 days ago</a>
                                <p class="mb-0 text-muted fs-12">1.3k New Products</p>
                            </li>
                            <li class="mt-0"> <i class="fe fe-shopping-cart bg-danger-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Total Sales</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">35 mins ago</a>
                                <p class="mb-0 text-muted fs-12">1k New Sales</p>
                            </li>
                            <li class="mt-0"> <i class="fe fe-bar-chart bg-success-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Total Revenue</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">50 mins ago</a>
                                <p class="mb-0 text-muted fs-12">23.5K New Revenue</p>
                            </li>
                            <li class="mt-0"> <i class="fe fe-box bg-warning-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Total Profit</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">1 hour ago</a>
                                <p class="mb-0 text-muted fs-12">3k New profit</p>
                            </li>
                            <li class="mt-0"> <i class="fe fe-eye bg-purple-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Customer Visits</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">1 day ago</a>
                                <p class="mb-0 text-muted fs-12">15% increased</p>
                            </li>
                            <li class="mt-0 mb-0"> <i class="fe fe-edit bg-primary-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Customer Reviews</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">1 day ago</a>
                                <p class="mb-0 text-muted fs-12">1.5k reviews</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h3 class="card-title mb-2">Recent Orders</h3>
                        <p class="fs-12 mb-0 text-muted">An order is an investor's instructions to a broker or brokerage firm to purchase or sell</p>
                    </div>
                    <div class="card-body sales-info pb-0 pt-0">
                        <div id="chart" class="ht-150"></div>
                        <div class="row sales-infomation pb-0 mb-0 mx-auto w-100">
                            <div class="col-md-6 col">
                                <p class="mb-0 d-flex"><span class="legend bg-primary brround"></span>Delivered</p>
                                <h3 class="mb-1">5238</h3>
                                <div class="d-flex">
                                    <p class="text-muted ">Last 6 months</p>
                                </div>
                            </div>
                            <div class="col-md-6 col">
                                <p class="mb-0 d-flex"><span class="legend bg-info brround"></span>Cancelled</p>
                                    <h3 class="mb-1">3467</h3>
                                <div class="d-flex">
                                    <p class="text-muted">Last 6 months</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center pb-2">
                                    <p class="mb-0">Total Sales</p>
                                </div>
                                <h4 class="fw-bold mb-2">$7,590</h4>
                                <div class="progress progress-style progress-sm">
                                    <div class="progress-bar bg-primary-gradient" style="width: 80%" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-4 mt-md-0">
                                <div class="d-flex align-items-center pb-2">
                                    <p class="mb-0">Active Users</p>
                                </div>
                                <h4 class="fw-bold mb-2">$5,460</h4>
                                <div class="progress progress-style progress-sm">
                                    <div class="progress-bar bg-danger-gradient" style="width: 45%" role="progressbar"  aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row close -->

        <!-- row opened -->
        <div class="row">
            <div class="col-md-12 col-lg-4 col-xl-4">
                <div class="card top-countries-card">
                    <div class="card-header p-0">
                        <h6 class="card-title fs-13 mb-2">Your Top Countries</h6><span class="d-block mg-b-10 text-muted fs-12 mb-2">Sales performance revenue based by country</span>
                    </div>
                    <div class="list-group border">
                        <div class="list-group-item border-top-0" id="br-t-0">
                            <p>United States</p><span>$1,671.10</span>
                        </div>
                        <div class="list-group-item">
                            <p>Netherlands</p><span>$1,064.75</span>
                        </div>
                        <div class="list-group-item">
                            <p>United Kingdom</p><span>$1,055.98</span>
                        </div>
                        <div class="list-group-item">
                            <p>Canada</p><span>$1,045.49</span>
                        </div>
                        <div class="list-group-item">
                            <p>India</p><span>$1,930.12</span>
                        </div>
                        <div class="list-group-item border-bottom-0 mb-0">
                            <p>Australia</p><span>$1,042.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-8">
                <div class="card card-table">
                    <div class=" card-header p-0 d-flex justify-content-between">
                        <h4 class="card-title mb-1">Your Most Recent Earnings</h4>
                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light bg-transparent rounded-pill" data-bs-toggle="dropdown"><i
                            class="fe fe-more-horizontal"></i></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Another
                                Action</a>
                            <a class="dropdown-item" href="javascript:void(0);">Something Else
                                Here</a>
                        </div>
                    </div>
                    <span class="fs-12 text-muted mb-3 ">This is your most recent earnings for today's date.</span>
                    <div class="table-responsive country-table">
                        <table class="table table-striped table-bordered mb-0 text-nowrap">
                            <thead>
                                <tr>
                                    <th class="wd-lg-25p">Date</th>
                                    <th class="wd-lg-25p">Sales Count</th>
                                    <th class="wd-lg-25p">Earnings</th>
                                    <th class="wd-lg-25p">Tax Witheld</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>05 Dec 2019</td>
                                    <td class="fw-medium">34</td>
                                    <td class="fw-medium">$658.20</td>
                                    <td class="text-danger fw-medium">-$45.10</td>
                                </tr>
                                <tr>
                                    <td>06 Dec 2019</td>
                                    <td class="fw-medium">26</td>
                                    <td class="fw-medium">$453.25</td>
                                    <td class="text-danger fw-medium">-$15.02</td>
                                </tr>
                                <tr>
                                    <td>07 Dec 2019</td>
                                    <td class="fw-medium">34</td>
                                    <td class="fw-medium">$653.12</td>
                                    <td class="text-danger fw-medium">-$13.45</td>
                                </tr>
                                <tr>
                                    <td>08 Dec 2019</td>
                                    <td class="fw-medium">45</td>
                                    <td class="fw-medium">$546.47</td>
                                    <td class="text-danger fw-medium">-$24.22</td>
                                </tr>
                                <tr>
                                    <td>09 Dec 2019</td>
                                    <td class="fw-medium">31</td>
                                    <td class="fw-medium">$425.72</td>
                                    <td class="text-danger fw-medium">-$25.01</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->

    </div>
</div>
<!-- End::app-content -->

</div>


<!-- Scroll To Top -->
<div class="scrollToTop">
<span class="arrow"><i class="las la-angle-double-up"></i></span>
</div>
<div id="responsive-overlay"></div>
<!-- Scroll To Top -->

@endsection


