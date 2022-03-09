<?php
    include "header.php";
    include "connect.php";
    include "validate_admin.php";
    include "user_navbar.php";
    include "admin_sidebar.php";
    include "session_timeout.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="grievance_style.css">
</head>

<body>
    <div class="flex-container">
        <?php
            $sql0 = "SELECT id, name, account_no ,aadhar_no FROM aadhar";
            $result = $conn->query($sql0);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $sql1 = "SELECT id FROM aadhar WHERE id=$id";
                $result1 = $conn->query($sql1); ?>

                <div class="flex-item">
                    <div class="flex-container-name">
                        <h1 id="title"><?php echo $row["name"] . "<br>"; ?></h1>
                    </div>
                    <div class="flex-container-account_no">
                        <h1 id="title"><?php echo $row["account_no"] . "<br>"; ?></h1>
                    </div>
                    <div class="flex-container-aadhar_no">
                        <h1 id="title"><?php echo $row["aadhar_no"] . "<br>"; ?></h1>
                    </div>  
                </div>

            <?php }
            } else {
                echo "No Request  Available.....";
            }
            $conn->close();
        ?>
    </div>

</body>
</html>
