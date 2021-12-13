<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper" wire:click="$emit('goDashboard')">
          <div class="profile-image">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 29.127 27.114">
              <g id="Group_1" data-name="Group 1" transform="translate(-1430.586 -684.892)">
                <g id="Group_200" data-name="Group 200" transform="translate(1430.586 692.168)">
                  <path id="Path_1028" data-name="Path 1028" d="M1449.458,791.044l-.172.068c-.035-.075-.068-.148-.1-.222C1449.273,790.943,1449.364,790.995,1449.458,791.044Z" transform="translate(-1445.994 -779.977)" fill="#123365"/>
                  <path id="Path_1029" data-name="Path 1029" d="M1459.713,736.481l-1.951,1.1-.594-1.051a10.979,10.979,0,0,1-.742,2.258,13.422,13.422,0,0,1-24.651.455,13.2,13.2,0,0,1-.752-2.121,13.391,13.391,0,0,1-.438-3.412V733.5a13.606,13.606,0,0,1,.1-1.468.136.136,0,0,1,0-.026c.007-.057.014-.113.024-.169a28.73,28.73,0,0,1,2.648-1.532,26.554,26.554,0,0,1,12.366-3.011,29.194,29.194,0,0,1,7.773,1.068l.014.005c.118.031.235.064.344.1v0a20.339,20.339,0,0,1,2.886,1.049,6.267,6.267,0,0,0-2.338.142,17.063,17.063,0,0,0-5.915,3.075c-.575.44-.916.742-.916.742-6.258,5.858-10.759,6.376-13.528,4.887-.094-.048-.184-.1-.273-.155.033.075.066.148.1.222a11.169,11.169,0,0,0,19.666,1.091,10.874,10.874,0,0,0,.629-1.187c.038-.083.075-.165.111-.25.094-.191.179-.386.257-.584a8.551,8.551,0,0,0,.511-1.852l-1.406.8-1.1-1.951,4.579-2.592Z" transform="translate(-1430.586 -727.296)" fill="#123365"/>
                </g>
                <path id="Path_1030" data-name="Path 1030" d="M1457.688,692.109a32.732,32.732,0,0,0-3.29-.723,33.106,33.106,0,0,0-18.505,2.154c-.093.037-.186.078-.279.117-.885.383-1.892.866-2.792,1.348a.189.189,0,0,1,.007-.025,13.391,13.391,0,0,1,24.859-2.871Z" transform="translate(-1.852 0)" fill="#2e84be"/>
              </g>
            </svg>
          </div>
          <div class="text-wrapper">
            <p class="profile-name">eMaisha Pay</p>
          </div>
        </div>
        <div class="dropdown" data-display="static">
            <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown" href="#" aria-expanded="false">
              info@cobraitech.com
            </a>
          </div>
      </div>
    </li>
  </ul>
  <ul class="nav menu-bar">
    <li class="nav-item {{ active_class(['']) }}">
      <a class="nav-link" href="{{ url('/') }}">
        <span class="menu-icon icon-dashboard"></span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item {{ active_class(['custromers']) }}">
      <a class="nav-link" href="{{ url('/custromers') }}">
        <span class="menu-icon icon-customers"></span>
        <span class="menu-title customers-title">Customers</span>
      </a>
      <span class="count noti-count">15</span>
      <!-- <span class="badge badge-pill badge-primary float-right"></span> -->
    </li>

    <li class="nav-item {{ active_class(['business', 'business/*']) }}">
      <a class="nav-link" href="{{ url('/business') }}">
        <span class="menu-icon icon-business"></span>
        <span class="menu-title business-title">Business</span>
      </a>
    </li>

    <li class="nav-item {{ active_class(['loans', 'loans/*/detail']) }}">
      <a class="nav-link" data-toggle="collapse" onclick="document.location.href='{{ url('/loans') }}'"
           href="#loan-ui" aria-expanded="{{ is_active_route(['loans', 'loans/*']) }}" aria-controls="loan-ui">
        <span class="menu-icon icon-loans"></span>
        <span class="menu-title loans-title">Loans</span>
        <i class="material-icons expand-arrow">expand_more</i>
      </a>
      <div class="collapse {{ show_class(['loans', 'loans/loans']) }}" id="loan-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['loans/loans']) }}">
            <a class="nav-link" href="{{ url('/loans/loans') }}">Loans</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#transactions-ui" aria-expanded="{{ is_active_route(['transactions/*']) }}" aria-controls="transactions-ui">
        <span class="menu-icon icon-transactions"></span>
        <span class="menu-title transaction-title">Transactions</span>
        <i class="material-icons expand-arrow">expand_more</i>
      </a>
      <span class="count noti-count">15</span>
      <div class="collapse {{ show_class(['transactions/*']) }}" id="transactions-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['transactions/payment']) }}">
            <a class="nav-link" href="{{ url('/transactions/payment') }}">Payments</a>
          </li>
          <li class="nav-item {{ active_class(['transactions/withdraw']) }}">
            <a class="nav-link" href="{{ url('/transactions/withdraw') }}">Withdraw</a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item {{ active_class(['customer_service']) }}">
      <a class="nav-link" href="{{ url('/customer_services') }}">
        <span class="menu-icon icon-services"></span>
        <span class="menu-title servies-title">Customer Services</span>
      </a>
    </li>

    <li class="nav-item {{ active_class(['reports']) }}">
      <a class="nav-link" href="{{ url('/reports') }}">
        <span class="menu-icon icon-reports"></span>
        <span class="menu-title report-title">Reports</span>
      </a>
    </li>

    <li class="nav-item {{ active_class(['settings']) }}">
      <a class="nav-link" href="{{ url('/settings') }}">
        <span class="menu-icon icon-settings"></span>
        <span class="menu-title settings-title">Settings</span>
      </a>
    </li>
  </ul>

  <div class="d-flex justify-content-center mt-3">
      <a class="btn btn-outline-light btn-lg btn-logout" href="#" target="_blank">
        Log out
      </a>
  </div>
</nav>