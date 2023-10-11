@extends("admin/layout/master")
@section('content')


    <div class="container row">
        <div class="col-md-6">
            <h1>Add Category</h1>
            <form action="{{ route('categories.update',$data->id)}}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="Category Name"></label>
                    <input type="text" class="form-control" name="category_name" value="{{ $data->category_name }}" placeholder="Category Name">
                </div>
                <div class="form-group">
                    <label for="Category Description"></label>
                    <input type="text" class="form-control" name="category_description" value="{{ $data->category_description }}" placeholder="Category Description">
                </div>
                <div class="form-group">
                  
                    <input type="submit" class="btn btn-success" name="submit" value="Update">
                </div>
            </form>
        </div>
    </div>
    
    @endsection