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
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($con, $_GET['user_id']);
          $sql = mysqli_query($con, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location:userss.php");
          }
        ?>
        <a href="userss.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <!-- <img src="php/Update-Image/uploads/avatars/<php echo $row['avatar']; ?>" alt=""> -->
        <img src="php/Update-Image/uploads/avatars/3905d0bb.png" alt="">
        <div class="details">
          <span><?php echo $row['Name']. " " . $row['FullName'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/chat.js"></script>

</body>
</html>
