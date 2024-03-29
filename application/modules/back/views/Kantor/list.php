<?php if ($this->session->flashdata('itemFlashData') == 'insertSukses'){ ?>
<div class="alert alert-block alert-success fade in">
	<button data-dismiss="alert" class="close" type="button">x</button>
	<h4 class="alert-heading margin-bottom-10"><i class="ti-check"></i> Success!</h4>
</div>
<?php } ?>

<h5 class="over-title margin-bottom-15"><span class="text-bold">Office</span></h5> 

<div class="row">
	<div class="col-md-12">
		
		<?php echo anchor('back/kantor/input', '<i class="fa fa-plus"></i> Add Office','class="btn btn-primary"') ;?>
		<br><br>
		<div class="table-responsive">
		<table id="table" class="display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Kota</th>
					<th>Group</th>
					<th>Kantor</th>
					<th>tlp</th>
					<!-- th>Alamat</th -->
					<th>Lat;long</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 0; foreach($listData as $row){ ?>
				<tr>
					<td><?php echo ++$no; ?></td>
					<td><?php echo @$row['kota']; ?></td>
					<td><?php echo @$row['nama_grup']; ?></td>
					<td><?php echo @$row['nama_kantor']; ?></td>
					<td><?php echo @$row['tlp']; ?></td>
					<!-- td><?php echo @$row['alamat']; ?></td -->
					<td><?php echo @$row['lat'].'<br>'.@$row['long']; ?></td>
					<td><?php 
						echo $row['status'] == 1 ? "<a class='btn btn-primary btn-xs disabled'> Aktif </a>" : "<a class='btn btn-default btn-xs disabled'> Tidak Aktif </a>"; 
					?></td>
					<td>
						<div class="btn-group">
 							<?php echo anchor('back/kantor/edit/'.$row['id_kantor'], '<i class="fa fa-pencil"></i> Edit','class="btn btn-primary btn-xs"') ;?>
 							<?php echo anchor('back/kantor/delete/'.$row['id_kantor'], '<i class="fa fa-trash"></i> Hapus', 'data-confirm="Apakah kamu ingin menghapusnya ?" class="btn btn-danger btn-xs"'); ?>
 						</div>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
	$('#table').DataTable();
});
</script>
