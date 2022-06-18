<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">

                <h4 class="card-title mb-3">Daftar Kontak Siswa Baru</h4>
                {{-- <p class="card-title-desc">DataTables has most features enabled by
                    default, so all you need to do to use it with your own tables is to call
                    the construction function: <code>$().DataTable();</code>.
                </p> --}}
                {{-- <div class="d-flex mb-4 gap-1">
                    <a href="javascript:void(0)" class="btn btn-success">Export Excel</a>
                    <a href="javascript:void(0)" class="btn btn-primary">Save To Pdf</a>
                </div> --}}

                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>Nomor Registrasi</th>
                            <th>Nama Lengkap</th>
                            <th>Nomor Whatsapp</th>
                            <th>Alamat Email</th>
                        </tr>
                        </thead>
        
                        <tbody>
                            @foreach ($contacts as $item)
                                <tr>
                                    <td>{{ $item->reg_number }}</td>
                                    <td>{{ $item->fullname }}</td>
                                    <td>
                                        <a href="https://wa.me/{{$item->wa_number}}?text=I'd%20%20like%20to%20chat%20with%20you" class="badge badge-pill badge-soft-success font-size-12" target="_blank">{{$item->wa_number}}</a>
                                    </td>
                                    <td>
                                        <a href="mailto:{{ $item->email }}" class="badge badge-pill badge-soft-danger font-size-12">{{ $item->email }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        
                        </tbody>
        
                    </table>
                </div>
          </div>
      </div>
  </div>
</div>