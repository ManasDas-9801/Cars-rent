<?php include("config.php") ?>

<html>
    

<head>
    <title>TATA NEXON</title>
<link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="tata.css">
    

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
           <a href="#" class="link">Contact us</a>
          </li>
          <li class="nav-items ml-5 "> 
           <a href="sat.php" class="link">Booking status</a>
          </li>
          <li class="nav-items ml-5 py-0">
          <input type="text" name="search" aria-label="search" placeholder="SEARCH" class="form-control float-right bg-light border-dark">

          </li>
          <div class="btn btn-primary ml-5"data-target ="#mymodal" data-toggle ="modal">JOIN US</div>
  
   <div class="modal" id="mymodal">
    
        <div class="modal-dialog">
          <div class="modal-content">

            <div class="header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>  
                  <h3 class="text-primary text-center  mt-4">LOG  IN</h3>
              </div>

                <div class="modal-body">
              
                      <form action="index.php" method="post">


     
                      <div class="form-group mt-3">
                        <label for="class"><b>Email</b></label>
                        <input type="email" name="emaill" class="form-control">
                      </div>

                      <div class="form-group mt-3">
                        <label for="class"><b>Password </b></label>
                        <input type="password" name="passwordd" class="form-control">
                      </div>                     
                                         
                                          

                      </form>

                 
                 </div>

                <div class="modal-footer">
                  <input type="submit" name="sendd" class="btn btn-danger">
                </div>

          </div>
        </div>


   </div>

            </ul>
                </div>

   </div>
    
     
    
    
    </nav><hr>
     <h3 class="text-warning text-center">CARS DETAIL</h3>
     <div class="container-fluid">
      <div class="row">
         <div class="col-lg-4">
         <div class="card shadow bg-light border-2">
             <div class="card-body">
        <img src="tata.webp" class="w-100">
        </div>
             </div>      
          </div>
          
           <div class="col-lg-4">
         <div class="card shadow bg-light border-2">
             <div class="card-body">
        <img src="tata1.webp" class="w-100">
        </div>
             </div>      
          </div>
          
           <div class="col-lg-4">
         <div class="card shadow bg-light border-2">
             <div class="card-body">
        <img src="tata2.webp" class="w-100">
        </div>
             </div>      
          </div>
         </div>
         
         
     </div>
     
     <h4 class="text-sucess text-center mt-4">TATA NEXON</h4>
     <h6 class="text-primary text-center ">2500/- per day</h6>
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     
     <hr>
     
    <div class="container">
     <div class="row mt-4">
         <div class="col-lg-5">
             <h3 class="text-success ml-3 mt-2">BOOK HERE</h3>
         <div class ="card bg-light border-2 shadow">
             <div class="card-body">
                 
                <form control="index.php" method="post">
    <label>NAME:</label>
    <input type="text" name="name" class="form-control">
     <label>Address:</label>
    <input type="text" name="address" class="form-control">
    <label>DATE:</label>
    <input type="date" name="date" class="form-control">
    <label>TIme:</label>
    <input type="time" name="time" class="form-control">
    <label>email:</label>
    <input type="email" name="email" class="form-control">
    <label>Phone:</label>
    <input type="number" name="phone" class="form-control">
           <label>from:</label>
    <input type="text" name="des" class="form-control">
           <label>T0:</label>
    <input type="text" name="arr" class="form-control">
    <button class="btn btn-danger mt-4" name="send">BOOK US</button>
   
    </form>
    
    <?php
      
    if (isset($_POST['send'])){
         $name=$_POST['name'];
        $address=$_POST['address'];
        $date=$_POST['date'];
        $time=$_POST['time'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $des=$_POST['des'];
        $arr=$_POST['arr'];
        $query=mysqli_query($connect,"insert into das(name,address,date,time,email,phone,arriving,destination ) value ('$name','$address','$date','$time','$email','$phone','$des,','$arr')");
    }
    
    ?>
             
      </div>
     </div>
    </div>
        <div class="col-lg-7">
            <h3 class="text-success ml-3 mt-2">CONTACT US</h3>
         <div class="card bg-light border-0 mr-5">
            <div class="card">
             <p>@PURNEA BIHAR</p>
                <p>+918340218574</p>
                <p>heyiammana@gmail.com</p>
    <h3 class="text-success ml-3 mt-2">QURIES:-</h3>
         
                 
    <form control= "taigo.php" method="post">
    <label>NAME</label>
    <input type="text" class="form-control" name="name">
    
    <label>ADDRESS</label>
    <input type="text" class="form-control" name="add">
    
    
    <label>Message:</label>
    <textarea type="text" class="form-control" rows="10" name="mees"> </textarea>
    
    <button class="btn btn-danger ml-4 mt-4" name="mess">SEND</button>
    
 
    </form>
    
    <?php
    

if (isset($_POST['mess'])){
    $name =$_POST['name'];
    $add =$_POST['add'];
    $mees =$_POST['mees'];
    
    $query=mysqli_query($connect,"insert into mes(name,address,message ) value ('$name','$add','$mees')");
   
    
}
?>
                
                
             </div>
            </div>
         </div>
        
        </div>
 </div>

    <hr style="color: white">

<p class="text-center"><b>Terms and Condition<br>Created by Manas Das</b>
    
</body>
    </html
    





