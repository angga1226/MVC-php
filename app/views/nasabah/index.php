<div class="container mt-3">


	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row mb-5">
		<div class="col-lg-6">
			<button type="button" class="btn btn-primary tombolTambah" data-toggle="modal" data-target="#forModal">
				Tambah Data Nasabah
			</button>
		</div>
	</div>


	<div class="row">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/nasabah/cari" method="post">
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Search" name="keyword" id="keyword" autocomplete="off">
				<div class="input-group-append">
					<button class="btn btn-info" type="submit" id="tombolCari">Search</button>
				</div>
			</div>
			</form>
		</div>
	</div>


	<div class="row">
		<div class="col-6">

			<h3>Daftar Nasabah</h3>
			
			<ul class="list-group">
				<?php foreach ($data['nas'] as $nas) : ?>
					<li class="list-group-item">
						<?= $nas['nama']; ?>
						<a href="<?= BASEURL; ?>/nasabah/delete/<?= $nas['id']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('yakin?');">Delete</a>
						<a href="<?= BASEURL; ?>/nasabah/ubah/<?= $nas['id']; ?>" class="badge badge-warning float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#forModal" data-id="<?= $nas['id']; ?>">Edit</a>
						<a href="<?= BASEURL; ?>/nasabah/detail/<?= $nas['id']; ?>" class="badge badge-info float-right ml-1">Detail</a>
					</li>
				<?php endforeach; ?>  
			</ul>
							
		</div>
	</div>

</div>


<!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Nasabah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
		<form action="<?= BASEURL; ?>/nasabah/tambah" method="post">
		<input type="hidden" name="id" id="id">
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" id="nama" placeholder="Masukan Nama Anda" name="nama">
			</div>	
			
			<div class="form-group">
				<label for="no">Nomor</label>
				<input type="number" class="form-control" id="no" placeholder="Masukan Nomor Anda" name="no">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" placeholder="Masukan email Anda" name="email">
			</div>

			<div class="form-group">
				<label for="KPR">Jenis KPR</label>
				<select class="form-control" id="KPR" name="KPR">
				<option value="subsidi">Subsidi</option>
				<option value="komersial">Komersial</option>
				</select>
			</div>

			

			


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Insert</button>
		</form>
      </div>
    </div>
  </div>
</div>
