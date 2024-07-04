<!-- header section starts -->
<header class="header_section">
  <nav class="navbar navbar-expand-lg custom_nav-container">
      <a class="navbar-brand" href="index.html">
          <span>
         YoUr SHoP
          </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
              <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="shop.html">
                      Shop
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="why.html">
                      Why Us
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="testimonial.html">
                      Testimonial
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
          </ul>
          <div class="user_option">

              @if (Route::has('login'))
                  @auth

                  
                  <a href="{{url('myorders')}}">
                 Orders 
                </a>
                     

                  <a href="{{url('mycart')}}">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    [{{$count}}]
                </a>
                      <form method="POST" action="{{ route('logout') }}" class="form-inline">
                          @csrf
                          <button type="submit" class="btn btn-outline-danger btn-sm ml-2">
                              <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                          </button>
                      </form>
                  @else
                      <a href="{{ url('/login') }}" class="btn btn-outline-primary btn-sm ml-2">
                          <i class="fa fa-user" aria-hidden="true"></i> Login
                      </a>
                      <a href="{{ url('/register') }}" class="btn btn-outline-success btn-sm ml-2">
                          <i class="fa fa-vcard" aria-hidden="true"></i> Register
                      </a>
                  @endauth
              @endif
        
              
          </div>
      </div>
  </nav>
</header>
<!-- end header section -->
