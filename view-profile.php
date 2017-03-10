<?php
include('header.php');
if($_GET['id']) {
  $id = $_GET['id'];
  $query = "SELECT * FROM patients WHERE id = {$id};";

  $patient = mysqli_fetch_assoc(mysqli_query($link, $query));


?>
<div style='font-size:20px;font-weight:bold;'><br><?php echo $patient['first_name'].' '.$patient['last_name']; ?></div>
<hr>
<br>
<table style="margin: 0px 0px 0px 0px;border:none;font-size:14px;">
  <tr>
    <td>
      <p>
        <strong>Age :</strong>
        <?php
          echo $patient['age'];
        ?>
      </p>
      <p>
        <strong>Sex :</strong> <?php echo $patient['sex']; ?>
      </p>
      <p>
        <strong>Phone:</strong> <?php echo $patient['phone']; ?>
      </p>
      <p>
        <strong>Address:</strong> <?php echo $patient['address']; ?>
      </p>
    </td>
    <td>
      <p>
        <strong>Height:</strong> <?php echo $patient['height'].' cm'; ?>
      </p>
      <p>
        <strong>Weight:</strong> <?php echo $patient['weight'].' kg'; ?>
      </p>
      <p>
        <strong>BMI:</strong> <?php
        $weight = $patient['weight'];
        $height = $patient['height']/100;
        $bmi = $weight/($height*$height);
        echo number_format((float)$bmi, 2, '.', '');
        ?>
      </p>
      <p>
        <strong>Allergies:</strong> <?php echo $patient['allergies']; ?>
      </p>
    </td>
  </tr>
</table>



<?php
} else {
  ?>
  <h3>No patient ID provided</h3>
  <?php
}
include('footer.php');
 ?>
