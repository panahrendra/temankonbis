@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        HISTORY
        <br><small>Surat Perjanjian yang telah mati</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <style type="text/css">
        #tdash{
          font-size: smaller;
        }
    </style>
      
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-warning">
          <div class="box-header">
              <h2 class="box-title">Sortir SP dengan kategori :</h2><br><br>
              <!-- KATEGORI -->
				        <div class="btn-group">
                  <button type="button" class="btn btn-default"> JENIS SP </button>
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <span class="caret"></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="">
                    @foreach($data_konbis as $d)
                    <li><a href="#">{{ $d->jenis_sp }}</a></li>
                    @endforeach
                  </ul>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tdash" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th><center>NO</center></th>
                  <th><center>NO. SP</center></th>
                  <th><center>PERUSAHAAN INSTANSI</center></th>
                  <th><center>JUDUL PERJANJIAN</center></th>
                  <th><center>OBJEK PERJANJIAN</center></th>
                  <th><center>LOKASI OBJEK PERJANJIAN</center></th>
                  <th><center>NILAI PERJANJIAN</center></th>
                  <th width="10%"><center>TANGGAL MULAI</center></th>
                  <th width="10%"><center>TANGGAL AKHIR</center></th>
                  <th><center>KETERANGAN PERUBAHAN ISI</center></th>
                  <th><center>USER</center></th>
                  <th><center>AKSI</center></th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($data_konbis as $d) 
                <tr>
                  <td>{{ $no++ }}</td>
                  <td>{{ $d->no_sp.$d->kode_sp.$d->tahun_sp }}</td>
                  <td>{{ $d->perusahaan }}</td>
                  <td>{{ $d->jenis_sp." - ".$d->judul_sp }}</td>
                  <td>{{ $d->objek_sp }}</td>
                  <td>{{ $d->lokasi_obj_sp }}</td>
                  <td>{{ $d->nilai_formula."/".$d->nilai_fix }}</td>
                  <td>{{ $d->tgl_mulai }}</td>
                  <td>{{ $d->tgl_akhir }}</td>
                  <td>{{ $d->ket_perubahan }}</td>
                  <td>{{ $d->user }}</td>
                  <td><center><a href="#"><button type="button" class="btn btn-primary"><i class="fa fa-info-circle"></i></button></a></center></td>
                </tr>
                @endforeach
                </tbody>
              </table>
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