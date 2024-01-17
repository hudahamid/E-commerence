<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .input_color {
            color: black;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Include external styles -->
    @include('admin.css')
</head>
<body>
    <div class="container-scroller">
        <!-- Partial: Sidebar -->
        @include('admin.sidebar')

        <!-- Partial: Header -->
        @include('admin.header')

        <!-- Main Panel -->
        <div class="main-panel">
            <div class="content-wrapper">
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

                <div class="div_center">
                    <h2 class="text-center">Add category</h2>
                    <form action="{{ url('/add_category')}}" method="POST">
                        @csrf
                        <input class="input_color" type="text" name="category" placeholder="Write category name">
                        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                    </form>
                </div>
            </div>
        </div>

        <!-- Container-Scroller -->
        <!-- Include scripts -->
        @include('admin.script')
        <!-- End custom scripts for this page -->
    </div>
</body>
</html>
