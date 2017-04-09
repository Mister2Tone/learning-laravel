    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Mister2Tone</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden active">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio" style="display:none;">Portfolio</a>
                        <a href="{{ url('/portfolio') }}">Portfolio</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about" style="display:none;">About</a>
                        <a href="{{ url('/about') }}">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact" style="display:none;">Contact</a>
                        <a href="{{ url('contacts') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
        <div class="container" id="maincontent" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive img-rounded" src="{{asset('img/myself2.png')}}" alt="myself2" width="256" height="256">
                    <div class="intro-text">
                        @if(session('name'))
                        <h1 class="name">Nice 2 Meet u </br><i class="fa fa-1x fa-user"></i> {{session('name')}}</h1>
                        @else
                        <h1 class="name">Hi, I'm Pisit Tansri</h1>
                        @endif
                        
                        @if(session('email'))
                        <h5><i class="fa fa-1x fa-envelope-o"></i> {{session('email')}}</h5>
                        @else
                        @endif

                        @if(session('phone'))
                        <h5><i class="fa fa-1x fa-phone"></i> {{session('phone')}}</h5>
                        @else
                        @endif

                        @if(Request::cookie('date'))
                        <h5><i class="fa fa-1x fa-clock-o"></i> Send on time: {{Request::cookie('date')}}</h5>
                        @else
                        @endif

                        <hr class="star-light">
                        <span class="skills">Web Developer - Expert Gamer - Amatuar Guitarist</span>
                    </div>
                </div>
            </div>
        </div>
    </header>