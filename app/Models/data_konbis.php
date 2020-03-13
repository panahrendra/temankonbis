<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class data_konbis extends Model
{
	protected $table = "data_konbis";
	
	protected $primaryKey = 'data_id';

	protected $fillable =  ['data_id','no_urut_sp','no_sp','kode_sp','tahun_sp','perusahaan','judul_sp','jenis_sp','objek_sp',
							'skema_sp','kategori_aset','lokasi_obj_sp','nilai_formula','nilai_fix','tgl_mulai','tgl_akhir','ket_perubahan',
							'user','email','notifikasi'];
}