<?php

include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>

<?php include 'admin_header.php'; ?>


<selection class="orders">

    <h1 class="title">placed orders</h1>

    <div class="box-container">
        <?php
        $select_orders = mysqli_query($conn, "SELECT * FROM 'orders'") or die('query failed');
        if(mysqli_num_rows($select_orders) >0){
            while($fetch_orders = mysqli_fetch_assoc($select_orders)){
        ?>
        <div class="box">
            <p> user id = <span><?php echo $fetch_orders['user_id']; ?></span></p>
        </div>
        <?php 
            }
        }else{
            echo ' <p class="empty">no orders placed yet!</p>';
        }
        ?>

    </div>
    
</selection>













<script src="admin_script.js"></script>

</body>
</html>