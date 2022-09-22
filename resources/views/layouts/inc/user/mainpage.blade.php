
    <main>
        @foreach ($items as $item)

      <section class="bg-gray">
        <div class="container shadowline">
          <ul class="divide-four">
            <li>
              <h3>
                <div class="fa fa-clock-o"></div>
              </h3>
              <h4 class="darkcolor">{{ $item->logotext1 }}</h4>
              <p>
                {{ $item->text2 }}
              </p>
              <button>read more</button>
            </li>

            <li>
              <h3>
                <div class="fa fa-desktop"></div>
              </h3>
              <h4 class="darkcolor">{{ $item->logotext2 }}</h4>
              <p>
                {{ $item->text3 }}
              </p>
              <button>read more</button>
            </li>

            <li>
              <h3>
                <div class="fa fa-cog"></div>
              </h3>
              <h4 class="darkcolor">{{ $item->logotext3 }}</h4>
              <p>
                {{ $item->text4 }}
              </p>
              <button>read more</button>
            </li>

            <li>
              <h3>
                <div class="fa fa-mortar-board"></div>
              </h3>
              <h4 class="darkcolor">{{ $item->logotext4 }}</h4>
              <p>
                {{ $item->text5 }}
              </p>
              <button>read more</button>
            </li>
          </ul>
        </div>
      </section>

      <section>
        <div class="container">
          <ul class="divide-four pf">
            <li class="portfolio">
              <h2 class="darkcolor">Portfolio</h2>
              <p class="padd-left-zero">
                {{ $item->text6 }}
              </p>
              <a href="#" class="color-red">Our Portfolio</a>
            </li>

            <li>
              <img src="{{ asset('user/images/webdesign.png') }}" />
              <h5 class="bold arvofont darkcolor">1st web Designer</h5>
              <p>Web Design</p>
            </li>

            <li>
              <img src="{{ asset('user/images/alive.png') }}" />
              <h5 class="bold arvofont darkcolor">Arive</h5>
              <p>Web Design</p>
            </li>

            <li>
              <img src="{{ asset('user/images/labzip.png') }}" />
              <h5 class="bold arvofont darkcolor">LabZip</h5>
              <p>Logo Design</p>
            </li>
          </ul>

          <ul class="client">
            <li>
              <img src="{{ asset('user/images/c1.png') }}" />
            </li>
            <li>
              <img src="{{ asset('user/images/c2.png') }}" />
            </li>
            <li>
              <img src="{{ asset('user/images/c3.png') }}" />
            </li>
            <li>
              <img src="{{ asset('user/images/c4.png') }}" />
            </li>
          </ul>
        </div>
      </section>

      {{-- <section>
        <div class="container">
          <div class="col-lg-4 col-md-4 col-sm-4 footerinfo">
            <h4 class="darkcolor">Testimonials</h4>
            <section>
              <img src="{{ asset('user/images/9shapelogo.png') }}" id="Testimonialimg" />
              <p class="left77">
                <i>
                  This is Photoshop's version of Lorem Ipsum. Proin gravida nibh
                  vel velit auctor aliquet. Aenean sollicitudin, lorem quis
                  bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
                  nibh id elit. Duis sed odio sit amet nibh vulputate cursus a
                  sit amet mauris.</i
                >
              </p>
              <address>
                <i class="bold">9Gag</i>
                <div class="color-red">9gag.com</div>
              </address>
            </section>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 footerinfo">
            <h4 class="darkcolor">Our Latest Posts</h4>
            <section>
              <p class="darkcolor arvofont">
                This is Photoshop's version of Lorem Ipsum.
              </p>
              <br />
              <p class="date">
                June 4, 2013 | Posted by <a href="#" class="color-red">Admin</a>
              </p>
            </section>

            <section>
              <p class="darkcolor arvofont">
                This is Photoshop's version of Lorem Ipsum.
              </p>
              <br />
              <p class="date">
                June 4, 2013 | Posted by <a href="#" class="color-red">Admin</a>
              </p>
            </section>

            <section>
              <p class="darkcolor arvofont">
                This is Photoshop's version of Lorem Ipsum.
              </p>
              <br />
              <p class="date">
                June 4, 2013 | Posted by <a href="#" class="color-red">Admin</a>
              </p>
            </section>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-4 footerinfo">
            <h4 class="darkcolor arvofont">Latest Tweets</h4>
            <section>
              <img src="{{ asset('user/images/users.png') }}" />
              <p class="left77">
                Proin gravida nibh vel velit auctor aliquet.
                <a href="#" class="color-red">http://on.dummy.me.10kvwek</a>
              </p>
            </section>

            <section>
              <img src="{{ asset('user/images/users.png') }}" />
              <p class="left77">
                Proin gravida nibh vel velit auctor aliquet.
                <a href="#" class="color-red">http://on.dummy.me.10kvwek</a>
              </p>
            </section>

            <section>
              <img src="{{ asset('user/images/9shapelogo.png') }}" />
              <p class="left77">
                Proin gravida nibh vel velit auctor aliquet.
                <a href="#" class="color-red">http://on.dummy.me.10kvwek</a>
              </p>
            </section>
          </div>
        </div>
      </section> --}}

      @endforeach

    </main>
