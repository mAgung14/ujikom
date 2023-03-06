@extends('sidebar.index')
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
@endsection
