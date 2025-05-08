<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Shopping Cart Item</title>
    <style>
        .cart-item {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
        .discount {
            text-decoration: line-through;
            color: red;
        }
    </style>
</head>
<body>

<a href="index.php?page=admin">admin page</a>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="cart-item">
                <img src="https://via.placeholder.com/150" class="img-fluid" alt="Product Image">
                <h5 class="mt-2">Product Name</h5>
                <p class="price">Price: $<span id="original-price">50.00</span></p>
                <p class="discount">Discount: $<span id="discount-price">10.00</span></p>
                <p class="final-price">Final Price: $<span id="final-price">40.00</span></p>
                <button class="btn btn-primary">Add to Cart</button>
            </div>
        </div>
        <!-- You can duplicate the above col-md-4 div for more items -->
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>