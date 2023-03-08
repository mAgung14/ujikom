{{-- @extends('sidebar.index')
@section('content')
<section id="main-content">
    <div class="row">
      <div class="col-lg-3">
        <div class="card">
          <div class="stat-widget-one">
            <div class="stat-icon dib">
              <i class="ti-user color-success border-success"></i>
            </div>
            <div class="stat-content dib">
              <div class="stat-text">Member</div>
              <div class="stat-digit">{{  App\Models\Member::count() ?? 0 }}</div>
            </div>
          </div>
        </div>
      </div>
       <div class="col-lg-3">
        <div class="card">
          <div class="stat-widget-one">
            <div class="stat-icon dib">
              <i class="ti-user color-primary border-primary"></i>
            </div>
            <div class="stat-content dib">
              <div class="stat-text">New Mekanik</div>
              <div class="stat-digit">{{  App\Models\Mekanik::count() ?? 0 }}</div>
            </div>
          </div>
        </div>
      </div>
       <div class="col-lg-3">
        <div class="card">
          <div class="stat-widget-one">
            <div class="stat-icon dib">
              <i class="ti-layout-grid2 color-pink border-pink"></i>
            </div>
            <div class="stat-content dib">
              <div class="stat-text">Kerusakan</div>
              <div class="stat-digit"></div>
            </div>
          </div>
        </div>
      </div>
       <div class="col-lg-3">
        <div class="card">
          <div class="stat-widget-one">
            <div class="stat-icon dib">
              <i class="ti-link color-danger border-danger"></i>
            </div>
            <div class="stat-content dib">
              <div class="stat-text">Referral</div>
              <div class="stat-digit">2,781</div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection --}}
@extends('sidebar')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">

      <div class="row">
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{  App\Models\Member::count() ?? 0 }}</h3>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success ">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Member</h6>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-9">
                  <div class="d-flex align-items-center align-self-start">
                    <h3 class="mb-0">{{  App\Models\Mekanik::count() ?? 0 }}</h3>
                  </div>
                </div>
                <div class="col-3">
                  <div class="icon icon-box-success">
                    <span class="mdi mdi-arrow-top-right icon-item"></span>
                  </div>
                </div>
              </div>
              <h6 class="text-muted font-weight-normal">Mekanik</h6>
            </div>
          </div>
        </div>

            </div>
          </div>
        </div>
      </div>
@endsection

