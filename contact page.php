<?php session_start();?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="CSS/style for contact page.css">
</head>
<body>
    <?php if(isset($_SESSION['Name'])) { ?>
		<a href="logout.php">Logout</a>
                <a href="profile.php">Welcome <?php echo $_SESSION['Name']; ?> <?php echo $_SESSION['Surname']; ?></a>
                <a href="contact page.php">Contact Us</a>
                <a href="index.php">Home</a>
    <?php }else { ?>
                <a href="login.html">login</a>
                <a href="register.html">register</a>
    <?php } ?>
	<h1 style="text-align: center;">Contact Page</h1>
	<div class="card">
		<img src="https://cdn.pixabay.com/photo/2017/03/09/12/32/pirate-2129571_1280.jpg" style="width: 100%">
		<h1>name surname</h1>
		<p>title or information</p>
		<p><button>Contact</button></p>
	</div>

	<div class="card">
		<img src="https://cdn.pixabay.com/photo/2017/03/09/12/32/pirate-2129571_1280.jpg" style="width: 100%">
		<h1>name surname</h1>
		<p>title or information</p>
		<p><button>Contact</button></p>
	</div>

	<div class="card">
		<img src="https://cdn.pixabay.com/photo/2017/03/09/12/32/pirate-2129571_1280.jpg" style="width: 100%">
		<h1>name surname</h1>
		<p>title or information</p>
		<p><button>Contact</button></p>
	</div>

	<div class="card">
		<img src="https://cdn.pixabay.com/photo/2017/03/09/12/32/pirate-2129571_1280.jpg" style="width: 100%">
		<h1>name surname</h1>
		<p>title or information</p>
		<p><button>Contact</button></p>
	</div>
	
	<div class="card">
		<img src="https://cdn.pixabay.com/photo/2017/03/09/12/32/pirate-2129571_1280.jpg" style="width: 100%">
		<h1>name surname</h1>
		<p>title or information</p>
		<p><button>Contact</button></p>
	</div>
</body>
</html>
