<h1>All Products</h1>

@if(session('status'))
<br/><br/>
<div>
    {{session('status') }}
</div>
@endif


@foreach ($products as $product)

<div>
    <h3>{{ $product->name }}</h3>
    <h5>{{ $product->price }} ریال </h5>
    <a href="{{ url('/product/api/delete').'/'.$product->id }}"> Delete Product   </a>
    |
    <a href="{{ url('/product/edit').'/'.$product->id }}"> Edit Product </a>
    <hr/>
</div>
@endforeach



