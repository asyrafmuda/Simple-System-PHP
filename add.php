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
<div class="row register-form">
<div class="col-md-8 col-md-offset-2">
<form class="form-horizontal custom-form" action="savecustomer.php" name="frmAdd" method="post">
<h1>Add Customer</h1>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label">Customer ID</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="txtCustomerID">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" >Nama </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="txtName">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" >Email </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="txtEmail">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label"> Country Code </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="txtCountryCode">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" >Budget </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" name="txtBudget">
                    </div>
                </div>
				<div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" >Used </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text"name="txtUsed">
                    </div>
                </div>
  <input type="submit" name="submit" value="submit">
</form>
</body>
</html>