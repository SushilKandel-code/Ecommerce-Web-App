<!-- <?php
// echo "<pre>";
// print_r($products);
// echo "</pre>";
?> -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Products</title>
        <link rel="stylesheet" href="app.css">
    </head>
    <div class="container">
    <body class="antialiased">
        <h1>Products</h1>
        @foreach($products as $product)
            <article>
            <h2><a href='/product'>{{ $product['product_name'] }}</a></h2>
            <p> {{ $product['product_description'] }} </p>
            </article>
        @endforeach

    </body>

    </div>

</html>
