<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your E-Commerce Website</title>
    <style>
        /* Add your existing styles here */
    </style>
</head>
<body>

    <!-- Include the Navigation Bar -->
    @include('layouts.app')

    <!-- Header Section -->
    <header>
        <h1>Products</h1>
    </header>

   <!-- Product Section -->
   <section class="products">
        <!-- Product 1 -->
        <div class="product">
            <img src="https://s.yimg.com/os/creatr-uploaded-images/2022-10/bd82fca0-4921-11ed-8dbf-1be229b913c8" alt="Product 1">
            <h2 style="margin-top: 10px; margin-bottom: 10px;">Wirless Gaming Mouse</h2>
            <p>Model: WG10 Raigor II
                Type: 2.4Ghz Wireless
                Application: Desktop, Laptop
                Interface: Nano USB 2.0 Receiver
                Battery: AA Battery with Power Saver
            </p>
            <p style="margin-top: 10px; margin-bottom: 10px;">Price: 990.10৳</p>
            <div class="order-cart">
                <button class="order">Order Now</button>
                <button class="cart">Add to Cart</button>
            </div>
        </div>

        <!-- Product 2 -->
        <div class="product">
            <img src="https://i.pcmag.com/imagery/articles/018wng96gkZXuqdQHjo0AbL-7.fit_lim.size_1600x900.v1670858519.jpg" alt="Product 2">
            <h2 style="margin-top: 10px; margin-bottom: 10px;">Gaming keyboard</h2>
            <p>RGB Membrane Gaming keyboard
                Power Consumption: 40mA-120mA
                Working Voltage. DC 4.5-5.3v
                Size: 45mm (w) x 17mm (L) x 4.1mm (H)
                Weight: 1kg almost
                Also, you can customize your RGB control
            </p>
            <p style="margin-top: 10px; margin-bottom: 10px;">Price: 3490.10৳</p>
            <div class="order-cart">
                <button class="order">Order Now</button>
                <button class="cart">Add to Cart</button>
            </div>
        </div>

        <!-- Add more products (Product 3 to Product 15) as needed -->
        <!-- Product 3 -->
        <div class="product">
            <img src="https://www.geekawhat.com/wp-content/uploads/2022/05/3070-High-End-Build-Feature-Image.jpg">
            <h2 style="margin-top: 10px; margin-bottom: 10px;">Gaming Desktop</h2>
            <p>Thermaltake LCGS View i4770 Gaming Desktop (Intel® Core™ i7-14700KF, 32GB DDR5 5600MT/s, NVIDIA® GeForce RTX™ 4070, 1TB NVMe M.2, WiFi, Windows 11) V35S-B760-470-LCS</p>
            <p style="margin-top: 10px; margin-bottom: 10px;">Price: 89,490.10৳</p>
            <div class="order-cart">
                <button class="order">Order Now</button>
                <button class="cart">Add to Cart</button>
            </div>
        </div>

        <!-- Add more products as needed -->

    </section>

</body>
</html>
