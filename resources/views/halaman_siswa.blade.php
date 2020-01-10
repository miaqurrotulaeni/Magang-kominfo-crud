<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>
	<body>

			<div class="container mt-4">
				<div class="row">
						<div class="col-6">
							<h2>Selamat Datang Di Halaman Siswa</h2>
						</div>
						<div class="col-6">
							<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
							  Tambah data siswa
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <span aria-hidden="true">&times;</span>
							        </button>
							      </div>
							      <div class="modal-body" >
							        <form action="/siswa1/create" method="POST">
							        	<input type="hidden" name="_method" value="post" />
							        	<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
								  <div class="form-group">
								    <label for="exampleInputEmail1">Nama Depan</label>
								    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailhelp" placeholder="Nama Depan">
								  </div>

								  <div class="form-group">
								    <label for="exampleInputPassword1">Nama Belakang</label>
								    <input name="nama_belakang" type="text" class="form-control" id="exampleInputPassword1"aria-describedby="emailHelp" placeholder="Nama belakang">
								  </div>

								  <div class="form-group">
								    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
								    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
								      <option>Perempuan</option>
								      <option>laki-laki</option>
								    </select>
								  </div>
								  <div class="form-group">
								    <label for="exampleInputPassword1">Agama</label>
								    <input name="agama" type="text" class="form-control" id="exampleInputPassword1"aria-describedby="emailHelp" placeholder="Agama">
								  </div>

								  <div class="form-group">
   									 <label for="exampleFormControlTextarea1">Alamat</label>
    								<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  									</div>

								  <div class="form-group form-check">
								    <input type="checkbox" class="form-check-input" id="exampleCheck1">
								    <label class="form-check-label" for="exampleCheck1">Check me out</label>
								  </div>
								  
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							        <button type="submit" class="btn btn-primary">Submit</button>
									</form>

							      </div>
							    </div>
							  </div>
							</div>
						</div>

						<table class="table table-hover">
							<tr>
								<th>Nama Depan</th>
								<th>Nama Belakang</th>
								<th>Jenis Kelamin</th>
								<th>Agama</th>
								<th>Alamat</th>
								<th>Aksi</th>
						
							</tr>
							@foreach($data_siswa as $siswa1)
							<tr>
								<td>{{$siswa1->nama_depan}}</td>
								<td>{{$siswa1->nama_belakang}}</td>
								<td>
									@if($siswa1->jenis_kelamin == 'L')
										Laki-Laki
									@else
										Perempuan
									@endif
								</td>
								<td>{{$siswa1->agama}}</td>
								<td>{{$siswa1->alamat}}</td>
								<th>
									<a href="/siswa1/{{$siswa1->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
									<a href="/siswa1/{{$siswa1->id}}/hapus" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
								</th>

							</tr>
							@endforeach
						</table>
						</form>
					</div>
					</div>
				</div>
			</div>
	



	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>

	