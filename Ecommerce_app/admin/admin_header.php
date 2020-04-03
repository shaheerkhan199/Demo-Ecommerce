<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link href="../fonts/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/font-awesome.css">
<script type="text/javascript" src="../js/bootsrtap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
	/*body{
		 background-image: linear-gradient(white,#003333);
	 	background-repeat: no-repeat;
	}*/
	#r1{
		margin-top: 5px; 
		padding: 10px;
	}
	#r1 a{
		text-decoration: none;
		color: black;
		padding: 7px;
		font-size: 20px;
	}
	#r2{
		margin-top: 20px;
		/*background-color: yellow;*/
	}
	#r2 a{
		text-decoration: none;
		color: black;
		padding: 15px;
		font-size: 20px;
		border: 1px grey solid;
		transition: 0.7s;
	}
	#r2 a:hover{
		background-color: #003333;
		color: white;
		transition: 0.7s;
	}
	#drop{
		border-top: 1px grey solid;
		border-bottom: 2px #003333 solid;
		background-color: transparent;
	}
	#nav_bar{
		margin-top: 10px;	
		background-color: #003333;
		height: 55px;
	}
	#discount p{
		border: 2px orange solid;
		color: orange;

	}
	#discount{
		float: right;
		width: 40px;
		margin-right: 50px;
	}
	#cat1{
		border: 1px grey solid;
		padding: 10px;
		
	}
	#foot{
		background-color: #003333;
		height: 50px;
		color: grey;
		text-align: center;
		line-height: 50px;
		font-size: 20px;
		margin-top: 10px;
	}

</style>
</head>

	
<body>


<div class="fluid-container" >
	
	<div class="container">
		<div class="row" id="r1">
			<div class="col-md-3 text-left"><span class="glyphicon glyphicon-flag"></span> English US</div>
			<div class="col-md-6 text-center"><span class="glyphicon glyphicon-earphone"></span> <font>Call Us: <b>+84 987 654 321</b> | <span class="glyphicon glyphicon-envelope"></span> Email:<b>support@yourdomain.com</b></font></div>
			<div class="col-md-3 text-right">
				<a href=""><i class="fa fa-facebook"></i></a>
				<a href=""><i class="fa fa-youtube"></i></a>
				<a href=""><i class="fa fa-twitter"></i></a>
				<a href=""><i class="fa fa-instagram"></i></a>
				<a href=""><i class="fa fa-googlhttp://localhost/ecommerce_app/images/slider.pnge"></i></a>
			</div>
		</div>

		<div class="row" id="r2">
			<div class="col-md-3">
				<input type="text" class="form-control" placeholder="Search" aria-label="Search">
			</div>
			<div class="col-md-6" align="center">
				<img src="../images/logo.png" height="50" width="350">
			</div>
			<div class="col-md-3 text-center">
				<a href=""><span class="glyphicon glyphicon-shopping-cart"></span></a>
				<a href=""><span class="glyphicon glyphicon-user"></span></a>
				<a href=""><span class="fa fa-dollar" style="width: 22px;"></span> 0.0</a>
			</div>
		</div>
	</div>

<!-- NAVIGATION BAR -->
<div class="row" id="nav_bar">
<nav class="navbar navbar-inverse" id="drop">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Add Product</a></li>
            <li><a href="#">Update Product</a></li>
            <li><a href="#">Edit Product</a></li>
          </ul>
        </li>
        <li>
        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Users <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Block User</a></li>
            <li><a href="#">All Users</a></li>
            
          </ul>
        </li>
        <li>
        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Orders <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Place Order</a></li>
            <li><a href="#">Cancel Order</a></li>
            <li><a href="#">See Orders</a></li>
          </ul>
        </li>

        <li>
        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Orders <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Place Order</a></li>
            <li><a href="#">Cancel Order</a></li>
            <li><a href="#">See Orders</a></li>
          </ul>
        </li>
      </ul>
     <!--  <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul> -->
      <ul class="nav navbar-nav navbar-right">
       <li>
        	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>&nbsp Administrator <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Logout</a></li>
          </ul>
        </li>
       </ul>
    </div>
  </div>
</nav>
</div>
<!-- END NAVIGATION BAR -->
</div>
</body>