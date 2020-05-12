<!DOCTYPE html>
<html>
  <head>
    <title>Product {{ $product[0]->id }}</title>
  </head>
  <body>
    <h1>Product {{ $product[0]->id }}</h1>
    <ul>
      <li>Name: {{$product[0]->name}}</li>
      <li>Description: {{ $product[0]->description }}</li>
      <li>Category: {{ $product[0]->category_name }}</li>
      <li>Price: {{ $product[0]->price }}</li>
    </ul>
  </body>
</html>