<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-6">
        <div class="row">
            <div class="col-sm-5">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{ $product->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="featureImage" class="form-label">Slug</label>
                        <input type="file" class="form-control" id="formGroupExampleInput2" name="slug" value="{{ $product->featureImage}}">
                    </div>
                    <div class="mb-3">
                        <label for="images" class="form-label">Status</label>
                        <input type="file" class="form-control" id="formGroupExampleInput2" name="status" value="{{ $product->images}}">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Image</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="image" value="{{ $product->status}}">
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Image</label>
                        <input type="number" class="form-control" id="formGroupExampleInput2" name="image" value="{{ $product->category_id}}">
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</html>