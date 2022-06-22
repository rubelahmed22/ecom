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
    		<h1><font face="Centaur">My Shop</font></h1>
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
    		                    <li><a href="index.php" class="active"><font color="white">Home</font></a></li>
    		                    <li><a href="#"><font color="white">About Us</font></a></li>
    		                    <li><a href="#"><font color="white">Contect Us</font></a></li>
    		                    <li><a href="#"><font color="white">Help</font></a></li>
    		                    </ul>
    		                    <div>
    		                    </nav>
    		                    </div>
    		                    </div>
    		                    </div>			
    	       </div>
    	       <div class="container">
    		           <div class="col-sm-2" style="background-color: black;color: white">
    		               <h1 align="center">Brands</h1>
    		                 <center><p><a href="dell.php" style="color: white">Dell</a></p><br>
    		     	            <p><a href="hp.php" style="color: white">Hp</a></p><br>
    		     	             <p><a href="sam.php" style="color: white">Samsung</a></p><br>
    		     	             <p><a href="can.php" style="color: white">Canon</a></p><br></center>

    		     	       <h1 align="center">Categery</h1>
    		     	            <center><p><a href="l.php" style="color: white">Laptop</a></p><br>
    		     	            <p><a href="m.php" style="color: white">Mobile</a></p><br>
    		     	             <p><a href="c.php" style="color: white">Camara</a></p><br>
    		     	             <p><a href="tv.php" style="color: white">Tv</a></p><br></center>

                        </div>
                        <div class="col-sm-10"><br>
                            <?php
                            $d2=$_GET['id'];
                                    $q="select * from product where id like '%$d2%'";  
                                    $run=mysqli_query($link,$q);
                                    $row=mysqli_fetch_array($run);
                                    
                                        $id=$row['id'];
                                         $pname=$row['name'];
                                          $img=$row['img'];
                                          $brand=$row['brand'];
                                          $cat=$row['cat'];
                                           $price=$row['price'];
                               ?>
                        	<div class="col-sm-4"><center><img src='admin/c/<?php echo $img; ?>' width='150px' height='150px'></center><br><br>
                                <h3 align="center">Brand:<?php echo $brand; ?></h3>
                                <h3 align="center">Name:<?php echo $pname; ?></h3>
                                <h3 align="center">Price:<?php echo $price; ?></h3>

                        		 </div>
                                 <form action="" method="post">
                                 <table class="table">
                                     <tr>
                                         <td>Enter Name</td>
                                         <td><input type="text" name="name" placeholder="Enter Name"class="form-control" required="required"></td>
                                     </tr>
                                     <tr>
                                         <td>Enter Address</td>
                                         <td><input type="text" name="add" placeholder="Enter Address"class="form-control"required="required"></td>
                                     </tr>
                                     <tr>
                                         <td>Enter City</td>
                                         <td><input type="text" name="city" placeholder="Enter City"class="form-control"required="required"></td>
                                     </tr>
                                     <tr>
                                         <td>Enter State</td>
                                         <td><input type="text" name="state" placeholder="Enter State"class="form-control"required="required"></td>
                                     </tr>
                                     <tr>
                                         <td>Enter Mobile No</td>
                                         <td><input type="text" name="mno" placeholder="Enter Mobile No"class="form-control"required="required"></td>
                                     </tr>
                                     <tr>
                                         <td>Enter Pin Code</td>
                                         <td><input type="text" name="pin" placeholder="Enter Pin Code"class="form-control"required="required"></td>
                                     </tr>
                                     <tr>
                                         <td colspan="2"><input type="submit" name="sub" value="Buy now" class="btn btn-primary"></td>
                                     </tr>

                                </table>
                            </form>
                            <?php
                            if($_SERVER['REQUEST_METHOD']== 'POST')
                            {
                                 $name=$_POST['name'];
                                 $add=$_POST['add'];
                                 $city=$_POST['city'];
                                 $state=$_POST['state'];
                                 $mno=$_POST['mno'];
                                 $pin=$_POST['pin'];

                                 
                                 //mysqli_query($link, "INSERT INTO sell(pname, brand, cat, price, name, address, city, state, mno, pin) VALUES('$pname','$brand','$cat','$price','$name','$add','$city','$state','$mno','$pin')") or die('insert error');
                                //'$pname','$brand','$cat','$price','$name','$add','$city','$state','$mno','$pin'
                                 //(pname,brand,cat,price,name,add,city,state,mno,pin)
                                 if(mysqli_query($link,"insert into sell(pname,brand,cat,price,name,address,city,state,mno,pin) values('$pname','$brand','$cat','$price','$name','$add','$city','$state','$mno','$pin')"))
                                 {
                                    echo "<script>alert('Data Save')</script>";
                                 }
                                else
                                {
                                    echo "<script>alert('Data Not Save')</script>";
                                }

                            }
                            ?>

                                 </div>
                    </div>
                    <div class="container" style="background-color: silver;color: white">
                         <h1 align="center">My Project Hd</h1>


  </div>
</body>
</html>