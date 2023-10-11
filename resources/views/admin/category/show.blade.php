@extends("admin/layout/master")
@section('title','Show Details')
@section('content')

      {{-- >=========== single data show ==============< --}}
<div class="container row ">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('categories.index') }}" class="btn btn-info btn-sm float-end mb-3">All Categories</a>
            
                <div>
                    <table class="table table-bordered table-hover table-striped"> 
                        <tr> 
                            <th>
                                SL.
                            </th>
                            <th>
                                Category_Name
                            </th>
                            <th>
                                Category_description
                            </th>
                        </tr>
                        <tr> 
                            <td> Category_id : {{ $data->id }}</td>
                            <td>Category_Name : {{ $data->category_name }}</td>
                            <td>Category_description : {{ $data->category_description }}</td>
                        </tr>
                       
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection