
<?php include("config.php") ?>

<!DOCTYPE html>
<html>
<head>
	<title>BOOKING STATUS</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css"> 
    <link rel="stylesheet" type="text/css" href="book.css">
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-light bg-success  container-fluid py-3 sticky-top  ">
            <div class="container">

        <button class="navbar-toggler bg-light" data-toggle="collapse" data-target="#das">
            <span class="navbar-toggler-icon bg-light"></span>
        </button>
        <div class="collapse navbar-collapse" id="das">
           <ul class="navbar-nav text-center text-light ml-3"> 

          <li class="nav-items ml-3 ">
          <a href="first.php" class="text-black">Home</a>
          </li>

          

          <li class="nav-items ml-5 "> 
           <a href="second.php" class="link" >Cars</a>
          </li>

          <li class="nav-items ml-5 "> 
           <a href="conatct.php" class="link">Contact us</a>
          </li>
          <li class="nav-items ml-5 "> 
           <a href="sat.php" class="link" style="color:black;">Booking status</a>
          </li>
          <li class="nav-items ml-5 py-0">
          <input type="text" name="search" aria-label="search" placeholder="SEARCH" class="form-control float-right bg-light border-dark">

          </li>
               <button class="btn btn-danger ml-5">   <a href="logout.php">logout</a></button> 
          
  

            </ul>
                </div>

   </div>
    
     
    
    
    </nav>
    <h4 class="text-center text-primary mt-3">BOOKING INFORMATION</h4><hr>
<div class="container border-2 shadow mt-4">
    <?php
               $calling = mysqli_query($connect,"select * from das order by id DESC ");
               while($row = mysqli_fetch_array($calling)):
      ?>
    <div class="row"> 
        <div class="col-sm-6 mx-auto mt-2"> 
            <div class="card bg-light border-2 border-warning shadow mt-4">
                <div class ="card-body">
        <p class="text-center text-danger" style="font-size:20px;"> <b> <?php echo $row['name'];  ?> </b>  </p> <hr>
                     <div class="row ml-5">
               	<div class="card">
               	<span class="badge badge-primary ">	<?php
               		     echo $row['arriving'];
               		     ?> to 
               	</span>
               	</div>
               	 	<div class="card mx-auto">
               	<span class="badge badge-warning ">	<?php
               		     echo $row['destination'];
               		     ?>
               	</span>
               	</div>
               		<div class="card ml-auto mr-4">
               	<span class="badge badge-info ">	<?php
               		     echo $row['date'];
               		     ?>.
               	</span>
               	</div>
               </div>
                    
                    <hr>
                <p class="lead text-success"><b>OTHER INFORMATION:</b></p> 
                
                <b class="text-center text-danger">BOOKING ID:</b> <?php echo $row['id'] ?>. <br>               
                    
               <b class="text-primary">BOOKING TIME:</b> <?php echo $row['time'] ?> . <br>              
                    
                <b class="text-primary">COSTUMER'S EMAIL:</b> <?php echo $row['email'] ?>. <br>           
                 
                <b class="text-primary">COSTUMER'S Phone NO:</b><?php echo $row['phone'] ?>.  <br>       
                    
                    
                    
                    
                    
                    
                    
        </div>
            </div>
        </div>   
    </div>
    
  <hr>  
   
                 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php endwhile;?>
    
    </div>
    


    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</body>
</html>