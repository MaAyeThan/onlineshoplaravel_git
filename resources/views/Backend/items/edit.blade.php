@extends('backendtemplate')
@section('content')
<div class="container-fluid">
    	{{-- Page heading --}}
    	<div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div class="row">
                <div class="col">
    			   <h1 class="h3 mb-0 text-gray-800">Item Edit Form</h1>
                </div>
            </div>
    	</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
    		<form action="{{route('items.update',$item->id)}}" method="post" enctype="multipart/form-data">
    			@csrf
                @method('PUT')
                <div class="form-group row">
                   <label for="inputcodeno" class="col-sm-2 col-form-label">Code No</label>
                     <div class="col-sm-10">
                         <input type="codeno" name="codeno" class="form-control" id="inputcodeno" value="{{$item->codeno}}" readonly="readonly">
                     </div>
                </div>
                <div class="form-group row">
                   <label for="inputname" class="col-sm-2 col-form-label">Name</label>
                     <div class="col-sm-10">
                         <input type="text" name="name" class="form-control" id="inputname" value="{{$item->name}}">
                     </div>
                </div>
                <div class="form-group row">
                   <label for="inputphoto" class="col-sm-2 col-form-label">Photo</label>
                     <div class="col-sm-10">
                         <input type="file" name="photo" class="d-block" id="inputphoto" value="{{$item->photo}}">

                         <img src="{{asset($item->photo)}}" class="img-fluid w-25">

                         <input type="hidden" name="oldphoto" value="{{$item->photo}}">
                     </div>
                </div>
                <div class="form-group row">
                   <label for="inputprice" class="col-sm-2 col-form-label">Price</label>
                     <div class="col-sm-10">
                         <input type="number" name="price" class="form-control" id="inputprice" value="{{$item->price}}">
                     </div>
                </div>
                <div class="form-group row">
                   <label for="inputdiscount" class="col-sm-2 col-form-label">Discount</label>
                     <div class="col-sm-10">
                         <input type="number" name="discount" class="form-control" id="inputdiscount" value="0" value="{{$item->discount}}">
                     </div>
                </div>
                <div class="form-group row">
                   <label for="inputdescription" class="col-sm-2 col-form-label">Description</label>
                     <div class="col-sm-10">
                     	<textarea name="description" class="form-control" id="inputdescription">{{$item->description}}</textarea>
                     </div>
                </div>
                <div class="form-group row">
                  <label for="inputbrand" class="col-sm-2 col-form-label">Brand</label>
                   <div class="col-sm-10">
                      <select class="form-control from-control-md " id="inputBrand" name="brand">
                          <optgroup label="Choose Brand">
                            @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach
                           </optgroup>
                      </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputsubcategory" class="col-sm-2 col-form-label">Subcategory</label>
                   <div class="col-sm-10">
                      <select class="form-control from-control-md " id="inputsubcategory" name="subcategory">
                          <optgroup label="Choose Category">
                            @foreach($subcategories as $subcategory)
                            <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
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