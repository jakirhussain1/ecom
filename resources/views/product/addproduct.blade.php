<x-app-layout>
<div class="container">
<div class="row">
<div class="col-md-12 mt-5">
<h2 class="text-center text-success mb-21">Add Products Forms</h2>
<form action="{{url('product/insert')}}" method="post" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input value="{{old('product_name')}}" name="product_name" placeholder="Product Name" type="text" class="form-control @error('product_name')is-invalid @enderror">  </div>
    @error('product_name')
    <p class="text-danger">{{$message}}</p>
    @enderror
    <div class="form-group">
    <label for="exampleInputEmail1">Product Price</label>
    <input value="{{old('product_price')}}" name="product_price" placeholder="Product Price" type="text" class="form-control @error('product_price')is-invalid @enderror">  </div>
    @error('product_price')
    <p class="text-danger">{{$message}}</p>
    @enderror
    <div class="form-group">
    <label for="exampleInputEmail1">Product Quantity</label>
    <input value="{{old('product_quantity')}}" name="product_quantity" placeholder="Product Quantity" type="text" class="form-control @error('product_quantity')is-invalid @enderror">  </div>
    @error('product_quantity')
    <p class="text-danger">{{$message}}</p>
    @enderror
    <div class="form-group">
    <label for="exampleInputEmail1">Quantity Alerts</label>
    <input value="{{old('product_alerts')}}" name="product_alerts" placeholder="Product Alerts" type="text" class="form-control @error('product_alerts')is-invalid @enderror">  </div>
    @error('product_alerts')
    <p class="text-danger">{{$message}}</p>
    @enderror
    <div class="form-group">
    <label for="exampleInputEmail1">Product Details</label>
    <textarea class="form-control @error('product_details')is-invalid @enderror" placeholder="Product Details" name="product_details" id="" cols="30" rows="10"></textarea>
    </div>
    @error('product_details')
    <p class="text-danger">{{$message}}</p>
    @enderror
     <div class="form-group">
    <label for="exampleInputEmail1">Product Image</label>
    <input value="{{old('product_image')}}" name="product_image"  type="file" class="form-control @error('product_image')is-invalid @enderror">  </div>
    @error('product_image')
    <p class="text-danger">{{$message}}</p>
    @enderror
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2 class="text-center text-success mt-5">Products Tables</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Alerts</th>
      <th scope="col">Details</th>
      <th scope="col">Images</th>
    </tr>
  </thead>
  <tbody>
    @foreach($all_product as $products)
    <tr>
      <td>{{$loop->index+1}}</td>
      <td>{{$products->product_name}}</td>
      <td>{{$products->product_price}}</td>
      <td>{{$products->product_quantity}}</td>
      <td>{{$products->product_alerts}}</td>
      <td><p style="width:50px;height:30px; overflow:scrol;">{{$products->product_details}}</p></td>
      <td>
      <img src="{{asset('product_image/uploads/'.$products->product_image)}}" alt="not found" style="width:50px;height:30px;">
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
</div>
</x-app-layout>