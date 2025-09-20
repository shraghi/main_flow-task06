<?php
include 'db.php'; // DB connection
$id = $_GET['id'];
$type = $_GET['type']; // product or buyer

if ($type == "product") {
    $sql = "SELECT * FROM products WHERE id=$id";
} else {
    $sql = "SELECT * FROM buyers WHERE id=$id";
}
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
?>
<!-- Prefilled Form -->
<form method="POST" action="update.php?type=<?php echo $type; ?>&id=<?php echo $id; ?>">
    <?php if ($type == "product"): ?>
        Name: <input type="text" name="name" value="<?php echo $data['name']; ?>"><br>
        Category: <input type="text" name="category" value="<?php echo $data['category']; ?>"><br>
        Price: <input type="number" step="0.01" name="price" value="<?php echo $data['price']; ?>"><br>
        Stock: <input type="number" name="stock" value="<?php echo $data['stock']; ?>"><br>
        Location: <input type="text" name="location" value="<?php echo $data['location']; ?>"><br>
    <?php else: ?>
        Name: <input type="text" name="name" value="<?php echo $data['name']; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $data['email']; ?>"><br>
        Phone: <input type="text" name="phone" value="<?php echo $data['phone']; ?>"><br>
        Location: <input type="text" name="location" value="<?php echo $data['location']; ?>"><br>
    <?php endif; ?>
    <button type="submit">Update</button>
</form>
<?php
include 'db.php'; // DB connection
$id = $_GET['id'];
$type = $_GET['type']; // product or buyer

if ($type == "product") {
    $sql = "SELECT * FROM products WHERE id=$id";
} else {
    $sql = "SELECT * FROM buyers WHERE id=$id";
}
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
?>
<!-- Prefilled Form -->
<form method="POST" action="update.php?type=<?php echo $type; ?>&id=<?php echo $id; ?>">
    <?php if ($type == "product"): ?>
        Name: <input type="text" name="name" value="<?php echo $data['name']; ?>"><br>
        Category: <input type="text" name="category" value="<?php echo $data['category']; ?>"><br>
        Price: <input type="number" step="0.01" name="price" value="<?php echo $data['price']; ?>"><br>
        Stock: <input type="number" name="stock" value="<?php echo $data['stock']; ?>"><br>
        Location: <input type="text" name="location" value="<?php echo $data['location']; ?>"><br>
    <?php else: ?>
        Name: <input type="text" name="name" value="<?php echo $data['name']; ?>"><br>
        Email: <input type="email" name="email" value="<?php echo $data['email']; ?>"><br>
        Phone: <input type="text" name="phone" value="<?php echo $data['phone']; ?>"><br>
        Location: <input type="text" name="location" value="<?php echo $data['location']; ?>"><br>
    <?php endif; ?>
    <button type="submit">Update</button>
</form>
