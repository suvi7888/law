  <a href="<?php echo site_url('back/menu_admin/add/'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Add Menu Admin</a>
<br><br>


<!-- Pesan --> 
<?php echo $this->session->flashdata('pesan'); ?>
<!-- End Pesan -->


<!-- Start Table -->
<div class="table-responsive">
<table id="table" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>  
            <th>ID Menu</th>
            <th>Nama Menu</th> 

            <th>Action </th>
        </tr>
    </thead>
    <tbody>
    </tbody> 
</table>
</div>


<!-- Start JS -->
<script type="text/javascript">

    var table;

    $(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('back/menu_admin/ambildata')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],

    });

});
</script>

</body>
</html>