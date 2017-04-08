@extends ('layouts.default')

@section('content')

<div class="container" >

         <nav class="navbar navbar-default" >
            <div class="container">
                <div id="navbar" class="navbar-collapse collapse">
                    <form class=" form-inline " role="form" action="{{ route('questions.done') }}" id="screenForm" method="GET">
                            <li class="form-group">
                                <a  class="navbar-brand" style="margin-top:7px" href="javascript:void(0);"
                                id="collected_at" onclick="sort(this.id)"><strong>排序：</strong>&nbsp&nbsp收藏时间<span class="caret"></span></a>
                            </li>
                            <li class="form-group">

                                <a  class="navbar-brand" style="margin-top:7px"href="javascript:void(0);"
                                id="mistake_times" onclick="sort(this.id)">错误次数<span class="caret"></span></a>
                            </li>
                            <li class="form-group">
                                <input type="hidden" value="{{$sort['order']}}" name="order" id="order">
                                <input type="hidden" value="{{$sort['criteria']}}" name="criteria" id="criteria">
                            </li>
                            <div class="form-group pull-right" style="margin:15px 10px">
                                 <input type="text" class="form-control " name="search" placeholder="搜索题目">
                                 <button type="submit" class="btn btn-default">搜索</button>
                            </div>

                            <li class="form-group pull-right" >

                                <select name="difficulty" id="difficulty" class=" form-control  input"
                                onchange="document.getElementById('screenForm').submit()" style="margin:15px 0px">
                                    <option value="4">难度</option>
                                    <option value="0" @if($filter['difficulty'] == 0) selected @endif>全部</option>
                                    <option value="1" @if($filter['difficulty'] == 1) selected @endif>容易</option>
                                    <option value="2" @if($filter['difficulty'] == 2) selected @endif>中等</option>
                                    <option value="3" @if($filter['difficulty'] == 3) selected @endif>困难</option>
                                </select>
                            </li>
                            <li class="form-group pull-right">
                                <!--<span  style="margin:15px 0px"><strong>题型：</strong></span>-->
                                <select name="type" id="type" class="form-control input "
                                 onchange="document.getElementById('screenForm').submit()" style="margin:15px 0px">
                                    <option value="4">题型</option>
                                    <option value="0" @if($filter['type'] == 0) selected @endif>全部</option>
                                    <option value="1" @if($filter['type'] == 1) selected @endif>选择题</option>
                                    <option value="2" @if($filter['type'] == 2) selected @endif>填空题</option>
                                    <option value="3" @if($filter['type'] == 3) selected @endif>计算题</option>
                                </select>
                            </li>
                    </form>
                </div>
            </div>
        </nav><!--结束导航栏-->
            <!--做题面板，头部显示难度系数，入库时间和收集箱按钮；内容框显示题目；尾部显示选项按钮和答案按钮-->
            <div class=" pull-right"">
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
                        <button type="button" class="btn btn-danger" data-toggle="collapse"
                                data-target="#answerButton{{$question->id}}" aria-expanded="false"
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
@stop
