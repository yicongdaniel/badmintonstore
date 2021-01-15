<?php
	//Database connection
	include('config/db_connect.php');
	//SQL statement for selecting all products
	$sql = 'SELECT * FROM product';
	//Get the resule
	$result = mysqli_query($conn, $sql);
	//Fetch the results as an array
	$product = mysqli_fetch_all($result, MYSQLI_ASSOC);
	// print_r($product); //For dubug purpose
	
?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

    <div class="container">
		<div class="row">
			<!-- Loop through every element in the product array -->
			<?php foreach($product as $element){ ?>

				<div class="col s6 md3">
					<div class="card z-depth-0">
						<div class="card-content center">
							<!-- Listing product image and info when updated -->
							<a href="product.php?id=<?php echo $element['id']; ?>" style="text-decoration: none">
								<div><?php echo '<img src="data:image;base64,' .base64_encode($element['image']). '" alt="image" style="width:250px; height: 250px;" >';?></div>
								<h5 style="color: black"><?php echo htmlspecialchars($element['title']); ?></h5>
								<h6 style="color: black">Price: <?php echo htmlspecialchars($element['price']); ?></h6>
								<h7 style="color: black">Rating: <?php echo htmlspecialchars($element['rating']); ?>/5</h7>
							</a>
							
						</div>
					</div>
				</div>

			<?php } ?>

		</div>
	</div>


	<?php include('templates/footer.php'); ?>

</html>