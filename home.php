<?php
require("nav.php");

?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Open+Sans:wght@300;400&family=Poppins:wght@400;500;600&family=Roboto&display=swap');
*{
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    scroll-padding-top: 2rem;
    scroll-behavior: smooth;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
}
:root{
    --main-color: #fd4646;
    --text-color: #171427;
    --bg-color: #fff;
}
img{
    width: 100%;
}
body{
    color: var(--text-color);
}
.container{
    max-width: 1068px;
    margin: auto;
    width: 100%;
}
section{
    padding: 4rem 0 3rem;
}
header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: var(--bg-color);
    box-shadow: 0 1px 4px hsl(0 4% 15% / 10%);
    z-index: 100;
}
.nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 0;
}
.logo{
    font-size: 1.1rem;
    color: var(--text-color);
    font-weight: 400;
}
#cart-icon{
    font-size: 1.8rem;
    cursor: pointer;
}
.cart{
   position: fixed;
   top: 0;
   right: 0;
   width: 360px;
   min-height: 100vh;
   padding: 20px;
   background: var(--bg-color);
   box-shadow: -2px 0 4px hsl(0 4% 15% / 10%); 
}
ul{
    list-style-type: none;
}
li{
    display: inline;
    text-decoration: none;
}
a{
    float: left;
    color: var(--text-color);
}
#login{
    float: left;
}
.section-title{
    font-size: 1.5rem;
    font-weight: 600;
    text-align: center;
    margin-bottom: 1.5rem;
}
.shop{
    margin-top: 2rem;
}
.shop-content{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, auto));
    gap: 1.5rem; 
}
.product-box{
    position: relative;
}
.product-box:hover{
    padding: 10px;
    border: 1px solid var(--text-color);
    transition: 0.4s;
}
.product-img{
    width: 100%;
    height: auto;
    margin-bottom: 0.5rem;
}
.product-title{
    font-size: 1.1rem;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 0.5rem;
}
.price {
    font-weight: 500;
}
.add-cart{
    position: absolute;
    bottom: 0;
    right: 0;
    background: var(--text-color);
    color: var(--bg-color);
    padding: 10px;
    cursor: pointer;
}
.add-cart:hover{
    background: hsl(249, 32%, 17%);
}
</style>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/banner1.png" class="d-block w-100" alt="shirts" width="988" height="500">
        </div>
        <div class="carousel-item">
            <img src="images/banner2.jpg" class="d-block w-100" alt="shirts" width="988" height="500">
        </div>
        <div class="carousel-item">
            <img src="images/banner3.jpg" class="d-block w-100" alt="shirts" width="988" height="500">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<section class="shop container">
        <h2 class="section-title">Men's Fashion</h2>
        <div class="shop-content">
        <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="img/product1.jpg" alt="" class="product-img">
                <div class="card-body text center">
                <h2 class="product-title">AEROREADY SHIRT</h2>
                <p class="card-text"><span class="price">25</span><p>
                <button type="submit" name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="AEROREADY SHIRT">
                <input type="hidden" name="price" value="25">
                
            </div>
        </form>
            </div>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="img/product2.jpg" alt="" class="product-img">
                <div class="card-body text center">
                <h2 class="product-title">BLUETOOTH HEADSET</h2>
               <p> <span class="price">100</span><p>
                 <button type="submit" name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="AEROREADY SHIRT">
                <input type="hidden" name="price" value="100">
            </div>
            </form>
            </div>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="img/product3.jpg" alt="" class="product-img">
                <div class="card-body text center">
                <h2 class="product-title">HOODED PARKA</h2>
                <p><span class="price">45</span><p>
                <button type="submit" name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="HOODED PARKA">
                <input type="hidden" name="price" value="45">
            </div>
            </form>
            </div>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="img/product4.jpg" alt="" class="product-img">
                <div class="card-body text center">
                <h2 class="product-title">STRAW METAL BOTTLE</h2>
                <p><span class="price">24</span><p>
                <button type="submit" name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="STRAW METAL BOTTLE">
                <input type="hidden" name="price" value="24">
            </div>
            </form>    
            </div>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="img/product5.jpg" alt="" class="product-img">
                <div class="card-body text center">
                <h2 class="product-title">SILVER METAL SUNGLASSES</h2>
               <p> <span class="price">50</span><p>
               <button type="submit" name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="SILVER METAL SUNGLASSES">
                <input type="hidden" name="price" value="50">
            </div>
            </form>   
            </div>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                
                <img src="img/product6.jpg" alt="" class="product-img">
                <div class="card-body text center">
                <h2 class="product-title">BLACK HAT</h2>
               <p> <span class="price">50</span><p>
                <button type="submit" name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="BLACK HAT">
                <input type="hidden" name="price" value="50">
            </div>
            </form>
            </div>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="img/product7.jpg" alt="" class="product-img">
                <div class="card-body text center">
                <h2 class="product-title">BACKPACK</h2>
                <p><span class="price">70</span><p>
                <button type="submit" name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="BACKPACK">
                <input type="hidden" name="price" value="70">
            </div>
            </form>
            </div>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="img/product8.jpg" alt="" class="product-img">
                <div class="card-body text center">
                <h2 class="product-title">ULTRABOOST 22</h2>
                <p><span class="price">50</span><p>
                <button type="submit" name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="ULTRABOOST 22">
                <input type="hidden" name="price" value="50">
            </div>
            </form>
            </div>
        </div>
    </section>
    
    <section class="shop container">
        <h2 class="section-title">Girl's Fashion</h2>
        <div class="shop-content">
        <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="img/product1.jpg" alt="" class="product-img">
                <div class="card-body text center">
                <h2 class="product-title">AEROREADY SHIRT</h2>
                <p class="card-text"><span class="price">25</span><p>
                <button type="submit" name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="AEROREADY SHIRT">
                <input type="hidden" name="price" value="25">
                
            </div>
        </form>
            </div>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="img/product2.jpg" alt="" class="product-img">
                <div class="card-body text center">
                <h2 class="product-title">BLUETOOTH HEADSET</h2>
               <p> <span class="price">100</span><p>
                 <button type="submit" name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="AEROREADY SHIRT">
                <input type="hidden" name="price" value="100">
            </div>
            </form>
            </div>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="img/product3.jpg" alt="" class="product-img">
                <div class="card-body text center">
                <h2 class="product-title">HOODED PARKA</h2>
                <p><span class="price">45</span><p>
                <button type="submit" name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="HOODED PARKA">
                <input type="hidden" name="price" value="45">
            </div>
            </form>
            </div>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="img/product4.jpg" alt="" class="product-img">
                <div class="card-body text center">
                <h2 class="product-title">STRAW METAL BOTTLE</h2>
                <p><span class="price">24</span><p>
                <button type="submit" name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="STRAW METAL BOTTLE">
                <input type="hidden" name="price" value="24">
            </div>
            </form>    
            </div>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="img/product5.jpg" alt="" class="product-img">
                <div class="card-body text center">
                <h2 class="product-title">SILVER METAL SUNGLASSES</h2>
               <p> <span class="price">50</span><p>
               <button type="submit" name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="SILVER METAL SUNGLASSES">
                <input type="hidden" name="price" value="50">
            </div>
            </form>   
            </div>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                
                <img src="img/product6.jpg" alt="" class="product-img">
                <div class="card-body text center">
                <h2 class="product-title">BLACK HAT</h2>
               <p> <span class="price">50</span><p>
                <button type="submit" name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="BLACK HAT">
                <input type="hidden" name="price" value="50">
            </div>
            </form>
            </div>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="img/product7.jpg" alt="" class="product-img">
                <div class="card-body text center">
                <h2 class="product-title">BACKPACK</h2>
                <p><span class="price">70</span><p>
                <button type="submit" name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="BACKPACK">
                <input type="hidden" name="price" value="70">
            </div>
            </form>
            </div>
            <form action="manage_cart.php" method="POST">
            <div class="product-box">
                <img src="img/product8.jpg" alt="" class="product-img">
                <div class="card-body text center">
                <h2 class="product-title">ULTRABOOST 22</h2>
                <p><span class="price">50</span><p>
                <button type="submit" name="Add_To_Cart"class="btn btn-info">Add to Cart</button>
                <input type="hidden" name="Item_Name" value="ULTRABOOST 22">
                <input type="hidden" name="price" value="50">
            </div>
            </form>
            </div>
        </div>
    </section>