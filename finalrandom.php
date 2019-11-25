

  <!doctype html>
  <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="example-rand-function - php mysql examples | w3resource">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>
  <div class="container">
  <div class="row">
  <div class="col-md-12">
  <h2>Random<h2>
  <table class='table table-bordered'>
  <tr>
  <th>Username</th><th>Name</th>
  </tr>
  <?php
  $hostname="localhost";
  $username="id11387127_projectpsit2019"; 
  $password="Imnayeon1995";
  $db = "id11387127_psit";
  $dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
  foreach($dbh->query('SELECT * FROM register ORDER BY RAND() limit 1') as $row) {
  echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['userwname'] . "</td>";
  echo "</tr>";
  }
  ?>
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

  </tbody></table>
  </div>
  </div>
  </div>
  </body>
  </html>
