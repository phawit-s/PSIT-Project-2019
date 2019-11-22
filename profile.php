<?php session_start(); ?>
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
      <div class="col">
        <div class="card">
          <div class="card-header text-white" style="background-color: lightgreen;">
            <h4 class="card-title" style="color: white;">Your Profile</h4>
        </div>
        
          <div class="card-body">
              <?php if(isset($_SESSION['Name'])) { ?>
            <table><br>
                    <tr>
                        <td>
                          <b>Name: </b>
                        </td>
                        <td>
                        <?php echo $_SESSION['Name']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <b>Student ID: </b>
                        </td>
                        <td>
                        <?php echo $_SESSION['userid']; ?>
                        </d>
                    </tr>
                    <tr>
                        <td>
                          <b>Email: </b>
                        </td>
                        <td>
                        <?php echo $_SESSION['email']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <b>Gender: </b>
                        </td>
                        <td>
                        <?php echo $_SESSION['gender']; ?>
                        </td>
                    </tr>
                </table>
          </div>
        </div>
    </div>
    
        <div class="col">
          <div class="card">
            <div class="card-header text-white" style="background-color: lightgreen;" >
              <h1>Picture</h1>
              <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($_SESSION['picture']).'"style="width:50%; border-radius: 100%">'; ?>
            </div>
          <div class="card-body">
          <a href="#" class="btn btn-primary">Edit your profile</a>
      </div>
    </div>
  </div>
  <?php }else { ?>
    <?php } ?>
  </div>
  <?php mysqli_close($con); ?>

</body>

</html>
