<!DOCTYPE html>
<html lang="en">
<head>
  <title>Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <!--link css-->
<link href="css/new.css" rel="stylesheet" type="text/css">
<!--link javascript-->
<script src="js/new.js" type="text/javascript"></script>
</head>
<body>
	<div class="container-fluid bg-primary p-1" >
		<a class="navbar-brand" href="#">
		  <img src="images/new.png" alt="Avatar Logo" style="width:100px;" class="rounded-circle" id="img"> 
		</a>
	<h1 class="text-warning ">PRACTICE WEBPAGE</h1>	
	
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
</div>
	<div id="login">
               <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" id=>
		       <span class="spinner-border spinner-border-sm"></span>
                Login
                </button>

						<!-- The Modal -->
						<div class="modal" id="myModal">
						  <div class="modal-dialog">
								<div class="modal-content">

									  <!-- Modal Header -->
									  <div class="modal-header">
										<h4 class="modal-title">Modal Heading</h4>
										<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
									  </div>

									  <!-- Modal body -->
									  <div class="modal-body">
											   <div>
													<form action="login.php" class="was-validated" method="POST">
												  <div class="mb-3 mt-3">
													<label for="email" class="form-label">Email:</label>
													<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
												  </div>
												  <div class="mb-3">
													<label for="pwd" class="form-label">Password:</label>
													<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
												  </div>
												  <div class="form-check mb-3">
													<label class="form-check-label">
													  <input class="form-check-input" type="checkbox" name="remember"> Remember me
													</label>
												  </div>
											  </div>

											  <!-- Modal footer -->
											  <div class="modal-footer">
											  <button type="Sumbmit" class=" btn btn-primary" required>submit</button>
												<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
											  </div>

									</div>
							  </div>
						  </div>
						</div>
		           </div>
	</div>
		<nav class="navbar navbar-expand-sm bg-primary navbar-dark p-1 mt-0">
		  <div class="container-fluid">
			<ul class="navbar-nav">
			</li>
			  <li class="nav-item">
				<a class="nav-link active" href="#">Home</a>
				
			  </li>
			  <li class="nav-item">
				<a class="nav-link active" href="#">Information</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link active" href="#">History</a>
			  </li>
			  <li class="nav-item">
				<div class="dropdown dropend">
		  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
			Dropdown button
		  </button>
		  <ul class="dropdown-menu">
			<li><a class="dropdown-item" href="#">Link 1</a></li>
			<li><a class="dropdown-item" href="#">Link 2</a></li>
			<li><a class="dropdown-item" href="#">Link 3</a></li>
		  </ul>
		</div>
			  </li>
			</ul>
		  </div>
		</nav>
<div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Heading</h1>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <p>Some text lorem ipsum.</p>
    <p>Some text lorem ipsum.</p>
    <button class="btn btn-secondary" type="button">A Button</button>
  </div>
</div>

<!-- Button to open the offcanvas sidebar -->
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
  Any Info Clickme
</button>
		<div class="container mt-4">
		  <div class="row">
			<div class="col-sm-4">
			  <h2>About Me</h2>
			  <h5>Photo of me:</h5>
			  <div class="fakeimg">Fake Image</div>
			  <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
			  <h3 class="mt-4">Some Links</h3>
			  <p>Lorem ipsum dolor sit ame.</p>
			  
			  
			  <hr class="d-sm-none">
			</div>
			<div class="col-sm-8">
			  <h2>TITLE HEADING</h2>
			  <h5>Title description, Dec 7, 2020</h5>
			  <div class="fakeimg">Fake Image</div>
			  <p>Some text..</p>
			  <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

			  <h2 class="mt-5">TITLE HEADING</h2>
			  <h5>Title description, Sep 2, 2020</h5>
			  <div class="fakeimg">Fake Image</div>
			  <p>Some text..</p>
			  <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>
		  </div>
		</div>
		 
<div class="mt-5 p-5 bg-dark text-white text-center">
		  <ul class="pagination pagination-lg justify-content-end">
			<li class="page-item active"><a class="page-link" href="#">Previous</a></li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">Next</a></li>
		  </ul>  
		  
		  
</div>

</body>
</html>
