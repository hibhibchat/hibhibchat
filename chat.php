<?php
include('db.php');
        $qu="select * from chat ORDER BY id DESC";
        $run = mysqli_query($con , $qu);
        while ($row = mysqli_fetch_array($run)){
$name = $row['name'];
$msg= $row['msg'];
$data = $row['data'];
     
        ?>
        <div id="chatdata">
            <span style="color:#b0d1d3; font-weight:bold; ">
        <?php 
        echo '<i class="fa fa-user" aria-hidden="true"></i>' , ' ' ,  $name ;?></span>
            <span>: </span>
            <span>  <?php echo $msg ;?></span>
            <span style="color:gold; float:right; font-size:12px;font-weight:lighter; opacity:0.9;">  <?php echo $data ;?></span>
        </div>
    <?php
    }
    ?>
      