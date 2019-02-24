<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Scrap ZMART</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<table>
        <thead>
            <tr>
                <th>Game</th>
                <th>Price (as CLP)</th>
                <th>Status (in Spanish, sorry :c)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productList as $product)
            <tr>
                <td> {{$product['name']}} </td>
                <td> {{$product['price']}} </td>
                <td> {{$product['status']}} </td>
            </tr>
            @endforeach
        </tbody>
</table>

</body>
</html>
