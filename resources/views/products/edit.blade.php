<h1>Edit Product</h1>
<a href="/products">Return</a>
@isset($product)
<form action="/products/{{ $product->id }}" method="post">
    @csrf
    <label>Product Name</label>
    <input type="text" name="name" id="name" value="{{ $product -> name }}">
    <label>Category</label>
    <input type="text" name="category" id="category" value="{{ $product -> category }}">
    <label>Quantity</label>
    <input type="text" name="quantity" id="quantity" value="{{ $product -> quantity }}">

    <button>Submit</button>
</form>
@endisset