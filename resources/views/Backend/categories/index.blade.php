@extends('backendtemplate')
@section('content')
<div class="container-fluid">
        {{-- Page heading --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h3 mb-0 text-gray-800 ">Categories List</h1>
                     <a href="{{route('categories.create')}}" class="btn btn-danger">Add</a>
                </div>
            </div>
        </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $category->name }}</td>
                        <td><img src="{{asset($category->photo)}}" class="img-fluid w-25"></td>
                        <td>
                            <a href="{{route('categories.show',$category->id)}}" class="btn btn-primary">Detail</a>
                            <a href="{{route('categories.edit',$category->id)}}" class="btn btn-info">Edit</a>
                            {{-- <a href="#" class="btn btn-danger">Delete</a> --}}
                            <form method="post" action="{{route('categories.destroy',$category->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
        
    </div>
    
@endsection