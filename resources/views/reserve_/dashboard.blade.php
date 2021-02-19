<?php
session_start();
if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL = $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
} else {
        $pageURL = $_SERVER["SERVER_NAME"];
}
       
if(!isset($_SESSION['member_id'])){
    header('Location: http://'.$pageURL.'/reserve/admin_side.blade.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Badminton</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	background: #eeeeee;
	font-family: 'Varela Round', sans-serif;
}
.navbar {
	color: #fff;
	background: #256b1d !important;
	padding: 5px 16px;
	border-radius: 0;
	border: none;
	box-shadow: 0 0 4px rgba(0,0,0,.1);
}
.navbar img {
	border-radius: 50%;
	width: 36px;
	height: 36px;
	margin-right: 10px;
}
.navbar .navbar-brand {
	color: #efe5ff;
	padding-left: 0;
	padding-right: 50px;
	font-size: 24px;		
}
.navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
	color: #fff;
}
.navbar .navbar-brand i {
	font-size: 25px;
	margin-right: 5px;
}
.search-box {
	position: relative;
}	
.search-box input {
	padding-right: 35px;
	min-height: 38px;
	border: none;
	background: #faf7fd;
	border-radius: 3px !important;
}
.search-box input:focus {		
	background: #fff;
	box-shadow: none;
}
.search-box .input-group-addon {
	min-width: 35px;
	border: none;
	background: transparent;
	position: absolute;
	right: 0;
	z-index: 9;
	padding: 10px 7px;
	height: 100%;
}
.search-box i {
	color: #a0a5b1;
	font-size: 19px;
}
.navbar .nav-item i {
	font-size: 18px;
}
.navbar .nav-item span {
	position: relative;
	top: 3px;
}
.navbar .navbar-nav > a {
	color: #efe5ff;
	padding: 8px 15px;
	font-size: 14px;		
}
.navbar .navbar-nav > a:hover, .navbar .navbar-nav > a:focus {
	color: #fff;
	text-shadow: 0 0 4px rgba(255,255,255,0.3);
}
.navbar .navbar-nav > a > i {
	display: block;
	text-align: center;
}
.navbar .dropdown-item i {
	font-size: 16px;
	min-width: 22px;
}
.navbar .dropdown-item .material-icons {
	font-size: 21px;
	line-height: 16px;
	vertical-align: middle;
	margin-top: -2px;
}
.navbar .nav-item.open > a, .navbar .nav-item.open > a:hover, .navbar .nav-item.open > a:focus {
	color: #fff;
	background: none !important;
}
.navbar .dropdown-menu {
	border-radius: 1px;
	border-color: #e5e5e5;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .dropdown-menu a {
	color: #777 !important;
	padding: 8px 20px;
	line-height: normal;
	font-size: 15px;
}
.navbar .dropdown-menu a:hover, .navbar .dropdown-menu a:focus {
	color: #333 !important;
	background: transparent !important;
}
.navbar .navbar-nav .active a, .navbar .navbar-nav .active a:hover, .navbar .navbar-nav .active a:focus {
	color: #fff;
	text-shadow: 0 0 4px rgba(255,255,255,0.2);
	background: transparent !important;
}
.navbar .navbar-nav .user-action {
	padding: 9px 15px;
	font-size: 15px;
}
.navbar .navbar-toggle {
	border-color: #fff;
}
.navbar .navbar-toggle .icon-bar {
	background: #fff;
}
.navbar .navbar-toggle:focus, .navbar .navbar-toggle:hover {
	background: transparent;
}
.navbar .navbar-nav .open .dropdown-menu {
	background: #faf7fd;
	border-radius: 1px;
	border-color: #faf7fd;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar .divider {
	background-color: #e9ecef !important;
}
@media (min-width: 1200px){
	.form-inline .input-group {
		width: 350px;
		margin-left: 30px;
	}
}
@media (max-width: 1199px){
	.navbar .navbar-nav > a > i {
		display: inline-block;			
		text-align: left;
		min-width: 30px;
		position: relative;
		top: 4px;
	}
	.navbar .navbar-collapse {
		border: none;
		box-shadow: none;
		padding: 0;
	}
	.navbar .navbar-form {
		border: none;			
		display: block;
		margin: 10px 0;
		padding: 0;
	}
	.navbar .navbar-nav {
		margin: 8px 0;
	}
	.navbar .navbar-toggle {
		margin-right: 0;
	}
	.input-group {
		width: 100%;
	}
}
</style>
<style>

.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 16px;
    background-color: transparent;
}

.table thead tr th {
    font-size: 17px ;
    font-weight: 300;
}

.table>thead>tr>th{
    padding: 12px 8px;
    vertical-align: middle;
    border-color: #ddd;
    font-weight: 300;
}

.table>tbody>tr>td{
    padding: 12px 8px;
    vertical-align: middle;
    border-color: #ddd;
    font-weight: 300;
    font-size:14px;
    color: #3c4858;
}

.table .td-actions .btn {
    margin: 0;
    padding: 5px;
}

.table .form-check {
    margin: 0;
    padding-left: 0;
}

.table .td-total {
    font-weight: 500;
    font-size: 17px;
    padding-top: 20px;
    text-align: right;
}

.table .td-price {
    font-size: 26px;
    font-weight: 300;
    margin-top: 5px;
    text-align: right;
}
.table-shopping>thead>tr>th {
    font-size: 12px;
    text-transform: uppercase;
    color: #555;
}
.table-shopping .td-name {
    min-width: 200px;
    font-weight: 400;
    font-size: 24px; 
    line-height: 1.42857143;
}

.table-shopping .td-name small {
    color: #999;
    font-size: 18px; 
    font-weight: 300;
}

.table-shopping .img-container {
    width: 120px;
    max-height: 160px;
    overflow: hidden;
    display: block;
}

.table-shopping .img-container img {
    width: 100%;
}

.table-shopping>tbody>tr>td {
    font-size: 14px;
}

.table-shopping .td-number {
    text-align: right;
    min-width: 150px;
    font-size: 18px;
}

.table-shopping .td-number small {
    margin-right: 3px;
}
.form-check{
    padding-left:0;
}
.form-check .form-check-label {
    cursor: pointer;
    padding-left: 0px;
    position: relative;
    margin-bottom: 0;
}

.form-check .form-check-label span {
    display: block;
    left: -1px;
    top: -1px;
    transition-duration: .2s;
}

.form-check .form-check-input {
    opacity: 0;
    height: 0;
    width: 0;
    overflow: hidden;
    position: absolute;
    margin: 0;
    z-index: -1;
    left: 0;
    pointer-events: none;
}

.form-check .form-check-sign:before {
    display: block;
    position: absolute;
    left: 0;
    content: "";
    background-color: rgba(0,0,0,.84);
    height: 20px;
    width: 20px;
    border-radius: 100%;
    z-index: 1;
    opacity: 0;
    margin: 0;
    top: 0;
    transform: scale3d(2.3,2.3,1);
}

.form-check .form-check-sign .check {
    position: relative;
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 1px solid rgba(0,0,0,.54);
    overflow: hidden;
    z-index: 1;
    border-radius: 3px;
    top: 3px;
}

.form-check .form-check-sign .check:before {
    position: absolute;
    content: "";
    transform: rotate(45deg);
    display: block;
    margin-top: -3px;
    margin-left: 7px;
    width: 0;
    color: #fff;
    height: 0;
    box-shadow: 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, 0 0 0 0, inset 0 0 0 0;
    animation: checkbox-off .3s forwards;
}

.form-check .form-check-input:checked+.form-check-sign .check:before {
    color: #fff;
    box-shadow: 0 0 0 10px, 10px -10px 0 10px, 32px 0 0 20px, 0 32px 0 20px, -5px 5px 0 10px, 20px -12px 0 11px;
    animation: checkbox-on .3s forwards;
}

.form-check .form-check-input:checked+.form-check-sign .check {
    background: #9c27b0;
}

.table .form-check .form-check-sign {
    top: -13px;
    left: 0;
    padding-right: 0;
}

.table-striped>tbody>tr:nth-of-type(odd) {
    background-color: #f9f9f9 !important;
}
footer{
    width: 100%;
    margin-top:200px;
    color: #555;
    background: #fff;
    padding: 25px;
    font-weight: 300;
    display: block;
    position: absolute;
    float: left;
    vertical-align: middle;
}
    

.footer p{
    margin-bottom: 0;
}
footer p a{
    color: #555;
    font-weight: 400;
}

footer p a:hover{
    color: #9f26aa;
    text-decoration: none;
}

/*animation*/

@keyframes checkbox-on {
  0% {
    box-shadow:
      0 0 0 10px,
      10px -10px 0 10px,
      32px 0 0 20px,
      0px 32px 0 20px,
      -5px 5px 0 10px,
      15px 2px 0 11px;
  }
  50% {
    box-shadow:
      0 0 0 10px,
      10px -10px 0 10px,
      32px 0 0 20px,
      0px 32px 0 20px,
      -5px 5px 0 10px,
      20px 2px 0 11px;
  }
  100% {
    box-shadow:
      0 0 0 10px,
      10px -10px 0 10px,
      32px 0 0 20px,
      0px 32px 0 20px,
      -5px 5px 0 10px,
      20px -12px 0 11px;
  }
}

.tooltip-arrow {
  display: none;
}

.tooltip.show {
 display: block;
  opacity: 1;
  -webkit-transform: translate3d(0, 0px, 0);
  -moz-transform: translate3d(0, 0px, 0);
  -o-transform: translate3d(0, 0px, 0);
  -ms-transform: translate3d(0, 0px, 0);
  transform: translate3d(0, 0px, 0);
}

.tooltip {
  opacity: 0;
  transition: opacity, transform .2s ease;
  -webkit-transform: translate3d(0, 5px, 0);
  -moz-transform: translate3d(0, 5px, 0);
  -o-transform: translate3d(0, 5px, 0);
  -ms-transform: translate3d(0, 5px, 0);
  transform: translate3d(0, 5px, 0);
  font-size: 0.75rem;
}

.tooltip.bs-tooltip-top .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="top"] .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #fff;
}

.tooltip.bs-tooltip-right .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="right"] .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #fff;
}

.tooltip.bs-tooltip-left .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="left"] .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #fff;
}

.tooltip.bs-tooltip-bottom .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="bottom"] .arrow::before, .tooltip.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #fff;
}

.tooltip-inner {
  padding: 10px 15px !important;
  min-width: 130px;
}

 .tooltip-inner {
  line-height: 1.5em;
  background: #fff !important;
  border: none;
  border-radius: 3px;
  box-shadow: 0 8px 10px 1px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);
  color: #555 !important;
}


</style>
</head> 
<body>
<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
	<a href="#" class="navbar-brand"></i>Badminton</a>  		

	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">		

		<div class="navbar-nav ml-auto">

			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle user-action"> <?= $_SESSION['username'] ?> <b class="caret"></b></a>
				<div class="dropdown-menu">

					<a href="<?= 'http://'.$pageURL.'/reserve/logout.blade.php' ?>" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a>
				</div>
			</div>
		</div>
	</div>
</nav>

<div class="container">
<br>
<br>
<br>
<?php

include("set.blade.php"); 
 
$result = mysqli_query($db, "SELECT * FROM reservation ORDER BY id DESC");

?>
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">

            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th> Reservation</th>
                            <th>Email</th>
                            <th>Residential</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                        $no = 1;
                         while($data = mysqli_fetch_array($result)) {    ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $data['firstname'] ?></td>
                            <td><?= $data['lastname'] ?></td>
                            <td><?= $data['date_reservation'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td><?= $data['residential'] ?></td>
                        </tr>
                        <?php $no++; } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>


    
   
</div>
</body>
</html>
