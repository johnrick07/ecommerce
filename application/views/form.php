<form role="form" action="<?php echo base_url(); ?>index.php/home/save" style=" width: 570px;" method="POST" >
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
    <input type="number" name="stock" class="form-control" placeholder="Stock" required>
  </div>
  <div class="form-group" action="upload.php" method="post" enctype="multipart/form-data">
    <label>Product Image</label><br>
       <input type="file" name="fileToUpload" id="fileToUpload">
  </div>
  <div class="form-group">
    <label>Price</label>
    <input type="number" name="price" class="form-control" placeholder="Price" required>
  </div>
  <button type="submit" class="btn btn-success">Save</button><br><br>
</form>