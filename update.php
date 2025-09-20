<?php
include 'db.php';
$id = $_GET['id'];
$type = $_GET['type'];

if ($type == "product") {
    $sql = "UPDATE products SET 
                name='{$_POST['name']}',
                category='{$_POST['category']}',
                price='{$_POST['price']}',
                stock='{$_POST['stock']}',
                location='{$_POST['location']}'
            WHERE id=$id";
} else {
    $sql = "UPDATE buyers SET 
                name='{$_POST['name']}',
                email='{$_POST['email']}',
                phone='{$_POST['phone']}',
                location='{$_POST['location']}'
            WHERE id=$id";
}

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully!";
} else {
    echo "Error updating: " . mysqli_error($conn);
}
?>
