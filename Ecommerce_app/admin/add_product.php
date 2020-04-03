<?php
include_once('admin_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Product</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link href="../fonts/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
<script type="text/javascript" src="js/bootsrtap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	#form{
		margin-top: 10px;

		
	}
</style>

</head>
<body>
		<div id="welcome" style="width: 800px; margin: auto; padding: 5px; margin-top: 10px;">
			<h4 align="center">
				Add New Product
			</h4>
		</div>

	<div class="container text-center" align="center" id="form">
		
	<form class="form-horizontal" action="/add_product_back.php" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
      <label class="control-label col-md-3 text-right" for="email">Name:</label>
      <div class="col-md-7">
        <input type="email" class="form-control" id="email" placeholder="Product Name" name="name">
      </div>
      <div class="col-md-2"></div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-md-3 text-right" for="pwd">Price:</label>
      <div class="col-md-7">          
        <input type="text" class="form-control" id="pwd" placeholder="Rs/120" name="price">
      </div>
       <div class="col-md-2"></div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-md-3 text-right" for="pwd">Product Code:</label>
      <div class="col-sm-7">          
        <input type="text" class="form-control" id="pwd" placeholder="E-1001" name="code">
      </div>
       <div class="col-md-2"></div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-3 text-right" for="pwd">Stock:</label>
      <div class="col-md-7">          
        <input type="text" class="form-control" id="pwd" placeholder="Stock" name="stock">
      </div>
       <div class="col-md-2"></div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-3 text-right" for="pwd">Category:</label>
      <div class="col-md-7">          
       <select class="form-control" name="cat">
       	<option></option>
       	<option>Electronics</option>
       	<option>Home Appliances</option>
       	<option>Groceries</option>
       	<option>Mens Garments</option>
       	<option>Womens Garments</option>
       </select>
      </div>
       <div class="col-md-2"></div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-3 text-right" for="pwd">Description:</label>
      <div class="col-md-7">          
        <!-- <input type="text" class="form-control" id="pwd" placeholder="Description" name="pwd"> -->
        <textarea class="form-control" id="pwd" placeholder="Description" name="desc" rows="5"></textarea>
      </div>
       <div class="col-md-2"></div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-3 text-right" for="pwd">Image:</label>
      <div class="col-md-7">          
        <input type="file" name="image">
      </div>
       <div class="col-md-2"></div>
    </div>

    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10 text-center">
        <input type="submit" class="btn btn-primary" value="Add Product">
      </div>
    </div>
  
  </form>
		
	
	</div>

</body>
</html>


<?php
include_once('footer.php');

?>