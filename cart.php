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

$_SESSION['totalAmount'] = 0;

if(isset($_POST['btnUpdate'])){
     $cartKeys = $_POST['hdnKey'];
     $cartSize = $_POST['hdnSize'];
     $cartQuantities = $_POST['txtQuantity'];

     if(isset($cartKeys)){
         $_SESSION['totalQuantity'] = 0;
         foreach ($cartKeys as $key => $value) {
             $_SESSION['cartItems'][$value][$cartSize[$key]] = $cartQuantities[$key];
             $_SESSION['totalQuantity'] += $cartQuantities[$key];
         }
     }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="shopping_cart.css">
    <title>Cart</title>
</head>
<body>
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-10">
                <h1><i class="fa fa-store"></i> Means Wear Shop</h1>
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
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>size</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-right">Price</th>
                                    <th class="text-right">Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($_SESSION['cartItems'])): ?>
                                    <?php foreach ($_SESSION['cartItems'] as $key => $valueSize): ?>
                                        <?php foreach ($valueSize as $keySize => $valueQuantity): ?>
                                            <?php $_SESSION['totalAmount'] += $arrProducts[$key]['price'] * $valueQuantity; ?>
                                            <input type="hidden" name="hdnKey[]" value="<?php echo $key; ?>">
                                            <input type="hidden" name="hdnSize[]" value="<?php echo $keySize; ?>">
                                            <tr>
                                                <td><img src="<?php echo 'img/' . $arrProducts[$key]['photo1']; ?>" class="img img-thumbnail" style="height: 50px;"></td>
                                                <td><?php echo $arrProducts[$key]['name']; ?></td>
                                                <td><?php echo $keySize; ?></td>
                                                <td><input type="number" name="txtQuantity[]" class="form-control text-center" value="<?php echo $valueQuantity; ?>" min="1" max="100" required></td>
                                                <td class="text-right">₱ <?php echo number_format($arrProducts[$key]['price'], 2); ?></td>
                                                <td class="text-right">₱ <?php echo number_format($arrProducts[$key]['price'] * $valueQuantity, 2); ?></td>
                                                <td class="text-right"><a href="remove.php?k=<?php echo $key; ?>&s=<?php echo $keySize; ?>&q=<?php echo $valueQuantity; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
                                               </tr>
                                        <?php endforeach; ?>    
                                    <?php endforeach; ?>

                                            <tr>
                                               <td colspan="2"></td> 
                                               <td><strong>Total</strong></td>
                                               <td class="text-center"><?php echo $_SESSION['totalQuantity']; ?></td>
                                               <td class="text-right">----</td>
                                               <td class="text-right"><strong><?php echo number_format($_SESSION['totalAmount'], 2); ?></strong></td>
                                               <td class="text-right">----</td>
                                            </tr>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="7 text-center"> Cart is Still Empty</td>
                                    </tr>

                                <?php endif; ?>    
                            </tbody>
                        </table>
                    </div>
                </div>

                <?php if(isset($_SESSION['cartItems'])): ?>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <a href="index.php" class="btn btn-danger btn-lg btn-block"><i class="fa fa-shopping-bag"></i> Continue Shopping</a>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <button type="submit" name="btnUpdate" class="btn btn-success btn-lg btn-block"><i class="fa fa-edit"></i> Update</button>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <a href="clear.php" class="btn btn-primary btn-lg btn-block"><i class="fas fa-sign-out-alt"></i> Check Out</a>
                            </div>
                        </div>
                    </div>
                <?php else:?>
                    <div class="col-sm-12 col-md-4">
                        <a href="index.php" class="btn btn-danger btn-lg btn-block"><i class="fa fa-shopping-bag"></i> Continue Shopping</a>
                    </div>
                <?php endif; ?>    
            </div>
        </form>
    </div>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>

