@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        DASHBOARD
        <br><small>Surat Perjanjian yang masih aktif</small>
      </h1>
    </section>

    <style type="text/css">
        #tdash{
          font-size: smaller;
        }
    </style>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
          <div class="box-header">
              <h2 class="box-title">Sortir SP dengan kategori :</h2><br><br>
              
              <!-- KATEGORI -->     
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    @if (!is_null(session('sp')))
                      <span>{{ session('sp') }} <span class="caret"></span></span>
                    @else
                      <span>Pilih.. <span class="caret"></span></span>
                    @endif
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu" role="">
                    <li><a href="{{ route('tembis.sort', "induk") }}">Induk</a></li>
                    <li><a href="{{ route('tembis.sort', "addendum") }}">addendum</a></li>
                  </ul>
                </div> 
                <br>
            <!-- /.box-header -->
            @if (session('Sukses'))
              <div class="alert alert-success" role="alert">
                <center>{{(session('Sukses'))}}</center>
              </div>
            @endif
            <div class="box-body">
<br>  
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
                  <th><center>TANGGAL MULAI</center></th>
                  <th><center>TANGGAL AKHIR</center></th>
                  <th><center>KETERANGAN PERUBAHAN ISI</center></th>
                  <th><center>USER</center></th>
                  <th><center>OPSI</center></th>
                  <th><center>HAPUS</center></th>
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
                  <td><center><a href="/dashboard/{{$d->data_id}}/edit"><button type="button" class="btn btn-primary"><i class="fa fa-info-circle"></i></button></a></center></td>
                  <td><center><a href="/dashboard/{{$d->data_id}}/delete"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a></center></td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
        </div>

        <!-- /.box-body -->
        <div class="box-footer">
         <a href="/dashboard/tambah"><button type="button" class="btn btn-default"><i class="fa fa-plus"> Tambah Perjanjian</i></button></a>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->      
    </section>
@endsection 