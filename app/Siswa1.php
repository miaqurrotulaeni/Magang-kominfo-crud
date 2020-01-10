<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa1 extends Model
{
	protected $table = 'siswa1';
	protected $fillable= ['nama_belakang','nama_depan','jenis_kelamin','agama','alamat'];
    //
}
