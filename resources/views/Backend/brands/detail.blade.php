@extends('backendtemplate')
@section('content')
	<div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Brand Detail List</h1>
            <div class="text-right">
            	<a href="{{route('brands.index')}}"  class="btn btn-success">
            		Go Back
            	</a>
            </div>
          </div>

          <!-- Content Row -->
        <div class="container">
         	<div class="row pt-5">
         		<div class="col-md-6">
                    <img src="{{asset($brand->photo)}}" width="300px" height="250px">
                </div>
                <div class="col-md-6">
                    <p>Brand Name: &nbsp; &nbsp; &nbsp;{{$brand->name}}</p>
                    
                </div>
         	</div>
        </div>
        <!-- /.container-fluid -->
	</div>
@endsection