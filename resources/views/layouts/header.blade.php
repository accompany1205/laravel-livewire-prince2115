<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center sidebar-collpase" type="button" data-toggle="minimize">
      <span class="mdi material-icons">dehaze</span>
    </button>

    <div class="nav-header-item nav-search col-3">
      <div class="nav-header-inline">
        <form method="get" class="search-form">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <i class="material-icons text-muted">search</i>
              </span>
            </div>
            <input type="text" class="form-control" name="search" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="search-close mdi mdi-close icon-sm text-muted d-none"></i>
              </span>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="nav-header-item nav-time ml-5 col-3">
      <div class="nav-header-inline">
          <div class="d-flex input-group">
            <div class="input-group-prepend">
              <span class="input-group-text pr-0">
                <i class="material-icons text-muted">watch_later</i>
              </span>
            </div>
            <div class="input-group-append">
              <span class="input-group-text">
                11:24 AM
              </span>
              <span class="input-group-text">
                Today, May 21
              </span>
            </div>
          </div>
      </div>
    </div>
    
    <ul class="navbar-nav navbar-nav-right header-nav mr-5">
      <li class="nav-item dropdown d-none d-xl-inline-block">
        <a class="nav-link d-flex dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">  
          <img class="img-sm rounded-circle" src="{{ url('assets/images/faces/face8.jpg') }}" alt="Profile image">
          <div class="d-block ml-2">
            <p class="mb-2 mt-1 font-weight-bold auth-username">Andrew Mukuye</p> 
            <p class="mt-1 mb-0 auth-role">Admin</p>
          </div>
          <span class="material-icons d-flex align-items-center expand-user-option">expand_more</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown" >
          <a class="dropdown-item mt-2"> Manage Accounts </a>
          <a class="dropdown-item"> Change Password </a>
          <a class="dropdown-item"> Check Inbox </a>
          <a class="dropdown-item"> Sign Out </a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="mdi mdi-bell-outline noti-icon"></i>
          <span class="count noti-count">5</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
          <a class="dropdown-item py-3 border-bottom">
            <p class="mb-0 font-weight-medium float-left">4 new notifications </p>
            <span class="badge badge-pill badge-primary float-right">View all</span>
          </a>
          <a class="dropdown-item preview-item py-3">
            <div class="preview-thumbnail">
              <i class="mdi mdi-alert m-auto text-primary"></i>
            </div>
            <div class="preview-item-content">
              <h5 class="preview-subject font-weight-normal text-dark mb-1">Application Error1</h5>
              <p class="font-weight-light small-text mb-0"> Just now </p>
            </div>
          </a>
          <a class="dropdown-item preview-item py-3">
            <div class="preview-thumbnail">
              <i class="mdi mdi-alert m-auto text-primary"></i>
            </div>
            <div class="preview-item-content">
              <h5 class="preview-subject font-weight-normal text-dark mb-1">Application Error2</h5>
              <p class="font-weight-light small-text mb-0"> Half a minute ago </p>
            </div>
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center sidebar-collpase" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu icon-menu"></span>
    </button>
  </div>
</nav>