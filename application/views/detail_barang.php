<div class="container-fluid">
	
	<div class="card">
	  <h5 class="card-header">Detail Produk</h5>
	  <div class="card-body">

	  	<?php foreach ($barang as $brg) : ?>
	    <div class="row">
	  		<div class="col-md-4">
	  			<img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top">
	  		</div>
	  		<div class="col-md-8">
	  			<table class="table">
	  				<tr>
	  					<th>Nama Produk</th>
	  					<th><strong><?php echo $brg->nama_brg ?></strong></th>
	  				</tr>

	  				<tr>
	  					<th>Keterangan</th>
	  					<th><strong><?php echo $brg->keterangan ?></strong></th>
	  				</tr>

	  				<tr>
	  					<th>Kategori</th>
	  					<th><strong><?php echo $brg->kategori ?></strong></th>
	  				</tr>

	  				<tr>
	  					<th>Stok</th>
	  					<th><strong><?php echo $brg->stok ?></strong></th>
	  				</tr>

	  				<tr>
	  					<th>Harga</th>
	  					<th><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format( $brg->harga, 0,',','.') ?></div></strong></th>
	  				</tr>
	  			</table>
	  			<?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?>

	  			<?php echo anchor('dashboard/index/','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
	  		</div>
	  	</div>
	  <?php endforeach; ?>
	 </div>
	</div>
</div>