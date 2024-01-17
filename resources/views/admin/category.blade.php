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