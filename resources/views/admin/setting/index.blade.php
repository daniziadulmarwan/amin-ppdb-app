@extends('layout.app')

@section('admin')
<div class="page-content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-12">
          <div class="page-title-box d-sm-flex align-items-center justify-content-between">
              <h4 class="mb-sm-0 font-size-18">Setting</h4>
              <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                      <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                      <li class="breadcrumb-item active">Setting</li>
                  </ol>
              </div>
          </div>
      </div>
    </div>

    {{-- TODO::Alert --}}
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="mdi mdi-check-all me-2"></i>
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    {{-- TODO::Alert --}}

    <div class="card">
      <div class="card-body">

        <div class="checkout-tabs">
          <div class="row">

            <div class="col-xl-2 col-sm-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    
                    @if (auth()->user()->role == 'admin')
                    <a class="nav-link {{ auth()->user()->role == 'admin' ? 'active' : '' }}" id="v-pills-shipping-tab" data-bs-toggle="pill" href="#v-pills-shipping" role="tab" aria-controls="v-pills-shipping" aria-selected="true">
                        <i class= "bx bx-user-circle d-block check-nav-icon mt-4 mb-2"></i>
                        <p class="fw-bold mb-4">User Account Management</p>
                    
                    </a>
                    @endif

                    <a class="nav-link {{ auth()->user()->role == 'user' ? 'active' : '' }}" id="v-pills-payment-tab" data-bs-toggle="pill" href="#v-pills-payment" role="tab" aria-controls="v-pills-payment" aria-selected="false"> 
                        <i class= "bx bx-timer d-block check-nav-icon mt-4 mb-2"></i>
                        <p class="fw-bold mb-4">Registration Management</p>
                    </a>

                    <a class="nav-link" id="v-pills-confir-tab" data-bs-toggle="pill" href="#v-pills-confir" role="tab" aria-controls="v-pills-confir" aria-selected="false">
                        <i class= "bx bx-lock d-block check-nav-icon mt-4 mb-2"></i>
                        <p class="fw-bold mb-4">Change Password</p>
                    </a>

                </div>
            </div>

            <div class="col-xl-10 col-sm-9">
              <div class="card">
                <div class="card-body">
                  <div class="tab-content" id="v-pills-tabContent">

                    @if (auth()->user()->role == 'admin')
                    {{-- TODO::Pertama --}}
                    <div class="tab-pane fade {{ auth()->user()->role == 'admin' ? 'show active' : '' }}" id="v-pills-shipping" role="tabpanel" aria-labelledby="v-pills-shipping-tab">
                        <div>
                            <h4 class="card-title mb-5">User Account Information</h4>

                          <div class="row mb-4">
                              <div class="col-sm-4">
                              </div>
                              <div class="col-sm-8">
                                  <div class="text-sm-end">
                                      <button type="button" data-bs-toggle="modal" data-bs-target="#userAccount" class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i class="mdi mdi-plus me-1"></i> Create New User</button>
                                  </div>
                              </div>
                          </div>

                          <div class="table-responsive">
                              <table class="table align-middle table-nowrap">
                                  <thead>
                                      <tr>
                                          <th>Fullname</th>
                                          <th>Username</th>
                                          <th>Password</th>
                                          <th>Role</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($user as $item)
                                        <tr>
                                            <td class="font-size-14">{{ $item->name }}</td>
                                            <td class="font-size-14">{{ $item->username }}</td>
                                            <td class="font-size-14">{{ $item->username }}</td>
                                            <td>
                                                @if ($item->role == 'admin')
                                                    <span class="badge bg-success font-size-12"><i class="mdi mdi-account me-1"></i> {{ $item->role }}</span>
                                                @else
                                                    <span class="badge bg-danger font-size-12"><i class="mdi mdi-account me-1"></i> {{ $item->role }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <form action="/admin/setting/account/{{ $item->id }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" onclick="return confirm('Are you sure want delete this data ?')" class="text-danger font-size-20" style="border: none; padding: 0px;background: none">
                                                        <i class='bx bx-trash'></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>

                          {{-- TODO::Paginate --}}
                            {{ $user->links() }}
                          {{-- TODO::Paginate --}}
                        </div>
                    </div>
                    {{-- TODO::Pertama --}}
                    @endif

                    {{-- TODO::Kedua --}}
                    <div class="tab-pane fade {{ auth()->user()->role == 'user' ? 'show active' : '' }}" id="v-pills-payment" role="tabpanel" aria-labelledby="v-pills-payment-tab">
                        <div>
                            <h4 class="card-title mb-5">Registration Management</h4>

                            <div class="d-flex flex-column align-items-center my-5">
                              <p class="card-title-desc">Press switch button below to open & close registration</p>
                              <div class="square-switch">
                                    <div class="switch-holder d-flex">
                                        <div class="switch-label">
                                            <i class='bx bx-lock font-size-22'></i><span>Registration</span>
                                        </div>
                                        <div class="switch-toggle">
                                            <input type="checkbox" id="bluetooth" name="openclose" value="{{$openCloseTime->waktu}}" @if ($openCloseTime->waktu === 1) checked @endif>
                                            <label for="bluetooth"></label>
                                        </div>
                                    </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    {{-- TODO::Kedua --}}

                    {{-- TODO::Ketiga --}}
                    <div class="tab-pane fade" id="v-pills-confir" role="tabpanel" aria-labelledby="v-pills-confir-tab">
                        <div class="card shadow-none mb-0">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Change Your Password</h4>

                                {{-- TODO::Alert --}}
                                <div class="col-md-4">
                                    <div class="alert alert-success alert-dismissible fade show d-none alertChange" role="alert">
                                    </div>
                                </div>
                                {{-- TODO::Alert --}}

                                <div class="row">
                                    <div class="col-md-4">
                                        <form action="/admin/setting/password" method="post" id="changePasswordForm">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="password" class="form-label">New Password</label>
                                                <input type="password" class="form-control" id="password" name="password" autocomplete="off">
                                                <div class="text-danger error-text password-error"></div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="repeatPassword" class="form-label">Repeat New Password</label>
                                                <input type="password" class="form-control" id="repeatPassword" name="repeatPassword" autocomplete="off">
                                                <div class="text-danger error-text repeatPassword-error"></div>
                                            </div>
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary w-100">Change Password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- TODO::Ketiga --}}

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>
  @include('admin.setting.account_modal')
  </div>
</div>
@endsection
