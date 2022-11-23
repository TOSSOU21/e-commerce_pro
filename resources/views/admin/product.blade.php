<!DOCTYPE html>
<html lang="en">
  <head>

    <style type="text/css">

        .div_center
        {
            text-align: center;
            padding-top:40px;
        }

        .h2_font
        {
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color
        {
            color: black;
            padding-bottom: 20px;
        }

        label
        {
           display: inline-block;
           width: 200px;
        }

       .div_design
       {
        padding-bottom:15px;
       }







       </style>
   @include('admin.css')
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
                <div class="div_center">
                    <h2 class="h2_font">Add Products</h2>

                        <form action="{{ url('/add_product') }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            <div class="div_design">
                                <label>Product title:</label>
                                <input type="text" class="text_color" name="title" placeholder="Write title" required>
                              </div>

                              <div class="div_design">
                                <label>Product Description:</label>
                                <input type="text" class="text_color" name="description" placeholder="Write description" required>
                              </div>

                              <div class="div_design">
                                <label>Product Price:</label>
                                <input type="number" class="text_color" name="price" placeholder="Write price" required>
                              </div>

                              <div class="div_design">
                                <label>Discount Price:</label>
                                <input type="text" class="text_color" name="discount_price"  placeholder="Write discount is app">
                              </div>


                              <div class="div_design">
                                <label>Product Quantity:</label>
                                <input type="number" class="text_color" name="quantity" placeholder="Write quantity" required>
                              </div>

                              <div class="div_design">
                                <label>Product Catagory:</label>
                                    <select class="text_color" name="catagory" required>
                                        <option value="" selected="">Add a catagory</option>
                                        @foreach ($catagory as $catagory )
                                        <option value="{{$catagory->catagory_name }}">{{$catagory->catagory_name }}</option>
                                        @endforeach

                                    </select>
                              </div>

                              <div class="div_design">
                                <label>Product Image Here</label>
                                <input type="file" name="image" required>
                              </div>

                              <div class="div_design">

                                <input type="submit" value="Add Product" class="btn btn-primary">
                              </div>

                        </form>

                    </div>
                </div>



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
