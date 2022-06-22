<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
  <meta name="viewport" content="width=device-width" />
  <title>Home</title>
  <meta http-equiv="content-Type" content="text/html; charset=iso-8859" />
  <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
    <div class="container-fluid">
      <div class="container-fluid" style="background-color: black;color: white;">
      <div class="container">
      <p class="pull-right">E-mail: xxxxxx12@example.com</p>
      </div>
      </div>
      <div class="container">
        <h1><font face="Centaur">Mr. Rubel Moder Shop</font></h1>
      </div>
      <div class="container">
                                   <div class="container" style="background: blue; color: white;">
                            <div class="row">

                            <div class="col-sm-12 mymanu">
                            <nav class="navbar">
                            <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mystyle">
                            <span> class="icon-bar">--</span>
                            <span> class="icon-bar">--</span>
                            <span> class="icon-bar">--</span>
                            </button>
                            </div>
                            <div class="collapse navbar-collapse" id="mystyle">
                                 <ul class="nav navbar-nav">
                            <li><a href="ahome.php" class="active"><font color="white">Home</font></a></li>
                            <li><a href="pro.php"><font color="white">Product</font></a></li>
                            <li><a href="sell.php"><font color="white">Sell</font></a></li>
                            <li><a href="index.php"><font color="white">Logout</font></a></li>
                            </ul>
                            <div>
                            </nav>
                            </div>
                            </div>
                            </div>      
      </div>
      <div class="container">
          <h1 align="center">Product Insert</h1><br><br>
          <br><br>

<?php
if(isset($_REQUEST['edit_id'])){
  $recev_id=$_REQUEST['edit_id'];
  

  $select_info="SELECT * FROM product where id=$recev_id";
  $run=mysqli_query($link,$select_info);
  while($row=mysqli_fetch_assoc($run)){
    
 ?>


          <form action="updated.php" method="post" enctype="multipart/form-data">
           <table class="table">
                  <tr>
                  <td>Name</td>
                  <td><input type="text" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter Product Name" class="form-control" required="required"></td>
                  </tr>
                  <tr>
                  <td>Cat</td>
                  <td>
                  <select name="cat">
                      <option value="laptop"<?php if($row['cat']=="laptop"){echo "selected";} ?>>laptop</option>
                      <option value="tv"<?php if($row['cat']=="tv"){echo "selected";} ?>>tv</option>
                      <option value="mobile"<?php if($row['cat']=="mobile"){echo "selected";} ?>>mobile</option>
                      <option value="camara"<?php if($row['cat']=="camara"){echo "selected";} ?>>camara</option>
                  </select>
                  </td>
                  </tr>

                  <tr>
                  <td>Brand</td>
                  <td>
                  <select name="brand">
                      <option value="dell"<?php if($row['brand']=="dell"){echo "selected";} ?>>dell</option>
                      <option value="hp"<?php if($row['brand']=="hp"){echo "selected";} ?>>hp</option>
                      <option value="sam"<?php if($row['brand']=="sam"){echo "selected";} ?>>sam</option>
                      <option value="can"<?php if($row['brand']=="can"){echo "selected";} ?>>can</option>
                  </select> 
                  </td>
                  </tr>
                  <tr>
                  <td>img</td>
                  <td><input type="file" name="img" ></td>
                  </tr>
                  <tr>
                  <td>Price</td>
                  <td><input type="text" name="price" value="<?php echo $row['price']; ?>" placeholder="Enter Price" class="form-control" required="required"></td>
                  </tr>

                  <tr>
                  <td><input type="hidden" name="editing_id" value="<?php echo $recev_id;?>"></td>
                   
                  </tr>
                  <tr>
                  <td colspan="2"><input type="submit" name="sub" value="Update"></td>
                   
                  </tr>
           </table>
         </form>
          



 
 <?php   

  }
}
?>





          
     </div>
      <div class="container" style="background-color: silver;color: white">  
              <h1 align="center">My Project Hd</h1>
      </div>
    </div>
</body>
</html>
