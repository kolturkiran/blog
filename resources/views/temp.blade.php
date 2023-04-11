<!DOCTYPE html>
<html>
<body>

<h1>The form action attribute</h1>

<form action="users" method="POST">
  @csrf
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>
  <input type="submit" value="Submit">
</form>

<p>Click the "Submit" button and the form-data will be sent to a temp page".</p>

</body>
</html>