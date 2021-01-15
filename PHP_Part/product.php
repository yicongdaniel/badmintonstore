<?php   
    include('config/db_connect.php');
    include('templates/header.php');

    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn, $_GET['id']);
        //SQL statement for getting the specific id
        $sql = "SELECT * FROM product WHERE id = $id";
        //Get the sql result
        $result = mysqli_query($conn, $sql);
        //fetch the only result and change it into array format
        $product = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        mysqli_close($conn);
        // print_r($product); //for testting purpose
    }  
?>

<!DOCTYPE html>
<html>
    <style>
    #nav-mobile{
        margin-top: 15px;
    }
    </style>
    <br>
    <div class="container">
        <div class="row">
            <?php if($product): ?>

            <div class="col-md-6">
                <div class="img-magnifier-container">
                <div><?php echo '<img src="data:image;base64,' .base64_encode($product['image']). '" alt="image" style="width:350px; height: 350px; margin-top: 30px;" >';?></div>
                </div>
            </div>

            <div class="col-md-6">        
                <div class="medium">
                    <h3 id="title"> <?php echo htmlspecialchars($product['title']); ?> </h3>
                </div>
                <br>
                <div>
                    <h6> Price: <?php echo htmlspecialchars($product['price']); ?></h6>
                </div>
                <br>
                <div>
                    <h6> Rating: <?php echo htmlspecialchars($product['rating']); ?>/5</h6>
                </div>
                <br>
                <h5>DESCROPTION</h5>
                <div id="des" style="font-family: 'Josefin Sans', sans-serif; color: white">
                    <?php echo htmlspecialchars($product['des']); ?>
                </div>
            </div>
            <?php else: ?>
            <?php endif; ?>                 
        </div>
    </div>

    <?php include('templates/footer.php'); ?>
</html>