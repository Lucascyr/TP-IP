<!DOCTYPE html>
<html lang="en">
<head>
    <title>IT Form</title>
</head>

<body>
<h1>TeslahSG Pte Ltd</h1>

<h2>IT Form (Database Insertion)</h2>

<hr>

<!-- Form Begins Here-->
<form action="includes/dbinsert.php" method="POST">

<strong>Ticket ID:</strong>
<input type="text" name="fTicketID" placeholder="Enter Ticket ID">
<p>

Name of Employee:
<input type="text" name="fEmployeeName" placeholder="Enter employee's name">

Employee ID:
<input type="text" name="fEmployeeID" placeholder="Enter employee's ID">
<p>

Time:
<input type="text" name="fTime" placeholder="Enter request time">

Date:
<input type="text" name="fDate" placeholder="Enter request date">
<p>

Priority:
<input type="radio" id="PrioHigh" value="High" name="Priority">
<label for="PrioHigh">High</label>
<input type="radio" id="PrioLow" value="Low" name="Priority">
<label for="PrioLow">Low</label>
<br>
<p>

Status:
<input type="radio" id="StaOpen" value="Open" name="Status">
<label for="StaOpen">Open</label>
<input type="radio" id="StaClosed" value="Closed" name="Status">
<label for="StaClosed">Closed</label>
<br>
<p>

Department:
<select name="fDepartment" required>
<option value="" disabled selected hidden>Select department</option>
<option value="Management">Management</option>
<option value="HR">HR</option>
<option value="IT">IT</option>
<option value="Sales">Sales</option>
<option value="Logistic">Logistic</option>
</select>
<p>

Country:
<select name="fCountry" required>
<option value="" disabled selected hidden>Select Country</option>
<option value="Singapore">Singapore</option>
<option value="China">China</option>
<option value="Vietnam">Vietnam</option>
</select>
<p>

<hr>
<p>

<input type="reset" value="Clear Form">
<input type="submit" name="submit">

</form>

<?php
if (isset($_GET['Entries'])) {echo "Database Insertion was ".$_GET['Entries'];
}
?>

</body>
</html>
