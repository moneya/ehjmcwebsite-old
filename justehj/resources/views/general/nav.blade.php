<body>
    <header>
        <div class="top-bar">
            <div class="container">
                {{--  <div class="row">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="btn btn-light btn-sm" href="/">HOME </a>
                        </li>
                    </ul>
                </div>  --}}
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-ehj">
            <div class="container">
                <a href="/" class="navbar-brand logo"><img class="logo" src="{{ Voyager::image(setting('site.logo') )}} ">
                    <span class="logo-text text-uppercase">EHJMC Ilorin</span></a>



                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
                   <i class="fa fa-align-center"></i> 
                  </button>


                <div class="collapse navbar-collapse" id="navbarNav">

                    {{--  <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item ">
                            <a class="nav-link active" href="/">HOME </a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="/about">ABOUT </a>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                   SERVICES </i>
                                </a>
                            <div class="dropdown-menu dropdown-menu-center  text-center" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/training">Training and Certification </a>
                                <a class="dropdown-item" href="/project">Projects And  Project Management </a>
                                <a class="dropdown-item" href="/network">Network Design & Network Security Services</a>
                                <a class="dropdown-item" href="/web-services">Web Services</a>


                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link" href="/contact">
                                   Contact
                                </a>
                        </li>
                    </ul>  --}}
                {{ menu('main', 'bootstrap') }}

                </div>


            </div>
        </nav>




    </header>


    <!--- Nav Done-->