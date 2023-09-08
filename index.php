<?php

include ('db.php');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($con, $_POST['name']);
   $pass = mysqli_real_escape_string($con, md5($_POST['password']));

   $select = mysqli_query($con, "SELECT * FROM `users` WHERE name = '$name' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['user_name'] = $row['name'];
   
      header('location:hello.php');
   }else{
      echo "<script> alert ('the username or passowrd false ....')</script>";
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="icona.jpg">
   <title>login</title>
   <?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
   <style>
.message{
  margin-bottom: 550px;
   padding:15px 10px;
   background-color: #162938;
   text-align: center;
   z-index: 1000;
   box-shadow: 5px 5px 10px rgba(0,0,0,.1);
   border-radius:5px;
   color: whitesmoke;
   font-size: 15px;
   cursor: pointer;
}
      body{
    display: flex;
    justify-content:center;
    align-items:center;
    min-height: 100vh;
    background-color: whitesmoke;
    background-size:cover;
    background-position:center;
    background-image: url("bod.jpg");
}

.form-container{
    
   margin-top: 35px;
    width:500px;
    height:400px;
    background:transparent;
    border: 2px solid rgba(255,255,255, .5);
    border-radius: 5px;
    text-align: center;
    padding: 20px;
    backdrop-filter:blur(20px);
    box-shadow: 0 0 30px rgba(0,0,0,.5);
    display:flex;
}
   .form-container form{
   width: 500px;
   border-radius: 5px;
   border:var(2px solid var(black));
   padding:20px;
   text-align: center;
   background-color: var(white);
}

.form-container h3{
    font-size: 2em;
    color:white;
    text-align:center;

}
.input-box{
    position:relative;
    width:100%;
    height:50px;
    border-bottom:2px solid #162938;
    margin:30px 0;
    
}
.input-box .icon{
    position:absolute;
    right:8px;
    font-size:1.2em;
    color:white;
    line-height:57px;
    cursor: pointer;

}
.input-box label{
    position:absolute;
    top:50%;
    left:5px;
    transform:translateY(-50%);
    font-size: 1em;
    color:white;
    font-weight:500;
    pointer-events:none;
    transition: .5s;

}
.input-box input:focus~label,
.input-box input:valid~label{
    top:-5px;
}

.input-box input{
    width:100%;
    height:100%;
    background:transparent;
    border:none;
    outline:none;
    font-size: 1em;
    color:white;
    font-weight:600;
    padding:0 35px 0 5px;
}
.btn{
    width:100%;
    height:45px;
    background:#162938;
    border:none;
    outline:none;
    border-radius:6px;
    cursor:pointer;
    font-size:1em;
    color:white;
    font-weight:500;
}
.register{
    font-size: .9em;
    color:white;
    text-align:center;
    font-weight:500;
    margin:25px 0 10px;
}
.register p{
   margin-top: 20px;
   font-size: 15px;
   color:var(#162938);
}
.register p a{
    color:white;
    text-decoration:none;
    font-weight:600;
font-size: 17px;

}
.register p a:hover{
    text-decoration:underline;
}
@media screen and (max-width:770px)
{
   .form-container form{
      width: 250px;
   }
}
     
   </style>
</head>
<body>

<div class="form-container">

   <form action="" method="post">
      <h3>login</h3>
      <div class="input-box">
      <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
      <input type="text" name="name" required>
      <label>Username</label> 
</div>
<div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline">
                    </ion-icon></span>
      <input type="password" name="password" required>
      <label>Password</label>
                </div>
      <input type="submit" name="submit" class="btn" value="login">
      <div class="register">

      <p>You have already account?<a href="register.php">  new account</a></p>
</div>
   </form>

</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>