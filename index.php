<?php
include 'header.php';

 ?>

<form class="" action="search.php" method="post">
  <input type="text" name="search" placeholder="Search Here">
  <button type="submit" name="btn-search"><i class="fas fa-search"></i></button>
</form>



<div class="article-container">
  <?php
    $sql = "SELECT * FROM article";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);
    if($queryResults > 0){
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='article-box'>
          <h3>".$row['a_title']."</h3>
          <p>".$row['a_text']."</p>
          <p>".$row['a_date']."</p>
          <p>".$row['a_author']."</p>
        </div>";
      }
    }
   ?>
</div>
  </body>
</html>
