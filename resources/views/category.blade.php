<html>
    <head>
        <title>{{ $category }} | Category</title>
    </head>
    <body>
        <h1>{{ $category }}</h1>
        <ul>
            @foreach($products as $product)
                <li>{{ $product['name'] }} - {{ $product['price'] }}</li>
            @endforeach
        </ul>
    </body>
</html>
