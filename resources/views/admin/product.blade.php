@extends('admin.base')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-5">
            @if(session('status'))
            <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="name">
                    <span class="text-danger">@error('name'){{$message}}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="featureImage" class="form-label">Feature Image</label>
                    <input type="file" class="form-control" id="formGroupExampleInput2" onchange="loadfeatureImage(event)" name="featureImage">
                    <span class="text-danger">@error('featureImage'){{$message}}@enderror</span>

                    <img id="featureImage" width="200">
                </div>
                <!-- <div class="mb-3">
                        <img id="featureImage" width="200">
                    </div> -->
                <div class="mb-3">
                    <label for="Images" class="form-label">Images</label>
                    <input type="file" class="form-control" id="formGroupExampleInput2" onchange="loadImages(event)" name="images" multiple>
                    <span class="text-danger">@error('images'){{$message}}@enderror</span>

                    <img id="images" width="200">
                </div>
                <!-- <div class="mb-3">
                        <img id="images" width="200">
                    </div> -->
                <!-- <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="status">
                    </div> -->
                <label for="status" class="form-label"> Status</label>

                <div class="form-check">
                    <input class="form-check-input" type="radio" value="Available" name="status" id="formGroupExampleInput2">
                    <label class="form-check-label" for="status">
                        Available
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" value="Not Available" name="status" id="formGroupExampleInput2" checked>
                    <label class="form-check-label" for="status">
                        Not Available
                    </label>
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category Id</label>
                    <select name="category_id" id="formGroupExampleInput2">
                        @foreach($categories as $cat)
                        <option value="{{$cat->id}}" class="form-control">{{$cat->name}}</option>
                        @endforeach
                    </select>
                    <!-- <label for="category_id" class="form-label">Category</label>
                        <input type="number" class="form-control" id="formGroupExampleInput2" name="category"> -->
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
        <div class="col-sm-7">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Feature Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Category</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td><img src="{{ asset('uploads/products/'. $product->featureImage) }}"></td>
                        <td>{{$product->status}}</td>
                        <td>{{$product->category_id}}</td>
                        <td>
                            <a href="{{url('/admin/product/edit', $product->id)}}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{url('/admin/product/delete', $product->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var loadfeatureImage = function(event) {
        var featureImage = document.getElementById('featureImage');
        featureImage.src = URL.createObjectURL(event.target.files[0]);
    };

    var loadImages = function(event) {
        var images = document.getElementById('images');
        images.src = URL.createObjectURL(event.target.files[1]);
    }
</script>
@endsection