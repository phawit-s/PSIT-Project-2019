<?php session_start(); ?>
<?php
$con=mysqli_connect('localhost', 'id11387127_projectpsit2019', 'Imnayeon1995', 'id11387127_psit');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql="SELECT * FROM register where userid=62070271";
$result=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body background="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1490&q=80">
    <center>
  <div class="container">
  <div class="row">
            <div class="col-md">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top"><!--logo and position-->
  <a class="navbar-brand" href="index.php">TU ME PLEASE!!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
  <?php if(isset($_SESSION['Name'])) { ?>
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact page V.2.html">Contact us<span class="sr-only">(current)</span></a>
      </li>
    <li class="nav-item active">
         <a class="nav-link" href="News.html">Updates History<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown"><!--drop down-->
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More in website
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
          <a class="dropdown-item" href="profile.php">My Profile</a>
          <a class="dropdown-item" href="random.php">Random page</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
  <?php }else { ?>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contact page V.2.html">Contact us<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
      </li>
            <li class="nav-item active">
        <a class="nav-link" href="register.html">Register<span class="sr-only">(current)</span></a>
      </li>
      </li>
    </ul>
  </div>
          <?php } ?>
</nav>

            </div>
        </div>
  </div><!--End of topper banner--><br><br>
  <div class="container">
    <div class="row">
      <div class="col-md">
          <div class="card" style="width:50%;">
          <?php
                while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                ?>
            <div class="card-header text-white" style="background-color: #F67171;" >
              <h1>Picture</h1>
              <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['picture']).'"style="width:50%; border-radius: 100%">'; ?>
            </div>
            </div>
        </div>
    </div>

<br>
</div>
           <div class="col-md">
          <div class="card-header text-white" style="background-color: #F67171; width:37%;">
            <h4 style="color: white;">Your Profile</h4>
        </div>

          <div class="card-body" style="width:auto; background-color: white; opacity:0.7; border-radius: 1%">

            <table><br>
                    <tr>
                        <td>
                          <b>Name: </b>
                        </td>
                        <td>
                        <?php echo $row['Name']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <b>Student ID: </b>
                        </td>
                        <td>
                        <?php echo $row['userid']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <b>Email: </b>
                        </td>
                        <td>
                        <?php echo $row['email']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <b>Gender: </b>
                        </td>
                        <td>
                        <?php echo $row['gender']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <b>Subject: </b>
                        </td>
                        <td>
                        <?php echo $row['subject']; ?>
                        </td>
                    </tr>
                </table>
          </div>
        </div>
        <?php } ?>
    </div>
    <br>
            <h2 style="color: white;">Chatroom</h2>
                <table class="table table-striped table-dark" style="width:50%;">
                  <thead>
                    <tr>
                        <th>massage</th>
                    </tr>
                  </thead>
                <tbody id="dataRow">
                </tbody>
            </table>
        </div>
    <div class="row justify-content-md-center">
        <div class="col-md">
                <div class="form-group">

                            <textarea rows="5" cols="50" id="idComment" placeholder="Enter Comment"></textarea><br>
                            <button type="submit" id="commentBtn" class="btn btn-success green"><i class="fa fa-share"></i>comment</button>
                </div>
            </div>
    </div>
  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/7.2.3/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
     <script src="https://www.gstatic.com/firebasejs/7.4.0/firebase-analytics.js"></script>


    <script>
  // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyBurLZPu6yeyjsX0ONt2_ap1Fh5amP7hIc",
        authDomain: "itflab-58f77.firebaseapp.com",
        databaseURL: "https://itflab-58f77.firebaseio.com",
        projectId: "itflab-58f77",
        storageBucket: "itflab-58f77.appspot.com",
        messagingSenderId: "838482665115",
        appId: "1:838482665115:web:ad87fad67205f95cc3b03e"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    </script>
    <script>let myFirebase = firebase.database();
        let dataRef = myFirebase.ref('/chat271');
        document.getElementById("commentBtn").onclick = function() {
        let lcomment = document.getElementById('idComment').value;
        let ltime = Date.now();
        dataRef.push({
        comment: lcomment,
        time: ltime
        });
        };
    </script>
    <script>
        dataRef.limitToLast(4).on('child_added', function(childSnapshot) {
let item = childSnapshot.val()
document.getElementById('dataRow').innerHTML +=  "</td><td>" + item.comment
});
</script>
  </div>
  <?php mysqli_close($con); ?>

</body>

</html>