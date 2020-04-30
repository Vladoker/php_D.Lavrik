<?php

    $arr = array("red", "green", "orange", "blue");

?>
<style>
    .container {
      display:flex;
      justify-content:center;
      margin-top:180px;
    }
    .cub {
        width:50px;
        height:50px; 
        margin-left: 20px;
        border-radius: 50%;
    }
</style>


<div class="container">
    <?php foreach($arr as $color) {?>
    <div class="cub" style="background-color:<?php echo $color?>">
    </div>
    <?php }?>
</div>