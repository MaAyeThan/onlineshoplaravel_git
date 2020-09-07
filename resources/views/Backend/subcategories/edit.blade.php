@extends('backendtemplate')
@section('content')
<div class="container-fluid">
    	{{-- Page heading --}}
    	<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
                <div class="col">
    			   <h1 class="h3 mb-0 text-gray-800">Subcategory Edit Form</h1>
                </div>
            </div>
    	</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
    		<form action="{{route('subcategories.update',$subcategory->id)}}" method="post" enctype="multipart/form-data">
    			@csrf
                @method('PUT')
                <div class="form-group row ">
                   <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                     <div class="col-sm-10">
                         <input type="text" name="name" class="form-control" id="inputname" value="{{$subcategory->name}}">
                         <span class="text-danger">{{$errors->first('name')}}</span>
                     </div>
                </div>
                
                <div class="form-group row">
                  <label for="inputcategoryid" class="col-sm-2 col-form-label">Category</label>
                   <div class="col-sm-10">
                      <select class="form-control from-control-md " id="inputcategory" name="category">
                          <optgroup label="Choose Category">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}"><?php if($subcategory->category_id == $category->id) echo "selected";?>{{$category->name}}</option>
                            @endforeach
                          </optgroup>
                      </select>
                  </div>
                </div>
                <div class="form-group row">
                <input type="submit" value="Update" class="btn btn-success ">
                </div>
            </form>
        </div>
    </div>
</div>
        
    </div>
    
@endsection