<h5 class="over-title margin-bottom-15"><span class="text-bold">Master Website | <?php echo @$titlePage; ?></span></h5>
<div class="row">
	<div class="col-md-12">
		
		<?php echo anchor('suvi/website/input', '<i class="fa fa-plus"></i> Add New','class="btn btn-primary"') ;?>
		<br><br>
		<table id="table" class="display" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Website Name</th>
					<th>Website title</th>
					<th>Website base_url</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript">
var table;
$(document).ready(function() {
	table = $('#table').DataTable({
		"processing": true, //Feature control the processing indicator.
		"language": {
        "processing": "<img src='<?=base_url('assets/assets_backend/images/loading/default.gif')?>'/>" //add a loading image,simply putting <img src="loader.gif" /> tag.
        },
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
		// Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('back/website/ambildata')?>",
            "type": "POST"
        },
		//Set column definition initialisation properties.
        "columnDefs": [{ 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        }],
	});
	
});
</script>
