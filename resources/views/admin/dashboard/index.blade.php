@extends('layout.app')

@section('admin')
<div class="page-content">
  <div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    {{-- TODO:::::Main --}}
    <div class="row">
        <div class="col-xl-12">

            {{-- TODO::Card 1/4 --}}
            <div class="row">
                <div class="col-md-3">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium">Total Pendaftar</p>
                                    <h4 class="mb-0">{{ $total }}</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bx-bar-chart-alt-2 font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium">Madrasah Aliyah</p>
                                    <h4 class="mb-0">{{ $ma }}</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                        <span class="avatar-title">
                                            <i class="bx bxs-graduation font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium">Madrasah Tsanawiyah</p>
                                    <h4 class="mb-0">{{ $mts }}</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bx-buildings font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <p class="text-muted fw-medium">Pesantren</p>
                                    <h4 class="mb-0">{{ $santri }}</h4>
                                </div>

                                <div class="flex-shrink-0 align-self-center">
                                    <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bx-moon font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- TODO::Card 1/4 --}}

            {{-- TODO::Chart 12 --}}
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex flex-wrap">
                        <h4 class="card-title mb-4">Jumlah Pendaftar Tahunan</h4>
                        <div class="ms-auto">
                            <ul class="nav nav-pills">
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="#">Week</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Month</a>
                                </li> --}}
                                {{-- <li class="nav-item">
                                    <a class="nav-link active" href="#">Year</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    
                    <div id="year_chart_datalabel" class="apex-charts" dir="ltr"></div>  
                </div>
            </div>
            {{-- TODO::Chart 12 --}}

            {{-- TODO::Charts --}}
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Hobi Chart</h4>
                            
                            <div id="hobi_chart" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Cita-Cita Chart</h4>
                            
                            <div id="cita_chart" class="apex-charts"  dir="ltr"></div>
                        </div>
                    </div>
                </div>
    
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Jenis Kelamin Chart</h4>
                            
                            <div id="gender_chart" class="apex-charts"  dir="ltr"></div>
                        </div>
                    </div>
                </div>
    
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Pekerjaan Orang Tua Chart</h4>
                            
                            <div id="father_job_chart" class="apex-charts"  dir="ltr"></div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Penghasilan Orang Tua Chart</h4>
                            
                            <div id="father_salary_chart" class="apex-charts"  dir="ltr"></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- TODO::Charts --}}
            
        </div>
    </div>
    {{-- TODO:::::Main --}}
      
  </div>
</div>
@endsection