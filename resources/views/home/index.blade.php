@extends('layouts.default')

@section('title','首页')

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
                <img class="first-slide" src="/img/carousel_page1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>我的收集箱</h1>
                        <p>练习</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">刷题</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="/img/carousel_page2.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>试卷</h1>
                        <p>综合练习</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">刷题</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="img/carousel_page3.jpg" alt="Third slide">
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

    
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- two columns of text below the carousel -->
      <div id="exePro" class="row">
        <div class="col-lg-6">
        <!-- <img class="img-circle" src="img/too.jpg" alt="Generic placeholder image" width="140" height="140"> -->
          
          <h2><strong>&nbsp&nbsp&nbsp&nbsp热门收藏</strong></h2>

          <hr>
            <div class="container-fluid">
            @foreach($popularQuestions as $popularQuestion)
                <div class="panel panel-default fontSize" >
                    <div class="panel-heading">
                        <span class="">难度：
                            @for($countStar = 0; $countStar < $popularQuestion->difficulty; $countStar++)
                                <img src="/img/sts.gif" alt="a start">
                            @endfor
                            @for($countStar = 0; $countStar < 5 - $popularQuestion->difficulty; $countStar++)
                                <img src="/img/nsts.gif" alt="a null start">
                            @endfor
                        </span>
                        <span class="">&nbsp入库时间：
{{--                                {{$uestion->created_at}}--}}
                            </span>
                        <button id="button{{$popularQuestion->id}}" onclick="changeQuestionState({{$popularQuestion->id}})"
                                class="btn @if($popularQuestion->isAdd) btn-danger @else btn-success @endif btn-style pull-right">
                            @if($popularQuestion->isAdd == 1) 移出收集箱 @else 加入收集箱 @endif
                        </button>
                        <input id="input{{$popularQuestion->id}}" type="hidden" value="{{$popularQuestion->isAdd}}">
                    </div>

                    <div class="panel-body">
                        <p>
                            {!!$popularQuestion->description!!}
                        </p>
                    </div>
                    <div class="panel-footer">
                        <!--答案按钮-->
                        <button type="button" class="btn btn-danger" data-toggle="collapse"
                        data-target="#answerButton{{$popularQuestion->id}}" aria-expanded="false"
                                aria-controls="answerButton">
                            答案</button>
                        <!--对错按钮-->
                        {{--<button type="button" class="btn btn-default pull-right"  data-toggle="modal"--}}
                                {{--id="falseBtn{{$question->id}}" onclick="addWrongRecord({{$question->id}})" >--}}
                            {{--错误</button>--}}
                        {{--<button type="button" class="btn btn-default pull-right" data-toggle="modal"--}}
                                {{--id="trueBtn{{$question->id}}" onclick="addRightRecord({{$question->id}})" >--}}
                            {{--正确</button>--}}
                    </div>
                    <div class="collapse" id="answerButton{{$popularQuestion->id}}">
                        {!! $popularQuestion->answer !!}
                    </div>
                </div>
            @endforeach
            </div>
        <!--引入做对模态框和做错模态框-->
            @include('chapters.rightModal')
            @include('chapters.wrongModal')

            <p><a class="btn btn-default pull-right" href="{{ route('collections.index') }}" role="button">阅读更多&raquo;</a></p>
        </div><!-- /.col-lg-6 -->
        <div  class="col-lg-6">
        <!-- <img class="img-circle" src="img/too.jpg" alt="Generic placeholder image" width="140" height="140"> -->
          
        <h2><strong>&nbsp&nbsp&nbsp&nbsp&nbsp易错题</strong></h2>


        <hr class="default">
                {{--@include('layouts.question')--}}
            {{--易错题--}}
            <div class="container-fluid">
                @foreach($fallibleQuestions as $fallibleQuestion)
                    <div class="panel panel-default fontSize" >
                        <div class="panel-heading">
                        <span class="">难度：
                            @for($countStar = 0; $countStar < $fallibleQuestion->difficulty; $countStar++)
                                <img src="/img/sts.gif" alt="a start">
                            @endfor
                            @for($countStar = 0; $countStar < 5 - $fallibleQuestion->difficulty; $countStar++)
                                <img src="/img/nsts.gif" alt="a null start">
                            @endfor
                        </span>
                            <span class="">&nbsp入库时间：
                                {{--                                {{$uestion->created_at}}--}}
                            </span>
                            <button id="button{{$fallibleQuestion->id}}" onclick="changeQuestionState({{$fallibleQuestion->id}})"
                                    class="btn @if($fallibleQuestion->isAdd) btn-danger @else btn-success @endif btn-style pull-right">
                                @if($fallibleQuestion->isAdd == 1) 移出收集箱 @else 加入收集箱 @endif
                            </button>
                            <input id="input{{$fallibleQuestion->id}}" type="hidden" value="{{$fallibleQuestion->isAdd}}">
                        </div>

                        <div class="panel-body">
                            <p>
                                {!!$fallibleQuestion->description!!}
                            </p>
                        </div>
                        <div class="panel-footer">
                            <!--答案按钮-->
                            <button type="button" class="btn btn-danger" data-toggle="collapse"
                                    data-target="#answerButton{{$fallibleQuestion->id}}" aria-expanded="false"
                                    aria-controls="answerButton">
                                答案</button>
                            <!--对错按钮-->
                            {{--<button type="button" class="btn btn-default pull-right"  data-toggle="modal"--}}
                            {{--id="falseBtn{{$question->id}}" onclick="addWrongRecord({{$question->id}})" >--}}
                            {{--错误</button>--}}
                            {{--<button type="button" class="btn btn-default pull-right" data-toggle="modal"--}}
                            {{--id="trueBtn{{$question->id}}" onclick="addRightRecord({{$question->id}})" >--}}
                            {{--正确</button>--}}
                        </div>
                        <div class="collapse" id="answerButton{{$fallibleQuestion->id}}">
                            {!! $fallibleQuestion->answer !!}
                        </div>
                    </div>
                @endforeach
            </div>

          <p><a class="btn btn-default fr" href="{{route('chapters.index')}}}" role="button">阅读更多&raquo;</a></p>
        </div><!-- /.col-lg-6 -->
      
      </div><!-- /.row -->

      @include(('home.news'))

@stop