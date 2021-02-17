<h1>Products</h1>

<div>
    <table border="1">
        <tr>
            <td> id </td>
            <td> price </td>
            
        </tr>

        @foreach($products as $product)
        <tr>
            <td> {{$product['id']}} </td>
            <td> {{$product['price']}} </td>
            
        </tr>

        @endforeach

    </table>
</div>
<p></p>
<div>
    <table border="1">
        <tr>
            <td> id </td>
            <td> price </td>
            
        </tr>

        @foreach($products as $product)
        <tr>
            <td> {{$product['id']}} </td>
            <td> {{$product['price']}} </td>
            
        </tr>

        @endforeach

    </table>
</div>
