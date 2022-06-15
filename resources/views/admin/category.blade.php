@extends('admin.base')
@section('content')
<div class="container mt-4">
        <div class="row">
            <div class="col-sm-5">
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="name">
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="slug">
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
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="formGroupExampleInput2" onchange="loadFile(event)" name="image">
                        <span class="text-danger">@error('image'){{$message}}@enderror</span>
                    </div>
                    <div class="mb-3">
                        <img id="output" width="200">
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
                            <th scope="col">Status</th>
                            <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $cat)
                        <tr>
                            <th scope="row">{{$cat->id}}</th>
                            <td>{{$cat->name}}</td>
                            <td>{{$cat->status}}</td>
                            <td>{{$cat->image}}</td>
                            <td>
                                <a href="{{url('/admin/category/edit', $cat->slug)}}" class="btn btn-info btn-sm">Edit</a>
                                <a href="{{url('/admin/category/delete', $cat->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>

@endsection

