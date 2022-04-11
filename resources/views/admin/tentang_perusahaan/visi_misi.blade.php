@extends('layouts.app')

@section('title')
Visi Misi
@endsection


@section('content')

<!-- Tabel Visi -->
<div class="row">
 <div class="col-lg-12">
  <div class="card">
                <div class="card-header">
                  <h4>Visi</h4>
                </div>
                <div class="card-body">
                 <!-- Button trigger modal -->
                
                
                <button type="button" class="btn btn-success " data-toggle="modal" data-target="#ModalTambahVisi">
                  Tambah Visi 
                </button>

                <button type="button" class="btn btn-success " data-toggle="modal" data-target="#ModalTambahMisi">
                  Tambah Misi
                </button>
                <br><br>
               
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
                        <th scope="col">Visi</th>
                        <th scope="col">Aksi</th>
                        <th style="display: none;">hidden</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no=1 @endphp
                      @foreach($visi_misi as $data)
                      @if($data->visi != null)
                      <tr>
                        <td scope="row">{{$no++}}</td>
                        <td scope="row">{{$data->visi}}</td>
                        <td> 
                          <button class="btn btn-success btn-sm fa fa-edit edit" title="Edit"></button>

                          <a href="#" data-toggle="modal" onclick="deleteData({{$data->id}})" data-target="#DeleteModal">
                            <button class="btn btn-danger btn-sm fa fa-trash" title="Hapus"></button>
                          </a>

                        </td>

                        <td style="display: none;">{{$data->id}}</td>

                      </tr>
                      @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>



<!-- Tabel Misi -->
<div class="row">
 <div class="col-lg-12">
  <div class="card">
                <div class="card-header">
                  <h4>Misi</h4>
                </div>
                <div class="card-body">
                
                <div class="table-responsive">
                  <table id="dataTable2" class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Misi</th>
                        <th scope="col">Aksi</th>
                        <th style="display: none;">hidden</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no=1 @endphp
                      @foreach($visi_misi as $data)
                        @if($data->misi != null)
                      <tr>
                        <td scope="row">{{$no++}}</td>
                        <td scope="row">{{$data->misi}}</td>
                       
                        <td> 
                          <button class="btn btn-success btn-sm fa fa-edit editmisi" title="Edit"></button>

                          <a href="#" data-toggle="modal" onclick="deleteData({{$data->id}})" data-target="#DeleteModal">
                            <button class="btn btn-danger btn-sm fa fa-trash" title="Hapus"></button>
                          </a>


                        </td>

                        <td style="display: none;">{{$data->id}}</td>

                      </tr>
                        @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>




        <!-- Modal -->
        <div class="modal fade" id="ModalTambahVisi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Visi</h5>

              </div>
              <div class="modal-body">
               <form method="post" action="{{route('admin_visi_misi_add')}}" enctype="multipart/form-data">


                {{csrf_field()}}
                <div class="form-group">
                  <label for="judul">Visi</label>
                  <textarea type="text" class="form-control" id="visi" name="visi" required=""></textarea>
                </div>
                

                <button class="btn btn-primary" type="Submit">Tambah Visi</button>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>

            </div>
          </div>
        </div>
      </div>



      <!-- Modal -->
        <div class="modal fade" id="ModalTambahMisi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Misi</h5>

              </div>
              <div class="modal-body">
               <form method="post" action="{{route('admin_visi_misi_add')}}" enctype="multipart/form-data">


                {{csrf_field()}}
                <div class="form-group">
                  <label for="misi">Misi</label>
                  <textarea type="text" class="form-control" id="misi" name="misi" required=""></textarea>
                </div>
                

                <button class="btn btn-primary" type="Submit">Tambah Misi</button>
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
              <h5 class="modal-title">Anda yakin ingin memperbarui Data Visi ini ?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{ csrf_field() }}
              {{ method_field('POST') }}

              <div class="form-group">
                <label for="judul">Visi</label>
                <textarea type="text" class="form-control" id="visi_update" name="visi" required=""></textarea>
              </div>
             
              <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Batal</button>
              <button type="submit"  class="btn btn-primary float-right mr-2" >Perbarui</button>
            </div>
          </div>
        </form>
      </div>
    </div>




     <!-- Modal Update -->
      <div id="updateMisi" class="modal fade" role="dialog">
        <div class="modal-dialog ">
         <!--Modal content-->
         <form action="" id="updateMisiform" method="post" enctype="multipart/form-data">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Anda yakin ingin memperbarui Data Misi ini ?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              {{ csrf_field() }}
              {{ method_field('POST') }}

              <div class="form-group">
                <label for="judul">Misi</label>
                <textarea type="text" class="form-control" id="misi_update" name="misi" ></textarea>
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
    var url = '{{route("admin_visi_misi_delete", ":id") }}';
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
      $('#visi_update').val(data[1]);

      $('#updateInformasiform').attr('action','admin_visi_misi_update/'+ data[3]);
      $('#updateInformasi').modal('show');
    });
  });
</script>


<script>
  $(document).ready(function() {
    var table = $('#dataTable2').DataTable();
    table.on('click', '.editmisi', function() {
      $tr = $(this).closest('tr');
      if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      }
      var data = table.row($tr).data();
      console.log(data);
      $('#misi_update').val(data[1]);
      $('#updateMisiform').attr('action','admin_visi_misi_update/'+ data[3]);
      $('#updateMisi').modal('show');
    });
  });
</script>

@endsection