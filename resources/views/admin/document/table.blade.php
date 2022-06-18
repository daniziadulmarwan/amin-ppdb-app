<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">

                <h4 class="card-title mb-3">Document Pendaftaran</h4>

                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nomor Registrasi</th>
                            <th>Nama Lengkap</th>
                            <th>Kartu Keluarga</th>
                            <th>Akte Kelahiran</th>
                        </tr>
                        </thead>
    
                        <tbody>
                            @foreach ($datas as $item)
                                <tr>
                                    <td>
                                        @if ($item->foto)
                                            <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ Str::lower($item->fullname) }}" width="50">
                                        @else
                                            <img src="/images/man.png" alt="student" width="50">                              
                                        @endif
                                    </td>
                                    <td>{{ $item->reg_number }}</td>
                                    <td>{{ $item->fullname }}</td>
                                    <td>
                                        <a href="/storage/{{ $item->kk }}" class="btn btn-primary" download><i class='bx bx-cloud-download'></i> Download</a>
                                    </td>
                                    <td>
                                        <a href="/storage/{{ $item->akte }}" class="btn btn-success" download><i class='bx bx-cloud-download'></i> Download</a>
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