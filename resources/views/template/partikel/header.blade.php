<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="" class="logo">
                        <img src="{{ asset('template/assets/images/logo.png') }}" alt="Chain App Dev">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="/home" class="active">Home</a></li>
                        @if (isset(Auth::user()->nama))
                            <li class="scroll-to-section"><a href="/diri" class="active">Data Perjalanan</a></li>
                        @endif


                        <li>
                            @if (isset(Auth::user()->nama))
                                <div class="gradient-button"><a id="modal_trigger" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fa fa-sign-in-alt"></i>
                                        Logout</a></div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            @else
                                <div class="gradient-button"><a id="modal_trigger" href="#modal"><i
                                            class="fa fa-sign-in-alt"></i> Sign In Now</a></div>
                            @endif
                        </li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
