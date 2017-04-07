@extends ('layouts.default')

@section('content')

    <div class="container">

        <!-- single button -->
        <nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix pull-left hidden:overflow" style="margin-top:100px">
            <div class="btn-group-vertical" role="group">
                @foreach ($modules as $module)
                    @foreach ($module->parts as $part)
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-default dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                &nbsp&nbsp&nbsp&nbsp{{ $part->name}}&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" >
                                @foreach ($part->chapters as $chapter)
                                    <li><a href="{{ route('chapters.show', $chapter->id) }}">{{$chapter->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </nav>

        <div class="container marketing" style="margin-top:30px">
            <!--排序方式选项-->
            <!--<div class="radio pull-right" style="width:700px">
                <span class="lead">排序方式：&nbsp&nbsp&nbsp</span>
                <label for="male" style="margin-top:8px">
                    <input id="1"  class="#" type="radio" value="option1" onclick="checked" name="orderby" >
                    按收集次数
                </label>
                <label for="female">
                    <input id="2"  class="#" type="radio" value="option2" onclick="checked" name="orderby">
                    入库时间
                </label>
                <form action="{{ route('chapters.show', $chapter_id) }}" method="GET" name="difficultyForm">
                    <span class="lead"> 难度： </span>
                    <select class="form-control input" name="difficulty" id="difficulty" style="width:80px;float:right" >
                        <option value="0" @if($difficulty==0) selected @endif>全部</option>
                        <option value="1" @if($difficulty==1) selected @endif>容易</option>
                        <option value="2" @if($difficulty==2) selected @endif>中等</option>
                        <option value="3" @if($difficulty==3) selected @endif>困难</option>
                    </select>
                </form>
            </div>结束方式选项-->
                            <!--筛选导航栏!-->
        <nav class="navbar navbar-default pull-right" style="width:800px">
            <div class="container">
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-left">
                        <li>
                            <a href="#" class="navbar-brand"><span><strong>排序：</strong></span></a>
                        </li>
                        <li>
                            <a href="#">按入库时间</a>
                        </li>
                        <li>
                            <a href="#">按被收集次数</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">难度<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">全部</a></li>
                                <li><a href="#">容易</a></li>
                                <li><a href="#">中等</a></li>
                                <li><a href="#">困难</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">题型<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">选择题</a></li>
                                <li><a href="#">计算题</a></li>
                                <li><a href="#">应用题</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form ">
                        <div class="form-group">
                            <input type="text" class="form-control " placeholder="搜索题目">
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                    </form>
                </div>
            </div>        
        </nav><!--结束导航栏-->

            <!--做题面板，头部显示难度系数，入库时间和收集箱按钮；内容框显示题目；尾部显示选项按钮和答案按钮-->
            <div class=" pull-right" style="width:800px">
            @foreach($questions as $question)
                 <div class="panel panel-default" >
                    <div class="panel-heading">
                        <span class="lead">难度：
                            @for($countStar = 0; $countStar < $question->difficulty; $countStar++)
                                <img src="/img/sts.gif" alt="a start">
                            @endfor
                            @for($countStar = 0; $countStar < 5 - $question->difficulty; $countStar++)
                                <img src="/img/nsts.gif" alt="a null start">
                            @endfor
                        </span>
                        <span class="lead">&nbsp入库时间：{{$question->created_at}}</span>
                        <button id="button{{$question->id}}" onclick="changeQuestionState({{$question->id}})"
                        class="btn @if($question->isAdd) btn-danger @else btn-success @endif btn-style pull-right">
                            <span id="">@if($question->isAdd == 1) 移出收集箱 @else 加入收集箱 @endif<span>
                        </button>
                        <input id="input{{$question->id}}" type="hidden" value="{{$question->isAdd}}">
                    </div>

                    <div class="panel-body">
                        <p>
                             {!!$question->description!!}
                         </p>
                    </div>
                    <div class="panel-footer">
                        <!--答案按钮-->
                        <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#answerButton{{$question->id}}" aria-expanded="false" 
                         aria-controls="answerButton">
                         答案</button>
                         <!--对错按钮-->

                        <button type="button" class="btn btn-default pull-right" value="" id="trueBtn{{$question->id}}" onclick="falseBtn({{$question->id}})" >
                         错误</button> 
                        <button type="button" class="btn btn-default pull-right" value="" id="falseBtn{{$question->id}}" onclick="trueBtn({{$question->id}})" >
                         正确</button>                       
                     </div>
                    <div class="collapse" id="answerButton{{$question->id}}">
                        {!! $question->answer !!}
                    </div>
                </div>
            @endforeach
                {!! $questions->render() !!}
            </div>
         </div>
    </div>
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/js/myjs/myJsStyle.js"></script>
    <hr>
@stop