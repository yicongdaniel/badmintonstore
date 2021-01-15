<?php include('config/db_connect.php');?>
<?php include('templates/header.php'); ?>

<!DOCTYPE html>
<html>
    <style>
    #nav-mobile{
        margin-top: 15px;
    }
    </style>

    <?php
    if(isset($_POST['submit-search'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        //SQL statement for user's input with title
        $sql = "SELECT * FROM product WHERE title LIKE '%$search%' OR price LIKE '%$search%' OR rating LIKE '%$search%' ";
        //Get the results
        $result = mysqli_query($conn,$sql);
        $queryResult = mysqli_num_rows($result); ?>

    <div class="container">
		<div class="row">
            <!-- if there are results using while loop to print all the product's info -->
            <?php if($queryResult > 0){
                while($element = mysqli_fetch_assoc($result)){ ?>
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
        <?php } 
        else{ ?>
            <h5 style="color: white"> Sorry, no result matching! </h5>
        <?php }
     }
include('templates/footer.php'); ?>
</html>