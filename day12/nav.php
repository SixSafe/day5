<?php 
if ($_SESSION['username']==''){
  header("location:index.php");
}
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="data.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="p1.php">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="p2.php">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Loginout.php">Loginout</a>
      </li>    
    </ul>
  </div>  
  <div>ผู้ใช้งาน :<?php echo $_SESSION['username'].'/'.$_SESSION['name']?></div>
</nav>
