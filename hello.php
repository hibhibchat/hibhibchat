<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hello.css">
    <title>Chat with me:</title>
</head>
<body>
<div id="container">
<div class="popup">
       
        <h2>Hello <?php echo $_SESSION["user_name"]; 
    ?> 😉</h2>
        <p>
          Please Do Not Speak Offensively To Others. </p>
         <a href="me.php"<button id="close">OK</button></a>
    </div>
    <script type="text/javascript">
window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".popup").style.display = "block";
        },
        2000 
    )
});


document.querySelector("#close").addEventListener("click", function(){
    document.querySelector(".popup").style.display = "none";
});
    </script>


<style>
*{
    margin: 0;
    padding: 0;
    border: 0;

}
body{

    background: rgb(134, 134, 134);

    
}

.popup{
    background-color: whitesmoke;
    width: 420px;
    padding: 30px 40px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
    border-radius: 8px;
    font-family: "Poppins",sans-serif;
    display: block; 
    text-align: center;
    border: 8px solid rgba(255,255,255, .5);
border-radius: 5px;
padding: 20px;
backdrop-filter:blur(20px);
background-size:cover;

box-shadow: 0 0 80px black;
}
.popup button{
    display: block;
    margin:  0 0 20px auto;
    background-color: transparent;
    font-size: 30px;
    color: #ffffff;
    background: #03549a;
    border-radius: 100%;
    width: 40px;
    height: 40px;
    border: none;
    outline: none;
    cursor: pointer;
}
.popup h2{
  margin-top: -20px;
  font-size: 2em;
    font-weight: bold;
}
.popup p{
    font-size: 18px;
    text-align: justify;
    margin: 20px 0;
    line-height: 25px;
}
a{
    display: block;
    width: 100px;
    position: relative;
    margin: 10px auto;
    text-align: center;
    background-color: #172e3a;
    border-radius: 20px;
    color: #ffffff;
    text-decoration: none;
    padding: 8px 0;
    cursor: pointer;
}
a:active{
    transform: scale(0.96);  
}
#container{
width: 40%;
height: 90%;
margin: 0px auto;
padding: 20px;
border-radius: 7px;
}

@media screen and (max-width:770px)
{
#container{
    width: 85%;
}

.popus{
width: 220px;
}
}
    </style>
</body>
</html>