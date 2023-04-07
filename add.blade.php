@if(!empty($product))
<h1>Edit product `{{ $product->name }}`</h1>
@else
<h1>add new product </h1>
@endif



<form method="post" action="{{ url('/product/api/add') }}">
    @csrf
    <div>
        <input type="text" name="name" placeholder="product name" value="{{ $product->name ?? '' }}">
    </div>
    <div>
        <input type="text" name="price" placeholder="product price"  value="{{ $product->price ?? '' }}">
    </div>
    <div>
        <input type="submit" name="create-product" value="{{ !empty($product) ? 'Update Product' : 'Create Product' }}">
    </div>
</form>

@if(session('status'))
<br/><br/>
<div>
    {{ session('status') }}
</div>
@endif

