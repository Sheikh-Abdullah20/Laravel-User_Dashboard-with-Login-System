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
<div class="col-md-12 text-center">
    <h1 class="display-3">Profile-Update</h1>
</div>
 <div class="col-xl-12 col-lg-7">

    <div class="card">
        <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{route('updateprofile')}}" >
                @csrf
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Name</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name='name'  placeholder=" Name" value="{{$user->name}}">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Email</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control"  name="email" placeholder="Email" value="{{$user->email}}">
                        </div>
                    </div>
                </div>
            
                
                <div class="form-group mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="form-label">Password</label>
                        </div>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="password" placeholder="Password" value="{{$user->password}}">
                        </div>
                    </div>
                </div>
                

              <div class="row mt-5 d-flex justify-content-center">
                <div class="col-md-5 text-center">
                    <button class="btn btn-dark w-25">Update</button>
                </div>
              </div>
                
            </form>
        </div>
    </div>
</div>
</div>

    


 @endsection