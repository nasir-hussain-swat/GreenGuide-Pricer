<?php
$btn='';
$goto='';
// session_start();
if(!isset($_SESSION['id'])){
  $btn='LOGIN';
  

    
    
}
else{
  $btn='LOGOUT';
  

}


?>
    <link rel="stylesheet" href="style.css">

    <nav>
      
        <ul>
          <div class="logo">
            <img src="media/logo.svg" alt="logo">
          </div>
          
          <li>
            <a href="index.php">Home</a>
            <span></span><span></span><span></span><span></span>
          </li>
          <li>
            <a href="">About</a>
            <span></span><span></span><span></span><span></span>
          </li>
          <li>
            <a href="http://localhost/phpmyadmin/index.php?route=/sql&db=greenguide&table=batkhela&pos=0">Contact</a>
            <span></span><span></span><span></span><span></span>
          </li>
          <li><?PHP  
          
          ?>
            <a href='login.php'><?PHP echo $btn;?></a>
            <span></span><span></span><span></span><span></span>
          </li>
        </ul>
      </nav> 
