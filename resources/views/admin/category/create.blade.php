{{-- 

@extends("admin/pages/category");
@section('content'); --}}

  


    <div class="container row">
        <div class="col-md-6">
            <h1>Add Category</h1>
            <form action="{{ route('categories.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="Category Name"></label>
                    <input type="text" class="form-control" name="category_name" placeholder="Category Name">
                </div>
                <div class="form-group">
                    <label for="Category Description"></label>
                    <input type="text" class="form-control" name="category_description" placeholder="Category Description">
                </div>
                <div class="form-group">
                  
                    <input type="submit" class="btn btn success" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
    
    {{-- @endsection --}}
   
   
