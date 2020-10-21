
 <?php include("config.php") ?>
<html>
<head>
    <title>JOIN Us</title>
    
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    
    <link rel="stylesheet" type="text/css" href="in.css">
    
    
    
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
           <a href="second.php" class="link" style="color:black;">Cars</a>
          </li>

          <li class="nav-items ml-5 "> 
           <a href="conatct.php" class="link">Contact us</a>
          </li>
          <li class="nav-items ml-5 "> 
           <a href="sat.php"class="link">Booking status</a>
          </li>
          <li class="nav-items ml-5 py-0">
          <input type="text" name="search" aria-label="search" placeholder="SEARCH" class="form-control float-right bg-light border-dark">

          </li>
         <a href="in.php"><button class="btn btn-danger ml-5">JOIN US</button></a>


            </ul>
                </div>

   </div>
    
     
    
    
    </nav>

    <div class="container mt-1  mx-auto" >
    
    <div class="row ml-auto">
       
    <div class="col-sm-5 mx-auto mt-0">
        <div class= "card bg-light border-danger border-2 mt-0 shadow">
        <div class ="card-body">
            <h4 class="text-center text-primary"> SIGN IN </h4><hr>
                      
            
     <form control="in.php" method="post">
     <label><b>NAME:</b></label>
     <input type="text" name="name" class="form-control">
     
     <label><b>email:</b></label>
     <input type="email" name="email" class="form-control">
     <label><b>PASSWORD:</b></label>
     <input type="password" name="pass" class="form-control">
      
           
    
    <button class="btn btn-danger mt-4" name="sent">JOIN US </button>
   
    </form>
    
    <?php
      
    if (isset($_POST['sent'])){
         $name=$_POST['name'];
         $email=$_POST['email'];
         $pass =$_POST['pass'];
         
        $query=mysqli_query($connect,"insert into user(name,email,password) value ('$name','$email','$pass')");
    }
    
    ?>
            </div>
        </div>
        </div>
    
    
    
    <div class="col-sm-6 mx-auto">
        <div class= "card bg-light border-danger border">
        <div class ="card-body">
            <h4 class="text-center text-primary"> LOG IN </h4>
          
<hr>  
  
            
           

             <form control="log.php" method="post" name="myform">
             
                 <label><b>Email </b></label>
 <input type="email" name ="email" class="form-control">
                 <label><b>PASSWORD</b></label>
 <input type="password" name ="pass" class="form-control">

 <button class ="btn btn-danger ml-4 mt-4" name="in" onclick="clicked()">LOG IN</button>

             </form>
            <script>
                  function clicked(){
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
                echo "wrong";
               header('location:in.php');
            }
     
       
    }

    ?>            
            
            
            
            
            
            
            
            </div>
        </div>
        </div>
    
    
    
    
    
    
    
    
     </div>
    
    
    </div>
    
    
    </body>



</html>