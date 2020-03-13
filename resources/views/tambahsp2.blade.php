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
            <a href="/dashboard"><button type="submit" class="btn btn-info">KEMBALI</button></a>
        </div>
          <div class="box-body">
            <!-- /.box-header -->
            <form method="post" action="/dashboard/store" class="form-horizontal">
              {{ csrf_field() }}

                <table width="50%">
                  <tr>
                    <td class="col-sm-5" id="iya">No. Urut SP</td>
                    <td><?php echo "<font color='white'>...</font>"; ?></td>
                    <td><input type="text" name="no_urut_sp" class="form-control" placeholder="No. Urut Surat Perjanjian"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">No. SP</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="no_sp" class="form-control" placeholder="No. Surat Perjanjian"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Kode SP</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="kode_sp" class="form-control" placeholder="Kode Surat Perjanjian"></td>
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
                        <input type="text" name="tahun_sp" class="form-control" id="datepicker3">
                      </div>
                    </td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Perusahaan</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="perusahaan" class="form-control" placeholder="Perusahaan"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Judul Perjanjian</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><textarea type="text" name="judul_sp" class="form-control" placeholder="Judul Perjanjian"></textarea></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Jenis Perjanjian</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="jenis_sp" class="form-control" placeholder="Jenis Perjanjian"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Objek Perjanjian</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><textarea type="text" name="objek_sp" class="form-control" placeholder="Objek Perjanjian"></textarea></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Skema Perjanjian</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="skema_sp" class="form-control" placeholder="Skema Perjanjian"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Kategori Aset</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="kategori_aset" class="form-control" placeholder="Kategori Aset"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Lokasi Objek Perjanjian</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="lokasi_obj_sp" class="form-control" placeholder="Lokasi Objek Perjanjian"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Nilai Formula</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="nilai_formula" class="form-control" placeholder="Nilai Formula"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Nilai Fix</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="nilai_fix" class="form-control" placeholder="Nilai Fix"></td>
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
                        <input type="text" name="tgl_mulai" class="form-control" id="datepicker1">
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
                        <input type="text" name="tgl_akhir" class="form-control" id="datepicker2">
                      </div>
                    </td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Keterangan Perubahaan Isi</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><textarea type="text" name="ket_perubahan" class="form-control" placeholder="Keterangan Perubahaan Isi"></textarea></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">User</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="user" class="form-control" placeholder="User"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Email</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="email" class="form-control" placeholder="Email"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td class="col-sm-5" id="iya">Notifikasi</td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" name="notifikasi" class="form-control" placeholder="Notifikasi"></td>
                  </tr>
                  
                  <tr>
                    <td><br></td>
                  </tr>

                  <tr>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><button type="submit" class="btn btn-info">SIMPAN</button></td>
                  </tr>
                </table>
            </form>
          </div>

        <div class="box-footer">
          Footer
        </div>

      </div>
    </section>
@endsection 