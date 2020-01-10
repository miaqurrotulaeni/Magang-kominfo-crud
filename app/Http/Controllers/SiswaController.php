<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa1 as Siswa1;

class SiswaController extends Controller
{
    public function index()
    {
    	$data_siswa = Siswa1::all();
    	return view('halaman_siswa', ['data_siswa'=> $data_siswa]);
    }
    public function create(Request $request)
    {
        \App\Siswa1::create($request->all());
        return redirect('/siswa1');
    }
    public function halaman_edit($id) {
        $siswa1 = Siswa1::where('id', $id)->get()->first();
        return view('edit', ['siswa1' => $siswa1]);
    }
    public function update(Request $Request, $id)
    {
        $siswa1 = \App\Siswa1::find($id);
        $siswa1->nama_depan = $Request->input('nama_depan');
        $siswa1->nama_belakang = $Request->input('nama_belakang');
        $siswa1->agama = $Request->input('agama');
        $siswa1->jenis_kelamin = $Request->input('jenis_kelamin');
        $siswa1->alamat = $Request->input('alamat');
        $siswa1->save();
        return redirect('/siswa1')-> with('sukses', 'Data Berhasil Diinput!');
    }
    public function delete($id) {
        $siswa1 = \App\Siswa1::find($id);
        $siswa1->delete();
        return redirect('/siswa1')->with('sukses', 'Data Berhasil Dihapus!');
    }
}
