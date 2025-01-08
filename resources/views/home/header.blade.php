<!-- header section starts -->
<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container">
      <a class="navbar-brand" href="index.html">
        <span>YoUr SHoP</span>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class=""></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link btn animated-btn" href="{{url('dashboard')}}">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn animated-btn" href="{{url('shop')}}">
              Shop
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn animated-btn" href="{{url('about')}}">
              About Us
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn animated-btn" href="{{url('testimonial')}}">
              Testimonial
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn animated-btn" href="{{url('contact')}}">
              Contact Us
            </a>
          </li>
        </ul>
        <div class="user_option">
          @if (Route::has('login'))
            @auth
            <a href="{{url('myorders')}}" class="btn animated-btn">
              Orders
            </a>
            <a href="{{ url('mycart') }}" class="btn animated-btn">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i> [{{$count}}]
            </a>
            <form method="POST" action="{{ route('logout') }}" class="form-inline d-inline-block">
              @csrf
              <button type="submit" class="btn animated-btn">
                <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
              </button>
            </form>
            @else
            <a href="{{ url('/login') }}" class="btn animated-btn">
              <i class="fa fa-user" aria-hidden="true"></i> Login
            </a>
            <a href="{{ url('/register') }}" class="btn animated-btn">
              <i class="fa fa-vcard" aria-hidden="true"></i> Register
            </a>
            @endauth
          @endif
        </div>
      </div>
    </nav>
  </header>
  <!-- end header section -->
  
  <!-- Styles -->
  <style>
    /* General Button Styling */
    .navbar-nav .nav-link,
    .user_option .btn {
      margin: 8px;
      padding: 10px 20px;
      font-size: 1rem;
      font-weight: 600;
      color: white;
      text-align: center;
      border-radius: 5px;
      border: 2px solid transparent;
      background: linear-gradient(45deg, #ff7b54, #ffcc00);
      transition: all 0.3s ease-in-out;
      position: relative;
      overflow: hidden;
      display: inline-block;
    }
  
    /* Adjust Gap Between User Options */
    .user_option {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      gap: 8px; /* Ensure uniform spacing */
    }
  
    /* Hover Animation */
    .navbar-nav .nav-link:hover,
    .user_option .btn:hover {
      background-color: #333;
      color: #fff !important;
      transform: scale(1.05);
      border-color: #ffcc00;
      box-shadow: 0 4px 15px rgba(255, 204, 0, 0.5);
    }
  
    /* Button Glow Animation */
    .navbar-nav .nav-link:before,
    .user_option .btn:before {
      content: "";
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: rgba(255, 255, 255, 0.3);
      transform: skewX(-45deg);
      transition: all 0.5s ease-in-out;
    }
  
    .navbar-nav .nav-link:hover:before,
    .user_option .btn:hover:before {
      left: 100%;
    }
  
    /* Active Button Styling */
    .navbar-nav .nav-link.active {
      background-color: #ffcc00;
      color: black !important;
      box-shadow: 0 6px 12px rgba(255, 204, 0, 0.5);
      transform: scale(1.08);
    }
  
    /* Ensure Consistent Button Alignment */
    .navbar-nav,
    .user_option {
      display: flex;
      align-items: center;
    }
  
    /* Form Inline Adjustment */
    .form-inline.d-inline-block {
      display: inline-block;
      margin: 0;
    }
  </style>
  