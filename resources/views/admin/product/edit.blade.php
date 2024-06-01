<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
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
                <h1 class="card-title mb-4">Edit Product</h1>
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required placeholder="Enter product name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Enter product description">{{ $product->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $product->price }}" required placeholder="Enter product price">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}" required placeholder="Enter stock quantity">
                    </div>
                    <div class="form-group">
                        <label for="discount">Diskon (%)</label>
                        <input type="number" class="form-control" id="discount" name="discount" value="{{ $product->discount }}" required placeholder="Enter discount percentage">
                    </div>
                    <div class="form-group">
                        <label for="color">Warna</label>
                        <select class="form-control" id="color" name="color">
                            <option value="Merah" {{ $product->color == 'Merah' ? 'selected' : '' }}>Merah</option>
                            <option value="Hijau" {{ $product->color == 'Hijau' ? 'selected' : '' }}>Hijau</option>
                            <option value="Biru" {{ $product->color == 'Biru' ? 'selected' : '' }}>Biru</option>
                            <option value="Kuning" {{ $product->color == 'Kuning' ? 'selected' : '' }}>Kuning</option>
                            <option value="Hitam" {{ $product->color == 'Hitam' ? 'selected' : '' }}>Hitam</option>
                            <option value="Putih" {{ $product->color == 'Putih' ? 'selected' : '' }}>Putih</option>
                            <option value="Abu" {{ $product->color == 'Abu' ? 'selected' : '' }}>Abu-abu</option>
                            <option value="Coklat" {{ $product->color == 'Coklat' ? 'selected' : '' }}>Coklat</option>
                            <option value="Jingga" {{ $product->color == 'Jingga' ? 'selected' : '' }}>Jingga</option>
                            <option value="Ungu" {{ $product->color == 'Ungu' ? 'selected' : '' }}>Ungu</option>
                            <option value="Pink" {{ $product->color == 'Pink' ? 'selected' : '' }}>Pink</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                        @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" style="width: 100px; height: 100px;" class="mt-2">
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>