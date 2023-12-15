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

    <h1>Create Product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach ($errors->all as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach

            </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Quantity</label>
          <input type="number" class="form-control" name="qty" placeholder="Quantity">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Price">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" name="description" placeholder="Description">
        </div>
        <input type="submit" class="btn btn-primary" value="add new product">
      </form>

</body>
</html>