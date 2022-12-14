<?php 
   session_start(); 
    $arrProducts = array(

        array(
            'name'          => "Naruto",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nihil ut quis, tempore non debitis corporis ipsam. Ipsa consectetur alias earum aspernatur excepturi molestiae saepe provident molestias qui! Ipsum, aspernatur.",
            'price'         => "350",
            'photo1'        => 'a1.png',
            'photo2'        => 'a2.png',
        ),

        array(
            'name'          => "Sasuke",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nihil ut quis, tempore non debitis corporis ipsam. Ipsa consectetur alias earum aspernatur excepturi molestiae saepe provident molestias qui! Ipsum, aspernatur.",
            'price'         => "250",
            'photo1'        => 'q1.png',
            'photo2'        => 'q2.png',
        ),

        array(
            'name'          => "Madara ",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nihil ut quis, tempore non debitis corporis ipsam. Ipsa consectetur alias earum aspernatur excepturi molestiae saepe provident molestias qui! Ipsum, aspernatur.",
            'price'         => "550",
            'photo1'        => 'c2.png',
            'photo2'        => 'c1.png',
        ),
        
        array(
            'name'          => "Itachi",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nihil ut quis, tempore non debitis corporis ipsam. Ipsa consectetur alias earum aspernatur excepturi molestiae saepe provident molestias qui! Ipsum, aspernatur.",
            'price'         => "450",
            'photo1'        => 'd1.png',
            'photo2'        => 'd2.png',
        ),

        array(
            'name'          => "Kakashi",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nihil ut quis, tempore non debitis corporis ipsam. Ipsa consectetur alias earum aspernatur excepturi molestiae saepe provident molestias qui! Ipsum, aspernatur.",
            'price'         => "400",
            'photo1'        => 'e1.png',
            'photo2'        => 'e2.png',
        ),

        array(
            'name'          => "Pain",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nihil ut quis, tempore non debitis corporis ipsam. Ipsa consectetur alias earum aspernatur excepturi molestiae saepe provident molestias qui! Ipsum, aspernatur.",
            'price'         => "300",
            'photo1'        => 'f1.png',
            'photo2'        => 'f2.png',
        ),

        array(
            'name'          => "Gaara",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nihil ut quis, tempore non debitis corporis ipsam. Ipsa consectetur alias earum aspernatur excepturi molestiae saepe provident molestias qui! Ipsum, aspernatur.",
            'price'         => "500",
            'photo1'        => 'g1.png',
            'photo2'        => 'g2.png',
        ),

        array(
            'name'          => " Jiraiya ",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam nihil ut quis, tempore non debitis corporis ipsam. Ipsa consectetur alias earum aspernatur excepturi molestiae saepe provident molestias qui! Ipsum, aspernatur.",
            'price'         => "600",
            'photo1'        => 'h1.png',
            'photo2'        => 'h2.png',
        )
    );


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="zed.css">
    <title> Naruto Figures Shop | Shopping Cart</title>
</head>


<body>
<form method="post">
        <div class="container pt-5">
            <div class="row">
                <div class="col-md-10">
                    <h1><i class="fa fa-store"></i> Naruto Figures Shop</h1>
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

        <div class="row">
           <?php foreach ($arrProducts as $key => $value): ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">

                            <a href="details.php?k=<?php echo $key; ?>">
                                <img class="pic-1" src="img/<?php echo $value['photo1'];?>">
                                <img class="pic-2" src="img/<?php echo $value['photo2'];?>">
                            </a>

                            <a class="add-to-cart" href="details.php?k=<?php echo $key; ?>"><i class="fa-sharp fa-solid fa-cart-plus"></i> <b>Add to cart</b></a>
                        </div>

                        <div class="product-content">
                            <h3 class="title">
                                <b><?php echo $value['name'];?></b>
                                <span class="badge badge-dark">???<?php echo $value['price'];?></span>
                            </h3>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            </div>
        </div>
    </form>
  



    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>
</html>