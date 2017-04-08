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
        <nav class="navbar navbar-default pull-right" style="width:800px">
            <div class="container">
                <div id="navbar" class="navbar-collapse collapse">
                        <!--<form class=" form-inline " role="form" action="" id="screenForm" method="GET">
                            <li class="form-group">
                                <a  class="navbar-brand" style="margin-top:7px" href="javascript:void(0);" 
                                id="collected_at" onclick="sort(this.id)"><strong>排序：</strong>&nbsp&nbsp收藏时间<span class="caret"></span></a>
                            </li>
                            <li class="form-group">
                                <lable class="sr.only"></lable>
                                <a  class="navbar-brand" style="margin-top:7px"href="javascript:void(0);" 
                                id="mistake_times" onclick="sort(this.id)">错误次数<span class="caret"></span></a>
                            </li>
                            <li class="form-group">
                                <input type="hidden" value="" name="order" id="order">
                                <input type="hidden" value="" name="criteria" id="criteria">
                            </li>
                            <div class="form-group pull-right" style="margin:15px 10px">
                                 <input type="text" class="form-control " name="search" placeholder="搜索题目">
                                 <button type="submit" class="btn btn-default">搜索</button>
                            </div>

                            <li class="form-group" >
                                <span  style="margin:15px 0px"><strong>&nbsp&nbsp&nbsp难度：</strong></span>
                                <select name="difficulty" id="difficulty" class=" form-control  input" 
                                onchange="document.getElementById('screenForm').submit()" style="margin:15px 0px">
                                    <option value="0" >全部</option>
                                    <option value="1" >容易</option>
                                    <option value="2" >中等</option>
                                    <option value="3" >困难</option>
                                </select>
                            </li>
                            <li class="form-group">
                                <span  style="margin:15px 0px"><strong>题型：</strong></span>
                                <select name="type" id="type" class="form-control input "
                                 onchange="document.getElementById('screenForm').submit()" style="margin:15px 0px">
                                    <option value="0" >全部</option>
                                    <option value="1" >选择题</option>
                                    <option value="2" >填空题</option>
                                    <option value="3" >计算题</option>
                                </select>
                            </li> 
                    </form>-->
                <form class=" form-inline navbar-form" role="form" action="" id="screenForm" method="GET">
                    <ul class="nav navbar-nav from-group pull-left">
                        <!--<li class="from-group">
                            <span class="lead"><strong>排序：</strong></span>
                        </li>-->
                        <li class="from-group pull-left">
                            <a  class="navbar-brand"  href="javascript:void(0);" 
                                id="collected_at" onclick="sort(this.id)"><strong>排序：</strong>&nbsp&nbsp入库时间<span class="caret"></span></a>
                        </li>
                        <li class="from-group ">
                            <a  class="navbar-brand" href="javascript:void(0);" 
                                id="collected_at" onclick="sort(this.id)">&nbsp&nbsp被收集次数<span class="caret"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                        </li>
                        <li class="from-group" style="margin-top:8px" >
                            <select name="" id="" class="form-control input">
                                <option value="">难度</option>
                                <option value="">全部</option>
                                <option value="">容易</option>
                                <option value="">中等</option>
                                <option value="">困难</option>
                            </select>
                        </li>
                        <li class="from-group " style="margin-top:8px"  >
                            <select name="" id="" class="form-control input">
                                <option value="">题型</option>
                                <option value="">选择题</option>
                                <option value="">计算题</option>
                                <option value="">应用题</option>
                            </select>    
                        </li>
                    </ul>
                    <form class="navbar-form " >
                        <div class="form-group" style="margin-top:8px">
                            <input type="text" class="form-control " placeholder="搜索题目">
                        </div>
                        <button type="submit" class="btn btn-default" style="margin-top:8px">搜索</button>
                    </form>
                <form>
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
                            <span id="">@if($question->isAdd == 1) 移出收集箱 @else 加入收集箱 @endif</span>
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
                         <button type="button" class="btn btn-default pull-right"  data-toggle="modal"
                          id="falseBtn{{$question->id}}" onclick="addWrongRecord({{$question->id}})" >
                         错误</button> 
                        <button type="button" class="btn btn-default pull-right" data-toggle="modal"
                         id="trueBtn{{$question->id}}" onclick="addRightRecord({{$question->id}})" >
                         正确</button> 
                     </div>
                    <div class="collapse" id="answerButton{{$question->id}}">
                        {!! $question->answer !!}
                    </div>
                </div>
            @endforeach
                <!--引入做对模态框和做错模态框-->
                    @include('chapters.rightModal')
                    @include('chapters.wrongModal')
                {!! $questions->render() !!}
            </div>

         </div>
    </div>
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/js/myjs/myJsStyle.js"></script>
    <hr>
@stop