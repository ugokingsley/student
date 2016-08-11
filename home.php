<?php
session_start();

if(!isset($_SESSION['user_session']))
{
	header("Location: index.php");
}

include_once 'dbconfig.php';

$stmt = $db_con->prepare("SELECT * FROM tbl_users WHERE user_id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['user_session']));
$row=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form using jQuery Ajax and PHP MySQL</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="dashboard.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link href="style.css" rel="stylesheet" media="screen">

</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi' <?php echo $row['user_name']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
<div class="body-container">

<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Faculties</a></li>
            <li><a href="#">Downloads</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Library</a></li>
            <li><a href="">Transcript</a></li>
            <li><a href="">E-campus</a></li>
            <li><a href="">UST Mail</a></li>
            
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Staff School</a></li>
            <li><a href="">Our Contacts</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			
          <div class='alert alert-success'>
			<button class='close' data-dismiss='alert'>&times;</button>
				<strong>Hello '<?php echo $row['user_name']; ?></strong>  Welcome to the members page.
			</div>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4><span class=""></span>Display Picture</h4>
            </div>
            
          </div>

          <h2 class="sub-header">Student's Data</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  
                  <th><h2>Data</h2></th>
                  <th><h2>Details</h2></th>
                  
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                 
                  <td><b>Username</b></td>
                 <td><?php echo $row['user_name']; ?></td>
                 
                  
                </tr>
                <tr>
                 
                 
                  <td><b>Last Name</b></td>
                  <td><?php echo $row['last_name']; ?></td>
                </tr>
                <tr>
                  <td><b>First Name</b></td>
                  <td><?php echo $row['first_name']; ?></td>
                  
                </tr>
                <tr>
                  <td><b>Matric Number</b></td>
                  <td><?php echo $row['matric']; ?></td>
                  
                </tr>
                <tr>
                  <td><b>Email Address</b></td>
                  <td><?php echo $row['user_email']; ?></td>
                  
                </tr>
                <tr>
                  <td><b>Department</b></td>
                  <td><?php echo $row['dept']; ?></td>
                  
                </tr>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

</div>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>