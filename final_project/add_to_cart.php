<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	

</style>
</head>
<body>



<!-- MODAL -->
<div class="modal fade" id="prashu" role="dialog">
    <div class="modal-dialog">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add to Cart?</h4>
            </div>
            <div class="modal-body">
                <h4>Enter Product's unique ID which is written just above every product.<br>Are you sure you want to add this product to cart?</h4>
        

                 <form method="post" action="cart2.php">
                    <input type="text" class="form-control" placeholder="Product Unique ID" name="prod"/><br><center>
                    <button class="btn btn-primary" type="submit" value="button" name="button">Add to Cart</button></center>
                </form>


            </div>
           
        </div>
        
    </div>
</div>
<!-- MODAL ENDS -->


</body>
</html>