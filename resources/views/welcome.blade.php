
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('bst/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('fa/css/all.css')}}" rel="stylesheet">
    @include('layout.nav')
</head>
<body style="background:#333;">

<h1 class="text-center " style=" color:coral;  "><i><strong><i class="fa fa-music"></i>Welcome to Healer Music<i class="fa fa-music"></i> </strong> </i></h1>
<div class="container" >
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow">
                    <div class="card-body">
                        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{asset('image/maxresdefault.jpg')}}" style="width: 200px;height: 200px" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('image/ninikz.jpg')}}" style="width: 200px;height: 200px" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="{{asset('image/ss.jpg')}}" style="width: 200px;height: 200px" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('image/maxresdefault.jpg')}}" style="width: 200px;height: 200px" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('image/ninikz.jpg')}}" style="width: 200px;height: 200px" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{asset('image/ss.jpg')}}" style="width: 200px;height: 200px" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container pt-4">
    <div class="row">
        @foreach($song as $songs)
            <div class="col-sm-4 pt-3" >
                <div class="card shadow ">
                    <div class="card-header text-center" style="background:khaki;"><strong>{{$songs->song_name}} <i class="fa fa-music"></i></strong></div>
                    <div class="card-body" style="background:coral;">

                        <p>Artist:{{$songs->singer->singer_name}}</p>
                        <p>Album:{{$songs->album->album_name}}</p>
                        <p>Category:{{$songs->category->cat_name}}</p>
                        <p>Songs:
                        <audio controls src="../songfiles/{{$songs->song_file}}"></audio> </p>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>
@include('layout.footer')
<script src="{{asset('bst/js/jquery.js')}}"></script>
<script src="{{asset(('bst/js/bootstrap.js'))}}"></script>
</body>
</html>
