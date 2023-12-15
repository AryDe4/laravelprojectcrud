<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @if (session()->has('success'))
    <div>
        {{session('success')}}
    </div>
        
    @endif
    <div>
        <h4><a href="{{route('product.create')}}">Create Product</a></h4>
    </div>
    <table class="table">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
         @foreach ($products as $product)
             <tr>
                
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{route('product.edit',['product'=>$product])}}">
                        Edit
                    </a>
                    
                </td>
                <td>
                    <form method="post" action="{{route('product.destroy',['product'=>$product])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                </form>
                </td>
             </tr>
         @endforeach
      </table>
</body>
</html>