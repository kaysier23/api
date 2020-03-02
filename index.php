<?php
	  $page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<html>
	   <head> 
	    	<title> API </title>
	    	<link rel="stylesheet" type="text/css" href="css/styles_index.css">
   	</head>
	   <body>
	   	<div class="header">
	  		<a href="index.php"><h3> API INVENTORY </h3></a>
	  	</div>
  
    <div class="sidenav">
      <a href="index.php?navigation=product">Products</a>
      <a href="index.php?navigation=categories">Category</a>
      <a href="index.php?navigation=create">Create</a>
     </div>
<div>  
  <?php 
        switch($navigation){
          case 'product':
            require_once 'product.php';
            break;
          case 'categories':
            require_once 'categories.php';
            break;
          case 'create':
            require_once 'form_create.php';
            break;
          case 'details':
            require_once 'product-details.php';
            break;
        }
  ?>
</div>
	    </body>
</html>
