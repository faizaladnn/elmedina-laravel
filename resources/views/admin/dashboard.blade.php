@extends ('admin.layouts.master')

@section ('content')

<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
      <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
        <div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-10">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Website Analytics</li>
            </ol>
          </nav>
          <h4 class="mg-b-0 tx-spacing--1">Welcome to Dashboard</h4>
        </div>
        <div class="d-none d-md-block">
          <button class="btn btn-sm pd-x-15 btn-white btn-uppercase"><i data-feather="save" class="wd-10 mg-r-5"></i> Save</button>
          <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="upload" class="wd-10 mg-r-5"></i> Export</button>
          <button class="btn btn-sm pd-x-15 btn-white btn-uppercase mg-l-5"><i data-feather="share-2" class="wd-10 mg-r-5"></i> Share</button>
          <button class="btn btn-sm pd-x-15 btn-primary btn-uppercase mg-l-5"><i data-feather="sliders" class="wd-10 mg-r-5"></i> Settings</button>
        </div>
      </div>

      <div class="row row-xs">
        <div class="col mg-t-10">
          <div class="card card-dashboard-table">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>&nbsp;</th>
                    <th colspan="3">Acquisition</th>
                    <th colspan="3">Behavior</th>
                    <th colspan="3">Conversions</th>
                  </tr>
                  <tr>
                    <th>Source</th>
                    <th>Users</th>
                    <th>New Users</th>
                    <th>Sessions</th>
                    <th>Bounce Rate</th>
                    <th>Pages/Session</th>
                    <th>Avg. Session</th>
                    <th>Transactions</th>
                    <th>Revenue</th>
                    <th>Rate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="">Organic search</a></td>
                    <td><strong>350</strong></td>
                    <td><strong>22</strong></td>
                    <td><strong>5,628</strong></td>
                    <td><strong>25.60%</strong></td>
                    <td><strong>1.92</strong></td>
                    <td><strong>00:01:05</strong></td>
                    <td><strong>340,103</strong></td>
                    <td><strong>$2.65M</strong></td>
                    <td><strong>4.50%</strong></td>
                  </tr>
                  <tr>
                    <td><a href="">Social media</a></td>
                    <td><strong>276</strong></td>
                    <td><strong>18</strong></td>
                    <td><strong>5,100</strong></td>
                    <td><strong>23.66%</strong></td>
                    <td><strong>1.89</strong></td>
                    <td><strong>00:01:03</strong></td>
                    <td><strong>321,960</strong></td>
                    <td><strong>$2.51M</strong></td>
                    <td><strong>4.36%</strong></td>
                  </tr>
                  <tr>
                    <td><a href="">Referral</a></td>
                    <td><strong>246</strong></td>
                    <td><strong>17</strong></td>
                    <td><strong>4,880</strong></td>
                    <td><strong>26.22%</strong></td>
                    <td><strong>1.78</strong></td>
                    <td><strong>00:01:09</strong></td>
                    <td><strong>302,767</strong></td>
                    <td><strong>$2.1M</strong></td>
                    <td><strong>4.34%</strong></td>
                  </tr>
                  <tr>
                    <td><a href="">Email</a></td>
                    <td><strong>187</strong></td>
                    <td><strong>14</strong></td>
                    <td><strong>4,450</strong></td>
                    <td><strong>24.97%</strong></td>
                    <td><strong>1.35</strong></td>
                    <td><strong>00:02:07</strong></td>
                    <td><strong>279,300</strong></td>
                    <td><strong>$1.86M</strong></td>
                    <td><strong>3.99%</strong></td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-responsive -->
          </div><!-- card -->
        </div><!-- col -->
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- content -->

@endsection

@section('js')

<script type="text/javascript">

</script>
@endsection