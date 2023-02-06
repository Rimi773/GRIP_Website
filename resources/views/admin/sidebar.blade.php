@include('admin.css')
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{url('/redirect')}}"><img src="admin/assets/images/GRIP.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="{{url('/redirect')}}"><img src="admin/assets/images/GRIP_tiny.png" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="admin/assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Admin Dashboard</h5>

                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info">Logout</i>
                    </div>
                  </div>
                    <a href="{{ route('profile.show') }}" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="">
                      <i class="mdi mdi-onepassword  text-info">Edit Name/Password</i>
                    </div>
                  </div>

                </a>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>


          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ind" aria-expanded="false" aria-controls="ind">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Companies</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ind">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('post')}}"> Add Internships </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('company')}}"> Registered Companies </a></li>
              </ul>
            </div>
          </li>
            <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#notice" aria-expanded="false" aria-controls="notice">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Notice Board</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="notice">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('post_notice')}}"> Post Notice </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('notice')}}"> Notices </a></li>
              </ul>
            </div>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('users')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Users</span>
            </a>
          </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#gform" aria-expanded="false" aria-controls="gform">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">Google Form</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="gform">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('gform')}}"> Post Google Form </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('gform_update')}}"> Update Workshop URL </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('interview_gform_update')}}"> Update Interview URL </a></li>
              </ul>
            </div>
          </li>



        </ul>
      </nav>
