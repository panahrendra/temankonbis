@extends('layouts.app')


@section('content')
<style type="text/css">
  .hid{
    font-style:  
  }
</style>
<section class="content-header">
      <h1>
        ACCOUNT PROFILE
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
      <div class="box box-info">
        <div class="box-body">
         <h3 clss="box-title">DATA USER</h3>
          <div class="box-header">

	            <form>
	            	<table width="50%">
	            		<tr>
	            			<td class="col-sm-1 control-label"><strong>DEPARTEMEN</strong></td>
	            			<td> : </td>
	            			<td colspan="3"><input type="text" class="form-control" name="dept" placeholder="DEPARTEMEN"></td>
	            		</tr>
	            		<tr>
	            			<td><br></td>
	            		</tr>
	            		<tr>
	            			<td class="col-sm-1 control-label"><strong>NPK</strong></td>
	            			<td> : </td>
	            			<td width="20%"><input type="text" class="form-control" name="npk" placeholder="NPK"></td>
                    <td><?php echo "<font color='white'>..</font>"; ?></td>
                    <td><input type="text" class="form-control" name="name" placeholder="NAME"></td>
	            		</tr>
	            		<tr>
	            			<td><br></td>
	            		</tr>
	            		<tr>
	            			<td class="col-sm-1 control-label"><strong>JABATAN</strong></td>
	            			<td> : </td>
	            			<td colspan="3"><input type="text" class="form-control" name="jabatan" placeholder="JABATAN"></td>
	            		</tr>
	            		<tr>
	            			<td><br></td>
	            		</tr>
	            		<tr>
	            			<td class="col-sm-1 control-label"><strong>TINGKATAN</strong></td>
	            			<td> : </td>
	            			<td colspan="3"><input type="text" class="form-control" name="tingkatan" placeholder="TINGKATAN"></td>
	            		</tr>
	            	</table>
	            </form>
	            <br>
	        </div>
	            <h3 class="box-title">USER YANG TERDAFTAR</h3>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tuser" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th><center>DEPARTEMEN</center></th>
                  <th><center>NPK</center></th>
                  <th><center>NAMA</center></th>
                  <th><center>JABATAN</center></th>
                  <th><center>TINGKATAN</center></th>
                  <th><center>AKSI</center></th>
                </tr>
                </thead>
                <tbody>  
                @foreach($usertb as $u)
                <tr>
                  <td>{{ $u->uk_nm }}</td>
                  <td>{{ $u->user_id }}</td>
                  <td>{{ $u->user_nm }}</td>
                  <td>{{ $u->jabatan }}</td>
                  <td>{{ $u->user_lv }}</td>
                  <td><center><a href="#"><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></a></center></td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                <i class="fa fa-user-plus"> Tambah User</i>
		  </button>

		  <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah User</h4>
              </div>

              <div class="modal-body">
	            <form class="form-horizontal">
	            	<table width="75%">
	            		<tr>
	            			<td class="col-sm-1 control-label"><strong>DEPARTEMEN</strong></td>
	            			<td><input type="text" class="form-control" name="dept" placeholder="DEPARTEMEN"></td>
	            		</tr>
	            		<tr>
	            			<td><br></td>
	            		</tr>
	            		<tr>
	            			<td class="col-sm-1 control-label"><strong>NPK</strong></td>
	            			<td><input type="text" class="form-control" name="npk" placeholder="NPK"></td>
	            		</tr>
	            		<tr>
	            			<td><br></td>
	            		</tr>
	            		<tr>
	            			<td class="col-sm-1 control-label"><strong>JABATAN</strong></td>
	            			<td><input type="text" class="form-control" name="jabatan" placeholder="JABATAN"></td>
	            		</tr>
	            		<tr>
	            			<td><br></td>
	            		</tr>
	            		<tr>
	            			<td class="col-sm-1 control-label"><strong>TINGKATAN</strong></td>
	            			<td><input type="text" class="form-control" name="tingkatan" placeholder="TINGKATAN"></td>
	            		</tr>
	            	</table>
	            </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>

          	</div>
      	  </div>
  		  </div>
        </div>
        <!-- /.box-footer--> 
      </div>
      <!-- /.box -->     
    </section>
@endsection 