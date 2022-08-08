@extends('product.layout')

@section('content')

<div style="padding-left: 7%;  padding-right: 7%;", >

<div class="card">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


<form action="{{route('products.store')}}" method="POST">
@csrf

	<div class="container" style="padding-top: 7%;">

		<div class="input-group mb-3">
  	<div class="input-group-prepend">
   	 <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
  	</div>
 	 <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	</div>

		<div class="input-group mb-3">
	 	 <div class="input-group-prepend">
	    <span class="input-group-text">$</span>
	    <span class="input-group-text">Price</span>
	  </div>
	  <input type="text" name="price" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <span class="input-group-text" id="inputGroup-sizing-default">Info</span>
	  </div>
	  <input type="text" name="info" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
	</div>



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        save the product
      </div>
      <div class="modal-footer">
      	
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </div>
    </div>
  </div>
</div>









</div>
</div></form>
@endsection