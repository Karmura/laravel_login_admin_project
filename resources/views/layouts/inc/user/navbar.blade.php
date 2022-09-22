    <!-- logo_menu bar -->
    <header>
        <div class="container">
          <div class="logomenuWrapper">
            <h1>BRAIN SOLVE <em>software service</em></h1>

            <nav class="navbar navbar-default mynav">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button
                  type="button"
                  class="navbar-toggle collapsed"
                  data-toggle="collapse"
                  data-target="#bs-example-navbar-collapse-1"
                  aria-expanded="false"
                >
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar top_bar"></span>
                  <span class="icon-bar middle_bar"></span>
                  <span class="icon-bar bottom_bar"></span>
                </button>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav menubar_ul_li">
                  <li class="active"><a href="#">Home</a></li>
                  <li>
                    <a href="#">Our Services</a>
                  </li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact Us</a></li>


                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                    <i class="mdi mdi-logout text-primary"></i> {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                    </div>
                  </li>


                </ul>
              </div>

              <!-- /.navbar-collapse -->
            </nav>
            <!-- navbar -->
          </div>

          <div class="bannertext">
            @foreach ($items as $item)
            <h2>{{ $item->text1 }}</h2>
            <p></p>
            <button href="#">Get Started</button>
            <a href="#">Learn More</a>
          </div>
          <div class="bannerbseimgs">
            <img src="user/images/b2.png" />
            <img src="upload/staticimage/{{ $item->image1 }}" />
            <img src="{{ asset('user/images/b3.png') }}" />
          </div>
        </div>
        @endforeach
        <!-- #container -->
      </header>
      <!-- #logo_menu bar -->

      {{-- <div class="card">

        <div class="card-header">
            <h4>
                Category
                <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm float-end">Add Category</a>
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-border table-striped">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($items as $item)

                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->img1 }}</td>
                        <td>{{ $item->text1 }}</td>
                        <td>
                            <a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div> --}}

