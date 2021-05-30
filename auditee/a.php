<div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <div class="page-header">
        <h2>Senarai Pelatih</h2>
      </div>
      <table class="table table-striped table-bordered">
    <tr>
        <td>Nama Pelatih</td>
        <td>Username Pelatih</td>
        <td>Emel Pelatih</td>
        <td>Jantina Pelatih</td>
        <td>No. Tel Pelatih</td>
        <td>Alamat Pelatih</td>
        <td></td>
      </tr>
      <?php
      // Read
      $per_page = 5;
      if (isset($_GET["page"]))
        $page = $_GET["page"];
      else
        $page = 1;
      $start_from = ($page-1) * $per_page;
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM tbl_outsiders LIMIT $start_from, $per_page");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?>
      <tr>
        <td><?php echo $readrow['outsider_name']; ?></td>
        <td><?php echo $readrow['outsider_username']; ?></td>
        <td><?php echo $readrow['outsider_email']; ?></td>
        <td><?php echo $readrow['outsider_gender']; ?></td>
        <td><?php echo $readrow['outsider_phone']; ?></td>
        <td><?php echo $readrow['outsider_address']; ?></td>
        <td>
          <a href="adminupdatecoach_form.php?edit=<?php echo $readrow['outsider_username']; ?>" class="btn btn-success btn-xs" role="button">Kemaskini</a>
          <a href="adminupdatecoach.php?delete=<?php echo $readrow['outsider_username']; ?>" onclick="return confirm('Anda pasti untuk padam?');" class="btn btn-danger btn-xs" role="button">Padam</a>
        </td>
      </tr>
      <?php
      }
      $conn = null;
      ?>
    </table>
  </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <nav>
          <ul class="pagination">
          <?php
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM tbl_outsiders");
            $stmt->execute();
            $result = $stmt->fetchAll();
            $total_records = count($result);
          }
          catch(PDOException $e){
                echo "Error: " . $e->getMessage();
          }
          $total_pages = ceil($total_records / $per_page);
          ?>
          <?php if ($page==1) { ?>
            <li class="disabled"><span aria-hidden="true">«</span></li>
          <?php } else { ?>
            <li><a href="listCoach.php?page=<?php echo $page-1 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
          <?php
          }
          for ($i=1; $i<=$total_pages; $i++)
            if ($i == $page)
              echo "<li class=\"active\"><a href=\"listCoach.php?page=$i\">$i</a></li>";
            else
              echo "<li><a href=\"listCoach.php?page=$i\">$i</a></li>";
          ?>
          <?php if ($page==$total_pages) { ?>
            <li class="disabled"><span aria-hidden="true">»</span></li>
          <?php } else { ?>
            <li><a href="listCoach.php?page=<?php echo $page+1 ?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>
    </div>