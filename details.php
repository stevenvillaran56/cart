<?php 
   session_start(); 
    $arrProducts = array(
        array(
            'name'          => "Pop Art Print Jacket",
            'description'   => "lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..",
            'price'         => "800",
            'photo1'        => 'produc1A.jpg',
            'photo2'        => 'produc1B.jpg',
        ),
        array(
            'name'          => "Blue Zip Up Jacket",
            'description'   => "lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..",
            'price'         => "650",
            'photo1'        => 'produc2A.jpg',
            'photo2'        => 'produc2B.jpg',
        ),
        array(
            'name'          => "Helographic Zip Up Jacket ",
            'description'   => "lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..",
            'price'         => "650",
            'photo1'        => 'produc3A.jpg',
            'photo2'        => 'produc3B.jpg',
        ),
        array(
            'name'          => "Graphic Striped Vasity Jacket",
            'description'   => "lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..",
            'price'         => "650",
            'photo1'        => 'produc4A.jpg',
            'photo2'        => 'produc4B.jpg',
        ),
        array(
            'name'          => "Half Zip Hooded Jacket",
            'description'   => "lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..",
            'price'         => "650",
            'photo1'        => 'produc5A.jpg',
            'photo2'        => 'produc5B.jpg',
        ),
        array(
            'name'          => "Letter Patched Varsity Jacket",
            'description'   => "lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..",
            'price'         => "650",
            'photo1'        => 'produc6A.jpg',
            'photo2'        => 'produc6B.jpg',
        ),
        array(
            'name'          => "Brown Patched Varsity Jacket",
            'description'   => "lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..",
            'price'         => "650",
            'photo1'        => 'produc7A.jpg',
            'photo2'        => 'produc7B.jpg',
        ),
        array(
            'name'          => " Graphic Contrast Trim Jacket ",
            'description'   => "lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book..",
            'price'         => "650",
            'photo1'        => 'produc8A.jpg',
            'photo2'        => 'produc8B.jpg',
        )
    );
    if(isset($_POST['btnProcess'])){
        if (isset($_SESSION['cartItems'][$_POST['hdnKey']][$_POST['radSize']]))
            $_SESSION['cartItems'][$_POST['hdnKey']][$_POST['radSize']] += $_POST['txtQuantity'];
        else
           $_SESSION['cartItems'][$_POST['hdnKey']][$_POST['radSize']] = $_POST['txtQuantity'];

       $_SESSION['totalQuantity'] += $_POST['txtQuantity'];
       header("location: confirm.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="shopping_cart.css">
	<title>Details</title>
</head>
<body>
	<div class="container pt-3">
    	<div class="row">
                <div class="col-md-10">
                    <h1><i class="fa fa-store"></i> Mens Wear Shop</h1>
                </div>
                <div class="col-md-2">
                    <a href="cart.php" class="btn btn-primary">
                        <i class="fa fa-shopping-cart"></i> Cart
                        <?php 
                        if(isset($_SESSION['totalQuantity']))
                            echo '<span class="badge badge-light">' . $_SESSION['totalQuantity'] . '</span>';
                        else
                            echo '<span class="badge badge-light">0</span>';
                    ?>    
                    </a>
                </div>
            </div>
        <hr>
    
    <form method="post"> 
        <div class="row">
            <?php if(isset($_GET['k']) && isset($arrProducts[$_GET['k']])): ?> 
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="product-grid card mb-4">
                        <div class="product-image">
                            <a href="details.php?k=<?php echo $key; ?>"></a>
                                <img class="pic-1" src="img/<?php echo $arrProducts[$_GET['k']]['photo1'];?>">
                                <img class="pic-2" src="img/<?php echo $arrProducts[$_GET['k']]['photo2'];?>">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="product-content">
                        <h3 class="title">
                            <?php echo $arrProducts[$_GET['k']]['name']; ?>
                            <span class="badge badge-dark">₱<?php echo $arrProducts[$_GET['k']]['price']; ?></span>
                        </h3>
                        <p><?php echo $arrProducts[$_GET['k']]['description']; ?></p>
                        <hr>
                        <input type="hidden" name="hdnKey" value="<?php echo $_GET['k']; ?>">
                        <h3>Select Size: </h3>
                        <input type="radio" name="radSize" id="radXS" value="XS"> <label for="radXS" class="pr-3">XS</label>
                        <input type="radio" name="radSize" id="radSM" value="SM"> <label for="radSM" class="pr-3">SM</label>
                        <input type="radio" name="radSize" id="radMD" value="MD"> <label for="radMD" class="pr-3">MD</label>
                        <input type="radio" name="radSize" id="radLG" value="LG"> <label for="radLG" class="pr-3">LG</label>
                        <input type="radio" name="radSize" id="radXL" value="XL"> <label for="radXL" class="pr-3">XL</label>
                        <br>
                        <hr>
                        <h3 class="title"></h3>
                        <h3>Enter Quantity: </h3>
                        <input type="number" name="txtQuantity" placeholder="0" class="form-control" min="1" max="100" required>
                        <br>
                        <button type="submit" name="btnProcess" class="btn btn-dark btn-lg"><i class="fa fa-check-circle"></i> Confirm Product Purchase</button>
                        <a href="index.php" class="btn btn-danger btn-lg"><i class="fa fa-left-arrow"></i> Cancel /Go Back</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </form>

   </div> 
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</body>
</html>