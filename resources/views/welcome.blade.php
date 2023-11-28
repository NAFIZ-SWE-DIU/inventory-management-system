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
            <h2>Product 1</h2>
            <p>Description of Product 1.</p>
            <p>Price: $19.99</p>
            <button>Add to Cart</button>
        </div>

        <!-- Product 2 -->
        <div class="product">
            <img src="https://i.pcmag.com/imagery/articles/018wng96gkZXuqdQHjo0AbL-7.fit_lim.size_1600x900.v1670858519.jpg" alt="Product 2">
            <h2>Product 2</h2>
            <p>Description of Product 2.</p>
            <p>Price: $29.99</p>
            <button>Add to Cart</button>
        </div>

        <!-- Add more products (Product 3 to Product 15) as needed -->
        <!-- Product 3 -->
        <div class="product">
            <img src="https://www.geekawhat.com/wp-content/uploads/2022/05/3070-High-End-Build-Feature-Image.jpg">
            <h2>Product 3</h2>
            <p>Description of Product 3.</p>
            <p>Price: $799.99</p>
            <button>Add to Cart</button>
        </div>

        <!-- Add more products as needed -->

    </section>

    <!-- Facebook Link Section -->
    <section class="facebook-link">
        <p>Connect with us on Facebook:</p>
        <a href="https://www.facebook.com" target="_blank">Visit our Facebook Page</a>
    </section>

</body>
</html>
