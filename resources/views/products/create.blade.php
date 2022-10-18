<h1>Add Product</h1>
<a href="/products">Return</a>

<form action="/products" method="post">
    @csrf
    <label>Product Name</label>
    <input type="text" name="name" id="name">
    <label>Category</label>
    <input type="text" name="category" id="category">
    <label>Quantity</label>
    <input type="text" name="quantity" id="quantity">

    <button>Submit</button>
</form>