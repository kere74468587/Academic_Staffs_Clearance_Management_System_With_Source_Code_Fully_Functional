<?php
include('connect.php')
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="production/stylesheet.css">
	<!-- <link rel="stylesheet" href="kb.css"> -->

	<!-- icon -->
	<link rel="icon" href="production/images/logoo.png" >
	<title>Hawassa University Staff clearance management System</title>
	<style>
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 70%;
			margin: auto;
		}
		 body{
			background-color:#b4cdcd;
		} 

/* third */mm    
@media screen and (max-width: 750px;){
	.layer h3{
		width:5px;
}
}

body{
	border:2px solid blue;
	/* border-radius:20px; */
}

.row{
	 margin-top:5%;
	 display: flex;
	 justify-content:space-between;
	}
	.col{
		flex-basis:31%;
		background:#fff3f3;
		border-radius :5%;
		margin-bottom:5%;
		padding:20px 12px;
		box-sizing:border-box;
		transition:0.5px;
	}  

h3{
	text-align:center;
	font-weight:600;
	margin:10px 0;
	font-size: 40px;
}
p {
	font-size: 20px;
}
.third{
	width:80%;
	margin:auto;
	text-align:center;
	padding-top:50px; 
}
.coll{
	flex-basis:32%;
	border-radius:10px;
	margin-bottom:30px;
	position:relative;
	 overflow :hidden;
}
.coll img{
	width:100%;
	display:block;
}
 .layer{
	background: trasparent;
	height:100%;
	width:100%;
	position:absolute;
	top:0;
	left:0;
	transition:0.5s;
}
.layer:hover{
	background: rgba(226,0,0,0.7);

}
.layer h3{
	width:100%;
	font-weight:500;
	color:#fff;
	font-size :26px;
	bottom:0;
	left:50%;
	transform:translateX(-50%);
	position:absolute;
	opacity:0;
	transition:0.5s;
}
.layer:hover h3{
	bottom:49%;
	opacity:1;
}


/* sixth */

.sith{
margin:100px auto;
width:80%;
background-image:linear-gradient(rgba(165, 106, 106, 0.7),rgba(212, 193, 193, 0.7)),url(images/1.jpg);
background-size:cover;
border-radius:10px;
text-align:center;
padding:100px 0;
}
.sith h1{
	color:#fff;
	margin-bottom:40px;
	padding:0;
}
   .btnn{
	width:80px;
	text-decoration:none;
	color:#fff;
	height: 100px;
	border:1px solid white;
	border-radius:10px;
	font-size:50px;
}
.btnn:hover{
	border:2px solid #f44336;
	background: #f44336;
	transition:1s;
}
/* .position{
	position: fixed;
} */
 
	</style>
</head>
<body>
	<nav class="navbar navbar-default">
	  <section class="position">
		<div class="container-fluid" style="background-color:green;">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="images\logoo.png" style="height:80px; width:90px;"  alt="">
				
			</div>
			<div class="time" style="color:white;text-align:center; font-size:40px;">
			<h1>Hawassa University </h1>
			<marquee behavior="" direction="right">
				
			<font>
				<?php
					$Today=date('y:m:d');
					$new=date('l, F d, Y',strtotime($Today));
					echo $new; 
				?>
			</font> 
			
</marquee>
</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-dept" style="margin-top: 6px;">Log in </button>
				<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-dept" style="margin-top: 6px; color:white;"  > <a href="https://www.hu.edu.et/index.php/hu/contact" style="color:white;">Help</a>
				<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-dept" style="margin-top: 6px; color:white;"  > <a href="about.php" style="color:white;">About Us</a>
				<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-dept" style="margin-top: 6px; color:white;"  > <a href="developers.php" style="color:white;">Developers</a>
				<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#modal-dept" style="margin-top: 6px; color:white;"  > <a href="index.php" style="color:white;">Home</a>


			</button>
</section>
				<!-- <button><a class="navbar-brand" href="add_admin.php">about Us</a></button> -->
				
				<!-- Modal -->
				<div class="modal fade" id="modal-dept">
					<div class="modal-dialog modal-md">
						<div class="modal-content">
							<!-- modal header -->
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3>Log in</h3>
							</div>
							<!-- modal body -->
							<div class="modal-body">
								<ul class="nav nav-pills">
									<li class="active"><a data-toggle="pill" href="#home">Officers</a></li>
									<li><a data-toggle="pill" href="#menu2">Staffs</a></li>
									<li><a data-toggle="pill" href="#menu1">Admin</a></li>

								</ul>
								<div class="tab-content">
									<!-- Department -->
									<div id="home" class="tab-pane fade in active">
										<h3>Officers</h3>
										<form method="post">
											<div class="form-group">
												<input type="text" class="form-control" name="deptName" placeholder="Officer Name">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="deptPass" placeholder="Password">
											</div>
											<div class="form-group">
												<button class="btn btn-block btn-primary signin-button-department">Log in</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
												<button class="btn btn-block btn-primary signin-button" ><a href="forgetpwd.php" style="color:white;">forget password</a></button>
											</div>
										</form>
									</div>
									<!-- Admin -->
									<div id="menu1" class="tab-pane fade">
										<h3>Admin</h3>
										<form method="post">
											<div class="form-group">
												<input type="text" class="form-control" name="admin_username" placeholder="Username">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="adminPass" placeholder="Password">
											</div>
											<div class="form-group">
												<button class="btn btn-block btn-primary signin-button-admin">Log in</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
												<button class="btn btn-block btn-primary signin-button" ><a href="forgetpwd.php" style="color:white;">forget password</a></button>

											</div>
										</form>
									</div>
									<!-- Teacher -->
									<div id="menu2" class="tab-pane fade">
										<h3>Staffs</h3>
										<form method="post">
											<div class="form-group">
												<input type="text" class="form-control" name="teacherId" placeholder="Staff Id">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="TeacherPass" placeholder="Password">
											</div>
											<!-- <div class="form-group">
												<input type="password" class="form-control" name="new_password" placeholder="Password">
											</div>
											<div class="form-group">
												<input type="password" class="form-control" name="new_cpassword" placeholder="Password">
											</div> -->
											<div class="form-group">
												<button class="btn btn-block btn-primary signin-button-faculty">Log in</button>
												<button class="btn btn-block btn-danger signin-button">Cancel</button>
												<button class="btn btn-block btn-primary signin-button" ><a href="forgetpwd.php" style="color:white;">forget password</a></button>

											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- ENNNNNNNNNND MODAL-->				

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<!-- carousel -->
		<section class="third"> <b>
	<h1>Wellcome to Hawassa University Staff Clearance Management System</h1>
	<p>Clearance System is the system which clears the <br> Hawassa  University Academic staffs by <br> ensuring that they return the properties pertaining to the University.</p>
    </b>
	</div>
</section>
		<div class="row">
			<div id="myCarousel" class="carousel slide" data-ride="carousel" style="padding:20px 20px 20px 20px;">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="images/door.jpg" alt="Chania" width="460" height="200">
					</div>

					<div class="item">
						<img src="images/2.jpg" alt="Chania" width="460" height="200">
					</div>

					<div class="item">
						<img src="images\2.jpg" alt="Flower" width="460" height="200">
					</div>

					<div class="item">
						<img src="images\1.jpg" alt="Flower" width="460" height="200">
					</div>
					
				</div>

				<!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
					<span class="icon-prev" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
					<span class="icon-next" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		
		</div>



		<section class="third">
	<h1>wellcome to Hawassa University Staff Clearance Management System</h1>
	<p>Clearance System is the system which clears the <br> Hawassa  University Academic staffs by <br> ensuring that they return the properties pertaining to the University.</p>
    <div class="row">
		<div class="coll">
         <img src="images/2.jpg" >
		<div class="layer">
			<h3>Hawassa University</h3>
		</div>
		</div>
		<div class="coll">
         <img src="images/2.jpg" >
		<div class="layer">
			<h3>Hawassa University</h3>
		</div>
		</div>
		<div class="coll">
         <img src="images/2.jpg" >
		<div class="layer">
			<h3>Hawassa University</h3>
		</div>
		</div>
	</div>
</section>

<!-- sixth  -->


<section class="sith">
	<h1>Hawassa University is the Leading among  <br> from Ethiopian University </h1>
<a href="contact.php" class="btnn">Contact Us</a>

</section>


		<footer style="text-align:left;background-color:green;color:white;" 
		class="navbar navbar-default navbar-fixed-bottom">
					<div style="text-align:center;" class="container-fluid"> 
					<?php echo date("Y");?> <a href="https://www.market8587.blogspot.com" style="color:white;">&copy Copyright Reserved for  Hu Is Students</a> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Designed By</a> <a href="https://www.market8587.blogspot.com" target="_blank" style="color:white;"> Hu Information System Students</a>.</div>
					</footer>



		<script src="js/jquery-1.12.1.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script>
			$('.carousel').carousel({
        interval: 3000 //changes the speed
    })
</script>
<script>
	jQuery(function(){
		$('.signin-button-admin').click(function(e){
			e.preventDefault();

			var uname = $.trim($('input[name="admin_username"]').val());
			var pass = $.trim($('input[name="adminPass"]').val());

			$.ajax({
				type: 'POST',
				url: 'loginAdmin.php',
				data: {admin_username: uname, adminPass: pass}
			})
			.done(function(res){
				console.log(res);
				if (res == 1 ){
					window.location.href = "production/admin1.php";
				}else{
					alert('Login failed!');
					$('input[name="admin_username"]').focus();
					$('input').val('');
				}
			});
			}); //Admin

		$('.signin-button-department').click(function(e){
			e.preventDefault();

			var uname = $.trim($('input[name="deptName"]').val());
			var pass = $.trim($('input[name="deptPass"]').val());

			$.ajax({
				type: 'POST',
				url: 'logindept.php',
				data: {deptName: uname, deptPass: pass}
			})
			.done(function(res){
				console.log(res);
				if (res == 1 ){
					window.location.href = "production/officers.php";
				}else{
					alert('Login failed!');
					$('input[name="deptName"]').focus();
					$('input').val('');
				}
			});
			}); //Department

		$('.signin-button-faculty').click(function(e){
			e.preventDefault();

			var uname = $.trim($('input[name="teacherId"]').val());
			var pass = $.trim($('input[name="TeacherPass"]').val());

			$.ajax({
				type: 'POST',
				url: 'loginfaculty.php',
				data: {teacherId: uname, TeacherPass: pass}
			})
			.done(function(res){
				console.log(res);
				if (res == 1 ){
					window.location.href = "production/aca_staffs.php";
				}else if (res == 2){
					alert('The system is closed. Please process your clearance manually');
				}else{
					alert('Login failed!');
					$('input[name="teacherId"]').focus();
					$('input').val('');
				}
			});
			}); 
	});
</script>

</body>
</html>