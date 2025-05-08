<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Admin Page</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Add Product</h1>
        <form method="POST" action="index.php?page=add">
            <div class="form-group">
                <label for="productName">Product Name</label>
                <input type="text" class="form-control" id="productName" name="name">
            </div>
            <div class="form-group">
                <label for="productPrice">Price</label>
                <input type="number" class="form-control" id="productPrice" name="price">
            </div>

            <div class="form-group">
                <label for="productDescription">Description</label>
                <textarea class="form-control" id="productDescription" name="desc" ></textarea>
            </div>


            <div class="form-group">
                <label for="productImage">Image URL</label>
                <input type="text" class="form-control" id="productImage" name="image" >
            </div>

            <div class="form-group">
                <label for="productPrice">descount</label>
                <input type="text" class="form-control" id="productPrice" name="discount">
            </div>





            <button type="submit" class="btn btn-success">Add Product</button>

        </form>


        <div class="text-right mt-3">
            <a href="index.php?page=home" class="btn btn-secondary">Back to Market</a>
        </div>
    </div>
</body>
</html>