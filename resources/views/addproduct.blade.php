<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        
  
    <h1>add product</h1>


    <form method="POST" action="{{url('/save')}}">
        @csrf
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPrice1" class="form-label">price</label>
    <input type="text" class="form-control" id="exampleInputPrice1" name="price">
  </div>
  <div class="mb-3">
    <label for="exampleInputQuantity1" class="form-label">quantity</label>
    <input type="text" class="form-control" id="exampleInputQuantity1" name="quantity">
  </div>
  <div class="mb-3">
    <label for="exampleInputCategory1" class="form-label">category</label>
    <input type="text" class="form-control" id="exampleInputCategory1" name="category">
  </div>
  <div class="mb-3">
    <label for="exampleInputSku1" class="form-label">sku</label>
    <input type="text" class="form-control" id="exampleInputSku1" name="sku">
  </div>

  <!-- <div class="mb-3">
  <label for="exampleInputImage1" class="form-label">Add image</label>
            <input type="file" placeholder="Choose image" id="image"  name="image">
                    @error('image')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                    </div>                 -->
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>