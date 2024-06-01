<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            max-width: 600px;
            margin: auto;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title mb-4">Add Product</h1>
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required placeholder="Enter product name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Enter product description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price (Rp)</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" required placeholder="Enter product price">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" required placeholder="Enter stock quantity">
                    </div>
                    <div class="form-group">
                        <label for="discount">Diskon (%)</label>
                        <input type="number" class="form-control" id="discount" name="discount" required placeholder="Enter discount percentage">
                    </div>
                    <div class="form-group">
                        <label for="color">Warna</label>
                        <select class="form-control" id="color" name="color">
                            <option value="Merah">Merah</option>
                            <option value="Hijau">Hijau</option>
                            <option value="Biru">Biru</option>
                            <option value="Kuning">Kuning</option>
                            <option value="Hitam">Hitam</option>
                            <option value="Putih">Putih</option>
                            <option value="Abu">Abu-abu</option>
                            <option value="Coklat">Coklat</option>
                            <option value="Jingga">Jingga</option>
                            <option value="Ungu">Ungu</option>
                            <option value="Pink">Pink</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>