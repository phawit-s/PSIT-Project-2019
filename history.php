<?php session_start(); ?>
<?php
$con=mysqli_connect('localhost', 'id11387127_projectpsit2019', 'Imnayeon1995', 'id11387127_psit');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM history where userid='".$_SESSION['userid']."' ";
$result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	<link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<title></title>
</head>
<body style="background-image: url(https://images.unsplash.com/photo-1507842217343-583bb7270b66?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80);">
	<!--NavBar Section-->
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top"><!--logo and position-->
  <a class="navbar-brand" href="index.php">TU ME PLEASE!!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact page V.2.html">Contact us<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown"><!--drop down-->
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More in website
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
          <a class="dropdown-item" href="profile.php">My Profile</a>
          <a class="dropdown-item" href="random.php">Random page</a>
          <a class="dropdown-item" href="login.html">Login</a>
        </div>
      </li>
    </ul>
  	</div>
	</nav>
	<!--History Table Section--><!--PHP should be here-->
	<div class="container">
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading bg-dark">
                <h3 class="panel-title">Users Random History</h3>
            </div>
            <table class="table">
                <thead>
                    <tr class="filters"><!--filter section-->
                        <th><input type="text" class="form-control" placeholder="Studen ID" enabled></th>
                        <th><input type="text" class="form-control" placeholder="First Name" enabled></th>
                        <th><input type="text" class="form-control" placeholder="Last Name" enabled></th>
                    </tr>

                </thead>
                </table>
                <?php
                    while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                ?>
                <table class="table">
                <tbody><!--data in table-->
                    <tr>
                        <td><?php echo $row['userran']; ?></td>
                        <td><?php echo $row['Nameran']; ?></td>
                        <td><?php echo $row['Surname']; ?></td>
                        <td><button><a href="profile<?php echo $row['userran'];?>.php">View</a></button></td>
                    </tr>
                   </tbody>
                </table>
                <?php } ?>
        	</div>
    	</div>
	</div>
</div>


	<!--Script foer filter-->
	<script type="text/javascript">
	$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });
    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        	}
    	});
	});
	</script>


<?php mysqli_close($con); ?>

</body>
</html> 
