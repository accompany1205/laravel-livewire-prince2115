<div class="row progress-section">
  <div class="row-divide-5 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left dashboard-card-item">
            <p class="font-weight-medium mb-0">TOTAL CUSTOMERS</p>
            <p class="font-weight-medium mb-0">10,450</p>
            
          </div>
        </div>
        <div class="progress dashboard-card-progress">
            <div class="progress-bar" role="progressbar" style="width: 28%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p class="text-progress-ex mt-2 mb-0 text-left text-md-center text-xl-left">
            15% Increase </p>
      </div>
    </div>
  </div>

  <div class="row-divide-5 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left dashboard-card-item">
            <p class="font-weight-medium mb-0">BUSINESS</p>
            <p class="font-weight-medium mb-0">6,616</p>
            
          </div>
        </div>
        <div class="progress dashboard-card-progress">
            <div class="progress-bar" role="progressbar" style="width: 38%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p class="text-progress-ex mt-2 mb-0 text-left text-md-center text-xl-left">
            23% Increase </p>
      </div>
    </div>
  </div>

  <div class="row-divide-5 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left dashboard-card-item">
            <p class="font-weight-medium mb-0">TOTAL LOANS</p>
            <p class="font-weight-medium mb-0">UGX 50,000,000.00</p>
            
          </div>
        </div>
        <div class="progress dashboard-card-progress">
            <div class="progress-bar" role="progressbar" style="width: 28%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p class="text-progress-ex mt-2 mb-0 text-left text-md-center text-xl-left">
            200 Loans </p>
      </div>
    </div>
  </div>

  <div class="row-divide-5 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left dashboard-card-item">
            <p class="font-weight-medium mb-0">INTREST EARNED</p>
            <p class="font-weight-medium mb-0">UGX 7,500,000.00</p>
            
          </div>
        </div>
        <div class="progress dashboard-card-progress">
            <div class="progress-bar" role="progressbar" style="width: 28%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p class="text-progress-ex mt-2 mb-0 text-left text-md-center text-xl-left">
            115 Loans </p>
      </div>
    </div>
  </div>

  <div class="row-divide-5 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left dashboard-card-item">
            <p class="font-weight-medium mb-0">TOTAL REVENUE</p>
            <p class="font-weight-medium mb-0">UGX 4,500,000.00</p>
            
          </div>
        </div>
        <div class="progress dashboard-card-progress">
            <div class="progress-bar" role="progressbar" style="width: 28%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <p class="text-progress-ex mt-2 mb-0 text-left text-md-center text-xl-left">
            15% Increase </p>
      </div>
    </div>
  </div>
</div>

<div class="row chart-section">
  <div class="col-md-6 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex position-relative justify-content-center align-items-center mb-4">
          <h2 class="card-title mb-0">Customer Growth</h2>
          <div class="wrapper d-flex">
            <div class="d-flex align-items-center mr-3">
              <p class="mb-0 ml-2 text-muted">All time</p>
            </div>
            <div class="d-flex align-items-center">
              <p class="mb-0 ml-2 text-muted font-weight-bold">This year</p>
            </div>
            <div class="d-flex align-items-center ml-3">
              <p class="mb-0 ml-2 text-muted">This week</p>
            </div>
          </div>
          <span class="material-icons more-actions">more_vert</span>
        </div>
        <div class="chart-container">
          <canvas id="cutomerGrowthChart" height="80"></canvas>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-6 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex position-relative justify-content-center align-items-center mb-4">
          <h2 class="card-title mb-0">Loan Profile</h2>
          <div class="wrapper d-flex">
            <div class="d-flex align-items-center mr-3">
                <p class="mb-0 ml-2 text-muted">All time</p>
            </div>
            <div class="d-flex align-items-center">
                <p class="mb-0 ml-2 text-muted font-weight-bold">This year</p>
            </div>
            <div class="d-flex align-items-center ml-3">
                <p class="mb-0 ml-2 text-muted">This week</p>
            </div>
          </div>
          <span class="material-icons more-actions">more_vert</span>
        </div>
        <div class="chart-container">
          <canvas id="loansProfileChart" height="80"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row table-section">
  <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 grid-margin pending-loans">
    <div class="card">
        <div class="d-sm-flex card-header justify-content-between align-items-center">
            <h2 class="card-title mb-0">Pending Loans</h2>
          <div class="wrapper d-flex">
            <div class="d-flex filter-action align-items-center mr-3">
                <a class="btn btn-filter">Filter<i class="menu-icon material-icons">sort</i></a>
            </div>
            <div class="d-flex view-action align-items-center">
                <a class="btn btn-view-all">View All</a>
            </div>
          </div>
        </div>
        <div class="card-body">
            <div class="table-responsive ">
                <table class="table table-striped">
                    <thead>
                        <tr >
                            <th class="font-weight-bolder">No.</th>
                            <th class="font-weight-bolder">Loan ID</th>
                            <th class="font-weight-bolder">Customer</th>
                            <th class="font-weight-bolder">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                    for ($i = 0; $i < 4; $i ++) {
                        echo '<tr>'.
                            '<td class="font-weight-medium">'.($i+1).'</td>'.
                            '<td class="font-weight-bolder"> L001468 </td>'.
                            '<td> John Number </td>'.
                            '<td> UGX 350,000.00 </td>'.
                        '</tr>';
                        
                    }
                    @endphp
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>

  <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12 grid-margin payment-due">
    <div class="card">
        <div class="d-sm-flex card-header justify-content-between align-items-center">
            <h2 class="card-title mb-0">Payment Due</h2>
          <div class="wrapper d-flex">
            <div class="d-flex align-items-center mr-3">
                <a class="btn btn-filter">Filter<i class="menu-icon material-icons">sort</i></a>
            </div>
            <div class="d-flex align-items-center">
                <a class="btn btn-view-all">View All</a>
            </div>
          </div>
        </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr >
                <th class="font-weight-bolder">No.</th>
                <th class="font-weight-bolder">Loan ID</th>
                <th class="font-weight-bolder">Due Date</th>
                <th class="font-weight-bolder">Amount</th>
              </tr>
            </thead>
            <tbody>
                @php
                for ($i = 0; $i < 4; $i ++) {
                    echo '<tr>'.
                        '<td class="font-weight-medium">'.($i+1).'</td>'.
                        '<td class="font-weight-bolder"> L001468 </td>'.
                        '<td> Tomorrow </td>'.
                        '<td> UGX 350,000.00 </td>'.
                    '</tr>';
                    
                }
                @endphp
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@push('plugin-scripts')
<script src="{{ asset('assets/plugins/chartjs/chart.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
@endpush

@push('page-scripts')
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
@endpush
