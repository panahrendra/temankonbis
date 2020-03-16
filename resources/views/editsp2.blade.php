@extends('layouts.app')


@section('content')
<section class="content-header">
  <h1>
    INFO SURAT PERJANJIAN
    <br><small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Examples</a></li>
    <li class="active">Blank page</li>
  </ol>
</section>
	<style type="text/css">
      #iya{
        font-weight: 800;
      }
    </style>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header">
            @if (session('Sukses'))
              <div class="alert alert-success" role="alert">
                <center>{{(session('Sukses'))}}</center>
              </div>
            <div><br></div>
            @endif 
            <a href="/dashboard"><button type="submit" class="btn btn-info">KEMBALI</button></a>
        </div>

        <div class="box-body">
          <form method="post" action="/dashboard/{{ $data_konbis->data_id }}/update" class="form-horizontal">
            {{ csrf_field() }}

            <table width="50%">
                  <tr>
                    <td class="col-sm-5" id="iya">No. Urut SP</td>
                    <td><?php echo "<font color='white'>...</font>"; ?></td>
                    <td><input type="text" name="no_urut_sp" class="form-control" value="{{ $data_konbis->no_urut_sp }}"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">No. SP</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="no_sp" class="form-control" value="{{ $data_konbis->no_sp }}"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Kode SP</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="kode_sp" class="form-control" value="{{ $data_konbis->kode_sp }}"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Tahun SP</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="tahun_sp" class="form-control" id="datepicker3" value="{{ $data_konbis->tahun_sp }}">
                      </div>
                    </td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Perusahaan</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="perusahaan" class="form-control" value="{{ $data_konbis->perusahaan }}"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Judul Perjanjian</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><textarea type="text" name="judul_sp" class="form-control" value="">{{ $data_konbis->judul_sp }}</textarea></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Jenis Perjanjian</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="jenis_sp" class="form-control" value="{{ $data_konbis->jenis_sp }}"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Objek Perjanjian</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><textarea type="text" name="objek_sp" class="form-control" value="">{{ $data_konbis->objek_sp }}</textarea></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Skema Perjanjian</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="skema_sp" class="form-control" value="{{ $data_konbis->skema_sp }}"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Kategori Aset</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="kategori_aset" class="form-control" value="{{ $data_konbis->kategori_aset }}"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Lokasi Objek Perjanjian</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="lokasi_obj_sp" class="form-control" value="{{ $data_konbis->lokasi_obj_sp }}"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Nilai Formula</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="nilai_formula" class="form-control" value="{{ $data_konbis->nilai_formula }}"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Nilai Fix</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="nilai_fix" class="form-control" value="{{ $data_konbis->nilai_fix }}"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Tanggal Mulai</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="tgl_mulai" class="form-control" id="datepicker1" value="{{ $data_konbis->tgl_mulai }}">
                      </div>
                    </td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Tanggal Akhir</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td>
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" name="tgl_akhir" class="form-control" id="datepicker2" value="{{ $data_konbis->tgl_akhir }}">
                      </div>
                    </td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Keterangan Perubahaan Isi</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><textarea type="text" name="ket_perubahan" class="form-control" value="">{{ $data_konbis->ket_perubahan }}</textarea></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">User</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="user" class="form-control" value="{{ $data_konbis->user }}"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Email</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="email" class="form-control" value="{{ $data_konbis->email }}"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Notifikasi</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="notifikasi" class="form-control" value="{{ $data_konbis->notifikasi }}"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

            </table>

            <table width="50%">

                  <tr>
                    <td class="col-sm-4" id="iya"><?php echo "<font color='white'></font>"; ?></td>
                    <td><?php echo "<font color='white'>...</font>"; ?></td>
                    <td><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">EDIT</button></td>
                  </tr>
            </table>
            
              <div class="modal modal-info fade" id="modal-info">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <center><label>Yakin ingin mengedit data ini ?</label></center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">TUTUP</button>
                      <button type="submit" class="btn btn-outline">EDIT</button>
                    </div>
                  </div>
                </div>
              </div>

          </form>
		    </div>
      </div>

	  <div class="box-footer">
	    
	  </div>

    </section>
@endsection 