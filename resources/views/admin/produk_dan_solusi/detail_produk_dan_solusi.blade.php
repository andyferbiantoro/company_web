@extends('layouts.app')

@section('title')
Detail Produk Dan Solusi
@endsection


@section('content')

<div class="row">
 <div class="col-lg-12">
  <div class="card">
                <div class="card-header">
                  <h4>Detail Produk Dan Solusi</h4>
                </div>
                <div class="card-body">
                 <!-- Button trigger modal -->
                 @if($count == 0) 
                 <button type="button" class="btn btn-success " data-toggle="modal" data-target="#ModalTambahPengumuman">
                  Tambah Foto
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
                  
                      @foreach($detail_produk_dan_solusi as $data)
                     <table class="table table-hover">
                      <tr>
                        <th>Nama Produk Dan Solusi</th>
                        <th>:</th>
                        <td>{{$data->nama_layanan}}</td>
                      </tr> 

                      <tr>
                        <th>Deskripsi</th>
                        <th>:</th>
                        <td>{{$data->deskripsi}}</td>
                      </tr> 


                    </table>
                   @endforeach 
                </div>

                <div class="table-responsive">
                  <table id="dataTable" class="table table-hover">
                    <thead>
                      <tr>
                        <th style="text-align: center; vertical-align: middle;">Foto</th>
                        <th style="text-align: center; vertical-align: middle;">Aksi</th>
                        <th style="display: none;">hidden</th>
                      </tr>
                    </thead>
                    <tbody>
                      @php $no=1 @endphp
                      @foreach($image_produk as $data)
                      <tr>
                       
                        <td scope="row"><img height="70" id="myImg" src="{{asset('uploads/produk_dan_solusi/'.$data->image)}}"  data-toggle="modal" data-target="#myModal"></img></td>
                        <td> 
                          <button class="btn btn-success btn-sm fa fa-edit edit" title="Edit"></button>

                          <a href="#" data-toggle="modal" onclick="deleteData({{$data->id}})" data-target="#DeleteModal">
                            <button class="btn btn-danger btn-sm fa fa-trash" title="Hapus"></button>
                          </a>

                         

                        </td>

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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Penyewaan Alat Berat</h5>

              </div>
              <div class="modal-body">
               <form method="post" action="{{route('admin_image_layanan_add')}}" enctype="multipart/form-data">


                {{csrf_field()}}
                

                <div class="form-group">
                  <label for="image">Foto</label>
                  <input type="file" class="form-control" id="image" name="image" required=""></input>
                </div>

                 @foreach($image_produk as $id_layanan)
              <div class="form-group">
                <input type="hidden" class="form-control" id="id_layanan" name="id_layanan" value="{{$id_layanan->id_layanan}}" />
              </div>
              @endforeach



                <button class="btn btn-primary" type="Submit">Tambahkan</button>
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
                <label for="image">Foto</label>
                <input type="file" class="form-control" id="image_update" name="image"></input>
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



  <!-- Creates the bootstrap modal where the image will appear -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        </div>
        <div class="modal-body text-center">
          <img src="" id="img01" style="width: 450px; height: auto;" >
        </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
<script type="text/javascript">
  function deleteData(id) {
    var id = id;
    var url = '{{route("admin_image_layanan_delete", ":id") }}';
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
     
      $('#updateInformasiform').attr('action','admin_image_layanan_update/'+ data[5]);
      $('#updateInformasi').modal('show');
    });
  });
</script>

@endsection


