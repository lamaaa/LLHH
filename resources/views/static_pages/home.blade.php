@extends('layouts.default')

@section('content')
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide " data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="/img/default.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>难题</h1>
                        <p>很难</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">刷题</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="/img/default1.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>模拟题</h1>
                        <p>综合练习</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">刷题</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="img/default2.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>我的错题</h1>
                        <p>针对性练习</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">刷题</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- /.carousel -->
@stop