@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        TAMBAH SURAT PERJANJIAN
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
        <div class="box-body">
            <!-- /.box-header -->
          <form method="post" action="/dashboard/store" class="form-horizontal">
            {{ csrf_field() }}
            <div class="modal-body">
               <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label">No. Urut SP</label>
                    <div class="col-sm-5">
                      <input type="text" name="no_urut_sp" class="form-control" placeholder="">
                      @if($errors->has('no_urut_sp'))
                          <div class="text-danger">
                              {{ $errors->first('no_urut_sp')}}
                          </div>
                      @endif
                    </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">No. SP</label>
                  <div class="col-sm-5">
                    <input type="text" name="no_sp" class="form-control" placeholder="">
                      @if($errors->has('no_sp'))
                          <div class="text-danger">
                              {{ $errors->first('no_sp')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Kode SP</label>
                  <div class="col-sm-5">
                    <input type="text" name="kode_sp" class="form-control" placeholder="">
                      @if($errors->has('kode_sp'))
                          <div class="text-danger">
                              {{ $errors->first('kode_sp')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Tahun SP</label>
                  <div class="col-sm-5">
                    <input type="text" name="tahun_sp" class="form-control" placeholder="">
                      @if($errors->has('tahun_sp'))
                          <div class="text-danger">
                              {{ $errors->first('tahun_sp')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Perusahaan</label>
                  <div class="col-sm-5">
                    <input type="text" name="perusahaan" class="form-control" placeholder="">
                      @if($errors->has('perusahaan'))
                          <div class="text-danger">
                              {{ $errors->first('perusahaan')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Judul Perjanjian</label>
                  <div class="col-sm-5">
                    <input type="text" name="judul_sp" class="form-control" placeholder="">
                      @if($errors->has('judul_sp'))
                          <div class="text-danger">
                              {{ $errors->first('judul_sp')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Jenis Perjanjian</label>
                  <div class="col-sm-5">
                    <input type="text" name="jenis_sp" class="form-control" placeholder="">
                      @if($errors->has('jenis_sp'))
                          <div class="text-danger">
                              {{ $errors->first('jenis_sp')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Objek Perjanjian</label>
                  <div class="col-sm-5">
                    <input type="text" name="objek_sp" class="form-control" placeholder="">
                      @if($errors->has('objek_sp'))
                          <div class="text-danger">
                              {{ $errors->first('objek_sp')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Skema Perjanjian</label>
                  <div class="col-sm-5">
                    <input type="text" name="skema_sp" class="form-control" placeholder="">
                      @if($errors->has('skema_sp'))
                          <div class="text-danger">
                              {{ $errors->first('skema_sp')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Kategori Aset</label>
                  <div class="col-sm-5">
                    <input type="text" name="kategori_aset" class="form-control" placeholder="">
                      @if($errors->has('kategori_aset'))
                          <div class="text-danger">
                              {{ $errors->first('kategori_aset')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Lokasi Objek Perjanjian</label>
                  <div class="col-sm-5">
                    <input type="text" name="lokasi_obj_sp" class="form-control" placeholder="">
                      @if($errors->has('lokasi_obj_sp'))
                          <div class="text-danger">
                              {{ $errors->first('lokasi_obj_sp')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nilai Formula</label>
                  <div class="col-sm-5">
                    <input type="text" name="nilai_formula" class="form-control" placeholder="">
                      @if($errors->has('nilai_formula'))
                          <div class="text-danger">
                              {{ $errors->first('nilai_formula')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Nilai Fix</label>
                  <div class="col-sm-5">
                    <input type="text" name="nilai_fix" class="form-control" placeholder="">
                      @if($errors->has('nilai_fix'))
                          <div class="text-danger">
                              {{ $errors->first('nilai_fix')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Mulai</label>
                  <div class="col-sm-5 input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="tgl_mulai" class="form-control" id="datepicker">
                  </div>
                </div>
                  <!--
                  <div class="col-sm-5">
                    <input type="text" name="tgl_mulai" class="form-control" placeholder="">
                      @if($errors->has('tgl_mulai'))
                          <div class="text-danger">
                              {{ $errors->first('tgl_mulai')}}
                          </div>
                      @endif
                  </div>
                  -->


                <!--
                <div class="form-group">
                <label>Date:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
              </div>-->

                <div class="form-group">
                  <label class="col-sm-3 control-label">Tanggal Akhir</label>
                  <div class="col-sm-5">
                    <input type="text" name="tgl_akhir" class="form-control" placeholder="">
                      @if($errors->has('tgl_akhir'))
                          <div class="text-danger">
                              {{ $errors->first('tgl_akhir')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Keterangan Perubahan Isi</label>
                  <div class="col-sm-5">
                    <input type="text" name="ket_perubahan" class="form-control" placeholder="">
                      @if($errors->has('ket_perubahan'))
                          <div class="text-danger">
                              {{ $errors->first('ket_perubahan')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">User</label>
                  <div class="col-sm-5">
                    <input type="text" name="user" class="form-control" placeholder="">
                      @if($errors->has('user'))
                          <div class="text-danger">
                              {{ $errors->first('user')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Email</label>
                  <div class="col-sm-5">
                    <input type="text" name="email" class="form-control" placeholder="">
                      @if($errors->has('email'))
                          <div class="text-danger">
                              {{ $errors->first('email')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label">Notifikasi</label>
                  <div class="col-sm-5">
                    <input type="text" name="notifikasi" class="form-control" placeholder="">
                      @if($errors->has('notifikasi'))
                          <div class="text-danger">
                              {{ $errors->first('notifikasi')}}
                          </div>
                      @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-3 control-label"></label>
                  <div class="col-sm-5">
                    <button type="submit" class="btn btn-info">SIMPAN</button>
                  </div>
                </div>
            </div>
          </form>

            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->      
    </section>
@endsection 