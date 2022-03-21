@extends('layouts.app')

@section('title')
Profil Perusahaan
@endsection


@section('content')

<div class="row">
 <div class="col-lg-12">
  <div class="card">
                <div class="card-header">
                  <h4>Prodil Perusahaan</h4>
                </div>
                <div class="card-body">
                 <!-- Button trigger modal -->
                 @if($count == 0) 
                 <button type="button" class="btn btn-success " data-toggle="modal" data-target="#ModalTambahPengumuman">
                  Tambah Profil Perusahaan
                </button><br><br>
                @endif

                @if (session('success'))
                <div class="alert alert-success">
                  {{ session('success') }}
                </div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger">
                  {{ session('error') }}
                </div>
                @endif
                <div class="table-responsive">
                  <table id="dataTable" class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Perusahaan</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Didirikan</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Luas Lahan</th>
                        <th scope="col">Luas Bangunan</th>
                        <th scope="col">Modal</th>
                        <th scope="col">No Telp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                        <th style="display: none;">modal hidden</th>
                        <th style="display: none;">hidden</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no=1 @endphp
                      @foreach($profil_perusahaan as $data)
                      <tr>
                        <td scope="row">{{$no++}}</td>
                        <td scope="row">{{$data->nama_perusahaan}}</td>
                        <td scope="row">{{$data->deskripsi}}</td>
                        <td scope="row">{{$data->didirikan}}</td>
                        <td scope="row">{{$data->lokasi}}</td>
                        <td scope="row">{{$data->luas_lahan}}</td>
                        <td scope="row">{{$data->luas_bangunan}}</td>
                        <td scope="row">Rp. <?=number_format($data->modal, 0, ".", ".")?>,00</td>
                        <td scope="row">{{$data->no_telp}}</td>
                        <td scope="row">{{$data->email}}</td>
                        <td> 
                          <button class="btn btn-success btn-sm fa fa-edit edit" title="Edit"></button>

                          <a href="#" data-toggle="modal" onclick="deleteData({{$data->id}})" data-target="#DeleteModal">
                            <button class="btn btn-danger btn-sm fa fa-trash" title="Hapus"></button>
                          </a>


                        </td>
                        <td style="display: none;">{{$data->modal}}</td>
                        <td style="display: none;">{{$data->id}}</td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="ModalTambahPengumuman" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Profil</h5>

              </div>
              <div class="modal-body">
               <form method="post" action="{{route('admin_profil_perusahaan_add')}}" enctype="multipart/form-data">


                {{csrf_field()}}
                <div class="form-group">
                  <label for="nama_perusahaan">Nama Perusahaan</label>
                  <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" required=""></input>
                </div>


                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" required=""></textarea>
                </div>

                <div class="form-group">
                  <label for="didirikan">Didirikan</label>
                  <input type="text" class="form-control" id="didirikan" name="didirikan" required=""></input>
                </div>

                <div class="form-group">
                  <label for="lokasi">Lokasi</label>
                  <input type="text" class="form-control" id="lokasi" name="lokasi" required=""></input>
                </div>

                <div class="form-group">
                  <label for="luas_lahan">Luas Lahan</label>
                  <input type="text" class="form-control" id="luas_lahan" name="luas_lahan" required=""></input>
                </div>

                <div class="form-group">
                  <label for="luas_bangunan">Luas Bangunan</label>
                  <input type="text" class="form-control" id="luas_bangunan" name="luas_bangunan" required=""></input>
                </div>


                <div class="form-group">
                  <label for="modal">Modal</label>
                  <input type="number" class="form-control" id="modal" name="modal" required=""></input>
                </div>

                <div class="form-group">
                  <label for="no_telp">No Telp (+62)</label>
                  <input type="text" class="form-control" id="no_telp" name="no_telp" required=""></input>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" required=""></input>
                </div>

                <div class="form-group">
                  <input type="hidden" class="form-control" id="id_prodi" name="id_prodi" value="{{ Auth::user()->id_prodi }}" />
                </div>

                <button class="btn btn-primary" type="Submit">Tambah Profil</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>

            </div>
          </div>
        </div>
      </div>



      <!-- Modal Update -->
      <div id="updateInformasi" class="modal fade" role="dialog">
        <div class="modal-dialog ">
         <!--Modal content-->
         <form action="" id="updateInformasiform" method="post" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Anda yakin ingin memperbarui Data Menu ini ?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{ csrf_field() }}
              {{ method_field('POST') }}



              <div class="form-group">
                  <label for="nama_perusahaan">Nama Perusahaan</label>
                  <input type="text" class="form-control" id="nama_perusahaan_update" name="nama_perusahaan" required=""></input>
                </div>


                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <textarea type="text" class="form-control" id="deskripsi_update" name="deskripsi" required=""></textarea>
                </div>

                <div class="form-group">
                  <label for="didirikan">Didirikan</label>
                  <input type="text" class="form-control" id="didirikan_update" name="didirikan" required=""></input>
                </div>

                <div class="form-group">
                  <label for="lokasi">Lokasi</label>
                  <input type="text" class="form-control" id="lokasi_update" name="lokasi" required=""></input>
                </div>

                <div class="form-group">
                  <label for="luas_lahan">Luas Lahan</label>
                  <input type="text" class="form-control" id="luas_lahan_update" name="luas_lahan" required=""></input>
                </div>

                <div class="form-group">
                  <label for="luas_bangunan">Luas Bangunan</label>
                  <input type="text" class="form-control" id="luas_bangunan_update" name="luas_bangunan" required=""></input>
                </div>


                <div class="form-group">
                  <label for="modal">Modal</label>
                  <input type="number" class="form-control" id="modal_update" name="modal" required=""></input>
                </div>

                <div class="form-group">
                  <label for="no_telp">No Telp (+62)</label>
                  <input type="text" class="form-control" id="no_telp_update" name="no_telp" required=""></input>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email_update" name="email" required=""></input>
                </div>


              <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Batal</button>
              <button type="submit"  class="btn btn-primary float-right mr-2" >Perbarui</button>
            </div>
          </div>
        </form>
      </div>
    </div>


    <!-- Modal konfirmasi Hapus -->
    <div id="DeleteModal" class="modal fade" role="dialog">
      <div class="modal-dialog ">
        <!-- Modal content-->
        <form action="" id="deleteForm" method="post">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Hapus Visi Misi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{ csrf_field() }}
              {{ method_field('POST') }}
              <p>Apakah anda yakin ingin menghapus visi misi ini ?</p>
              <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Batal</button>
              <button type="submit" name="" class="btn btn-danger float-right mr-2" data-dismiss="modal" onclick="formSubmit()">Hapus</button>
            </div>
          </div>
        </form>
      </div>
    </div> 

  </div>

@endsection

@section('scripts')
<script type="text/javascript">
  function deleteData(id) {
    var id = id;
    var url = '{{route("admin_profil_perusahaan_delete", ":id") }}';
    url = url.replace(':id', id);
    $("#deleteForm").attr('action', url);
  }

  function formSubmit() {
    $("#deleteForm").submit();
  }
</script>


<script>
  $(document).ready(function() {
    var table = $('#dataTable').DataTable();
    table.on('click', '.edit', function() {
      $tr = $(this).closest('tr');
      if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      }
      var data = table.row($tr).data();
      console.log(data);
      $('#nama_perusahaan_update').val(data[1]);
      $('#deskripsi_update').val(data[2]);
      $('#didirikan_update').val(data[3]);
      $('#lokasi_update').val(data[4]);
      $('#luas_lahan_update').val(data[5]);
      $('#luas_bangunan_update').val(data[6]);
      $('#modal_update').val(data[11]);
      $('#no_telp_update').val(data[8]);
      $('#email_update').val(data[9]);
      $('#updateInformasiform').attr('action','admin_profil_perusahaan_update/'+ data[12]);
      $('#updateInformasi').modal('show');
    });
  });
</script>

@endsection


