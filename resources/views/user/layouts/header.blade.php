<!-- Header _________________________________ -->
<header class="inner-header">
    <div class="top-header">
        <div class="container">
            <div class="left-side float-left">
                <ul>
                    <li><span class="icon round-border"><i class="ficon flaticon-signs"></i></span> <a href="#" class="tran3s">45/12 Best Avenue Street, UK 2450, US</a></li>
                    <li><span class="icon round-border"><i class="ficon flaticon-multimedia"></i></span> <a href="#" class="tran3s">info@softscandic.com</a></li>
                    <li><span class="icon round-border"><i class="ficon flaticon-technology"></i></span> <a href="#" class="tran3s">+8801712570051</a></li>
                </ul>
            </div>
            <!-- /.left-side -->
            <div class="right-side float-right">
                <ul>
                    <li><a href="#" class="tran3s round-border icon"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="tran3s round-border icon"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="tran3s round-border icon"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="tran3s round-border icon"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <!-- /.right-side -->
        </div>
    </div>
    <!-- /.top-header -->
    <!-- _______________________ Theme Menu _____________________ -->
    <div class="container">
        <div class="main-menu-wrapper clear-fix">
            <div class="container">
                <div class="logo float-left"><a href="{{URL::to('/')}}" style="vertical-align:middle;"><img src="{{asset('user/images/logo/logo.png')}}" alt="LOGO"></a></div>
                <!-- Menu -->
                <nav class="navbar float-right">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="dropdown-holder current-page-item"><a href="{{url::to('/')}}">Home</a>
                            </li>
                            <li class="dropdown-holder"><a href="#" data-toggle="modal" data-target="#exampleModalCenter">Search Tutors</a>
                            </li>
                            <li class="dropdown-holder"><a href="{{route('request.create')}}">Request a Tutor</a>
                            </li>
                            <li class="dropdown-holder"><a href="#">Premium Tutor</a>
                            </li>
                            <li class="dropdown-holder"><a href="{{route('request.index')}}">Tutions</a>
                            </li>
                            <li class="dropdown-holder"><a href="{{URL::to('loginregister')}}">Join us</a>
                            </li>
                            @guest
                            <li><a href="{{route('login')}}">Login</a></li>
                            @else
                            <li  class="dropdown-holder">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li><i class="fa fa-user"></i><a class="tran3s" href="{{route('profile.index')}}">My Profile
                                        </a></li>
                                    <li><i class="fa fa-sign-out-alt"></i><a class="tran3s" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a></li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{csrf_field()}}
                                    </form>


                                </ul>
                            </li>
                            @endguest
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
        </div>
        <!-- /.main-menu-wrapper -->
    </div>
</header>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">SEARCH FOR TUTORS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group col-md-6">
                        <select id="inputState" class="form-control">
                            <option selected>All District</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <select id="inputState" class="form-control">
                            <option selected>All Areas</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <select id="inputState" class="form-control">
                            <option selected>All Subject</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <select id="inputState" class="form-control">
                            <option selected>All Medium</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <select id="inputState" class="form-control">
                            <option selected>All Subjects</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <button type="submit" class="btn btn-primary form-control">Search Tutor</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
