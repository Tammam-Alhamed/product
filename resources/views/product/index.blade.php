@extends('product.layout')

@section('content')

<div class="jumbotron container">
  <h1 class="display-4">Hello, world!</h1>
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="{{route('products.create')}}" role="button">Create</a>
</div>

<div class="container">
@if($message = Session::get('sccess'))
<div class="alert alert-primary" role="alert">
 {{$message}}
</div>
@endif
</div>

<div class='container'>
	<table class="table">
  <thead class="thead-dark">

    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col" width="300px" >Action</th>
    </tr>
  </thead>

  <tbody>
    @php
    $i=0 
    @endphp
@foreach($products as $item)
    <tr>
      <th scope="row">{{++ $i}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->price}}</td>
      <td>
          <div class="row">
    <div class="col-sm">
      <a class="btn btn-secondary" href="{{route('products.edit', $item->id)}}"> Edit</a>
    </div>
    <div class="col-sm">
      <a class="btn btn-info" href="{{route('products.show',$item->id)}}"> Show</a>
    </div>
    <div class="col-sm">
                <form action="{{route('products.destroy', $item->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">
              Delete
            </button>
          </form>
    </div>
  </div>
      	
      	


      </td>
    </tr>
@endforeach

  </tbody>
</table>
{!!$products->links()!!}
</div>







@endsection