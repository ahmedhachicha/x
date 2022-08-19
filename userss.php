<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location:login.php");
  }
?>
<?php include_once "headerr.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($con, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <a href="index.php" style="font-size: 20px;"><i class="fas fa-arrow-left"></i></a>
          <?php
                                                                            if(!empty($sessionimg)){ ?> 
                                                                              <img src="php/Update-Image/uploads/avatars/<?php echo $row['avatar']; ?>" alt="avatar"> 
                                                                            <?php } 
                                                                            else{ ?>
                                                                            <img src="php/Update-Image/uploads/avatars/5453294.png" alt="avatar"> 
                                                                            <?php } ?>

          <!-- <img src="php/Update-Image/uploads/avatars/<php echo $row['avatar']; ?>" alt="">                                                                -->
          <div class="details">
            <span><?php echo $row['FullName'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logoutt.php" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
          <input type="text" placeholder="Enter FullName Or Last Name to search..."> 
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>
  <script src="javascript/users.js"></script>
</body>
</html>
