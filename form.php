<?php
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulir</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form name="" method="POST" action="login.php" id="input-form"> 
        <div>
          <h1> FORMULIR </h1>
        </div>
        <div class="form">
          <label for="">Id</label><br>
          <input type="text" name="id">
        </div>
<br>
        <div class="form">
          <label for="">Username</label><br>
          <input type="text" name="username">
        </div>
<br>
        <div class="form">
          <label for="">Password</label><br>
          <input type="password" name="password">
        </div>
<br>
        <div class="form">
          <label >Level</label><br>
          <select name="level">
            <option> </option>
            <option> User</option>
            <option> Admin</option>
            <option> Guest</option>
          </select>
        </div>
<br>
        <div class="form">
          <label for="">Fullname</label><br>
          <input type="text" name="fullname">
        </div>
<br><br>
        <div class="form">
          <input class="bg-blue" type="submit" name="submit" value="SUBMIT">
        </div>
      </form>
</body>
</html>
<?php
}
?>