<?php
	//Database connection
	include('config/db_connect.php');


	if(isset($_POST['submit'])){
		//Get product info and image(file) from user input
		$id = mysqli_escape_string($conn, $_POST['id']);
		$title = mysqli_escape_string($conn, $_POST['title']);
		$price = mysqli_escape_string($conn, $_POST['price']);
		$rating = mysqli_escape_string($conn, $_POST['rating']);
		$des = mysqli_escape_string($conn, $_POST['des']);
		$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
		
		//SQL statement for inserting variables into the database
		$sql = "INSERT INTO product(id, title, price, rating, des, image) VALUES('$id', '$title', '$price', '$rating','$des','$file')";
		
	
		if(mysqli_query($conn, $sql)){	
			//Go to listing page if query successed
			header('Location: index.php');
		}
		else{
			echo '<script type="text/javascript"> alert("Failed") </script>';
		}
	}

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>

	<section class="container grey-text">
		<h4 class="center">Add a Porduct</h4>
		<form class="white" action="add.php" method="POST" enctype="multipart/form-data">
			<label>ID</label>
			<input type="text" name="id">

			<label>Title</label>
			<input type="text" name="title">

			<label>Price</label>
			<input type="text" name="price">

			<label>Rating</label>
			<input type="text" name="rating">

			<label>Description</label>
			<textarea type="text" name="des" rows="4" cols="50">
			</textarea>

			<label>Add image</label>
            <input type="file" name="image" id="image" /> 

			<div class="center">
				<input type="submit" name="submit" value="Upload" class="btn brand z-depth-0">
			</div>
		</form>
	</section>

	<?php include('templates/footer.php'); ?>

</html>