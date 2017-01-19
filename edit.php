<html>
<head>
<title>Simple PHP system</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple System</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
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

   $serverName = "localhost";
   $userName = "";
   $userPassword = "";
   $dbName = "database";

   $strCustomerID = null;

   if(isset($_GET["CustomerID"]))
   {
	   $strCustomerID = $_GET["CustomerID"];
   }
  
   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "database";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

   $sql = "SELECT * FROM customer WHERE CustomerID = '".$strCustomerID."' ";

   $query = mysqli_query($conn,$sql);

   $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

?>
<div class="row register-form">
<div class="col-md-8 col-md-offset-2">
<form class="form-horizontal custom-form" action="save.php" name="frmAdd" method="post">
<h1>Edit Customer</h1>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label">Customer ID</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="hidden" name="txtCustomerID" value="<?php echo $result["CustomerID"];?>"><?php echo $result["CustomerID"];?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" >Nama </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="txtName"value="<?php echo $result["Name"];?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" >Email </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="txtEmail" value="<?php echo $result["Email"];?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label"> Country Code </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="txtCountryCode" value="<?php echo $result["CountryCode"];?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" >Budget </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="txtBudget" value="<?php echo $result["Budget"];?>">
                    </div>
                </div>
				<div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" >Used </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text"name="txtUsed" value="<?php echo $result["Used"];?>">
                    </div>
                </div>
  <input type="submit" name="submit" value="submit">
<?php
mysqli_close($conn);
?>
</body>
</html>