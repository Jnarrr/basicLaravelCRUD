<h1>Products Details</h1>


<a href="/products/create">Add Product</a>
<table>
    <thead>
        <tr>
            <th>Product Name</th>
            <th>Category</th>
            <th>Quantity</th>
        </tr>
    </thead>
    <tbody>
        @isset($product)
        <tr>
            <td>{{ $product -> name }}</td>
            <td>{{ $product -> category }}</td>
            <td>{{ $product -> quantity }}</td>
        </tr>
        @endisset
    </tbody>
</table>