<!DOCTYPE html>
<html>
<head> 
    @include('admin.css')

    <style type="text/css">

        .div_design {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        input[type='text'] {
            width: 400px;
            height: 50px;
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-right: 10px;
            transition: all 0.3s ease;
        }

        input[type='text']:focus {
            border-color: skyblue;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }

        .btn {
            background-color: #007bff;
            border-color: #007bff;
            color: white;
            transition: all 0.3s ease;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 18px;
        }

        .btn:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            transform: scale(1.05);
        }

        h1 {
            color: white;
        }

    </style>


</head>
<body>
    @include('admin.header')
    
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          <h1>Update Category</h1>

          <div class="div_design">
                

                <form action="{{url('update_category',$data->id)}}" method= "post">

                @csrf

                        <input type="text" name="category" value="{{$data->category_name}}">
                        <input class="btn" type="submit" value= "Update Category">
                </form>


          </div>

            </div>  
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>
