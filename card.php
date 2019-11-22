<?php
$con=mysqli_connect('localhost', 'id11387127_projectpsit2019', 'Imnayeon1995', 'id11387127_psit');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM register ";
$result=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-m">
					<div class="card">
                    <?php
                    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                ?>
						<img class="card-img-top" <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['picture']).'" height="400" width="400"/>'; ?>
						<div class="card-body">
							<h4 class="card-title">Profile</h4>
							<p class="card-text"><?php echo $row['userid']; ?><br><?php echo $row['Name']; ?></p>
						<div class="row">
								<div class="col-md-3">
									<img src="img/avatar/man.png" alt="" style="width: 50px; height: 40px;">
								</div>
								<div class="col-md-6">
									<h5>Test</h5>
								</div>
								<div class="col-md-2">
									<img src="img/avatar/like.png" alt="" style="width: 30px; height: 30px;">
								</div>
							</div>
                        </div>
                    <?php }?>
					</div>
				</div>
			</div>
		</div>    
    </body>
</html>