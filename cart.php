<html lang="en">
<head>
    <meta charset="UTF=8">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Cart</title>
    <link rel="stylesheet" href="cart.css">
    

</head>
<body>
    <div class="header">
        <input type="text" name="search" placeholder="Search..">
    <div class="container">
        <div class="navbar">
            <div class="main">
                <B>
                Bluebeats
            </B>
            </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="category.html">Categories</a></li>
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="login.php">Logout</a></li>
                
            </ul>
        </nav>
        </div>

    </div>
</div>

<!----cart item details--------->

<h1 class="title"><center>CART</center></h1>

<div class="small-container cart-page">

    <table>
        <tr>
            <th><b>Product</b></th>
            <th><b>Quantity</b></th>
            <th><b>Subtotal</b></th>
        </tr>
        <tr>
            <td>Vault RG1 Soloist Electric Guitar
                <br>
            <a href="#">Remove</a>
            </td>
            <td><input type="number" value="1"></td>
            <td>Rs. 9,999 </td>
        </tr>
         <tr>
            <td>Akai Pro MPK61 61-Key MIDI Controller Keyboard
                <br>
            <a href="#">Remove</a>
            </td>
            <td><input type="number" value="1"></td>
            <td>Rs. 44,397</td>
        </tr>
         <tr>
            <td>Samson C01 Large Diaphragm XLR Condenser Microphone
                <br>
            <a href="#">Remove</a>
            </td>
            <td><input type="number" value="1"></td>
            <td>Rs. 17,500</td>
        </tr>
    </table>
</div>

<div class="sub-total">
    <table>
        <tr>
        <td>Subtotal</td>
        <td>Rs. 71,896 </td>
    </tr>
    </table>
</div>

<div class="overlay">
                    <a href="#checkout.php" class="checkout">CHECKOUT</a>
                </div>


<footer>Copyright © 2020 BLUEBEATS.COM.

</footer>

</body>
</html>
