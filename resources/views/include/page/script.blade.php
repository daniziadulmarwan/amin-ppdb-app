<!-- JAVASCRIPT -->
<script src="/assets/libs/jquery/jquery.min.js"></script>
<script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/assets/libs/node-waves/waves.min.js"></script>
<script src="/assets/libs/dropzone/min/dropzone.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
 <!-- Plugins js-->
 <script src="/assets/libs/jquery-countdown/jquery.countdown.min.js"></script>
<!-- Countdown js -->
 <!-- jquery step -->
 <script src="/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>

  <!-- ICO landing init -->
  <script src="/assets/js/pages/ico-landing.init.js"></script>

 <!-- form wizard init -->
 <script src="/assets/js/pages/form-wizard.init.js"></script>
<script src="/assets/js/pages/coming-soon.init.js"></script>
<script src="/assets/js/app.js"></script>
<script>
    // Show Modal onLoad
    // const myModal = new bootstrap.Modal(document.getElementById("subscribeModal"), {});
    // document.onreadystatechange = function () {
    //     myModal.show();
    // };

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
@stack('scriptPages')