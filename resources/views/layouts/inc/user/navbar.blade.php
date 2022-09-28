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
          <div
            class="collapse navbar-collapse"
            id="bs-example-navbar-collapse-1"
          >
          @foreach ($items as $item)
            <ul class="nav navbar-nav menubar_ul_li">
              <li class="active"><a href="index.html">Home</a></li>
              <li>
                <a href="#">Our Services</a>
              </li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contact Us</a></li>
              {{-- @if (Auth::user()->role_as == '1')
                <li>

                  <a class="" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                      <i class="mdi mdi-logout text-primary"></i>
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>

                </li>

                <li>
                    <a href="{{ route('edit',$item->id) }}" class="btn btn-success btn-sm">{{ _('Edit') }}</a>
                </li> --}}

                {{-- <li class="dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li> --}}

              {{-- @endif --}}
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </nav>
        <!-- navbar -->
      </div>

      <div class="bannertext">
            <h2>
                {{ $item->text1 }}
            </h2>
            <p></p>
            <button href="#">Get Started</button>
            <a href="#">Learn More</a>
        </div>
        <div class="bannerbseimgs">
            <img src="/productImages/{{ $item->image1 }}" style="width: 414px; height: 242px; display:block; margin-left:auto; margin-right:auto;" />
            <img src="/productImages/{{ $item->image2 }}" style="width: 460px; height: 270px; display:block; margin-left:auto; margin-right:auto;" />
            <img src="/productImages/{{ $item->image3 }}" style="width: 414px; height: 242px; display:block; margin-left:auto; margin-right:auto;" />
        </div>


    </div>
    <!-- #container -->
</header>

      @endforeach


