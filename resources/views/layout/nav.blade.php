

<nav class="navbar navbar-dark bg-dark navbar-expand-lg" >
    <a href="{{route('welcome')}}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><img src="../../ntg/morehead-state-eagle-png-logo-8.png" class="img-circle" style="width: 50px"><b>Healer Music</b></span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <i class="fa fa-list"></i> Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($cat as $cats)
                        <a class="dropdown-item" href="{{route('song.cat',['id'=>$cats->id])}}">{{$cats->cat_name}}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-microphone"></i>  Singers
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($singer as $singers)
                        <a class="dropdown-item" href="{{route('song.singer',['id'=>$singers->id])}}">{{$singers->singer_name}}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-book"></i> album
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($album as $albums)
                        <a class="dropdown-item" href="{{route('song.album',['id'=>$albums->id])}}">{{$albums->album_name}}</a>
                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>