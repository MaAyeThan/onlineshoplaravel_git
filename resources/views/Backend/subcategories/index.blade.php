@extends('backendtemplate')
@section('content')
<div class="container-fluid">
        {{-- Page heading --}}
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h3 mb-0 text-gray-800 ">Subcategories List</h1>
                     <a href="{{route('subcategories.create')}}" class="btn btn-danger">Add</a>
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
                        {{-- <th>Name</th> --}}
                        <th>Category Name</th>
                        <th>SubcategoryName</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach($subcategories as $subcategory)
                    <tr>
                        <td>{{ $i++ }}</td>
                        
                        <td>{{ $subcategory->category->name}}</td>
                        <td>{{ $subcategory->name }}</td>
                        <td>
                            <a href="{{route('subcategories.show',$subcategory->id)}}" class="btn btn-primary">Detail</a>
                            <a href="{{route('subcategories.edit',$subcategory->id)}}" class="btn btn-info">Edit</a>
                            <form method="post" action="{{route('subcategories.destroy',$subcategory->id)}}" onsubmit="return confirm('Are you sure?')" class="d-inline-block">
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