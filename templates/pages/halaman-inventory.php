<table>
	<tr>
		<th>No.</th>
		<th>ID Inventory</th>
		<th>Nama Inventory</th>
		<th>Status Inventory</th>
		<th>Aksi</th>
	</tr>
 	
	<?php $no = 1; foreach ($tb as $baris): ?>
	<tr>
		<td align="center"><?php echo $no; ?></td>
		<td align="center"><?php echo $baris['id_inventory']; ?></td>
		<td align="center"><?php echo $baris['nama_inventory']; ?></td>
		<td align="center"><?php echo $baris['status']; ?></td>
		<td align="center">
			<div class="button-edit">
	            <a href="" data-toggle="modal" data-target="#suntinginventory<?php echo $baris['id_inventory']; ?>" data-backdrop="static">Sunting</a>
	        </div>
	        <div class="button-delete">
	        	<a href="" data-toggle="modal" data-target="#hapusinventory<?php echo $baris['id_inventory']; ?>" data-backdrop="static">Hapus</a>
	        </div>
		</td>
	</tr>
  	<?php $no++; endforeach; ?>
</table>


<!-- Modal Buat inventory [Awal] -->
<div id="buatinventory" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Konten Modal [Awal] -->
		<div class="modal-content">
			<div class="modal-header">
				Tambah Inventory Baru
				<button type="button" class="close" data-dismiss="modal"><span class="lnr lnr-cross-circle"></span></button>
			</div>

			<div class="modal-body">
				<?php echo form_open('dashboard/buat-inventory'); ?>
				<ul>
					<li>
						<div><i class="lnr lnr-user"></i></div><input type="text" name="id_inventory" placeholder="ID inventory" required />
					</li>
					<li>
						<div><i class="lnr lnr-text-format"></i></div><input type="text" name="nama_inventory" placeholder="Nama inventory" required />
					</li>
					<li>
						<div><i class="lnr lnr-text-format"></i></div><input type="text" name="status" placeholder="Status" required />
					</li>
					<br /><hr />
					<li>
						<input type="submit" name="tombol_tambah" value="Tambah" />
					</li>
				</ul>
				<?php echo form_close(); ?>
			</div>

			<div class="modal-footer">
				<span>Pastikan data telah terisi dengan benar.</span>
			</div>
		</div>
		<!-- Konten Modal [Akhir] -->
	</div>
</div>
<!-- Modal Buat inventory [Akhir] -->


<!-- Modal Perbarui Data inventory [Awal] -->
<?php foreach ($tb as $baris): ?>
<div id="suntinginventory<?php echo $baris['id_inventory']; ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Konten Modal [Awal] -->
		<div class="modal-content">
			<div class="modal-header">
				Sunting Data Inventory
				<button type="button" class="close" data-dismiss="modal"><span class="lnr lnr-cross-circle"></span></button>
			</div>

			<div class="modal-body">
				<?php echo form_open('dashboard/perbarui-inventory'); ?>
				<ul>
					<li>
						<input type="hidden" name="id_inventory" value="<?php echo $baris['id_inventory']; ?>">
					</li>
					<li>
						<div><i class="lnr lnr-user"></i></div><input type="text" placeholder="ID inventory" value="<?php echo $baris['id_inventory']; ?> (tidak dapat diubah)" disabled />
					</li>
					<li>
						<div><i class="lnr lnr-text-format"></i></div><input type="text" name="nama_inventory" placeholder="Nama lengkap" value="<?php echo $baris['nama_inventory']; ?>" required />
					</li>
					<br /><hr />
					<li>
						<input type="submit" name="tombol_simpan" value="Simpan" />
					</li>
				</ul>
				<?php echo form_close(); ?>
			</div>

			<div class="modal-footer" >
				<span>Pastikan data telah terisi dengan benar.</span>
			</div>
		</div>
		<!-- Konten Modal [Akhir] -->
	</div>
</div>
<?php endforeach; ?>
<!-- Modal Perbarui Data inventory [Akhir] -->


<!-- Modal Hapus Data inventory [Awal] -->
<?php foreach ($tb as $baris): ?>
<div id="hapusinventory<?php echo $baris['id_inventory']; ?>" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Konten Modal [Awal] -->
		<div class="modal-content">
			<div class="modal-header">
				Hapus Data Inventory
				<button type="button" class="close" data-dismiss="modal"><span class="lnr lnr-cross-circle"></span></button>
			</div>

			<div class="modal-body">
				<?php echo form_open('dashboard/hapus-inventory'); ?>
				<ul>
					<li>
						<input type="hidden" name="id_inventory" value="<?php echo $baris['id_inventory']; ?>">
					</li>
					<li>
						<p>Apakah Anda yakin ingin menghapus inventory <span><?php echo $baris['nama_inventory']; ?></span> dari sistem?</p>
					</li>
					<br /><hr />
					<li>
						<input type="submit" name="tombol_hapus" value="Hapus" />
					</li>
				</ul>
				<?php echo form_close(); ?>
			</div>

			<div class="modal-footer">
				<span>Pastikan kembali apakah data benar-benar ingin dihapus.</span>
			</div>
		</div>
		<!-- Konten Modal [Akhir] -->
	</div>
</div>
<?php endforeach; ?>
<!-- Modal Hapus Data inventory [Akhir] -->