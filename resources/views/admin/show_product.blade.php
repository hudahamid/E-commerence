<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style>
      .center{
        border:solid 2px white;
        padding:50px;
        margin:auto;
        text-align:center;
        padding-top:10%;
        margin-top:2%;
        width:87%;
      }
      .img{
        width:150px;
        height: 100px;
      }
      .head{
        background:#0CC446;
        
      }
      .subhead{
        padding: 2%;
        margin-bottom:3%;
      }
    </style>
    @include('admin.css')
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
             
              <center>
              <h2>All Products</h2>
                <table class="center">
                    <tr class="head">
                        <th class="subhead"> Product title </th>
                        <th class="subhead"> Description </th>
                        <th class="subhead">Quantity </th>
                        <th class="subhead"> Category </th>
                        <th class="subhead">Price </th>
                        <th class="subhead"> discount </th>
                        <th class="subhead"> image </th>
              @foreach($product as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->quantity}}</td>
                        <td>{{$product->category}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->discount_price}}</td>
                        <td>
                          <img class="img" src="/product/{{$product->image}}">
                        </td>
                    </tr>
              @endforeach
                </table>
            </center>
            </div>
            </div>
    <!-- container-scroller -->
    
    <!-- Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js" integrity="sha384-M6N9xdQzAGHo7k5cQsMxK1PdGEddIbKWjr5z8NajSHQ5fPFSj9bGJYoGJ2ZdEdAj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyDE8vFQy5lFOnhZ2gCbVDBXuPktWbNIq6" crossorigin="anonymous"></script>

    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>