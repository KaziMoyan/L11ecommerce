<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
</head>
<body>
    @include('admin.header')
    @include('admin.sidebar')
    
    <!-- Sidebar Navigation end-->
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <h1>Add Product</h1>
                <div class="form-container">
                    <form action="{{ url('add_product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input_design">
                            <label>Product Title</label>
                            <input type="text" name="title" required>
                        </div>
                        <div class="input_design">
                            <label>Description</label>
                            <textarea name="description" required></textarea>
                        </div>
                        <div class="input_design">
                            <label>Price</label>
                            <input type="text" name="price" required>
                        </div>
                        <div class="input_design">
                            <label>Quantity</label>
                            <input type="number" name="qty" required>
                        </div>
                        <div class="input_design">
                            <label>Product Category</label>
                            <select name="category" required>
                                <option>Select an option</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input_design">
                            <label>Product Image</label>
                            <input type="file" name="image" required>
                        </div>
                        <div class="input_design">
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
</body>
</html>
