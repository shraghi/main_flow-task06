<form method="GET" action="search.php">
    <input type="text" name="keyword" placeholder="Search by name, category, location...">
    <select name="type">
        <option value="products">Products</option>
        <option value="buyers">Buyers</option>
    </select>
    <button type="submit">Search</button>
    <a href="search.php">Reset</a>
</form>
   

<?php
include 'db.php';

$type = $_GET['type'] ?? 'products';
$keyword = $_GET['keyword'] ?? '';

if ($type == "products") {
    $sql = "SELECT * FROM products 
            WHERE name LIKE '%$keyword%' 
            OR category LIKE '%$keyword%' 
            OR location LIKE '%$keyword%'";
} else {
    $sql = "SELECT * FROM buyers 
            WHERE name LIKE '%$keyword%' 
            OR email LIKE '%$keyword%' 
            OR location LIKE '%$keyword%'";
}

$result = mysqli_query($conn, $sql);
?>

<table border="1">
<tr>
    <?php if ($type == "products"): ?>
        <th>Name</th><th>Category</th><th>Price</th><th>Stock</th><th>Location</th><th>Actions</th>
    <?php else: ?>
        <th>Name</th><th>Email</th><th>Phone</th><th>Location</th><th>Actions</th>
    <?php endif; ?>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <?php if ($type == "products"): ?>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['category']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['stock']; ?></td>
        <td><?php echo $row['location']; ?></td>
    <?php else: ?>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['location']; ?></td>
    <?php endif; ?>
    <td>
        <a href="edit.php?type=<?php echo $type; ?>&id=<?php echo $row['id']; ?>">Edit</a> |
        <a href="delete.php?type=<?php echo $type; ?>&id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>
</table>
