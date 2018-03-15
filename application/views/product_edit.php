
<!DOCTYPE html>
<html>
<head>
   <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div align="center">
<br>
<br>
  
  <div class="container" >
    <form action="<?= base_url();?>index.php/update/" method="post" align="center">
      <table class="table table-condensed table-bordered" style="width: 30% !important" align="center">
        <tr>
          
          <td>Product ID</td>
          <td><input type="text" name="id" hidden value="<?php echo $index['prdct_id']?>"></td>
        </tr>
        <tr>
          
          <td>Product Name</td>
          <td><input type="text" name="name" value="<?php echo $index['prdctname']?>"></td>
        </tr>
        <tr>
          <td>Product Code</td>
          <td><input type="text" name="code" value="<?php echo $index['prdctcode']?>"></td>
        </tr>
        <tr>
          <td>Stock</td>
          <td><input type="text" name="stock" value="<?php echo $index['stock']?>"></td>
        </tr>
        <tr>
          <td>Image</td>
          <td><input type="text" name="image" value="<?php echo $index['image']?>"></td>
        </tr>
        <tr>
          <td>Price</td>
          <td><input type="text" name="price" value="<?php echo $index['price']?>"></td>
        </tr>
        
      </table>
      <td colspan="2"><button type="submit" class="btn btn-info">Update Product</button></td>
    </form>
    
  </div>
</div>
</div>







</body>
</html>