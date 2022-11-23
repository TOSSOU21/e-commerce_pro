<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')

   <style type="text/css">
    .center
    {
        margin:auto;
        width: 70%;
        border:2px solid white;
        text-align: center;
        margin-top:40px;
    }

    .font_size
    {
        text-align: 40px;
        font-size: 40px;
        padding-top: 20px;
    }

    .img_size
    {
        width: 150px;
        height: 150px;
    }

    .th_color
    {
        background: skyblue;
    }

    .th_deg
    {
        padding:30px;
    }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if (session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>

                    {{ session()->get('message') }}

                </div>

                @endif



                <h2 class="font_size">All Products</h2>


                <table class="center">
                    <tr class="th_color">
                        <th class="th_deg">Product title</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Catagory</th>
                        <th>Price</th>
                        <th>Discount price</th>
                        <th>Product Image</th>
                        <th>Delete</th>
                        <th>Edit</th>

                    </tr>

                    @foreach ($product as $product )
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>{{ $product->catagory }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->discount_price }}</td>
                        <td><img class="img_size" onclick="return confirm('Are You sure to delete this ')" src="/product/{{ $product->image }}" ></td>
                        <td><a class="btn btn-danger" href="{{ url('delete_product', $product->id) }}">Delete</a></td>
                        <td><a class="btn btn-success" href="{{ url('update_product', $product->id) }}">Edit</a></td>


                    </tr>
                    @endforeach

                </table>


            </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
