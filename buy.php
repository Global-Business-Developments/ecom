<?php 
include_once('inc_db.php');
$id = $_GET['id'];
if (isset($id)) {
	?>
 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>মাধবী সেলস মার্কেটিং || Ecommerce Website || Online Store ||</title>
	 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: coral;">
    <a class="navbar-brand" href="index.php"> &nbsp;&nbsp;&nbsp; মাধবী সেলস মার্কেটিং</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin/admin.php">Admin</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Search product" aria-label="Search" name="search" required>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> &nbsp;&nbsp;&nbsp;
        <a href="cart.php">
          <i class="fa fa-shopping-cart" style="font-size:30px;color: black;"></i><span style="margin-left: -25px;color:white;background: red;border-radius: 50%;padding: 0 6px;">5</span>
        </a>
        &nbsp;<a href="customer.php">
          <i class="fa-solid fa-user" style="font-size:30px;color: black;"></i>
        </a>
    </div>
</nav>
<br><br><br>
<?php 

$sql = "SELECT * FROM `body_product` WHERE `id`='$id'";
$query = mysqli_query($db,$sql);
$data = mysqli_fetch_assoc($query);
 $data['id']."<br>";
 $data['name']."<br>";
 $data['image']."<br>";
 $data['price']."<br>";
 $data['discount']."<br>";
 $total = $data['price']-$data['discount'];
 ?>
<div class="container">
	<table border="1">
		<tr>
			<caption>Product's Details</caption>
			<th>Id</th>
			<th>Name</th>
			<th>Price</th>
			<th>Discount</th>
			<th>Total </th>
		</tr>
		<tr>
			<form method="POST" action="paytmpg.php">
			<td><?php echo $data['id']; ?></td>
			<td><?php echo $data['name']; ?></td>
			<td><?php echo $data['price']; ?></td>
			<td><?php echo $data['discount']; ?></td>
			<td><?php echo $data['price'] - $data['discount']; ?></td>
		</tr>
		<tr>
			<td colspan="5"> <input type="submit" name="submit" value="Pay <?php echo $total; ?>" style="margin-left: 26px;">
		</form>
    	</td>
		</tr>
	</table>
</div>

<!-- this is bootstrap slider -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body></html>
<?php
}else{
header("location:index.php"); 
}
?>
