@extends('layout.app')

@section('admin')
<div class="page-content">
  <div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Contact</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    @include('admin.contact.table')

    </div>
</div>
@endsection