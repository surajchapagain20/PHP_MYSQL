<!DOCTYPE html>
<html>

<head>
  <title>PHP - Upload image to database - Example</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="form.css" rel="stylesheet" type="text/css" />
</head>
<style>
body {
	font-family: Arial;
	color: #ffff;
	font-size: 0.95em;
	background-image: url("../login/view/images/bg.jpeg");
}


*{
    margin: 0; 
      padding: 0; 
      box-sizing: border-box;
}
 
#content{
    width: 50%;
    justify-content: center;
    align-items: center;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
}
form{
    width: 50%;
    margin: 20px auto;
}
 
#display-image{
    width: 100%;
    justify-content: center;
    padding: 5px;
    margin: 15px;
}
img{
    margin: 5px;
    width: 350px;
    height: 250px;
}
</style>
<body>

<b><center><h3>Nepallife Password/Email and Repair Requisition Form</h3></center></b>

<button>
<a href="../../repair/"> Repair and Requisition Form</a>
</button>
<button>
<a href="../../userid/"> For Email and UserId </a>
</button>
<button>
<a href="../../repair/i_upload.php"> Upload Image </a>
</button>
<button>
<a href="../../repair/image/index.php"> Upload Image with Display </a>
</button>


  <div class="phppot-container">
    <h1>Upload image to database:</h1>
    <form action="upload.php" method="post" enctype="multipart/form-data">
      <div class="row">
        <input type="file" name="image" accept="image/*">
        <input type="submit" value="Upload">
      </div>
    </form>

    <h2>Uploaded Image (Displayed from the database)</h2>
    <?php
    // Retrieve the uploaded image from the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "repair_gsd";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT image FROM images ORDER BY id DESC LIMIT 1");

    if (!empty($result) && $result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $imageData = $row['image'];
      echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" alt="Uploaded Image" style="max-width: 500px;">';
    } else {
      echo 'No image uploaded yet.';
    }

    $conn->close();

    ?>
  </div>
</body>

</html>