@extends('layout.app')

@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Student</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item"><a href="/admin/student">Student</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
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

            </div>
        </div>

        @include('admin.student.edit_form')
        
    </div>
</div>
@endsection


@push('scriptAdmin')
    <script>
      // CSRF Setup
    $(function() {
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"').attr('content')}
        })
    });

    // Normal Datepicker
    $(function() {
        $("#datepicker").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy/mm/dd',
        });
    });

    // Only Year Datepicker
    $(function() {
        $('.date-picker-year').datepicker({
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'yy',
            onClose: function(dateText, inst) { 
                var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                $(this).datepicker('setDate', new Date(year, 1));
            }
        });

        $(".date-picker-year").focus(function () {
            $(".ui-datepicker-month").hide();
            $(".ui-datepicker-calendar").hide();
        });
    });

    function getRegency(id) {
        $.ajax({
                type:'post',
                url:'/kabupaten',
                data: {id:id},
                cache:false,
                success: function(data) {
                    $('#kabupaten').html(data);
                },
                error: function(error) {
                    console.log('error', error);
                }
        });
    }

    function getRegencyById(id) {
        $.ajax({
                type:'post',
                url:'/kabupaten/byId',
                data: {id:id},
                cache:false,
                success: function(data) {
                    $('#kabupaten').html(data);
                },
                error: function(error) {
                    console.log('error', error);
                }
        });
    }

    function getDistrict(id) {
        $.ajax({
                type:'post',
                url:'/kecamatan',
                data: {id:id},
                cache:false,
                success: function(data) {
                    $('#kecamatan').html(data);
                },
                error: function(error) {
                    console.log('error', error);
                }
        });
    }

    function getDistrictById(id) {
        $.ajax({
                type:'post',
                url:'/kecamatan/byId',
                data: {id:id},
                cache:false,
                success: function(data) {
                    $('#kecamatan').html(data);
                },
                error: function(error) {
                    console.log('error', error);
                }
        });
    }

    function getVillage(id) {
        $.ajax({
                type:'post',
                url:'/kelurahan',
                data: {id:id},
                cache:false,
                success: function(data) {
                    $('#kelurahan').html(data);
                },
                error: function(error) {
                    console.log('error', error);
                }
        });
    }

    function getVillageById(id) {
        $.ajax({
                type:'post',
                url:'/kelurahan/byId',
                data: {id:id},
                cache:false,
                success: function(data) {
                    $('#kelurahan').html(data);
                },
                error: function(error) {
                    console.log('error', error);
                }
        });
    }

    // Indoregion Dropdown
    $(function() {
        $(document).ready(function() {
            const id = $('#propinsi').val();
            if(id) {
                getRegency(id);
            }

            const regencyId = $('#kabupaten').val();
            if(regencyId) {
                getRegencyById(regencyId);
            }

            const districtId = $('#kecamatan').val();
            if(districtId) {
                getDistrictById(districtId);
            }

            const villageId = $('#kelurahan').val();
            if(villageId) {
                getVillageById(villageId);
            }
        });

        $('#propinsi').on('change', function() {
            const id = $('#propinsi').val();
            getRegency(id);
        });

        $('#kabupaten').on('change', function() {
            const id = $('#kabupaten').val();
            getDistrict(id);
        });

        $('#kecamatan').on('change', function() {
            const id = $('#kecamatan').val();
            getVillage(id);
        });
    });
    </script>
@endpush