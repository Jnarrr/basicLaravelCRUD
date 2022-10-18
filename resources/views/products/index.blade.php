<h1>Products List</h1>


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
        @isset($products)
        @foreach ($products as $product)
        <tr>
            <td>{{ $product -> name }}</td>
            <td>{{ $product -> category }}</td>
            <td>{{ $product -> quantity }}</td>
            <td><a href="{{ URL::to('products/' . $product -> id )  }}">View Details</a></td>
            <td><a href="{{ URL::to('products/delete/' . $product -> id )  }}">Delete</a></td>
            <td><a href="{{ URL::to('products/edit/' . $product -> id )  }}">Edit</a></td>
        </tr>
        @endforeach
        @endisset
    </tbody>
</table>