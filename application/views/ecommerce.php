 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add New Item</button><br><br>


 <table class="table table-hover">

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
            <td><a href="<?php echo base_url(); ?>index.php/home/delete" class="btn btn-info btn-sm ">Update</a><a href="<?php echo base_url(); ?>index.php/home/delete" class="btn btn-danger btn-">Delete</a></td>
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
  <div class="form-group"><?php echo form_open_multipart('upload/do_upload');?>
    <label>Product Image</label><br>
       <input type="submit" value="upload" />
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
  <button type="submit" class="btn btn-success">Save</button><br><br>
</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  