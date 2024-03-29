<!DOCTYPE html>
<html>
    <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Serverside jQuery Datatable</title>
    <link href="<?php echo base_url('assets/assets_backend/plugins/datatable/dt/css/jquery.dataTables.min.css')?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head> 
<body> 
    <div class="container">
        <h1 style="font-size:20pt">Simple Serverside Datatable Codeigniter</h1>
 
        <h3>Customers Data</h3>
        <br />
        
        <table id="table" class="display" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <!-- <th>No</th>   -->
                    <!-- category_id  category_name  status  create_user  update_user  create_date          update_date  language_id  -->
                    <th>Nama Kategori</th>
                    <th>Status</th>
                    <th>Create User</th>
                    <th>Update User</th>
                    <th>Create Date</th> 
                </tr>
            </thead>
            <tbody>
            </tbody>
 
            <tfoot>
                <tr>
                    <!-- <th>No</th>  -->
                   	<th>Nama Kategori</th>
                    <th>Status</th>
                    <th>Create User</th>
                    <th>Update User</th>
                    <th>Create Date</th> 
                </tr>
            </tfoot>
        </table>
    </div>
  
<script src="<?php echo base_url('assets/assets_backend/plugins/datatable/dt/js/jquery.dataTables.min.js')?>"></script>
 
 
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
            "url": "<?php echo site_url('back/category/ajax_list')?>",
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