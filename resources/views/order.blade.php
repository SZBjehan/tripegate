<h1>Order List</h1>

<table border="1">
    <tr>
        <td> id </td>
        <td> user id </td>
        <td> product id </td>

    </tr>

    @foreach($orders as $order)
    <tr>
        <td> {{$order['id']}} </td>
        <td> {{$order['user_id']}} </td>
        <td> {{$order['product_id']}} </td>

    </tr>

    @endforeach

</table>