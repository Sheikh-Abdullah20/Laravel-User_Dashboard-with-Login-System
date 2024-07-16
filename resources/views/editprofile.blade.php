        @extends('masterLayout')

        @section('title')
           {{session()->get('name')}} - Profile
        @endsection
        
        
        @section('content')

    
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
                    <div class="my-auto">
                        <h5 class="page-title fs-21 mb-1">Edit Profile</h5>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Page</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                            </ol>
                        </nav>
                    </div>
    
                    <div class="d-flex my-xl-auto right-content align-items-center">

                        <div class="pe-1 mb-xl-0">
                            <a href="{{route('updateprofilepage')}}" class="btn btn-dark">Edit Profile</a>
                        </div>

                        <div class="pe-1 mb-xl-0">
                            <button type="button" class="btn btn-info btn-icon me-2 btn-b"><i class="mdi mdi-filter-variant"></i></button>
                        </div>
                        <div class="pe-1 mb-xl-0">
                            <button type="button" class="btn btn-danger btn-icon me-2"><i class="mdi mdi-star"></i></button>
                        </div>
                        <div class="pe-1 mb-xl-0">
                            <button type="button" class="btn btn-warning  btn-icon me-2"><i class="mdi mdi-refresh"></i></button>
                        </div>
                        <div class="mb-xl-0">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuDate" data-bs-toggle="dropdown" aria-expanded="false">
                                    14 Aug 2019
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuDate">
                                  <li><a class="dropdown-item" href="javascript:void(0);">2015</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">2016</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">2017</a></li>
                                  <li><a class="dropdown-item" href="javascript:void(0);">2018</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page Header Close -->

                <!-- Start::row-1 -->
					<div class="row">
						<div class="col-xl-4 col-lg-5">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="ps-0">
                                        <div class="main-profile-overview">
                                            <div class="main-img-user profile-user">
                                                <img alt="" src="../assets/images/faces/6.jpg"><a
                                                    class="fe fe-camera profile-edit text-primary" href="JavaScript:void(0);"></a>
                                            </div>
                                            <div class="d-flex justify-content-between mb-4">
                                                <div>
                                                    <h5 class="main-profile-name">Petey Cruiser</h5>
                                                    <p class="main-profile-name-text">Web Designer</p>
                                                </div>
                                            </div>
                                            <h6 class="fs-14">Bio</h6>
                                            <div class="main-profile-bio">
                                                pleasure rationally encounter but because pursue consequences that are
                                                extremely painful.occur in which toil and pain can procure him some great
                                                pleasure.. <a href="javascript:void(0);">More</a>
                                            </div><!-- main-profile-bio -->
                                            <div class="row">
                                                <div class="col-md-4 col mb20">
                                                    <h5 class="fs-17">947</h5>
                                                    <h6 class="text-small text-muted fs-14 mb-0">Followers</h6>
                                                </div>
                                                <div class="col-md-4 col mb20">
                                                    <h5 class="fs-17">583</h5>
                                                    <h6 class="text-small text-muted fs-14 mb-0">Tweets</h6>
                                                </div>
                                                <div class="col-md-4 col mb20">
                                                    <h5 class="fs-17">48</h5>
                                                    <h6 class="text-small text-muted fs-14 mb-0">Posts</h6>
                                                </div>
                                            </div>
                                            <hr class="border-0">
                                            <label class="main-content-label fs-13 mb-4">Social</label>
                                            <div class="main-profile-social-list">
                                                <div class="media">
                                                    <div class="media-icon bg-primary-transparent text-primary">
                                                        <i class="icon ion-logo-github"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span>Github</span> <a href="javascript:void(0);" class="text-primary">github.com/spruko</a>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-icon bg-success-transparent text-success">
                                                        <i class="icon ion-logo-twitter"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span>Twitter</span> <a href="javascript:void(0);" class="text-primary">twitter.com/spruko.me</a>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-icon bg-info-transparent text-info">
                                                        <i class="icon ion-logo-linkedin"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span>Linkedin</span> <a href="javascript:void(0);" class="text-primary">linkedin.com/in/spruko</a>
                                                    </div>
                                                </div>
                                                <div class="media">
                                                    <div class="media-icon bg-danger-transparent text-danger">
                                                        <i class="icon ion-md-link"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <span>My Portfolio</span> <a href="javascript:void(0);" class="text-primary">spruko.com/</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="border-0">
                                            <h6 class="fs-14">Skills</h6>
                                            <div class="skill-bar mb-4 clearfix mt-3">
                                                <span>HTML5 / CSS3</span>
                                                <div class="progress progress-sm mt-2">
                                                    <div class="progress-bar bg-primary-gradient" role="progressbar"
                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 85%"></div>
                                                </div>
                                            </div>
                                            <!--skill bar-->
                                            <div class="skill-bar mb-4 clearfix">
                                                <span>Javascript</span>
                                                <div class="progress progress-sm mt-2">
                                                    <div class="progress-bar bg-danger-gradient" role="progressbar"
                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 89%"></div>
                                                </div>
                                            </div>
                                            <!--skill bar-->
                                            <div class="skill-bar mb-4 clearfix">
                                                <span>Bootstrap</span>
                                                <div class="progress progress-sm mt-2">
                                                    <div class="progress-bar bg-success-gradient" role="progressbar"
                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 80%"></div>
                                                </div>
                                            </div>
                                            <!--skill bar-->
                                            <div class="skill-bar clearfix">
                                                <span>Coffee</span>
                                                <div class="progress progress-sm mt-2">
                                                    <div class="progress-bar bg-info-gradient" role="progressbar"
                                                        aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 95%"></div>
                                                </div>
                                            </div>
                                            <!--skill bar-->
                                        </div><!-- main-profile-overview -->
                                    </div>
                                </div>
                            </div>
							<div class="card">
								<div class="card-body">
									<div class="main-content-label tx-13 mg-b-25">
										contact
									</div>
									<div class="main-profile-contact-list">
										<div class="media">
											<div class="media-icon bg-primary-transparent text-primary">
												<i class="icon ion-md-phone-portrait"></i>
											</div>
											<div class="media-body">
												<span>Mobile</span>
												<div>
													+245 354 654
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-icon bg-success-transparent text-success">
												<i class="icon ion-logo-slack"></i>
											</div>
											<div class="media-body">
												<span>Slack</span>
												<div>
													@spruko.w
												</div>
											</div>
										</div>
										<div class="media">
											<div class="media-icon bg-info-transparent text-info">
												<i class="icon ion-md-locate"></i>
											</div>
											<div class="media-body">
												<span>Current Address</span>
												<div>
													San Francisco, CA
												</div>
											</div>
										</div>
									</div><!-- main-profile-contact-list -->
								</div>
							</div>
						</div>

                        
						<div class="col-xl-8 col-lg-7">
							<div class="card">
                                    
                                    @if (session()->has('success'))

                                    <div class="alert alert-success text-dark mt-3">
                                        {{session('success')}}
                                    </div>
                                        
                                    @endif
								<div class="card-body">
									<div class="mb-4 main-content-label">Personal Information</div>
									<form class="form-horizontal">
										
										<div class="form-group mb-3">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Name</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="Name" value="{{$user->name}}">
												</div>
											</div>
										</div>
										<div class="form-group mb-3">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Email</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="Email" value="{{$user->email}}">
												</div>
											</div>
										</div>
									
										
										<div class="form-group mb-3">
											<div class="row">
												<div class="col-md-3">
													<label class="form-label">Password</label>
												</div>
												<div class="col-md-9">
													<input type="text" class="form-control"  placeholder="Password" value="{{$user->password}}">
												</div>
											</div>
										</div>
										
									</form>
								</div>
								
							</div>
						</div>
					</div>
                <!--End::row-1 -->

            </div>
        </div>
        <!-- End::app-content -->

    @endsection 