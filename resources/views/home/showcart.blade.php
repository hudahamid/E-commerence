<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style type="text/css">
        .centerr{
           margin:auto;
           width:70%;
           text-align:center;
           padding: 5%;
        }

        table,th,td{
            border: 1px solid grey;
            
        }
   .th_deg{
    font-size=30px;
    padding: 5px;
    background: skyblue;
    
   }
   .img_design{
      height: 150px;
      width: 150px;
   }

   .totalPrice{
      font-size=20px;
      padding: 2%;
      margin-right:50%;
   }

       
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->

         @if(session()->has('message'))
                <div id="myAlert" class="alert alert-success">
                    
                    {{session()->get('message')}}
                </div>
                <script>
                    function closeAlert() {
                        document.getElementById('myAlert').style.display = 'none';
                    }

                    // Automatically close after 3 seconds (adjust the delay as needed)
                    setTimeout(function() {
                        closeAlert();
                    }, 5000);
                </script>
                @endif
       
     <center>
     <div class="centerr">
         <table >
              <tr>
                <th class="th_deg">  Product Title</th>
                <th  class="th_deg"> Quantity</th>
                <th class="th_deg"> Price</th>
                <th class="th_deg"> Image </th>
                <th class="th_deg"> Action </th>
              </tr>
              <?php  $totalPrice=0; ?>
              @foreach($cart as $cart)
              <tr>
                <td>{{$cart->product_title}}  </td>
                <td>{{$cart->quantity}} </td>
                <td>{{$cart->price}}$ </td>
                <td><img  class="img_design" src="/product/{{$cart->image}}"></td>
                <td class="btn btn-danger" onclick="confirmDelete({{ $cart->id }})">
                      Remove Product
                 </td>
                     <form id="remove-cart-form-{{$cart->id}}" 
                     action="{{ route('remove_cart', $cart->id) }}" method="get" style="display: none;">
                        @csrf
                     </form>

                     <script>
                        function confirmDelete(cartId) {
                           if (confirm('Are you sure you want to delete this product?')) {
                                 document.getElementById('remove-cart-form-' + cartId).submit();
                           }
                        }
                     </script>


                        
                  
                        



                <?php  $totalPrice=$totalPrice+ $cart->price;    ?>
              </tr>
              @endforeach
         </table>
      <div>
         <h1 class="totalPrice"> Total Price : {{$totalPrice}}$</h1>
      </div>

      <div>
         <h1 style="font: size 25px; padding: bottom 15px;"> Proced to order</h1>
         <a href="{{url('cash_order')}}" class="btn btn-danger">Cash on Delivery</a>
         <a href="{{url('stripe',$totalPrice)}}" class="btn btn-danger">Pay using Card</a>
      </div>

     </div>
     </center> 

      
      
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>