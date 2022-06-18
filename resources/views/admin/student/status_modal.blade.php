<div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <div class="avatar-md mx-auto mb-4">
                        <div class="avatar-title bg-light rounded-circle text-primary h1">
                            <i class='bx bxs-graduation' ></i>
                        </div>
                    </div>
  
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <h4 class="text-primary">Persetujuan</h4>
                            <p class="text-muted font-size-14 mb-4">Pilih salah satu untuk menerima atau menolak</p>
                            <div class="d-flex gap-3 justify-content-center mt-5">
                                <form action="/admin/student/status?status=accept" method="post">
                                    @csrf
                                    <input type="hidden" class="id" name="id">
                                    <button type="submit" class="btn btn-success">
                                        <i class='bx bx-log-out-circle'></i>
                                        Accept
                                    </button>
                                </form>
                                <form action="/admin/student/status?status=reject" method="post">
                                    @csrf
                                    <input type="hidden" class="id" name="id">
                                    <button type="submit" class="btn btn-danger">
                                        <i class='bx bx-log-out-circle'></i>
                                        Reject
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scriptAdmin')
    <script>
        $('#datatable').on('click', '.status-btn', function() {
            let id = $(this).data('id');
            $('#statusModal').modal('show');
            $('.id').val(id);
        });
    </script>
@endpush
  