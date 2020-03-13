@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        EDIT SURAT PERJANJIAN
        <br><small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header">
            @if (session('Sukses'))
              <div class="alert alert-success" role="alert" >
                <center>{{(session('Sukses'))}}</center>
              </div>
            <div><br></div>
            @endif 
            <a href="/dashboard"><button type="submit" class="btn btn-info">KEMBALI</button></a>
            
        </div>
        <div class="box-body">
          <form method="post" action="/dashboard/{{ $data_konbis->data_id }}/update" class="form-horizontal">
            {{ csrf_field() }}
               <div class="box-body">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">No. Urut SP</label>
                    <div class="col-sm-5">
                      <input type="text" name="no_urut_sp" class="form-control" placeholder="" value="{{ $data_konbis->no_urut_sp }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">No. SP</label>
                    <div class="col-sm-5">
                      <input type="text" name="no_sp" class="form-control" placeholder="" value="{{ $data_konbis->no_sp }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kode SP</label>
                    <div class="col-sm-5">
                      <input type="text" name="kode_sp" class="form-control" placeholder="" value="{{ $data_konbis->kode_sp }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Tahun SP</label>
                    <div class="col-sm-5">
                      <input type="text" name="tahun_sp" class="form-control" placeholder="" value="{{ $data_konbis->tahun_sp }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Perusahaan</label>
                    <div class="col-sm-5">
                      <input type="text" name="perusahaan" class="form-control" placeholder="" value="{{ $data_konbis->perusahaan }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Judul Perjanjian</label>
                    <div class="col-sm-5">
                      <input type="text" name="judul_sp" class="form-control" placeholder="" value="{{ $data_konbis->judul_sp }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Jenis Perjanjian</label>
                    <div class="col-sm-5">
                      <input type="text" name="jenis_sp" class="form-control" placeholder="" value="{{ $data_konbis->jenis_sp }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Objek Perjanjian</label>
                    <div class="col-sm-5">
                      <input type="text" name="objek_sp" class="form-control" placeholder="" value="{{ $data_konbis->objek_sp }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Skema Perjanjian</label>
                    <div class="col-sm-5">
                      <input type="text" name="skema_sp" class="form-control" placeholder="" value="{{ $data_konbis->skema_sp }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Kategori Aset</label>
                    <div class="col-sm-5">
                      <input type="text" name="kategori_aset" class="form-control" placeholder="" value="{{ $data_konbis->kategori_aset }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Lokasi Objek Perjanjian</label>
                    <div class="col-sm-5">
                      <input type="text" name="lokasi_obj_sp" class="form-control" placeholder="" value="{{ $data_konbis->lokasi_obj_sp }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nilai Formula</label>
                    <div class="col-sm-5">
                      <input type="text" name="nilai_formula" class="form-control" placeholder="" value="{{ $data_konbis->nilai_formula }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Nilai Fix</label>
                    <div class="col-sm-5">
                      <input type="text" name="nilai_fix" class="form-control" placeholder="" value="{{ $data_konbis->nilai_fix }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Tanggal Mulai</label>
                    <div class="col-sm-5">
                      <input type="text" name="tgl_mulai" class="form-control" placeholder="" value="{{ $data_konbis->tgl_mulai }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Tanggal Akhir</label>
                    <div class="col-sm-5">
                      <input type="text" name="tgl_akhir" class="form-control" placeholder="" value="{{ $data_konbis->tgl_akhir }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Keterangan Perubahan Isi</label>
                    <div class="col-sm-5">
                      <input type="text" name="ket_perubahan" class="form-control" placeholder="" value="{{ $data_konbis->ket_perubahan }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">User</label>
                    <div class="col-sm-5">
                      <input type="text" name="user" class="form-control" placeholder="" value="{{ $data_konbis->user }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-5">
                      <input type="text" name="email" class="form-control" placeholder="" value="{{ $data_konbis->email }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Notifikasi</label>
                    <div class="col-sm-5">
                      <input type="text" name="notifikasi" class="form-control" placeholder="" value="{{ $data_konbis->notifikasi }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-5">
                      <button type="submit" class="btn btn-info">EDIT</button>
                    </div>
                  </div>
              </div>
          </form>

            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->      
    </section>
@endsection 