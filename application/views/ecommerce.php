 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add New Item</button><br><br>
<form class="navbar-form navbar-right" role="search">
      <div class="form-group">
      <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search"><br>
      </div>
      <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
    </form>
 <table class="table table-hover" >

      <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product Code</th>
        <th>Stock</th>
        <th>Image</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
      <?php
      $number=0;
      foreach ($sql1->result() as $obj1) {
      	$number++;
      	?>
      		<tr>
      			<td><?php echo $number; ?></td>
      			<td><?php echo $obj1->prdctname; ?></td>
      			<td><?php echo $obj1->prdctcode; ?></td>
            <td><?php echo $obj1->stock; ?></td>
            <td>"<img src="<?php echo base_url()?>/image/<?php echo $obj1->image; ?>"></td>
      			<td><?php echo $obj1->price; ?></td>
            <td><a href="<?php echo base_url();?>index.php/home/view/<?php echo $obj1->prdct_id; ?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-edit"></i></a>
                               
                <a href= "<?php echo base_url();?>index.php/home/delete/<?php echo $obj1->prdct_id; ?>" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></a></td>
      		</tr>
      	<?php

      }
     ?>
    </table>


    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
         
  <form role="form" action="<?php echo base_url(); ?>/home/save" style=" width: 570px;" method="POST" >
  <div class="form-group">
    <label>Product Name</label>
    <input type="text" name="prdctname" class="form-control" placeholder="Product Name" required>
  </div>
  <div class="form-group">
    <label>Product Code</label>
    <input type="varchar" name="prdctcode" class="form-control" placeholder="Product Code" required>
  </div>
  <div class="form-group">
    <label>Stock</label>
     <script>
              function isNumberKey(evt){
              var charCode = (evt.which) ? evt.which : evt.keyCode;
              if (charCode > 31 && (charCode < 48 || charCode > 57))
              return false;
              return true;
              }
            </script>
    <input type="number" name="stock" class="form-control" onkeypress='return isNumberKey(event)'placeholder="Stock" required>
  </div>
  <div class="form-group">
    <label>Product Image</label><br>
      <input type="text" name="image" class="form-control" placeholder="Image" required>
  </div>
  <div class="form-group">
    <label>Price</label>
    <script>
              function isNumberKey(evt){
              var charCode = (evt.which) ? evt.which : evt.keyCode;
              if (charCode > 31 && (charCode < 48 || charCode > 57))
              return false;
              return true;
              }
            </script>
    <input type="number" name="price" class="form-control" onkeypress='return isNumberKey(event)'placeholder="Price" required>
  </div>
  <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-save"></i></button>  
  <button type="button" class="btn btn-warning" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button><br><br>
</form>
      
    </div>
  </div>
  
       

         
                  <script>
                  function myFunction() {
                    // Declare variables 
                    var input, filter, table, tr, td, i;
                    input = document.getElementById("myInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("myTable");
                    tr = table.getElementsByTagName("tr");

                    // Loop through all table rows, and hide those who don't match the search query
                    for (i = 0; i < tr.length; i++) {
                      td = tr[i].getElementsByTagName("td")[0];
                      if (td) {
                        if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                          tr[i].style.display = "";
                        } else {
                          tr[i].style.display = "none";
                        }
                      } 
                    }
                  }
                  </script>
