<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <h2>Product</h2>
    @foreach ($data->items as $key => $value)
    <table>
        <tr>
            <td>product_id</td>
            <td>:</td>
            <td>{{$value->product_id}}</td>
        </tr>
        <tr>
            <td>name</td>
            <td>:</td>
            <td>{{$value->name}}</td>
        </tr>
        <tr>
            <td>price</td>
            <td>:</td>
            <td>{{$value->price}}</td>
        </tr>
        <tr>
            <td>stock</td>
            <td>:</td>
            <td>{{$value->stock}}</td>
        </tr>
    </table>    
    
    @endforeach
</body>
</html>