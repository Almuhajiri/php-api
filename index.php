<html>
<head>
  <title>Data User</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

  <div class="container">
    <h2><center>DATA USER</center></h2>
    <table class="tabel" align="center">
  <tr>
    <th>id</th>
    <th>username</th>
    <th>password</th>
    <th>level</th>
    <th>fullname</th>
  </tr>
  </div>
  <?php
  include('connect.php');
  $sql_tampil ="SELECT * FROM user";
  $peserta=mysqli_query($conn,$sql_tampil);
  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
    echo'
    </tr>
      <td>'.$baris_data['id'].'</td>
      <td>'.$baris_data['username'].'</td>
      <td>'.$baris_data['password'].'</td>
      <td>'.$baris_data['level'].'</td>
      <td>'.$baris_data['fullname'].'</td>
    </tr>';
  }
  ?>
</body>
</html>