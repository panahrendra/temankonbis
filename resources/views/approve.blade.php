@extends('layouts.app')


@section('content')
<section class="content-header">
      <h1>
        APPROVE
        <br><small>Review Surat Perjanjian</small>
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
          <div class="box-header">
              <h2 class="box-title">Surat Perjanjian yang harus di review</h2><br>
              
              
          </div>
            <!-- /.box-header -->
          <div class="box-body">
              <table id="tq1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th rowspan="2"><center>Rendering engine</center></th>
                  <th rowspan="2"><center>Browser</center></th>
                  <th rowspan="2"><center>Platform(s)</center></th>
                  <th rowspan="2"><center>Engine version</center></th>
                  <th rowspan="2"><center>CSS grade</center></th>
                  <th colspan="2"><center>Action</center></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet Explorer 4.0</td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td><a href="#"><i class="fa fa-edit"></a></i></td>
                  <td><a href="#"><i class="fa fa-trash"></a></i></td>
                </tr>
                </tbody>
              </table>
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