<?php
include('header.php');
?>
<form action="" method="post" enctype="multipart/form-data" style="width:auto">
	<div style='font-size:20px;font-weight:bold;'><br>Add Visit</div>
	<div>
		<div>
      <p>
				<label for="diagnosis">Diagnosis:&nbsp;&nbsp;</label><br />
				<textarea name="diagnosis" id="diagnosis" rows=3 cols=70></textarea>
			</p>

			<p>
        <label for="complaints">Chief complaints:&nbsp;&nbsp;</label><br />
        <?php
          for ($i=0;$i < 5; $i++){

          ?>

				<input type="text" name="complaint[]" style="width:200px" />
        <input type="number" name="duration[]" style="width:200px" />
        <select name="duration2[]">
          <option value="days">days</option>
          <option value="months">months</option>
          <option value="years">years</option>
        </select>
        <?php } ?>

			</p>

			<p>
				<label>On examination:&nbsp;&nbsp;</label>
        <br>
        <label for="pulse">Pulse:&nbsp;&nbsp;</label>
				<input type="text" name="pulse" id="pulse"/>
        <label for="bp">BP:&nbsp;&nbsp;</label>
				<input type="text" name="bp" id="bp"/>
        <label for="temp">Temp:&nbsp;&nbsp;</label>
				<input type="text" name="temp" id="temp"/>
  				<textarea name="address" id="address" rows=3 cols=70></textarea>
			</p>
		</div>
		<div style='font-size:15px;'><br>Investigations</div>
		<div>
      <table>
        <th style="color:white;"><label for="investigation" style="color:white;">New Investigations</label></th>
        <th><label style="color:white;">Old investigations</label></th>
        <tr>
          <td>
			<p>
        <input type="text" name="investigation[]" style="width:200px" /><br>
        <input type="text" name="investigation[]" style="width:200px" /><br>
        <input type="text" name="investigation[]" style="width:200px" /><br>
      </td>
      <td></td>
			</p>
    </tr>
    </table>
    <div style='font-size:15px;'><br>Treatment advised</div>
		<div>
      <p>
      <table>
        <th><label for="investigation" style="color:white;">Dietary advice</label></th>
        <th><label style="color:white;">Medicines</label></th>
        <th><label style="color:white;">Other advices</label></th>
        <tr>
        <td>
          <textarea name="dietary" id="dietary" rows=3 cols=17></textarea>
        </td>
        <td>
          <textarea name="medicines" id="medicines" rows=3 cols=17></textarea>
        </td>
        <td>
          <textarea name="other" id="other" rows=3 cols=17></textarea>
        </td>
    </tr>
    </table>
  </p>
			<p>
        <label style="font-size:15">Review after: </label>
				<input type="number" name="reviewnumber" id="reviewnumber"  />
        <select name="reviewdays">
          <option value="days">days</option>
          <option value="months">months</option>
          <option value="years">years</option>
        </select>
			</p>
</div>
</div>
<p>
	<input type="submit" name="submit" value="Create prescription"/>
</p>

</form>
<?php

include('footer.php');
?>
