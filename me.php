<?php
include('db.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Chat with me:</title>
</head>
<body onload="aj();">

<div id="container">
    <div id="chatbox">
        <div id="chat">

        </div>
        <br>
    </div>
    <form action="index.php" method="post">
        
<input  type="text" name="name" value="<?php
 echo $_SESSION["user_name"];  ?>"  >

<textarea name="msg" placeholder="Enter Your Message:"></textarea>
<button type="submit"  name="submit" value="Send" >Send<i class="fa fa-send-o"></i></button>
    </form>
    <?php
    if(isset($_POST['submit'])){
    $n = $_POST['name'];
    $m = $_POST['msg'];
    $insert = "insert into chat (name , msg ) values ('$n' , '$m')";
    $run_insert = mysqli_query($con , $insert);

    
    if($run_insert)
    {
      echo `<embed loop="false" hidden="true" src="send.mp3" autoplay="true">`  ;
    }
    header('location:index.php');
    }
   
    ?>
</div>
</body>
<script>
function aj ()
{
    var req = new XMLHttpRequest();
    req.onreadystatechange = function()
    {
        if(req.readyState == 4  && req.status == 200)
        {
            document.getElementById('chat').innerHTML = req.responseText;
        }
    }
    req.open('GET' , 'chat.php' , true);
    req.send();
}
setInterval(function(){aj()},1000);
</script>
<style>
*{
    margin: 0;
    padding: 0;
    border: 0;

}
body{
background: rgb(158, 152, 152);
    
    
}


#container{
width: 40%;
background-image: url("pac1.jpg");
border: 10px solid black;
padding: 25px;
backdrop-filter:blur(20px);
background-size:cover;
box-shadow: 0 0 110px rgb(90, 6, 6);
margin: 0px auto;
border-radius: 7px;
}

 
#chatbox{
    width: 90%;
    height: 400px;
    color: white;
    margin-bottom: 9em;
}
#chatdata{
    width: 100%;
    font-weight: bold;
    border: 1px solid white;
    margin-bottom: 2px;
padding: 1em;

border-radius: 1em;
}

form {
    position: relative;
    top:1.3em;
    right: 10px;
    
}

input[type="text"]{
    
    width:100%;
    font-size: 20px;
    font-weight:bold;
    height: 40px;
    border: 2px solid gray;
    color: beige;
    border-radius: 10px;
    margin-bottom: 8px;
    outline: none;
    background: transparent;
    padding: 0  8px;
display:none ;
}
 

textarea{

    width: 100% ;
    font-size: 20px;
    font-weight: bold;
    height: 80px;
    border: 2px solid gray;
    color: beige;
    border-radius: 10px;
    outline: none;
    background: black;
    padding: 0  8px;
    margin-bottom: 2px;
    
}

i{
    
    cursor: pointer;  
}
button{
    
    width: 19% ;
    font-size: 25px;
    font-weight: bold;
    box-shadow: 0 0 10px black ;
    background: rgb(223, 223, 223);
    border: 2px solid gold;
    border-radius: 10px;
    text-align: center;
    padding: 5px;
    cursor: pointer;  


}
input[type="submit"]:active{
    transform: scale(0.99);
}

@media only screen and (max-width:770px)
{
    #container{
    
    width: 85%;
    
    
    }

input[type="text"]
{
    font-size: 14px;
    color: red;
}

textarea{
    font-size: 14px;
}
#chatbox{
    width: 90%;
    height: 400px;
    color: white;
    margin-bottom: 1em;
}
button{
    width: 37%;
    background-color: rgb(83, 73, 16);
    color: white;
}

}

</style>
</html>