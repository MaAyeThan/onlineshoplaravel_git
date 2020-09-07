@extends('backendtemplate')
@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Item Detail List</h1>
            <div class="text-right">
            	<a href="{{route('items.index')}}"  class="btn btn-success">
            		Go Back
            	</a>
            </div>
          </div>

          <!-- Content Row -->
        <div class="container">
         	<div class="row pt-5">
         		<div class="col-md-6">
                    <img src="{{asset($item->photo)}}" width="300px" height="250px">
                </div>
                <div class="col-md-6">
                    <p>Item Name: &nbsp; &nbsp; &nbsp;{{$item->name}}</p>
                    <p>Item Price:  &nbsp; &nbsp; &nbsp;{{$item->price}}</p>
                    <p>Item CodeNumber:  &nbsp; &nbsp; &nbsp;{{$item->codeno}}</p>
                    <p>Item Discount:  &nbsp; &nbsp; &nbsp;{{$item->discount}}</p>
                    <p>Item Description:  &nbsp; &nbsp; &nbsp;{{$item->description}}</p>
                    <p>SubCategory Name:  &nbsp; &nbsp; &nbsp;{{$item->subcategory->name}}</p>
                    <p>Brand Name:  &nbsp; &nbsp; &nbsp;{{$item->brand->name}}</p>
                </div>
         	</div>
        </div>
        <!-- /.container-fluid -->
	</div>
@endsection