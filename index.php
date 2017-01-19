<html>
<head>
<title>Simple PHP system</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple System</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-with-search.css">
    <link rel="stylesheet" href="assets/css/Table-with-search1.css">
</head>
<body>

<nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php">Simple System PHP</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"><a href="add.php">Add Data</a></li>
                    <li role="presentation"><a href="index.php">Search </a></li>
                </ul>
            </div>
        </div>
    </nav>
	
<?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>

<div class="form-group pull-right"><form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  
      <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
      <input type="submit"  value="Search">
    
  
</form>

</div>

<?php

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "database";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	
   $sql = "SELECT * FROM customer WHERE Name LIKE '%".$strKeyword."%' ";

   $query = mysqli_query($conn,$sql);

?>

<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
    <th class="col-md-2 col-xs-2">CustomerID </div></th>
    <th class="col-md-4 col-xs-4">Name </div></th>
    <th class="col-md-4 col-xs-4">Email </div></th>
    <th class="col-md-2 col-xs-2">CountryCode </div></th>
    <th class="col-md-2 col-xs-2">Budget </div></th>
    <th class="col-md-2 col-xs-2">Used </div></th>
	<th class="col-md-5 col-xs-5">Edit </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td><div align="center"><?php echo $result["CustomerID"];?></div></td>
    <td><?php echo $result["Name"];?></td>
    <td><?php echo $result["Email"];?></td>
    <td><div align="center"><?php echo $result["CountryCode"];?></div></td>
    <td align="right"><?php echo $result["Budget"];?></td>
    <td align="right"><?php echo $result["Used"];?></td>
	<td align="center"><a href="edit.php?CustomerID=<?php echo $result["CustomerID"];?>">Edit</a> | <a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='delete.php?CustomerID=<?php echo $result["CustomerID"];?>';}">Delete</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>

<br>
<br>
<b><a href="add.php">Add new customer</a></b>

<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-with-search.js"></s
</body>
</html>