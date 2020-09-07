@extends('backendtemplate')
@section('content')
<div class="container-fluid">
    	{{-- Page heading --}}
    	<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
                <div class="col">
    			   <h1 class="h3 mb-0 text-gray-800">Brand Edit Form</h1>
                </div>
            </div>
    	</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
    		<form action="{{route('brands.update',$brand->id)}}" method="post" enctype="multipart/form-data">
    			@csrf
                @method('PUT')
                <div class="form-group row ">
                   <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                     <div class="col-sm-10">
                         <input type="text" name="name" class="form-control" id="inputname" value="{{$brand->name}}">
                         <span class="text-danger">{{$errors->first('name')}}</span>
                     </div>
                </div>
                <div class="form-group row">
                   <label for="inputphoto" class="col-sm-2 col-form-label">Photo</label>
                     <div class="col-sm-10">
                         <input type="file" name="photo" class="d-block" id="inputphoto" value="{{$brand->photo}}">

                         <img src="{{asset($brand->photo)}}" class="img-fluid w-25">

                         <input type="hidden" name="oldphoto" value="{{$brand->photo}}">
                         
                         <span class="text-danger">{{$errors->first('photo')}}</span>
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