<?php if ($this->session->flashdata('itemFlashData') == 'insertSukses'){ ?>
<div class="alert alert-block alert-success fade in">
	<button data-dismiss="alert" class="close" type="button">x</button>
	<h4 class="alert-heading margin-bottom-10"><i class="ti-check"></i> Success!</h4>
</div>
<?php } ?>

<h5 class="over-title margin-bottom-15"><span class="text-bold">Master Language</span></h5> 

<div class="row">
	<div class="col-md-12">
	
		<a href="<?php echo site_url('back/language/input'); ?>">Add Language</a>
		<div class="table-responsive">
		<table class="table table-hover table-striped table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Status</th>
					<th>Created Date</th>
					<th>Created User</th>
					<th>Updated Date</th>
					<th>Updated User</th>
					<th>Sction</th>
				</tr>
			</thead>
			<tbody>
				<?php $no = 0; foreach($listData as $row){ ?>
				<tr>
					<td><?php echo ++$no; ?></td>
					<td><?php echo $row['language_name']; ?></td>
					<td><?php echo $row['status']; ?></td>
					<td><?php echo $row['create_user']; ?></td>
					<td><?php echo $row['update_user']; ?></td>
					<td><?php echo $row['create_date']; ?></td>
					<td><?php echo $row['update_date']; ?></td>
					<td>
						<div class="btn-group">
 							<?php echo anchor('back/language/edit/'.$row['language_id'], '<i class="icon-pencil"></i> Edit','class="btn btn-primary"') ;?>
 							<?php echo anchor('back/language/delete/'.$row['language_id'], '<i class="icon-trash"></i> Hapus', 'data-confirm="Apakah kamu ingin menghapusnya ?" class="btn btn-danger"'); ?>
 						</div>
						<!-- a href="<?php echo site_url('back/language/edit/'.$row['language_id']); ?>" type="button" class="btn btn-xs btn-blue">
							<i class="fa fa-pencil"></i>
						</a -->
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>
	</div>
</div>
