<?php
require("nav.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>My Cart</h1>
            </div>
            <div class=col-lg-9>
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Serial no</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                            $total=0;
                            if(isset($_SESSION['cart']))
                            {
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                                    $sr=$key+1;
                                    //value['price']
                                    $num=$value['price'];
                                    $total=$total+$int=(int)$num;
                                    echo"
                                    <tr>
                                        <td>$sr</td>
                                        <td>$value[Item_Name]</td>
                                        <td>$value[price]</td>
                                        <td><input class='text-center' type='number' value='$value[Quantity]' min='1' max='10'></td>
                                        
                                        <td> 
                                        <form action='manage_cart.php' method='POST'>
                                        <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button>
                                        <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                        </td>
                                        </tr>
                                        ";
                                }
                            }
                        ?>


                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Total:</h4>
                    <h5 class="text-right"><?php echo $total ?></h5>
                    <br>
                    <form action="">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Cash on Delivery
                            </label>
                        </div>
                        <br>

                        <button class="btn btn-primary btn-block">Make Purchase</button>
                    </form>
                </div>

            </div>
        </div>

    </div>
</body>

</html>