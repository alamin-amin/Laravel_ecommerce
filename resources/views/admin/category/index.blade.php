@extends('admin/layout/master')
@section('content')

<div class="container pt-4">

    <h3>Student list</h3>
    @if (session()->has('success'))
    <div class="alert alert-info">
        <b>{{ session()->get('Success') }} </b>
    </div>   
    @endif

    <a href="{{route('categories.create')}}" class="btn btn-info float-end mb-2"> Add Student</a>
    <table class="table table-bordered table-hover text-center">
        <thead>
          <tr>
            <th scope="col">SL.</th>
            <th scope="col">First nmae</th>
            <th scope="col">Age</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $dt ) 
          <tr>
            <td>{{ $dt->id }}</td>
            <td>{{ $dt->category_name }}</td>
            <td>{{ $dt->category_description }}</td>
            <td>
                <a href="{{ route('categories.show',$dt->id) }}" class="btn btn-primary"> <i class="fa-solid fa-eye-low-vision"></i></a>
                <a href="{{ route('categories.edit',$dt->id) }}" class="btn btn-info"><i class="fa-regular fa-pen-to-square"></i></a>
                <form action="{{ route('categories.destroy', $dt->id)}}" method="POST" style="display: inline-block" onclick="confirm('Are you sure ??')">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class=" btn btn-danger">
                </form> 
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>

@endsection