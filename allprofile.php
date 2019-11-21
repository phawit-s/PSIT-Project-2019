<?php
    require_once("connect.php");
        $sql="SELECT * FROM register";
        $data=$connect->query($sql)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Student id</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($row=$data->fetch_array(MYSQLI_ASSOC)){
                ?>
                <tr>
                    <td><?php echo $row['userid']; ?></td>
                    <td><?php echo $row['Name']; ?></td>
                    <td><?php echo $row['Surname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
            <?php
                }
                $data->free_result();
                $connect->close();
            ?>
            </tbody>

            
        </table>
    </div>
    
</body>
</html>