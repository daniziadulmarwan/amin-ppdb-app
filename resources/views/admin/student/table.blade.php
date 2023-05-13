<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">

                <h4 class="card-title mb-3">Daftar Calon Siswa Baru</h4>
             
                <div class="d-flex mb-4 gap-1">
                    <a href="/admin/excel" class="btn btn-success">Export Excel</a>
                    {{-- <a href="/admin/excel/emis" class="btn btn-info">Export Excel EMIS</a> --}}
                    <a target="_blank" href="/export-all-student" class="btn btn-primary">Save To Pdf</a>
                </div>

                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>No. Reg</th>
                            <th>Nama</th>
                            <th>NISN</th>
                            <th>Jenjang</th>
                            <th>Sekolah Asal</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
        
                        <tbody>
                            @foreach ($students as $item)
                                <tr>
                                    <td>{{ $item->reg_number }}</td>
                                    <td>{{ $item->fullname }}</td>
                                    <td>{{ $item->nisn }}</td>
                                    <td>
                                        @if ($item->jenjang == 1)
                                            Madrasah Aliyah
                                        @else
                                            Madrasah Tsanawiyah
                                        @endif
                                    </td>
                                    <td>{{ $item->asal_sekolah }}</td>
                                    <td>
                                        @if ($item->status == 'accept')
                                            <span class="badge badge-pill badge-soft-success font-size-12">{{ $item->status }}</span>
                                        @elseif($item->status == 'pending')
                                            <span class="badge badge-pill badge-soft-warning font-size-12">{{ $item->status }}</span>
                                        @else
                                            <span class="badge badge-pill badge-soft-danger font-size-12">{{ $item->status }}</span>
                                        @endif
                                    </td>
                                    <td class="d-flex gap-1">
                                        <a target="_blank" href="/admin/student/{{ $item->id }}" class="text-warning font-size-20"><i class='bx bx-file'></i></a>
                                        <a href="/admin/student/{{ $item->id }}/edit" class="text-success font-size-20"><i class='bx bx-edit'></i></a>
                                        <form action="/admin/student/{{ $item->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button onclick="return confirm('Do you want to delete this data?')" type="submit" class="text-danger font-size-20" style="outline: none; border: none;background:none;margin: 0px;padding: 0px"><i class='bx bx-trash'></i></button>
                                        </form>
                                        <a href="javascript:void(0)" class="text-primary font-size-20 status-btn" data-bs-toggle="modal" data-id="{{ $item->id }}" data-bs-target="#statusModal"><i class='bx bx-check-square'></i></a>
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

@include('admin.student.status_modal')