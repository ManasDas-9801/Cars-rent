<?php include("config.php") ?>

<html>
<head>
    
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    
<link rel="stylesheet" type="text/css" href="sat.css">
    

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
    <div class="container jumbotron">
    <div class="row">
            <div class="col-sm-6 mx-auto">
        <div class= "card bg-light border-danger border">
        <div class ="card-body">
            <h4 class="text-center text-primary"> LOG IN </h4>
          
<hr>  
  
            
           

             <form control="sat.php" method="post" name ="myform">
             
                 <label><b>Email </b></label>
 <input type="email" name ="email" class="form-control">
                 <label><b>PASSWORD</b></label>
 <input type="password" name ="pass" class="form-control">

 <button class ="btn btn-danger ml-4 mt-4" name="in" onclick="clickeed()">LOG IN</button>

             </form>
                 <script>
                  function clickeed(){
                      var email = document.myform.email.value;
                      var pass = document.myform.pass.value;
                      if (email == null || email == ''){
                          alert ("enter email");
                      }
                      else if(pass == null || pass == ''){
                          alert("enter password");
                      }
                      
                      
            
                  }
              
            
            
            
            
            
            </script>

<?php
  
    if(isset($_POST['in'])){
        $email = $_POST['email'];
       $pass  = $_POST['pass'];
        
      $sql = "SELECT * FROM user where email ='$email' and password ='$pass'";
        
        $query = mysqli_query($connect,$sql);
        
        $row = mysqli_num_rows($query);
        
            if($row == 1){
                echo "login sucessful";
                header('location:booking.php');
            }
            else{
                //echo "wrong";
               //header('location:second.php');
            }
     
       
    }


    ?>
        
        
        
        
        
        
        
        </div>
    
    
    
    
    
    
    </div>
    
    
    
    
    
    
    
    
    </body>



















</html>