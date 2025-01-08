<!DOCTYPE html>
<html>
<head> 
    @include('admin.css')

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">

    <style type="text/css">
        /* Your existing CSS styles */
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

        .div_design {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }

        .table_design {
            text-align: center;
            margin: auto;
            border: 2px solid yellowgreen;
            margin-top: 50px;
            width: 80%;
            max-width: 1000px;
            border-radius: 5px;
            overflow: hidden;
        }

        th {
            background-color: rgb(56, 175, 222);
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: white;
            transition: background-color 0.3s ease;
        }

        th:hover {
            background-color: deepskyblue;
        }

        td {
            color: rgb(198, 180, 180);
            padding: 10px;
            border: 3px solid skyblue;
        }

        .btn {
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.05);
        }

        .btn-danger:hover {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-success:hover {
            background-color: #28a745;
            border-color: #28a745;
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
                <h1 style="color: white; text-align: center;">Add Category</h1>

                <div class="div_design">
                    <form action="{{url('add_category')}}" method="post" class="form-inline">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="category" class="form-control" required>
                            <input class="btn btn-primary ml-2" type="submit" value="Add Category">
                        </div>
                    </form>
                </div>

                <div>
                    <table id="category_table" class="table table-striped table_design">
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $category)
                            <tr>
                                <td>{{$category->category_name}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{url('edit_category', $category->id)}}">Edit</a>
                                </td>
                                <td>
                                    <button class="btn btn-danger" onclick="confirmDelete('{{ url('delete_category',$category->id) }}')">Delete</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
    </div>

    <!-- Toastr notifications -->
    @if(session('success'))
    <script>
        Swal.fire({
            title: 'Success!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
    @endif

    <!-- JavaScript files-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- JavaScript code for delete confirmation -->
    <script>
        function confirmDelete(url) {
            Swal.fire({
                title: "Are you sure to delete this?",
                text: "This delete will be permanent",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Delete",
                cancelButtonText: "Cancel",
                dangerMode: true,
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = url;
                }
            });
        }
    </script>

    <!-- Initialize DataTables -->
    <script>
        $(document).ready(function() {
            $('#category_table').DataTable();
        });
    </script>

    <!-- Toastr initialization -->
    <script>
        // Initialize Toastr
        toastr.options = {
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>

    <!-- Back to Home button script -->
    <script>
        function backToHome() {
            window.location.href = "{{ url('admin/dashboard') }}";
        }
    </script>

    <!-- Back to Home button -->
    <div style="position: fixed; bottom: 20px; right: 20px;">
        <button class="btn btn-primary" onclick="backToHome()">Back to Home</button>
    </div>
</body>
</html>
