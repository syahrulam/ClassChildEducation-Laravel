@extends('master')
@section('title')
Dashboard
@endsection

@section('content')
<section class="section">
    <div class="section-header">
        <div class="row col-12">
            <div class="col-9">
                <h1>Dashboard</h1>
            </div>
            <div class="col-3">
                Tanggal Hari ini: <b class="" id="date"></b>
            </div>
        </div>
    </div>
    <!-- start card -->
    <div class="row">
      <!-- Card -->
      <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                             <a href="{{ route('monitor-siswa') }}" class="text-xs font-weight-bold text-primary text-uppercase mb-1">Monitor Siswa</a> </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Card -->
      <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                             <a href="{{ route('siswa') }}" class="text-xs font-weight-bold text-primary text-uppercase mb-1">Siswa</a> </div>
                             {{ $siswa }}
                          <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- Card -->
    @can('admin')
      <div class="col-xl-4 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                             <a href="{{ route('guru') }}" class="text-xs font-weight-bold text-primary text-uppercase mb-1">Guru</a> </div>
                            {{ $guru }}
                          <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    @endcan
    <!-- start card -->
</section>
<script>
var dt = new Date();
    document.getElementById("date").innerHTML = dt.toLocaleDateString('en-UK');

</script>

@endsection