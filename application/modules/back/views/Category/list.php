<a href="<?php echo site_url('back/category/input'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Add Category</a>
<br><br>

<?php echo $this->session->flashdata('pesan'); ?>

<script type="text/javascript">
//     swal({
//   title: "Are you sure?",
//   text: "You will not be able to recover this imaginary file!",
//   type: "warning",
//   showCancelButton: true,
//   confirmButtonColor: "#DD6B55",
//   confirmButtonText: "Yes, delete it!",
//   closeOnConfirm: false
// },
// function(){
//   // swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
//   alert(' oke ');
// });

</script>
<div class="table-responsive">
<table id="table" class="display" cellspacing="0" width="100%">
    <thead>
        <tr> 
        <th>ID</th>
            <th>Nama Kategori</th>
            <th>Status</th>
            <th>Turunan</th> 
            <th>Action </th>
        </tr>
    </thead>
    <tbody>
    </tbody>

    <tfoot>
        <tr> 
        <th>ID</th>
            <th>Nama Kategori</th>
            <th>Status</th>
            <th>Turunan</th> 
            <th>Action </th>
        </tr>
    </tfoot>
</table>
</div>




<script type="text/javascript">

    var table;

    $(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
        "language": {
        "processing": "<img src='<?=base_url('assets/assets_backend/images/loading/default.gif')?>'/>" //add a loading image,simply putting <img src="loader.gif" /> tag.
        },
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('back/category/ambildata')?>",
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