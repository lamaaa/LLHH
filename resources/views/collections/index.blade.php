@extends('layouts.default')
@section('title','收集箱')

@section('content')
    <div class="container myContainerStyle" >
        <!--筛选导航栏!-->
        <nav class="navbar navbar-default" >
            <div class="container">
                <div id="navbar" class="navbar-collapse collapse">
                    <form class=" form-inline " role="form" action="{{ route('collections.index') }}" id="screenForm" method="GET">
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
                                <input type="hidden" value="{{$sort['order']}}" name="order" id="order">
                                <input type="hidden" value="{{$sort['criteria']}}" name="criteria" id="criteria">
                            </li>


                            <div class="form-group pull-right" style="margin:15px 10px">
                                 <input type="text" class="form-control " name="search" placeholder="搜索题目">
                                 <button type="submit" class="btn btn-default">搜索</button>
                            </div>

                            <li class="form-group pull-right" >
                                <!--<span  style="margin:15px 0px"><strong>&nbsp&nbsp&nbsp难度：</strong></span>-->
                                <select name="difficulty" id="difficulty" class=" form-control  input" 
                                onchange="document.getElementById('screenForm').submit()" style="margin:15px 0px">

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
                                    <option value="4" @if($filter['type'] == 4) selected @endif>题型</option>
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


    <!--显示被筛选的试题！默认显示全部-->
        <!--做题面板，头部显示难度系数，入库时间和收集箱按钮；内容框显示题目；尾部显示选项按钮和答案按钮-->
         @foreach($questions as $question)
        <div class="panel panel-default" >
            <div class="panel-heading">
                <input type="hidden" name="question_id" value="{{$question->id}}">
              <span class="lead">难度：
                  @for($countStar = 0; $countStar < $question->difficulty; $countStar++)
                      <img src="/img/sts.gif" alt="a start">
                  @endfor
                  @for($countStar = 0; $countStar < 5 - $question->difficulty; $countStar++)
                      <img src="/img/nsts.gif" alt="a null start">
                  @endfor
              </span> <span class="lead">&nbsp收藏时间：{{ $question->collected_at }}</span>
              </span> <span class="lead">&nbsp错误次数：{{ $question->mistake_times }}</span>
                <form style="display:block;float: right;" action="{{ route('collections.destroy', $question->id) }}" method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger btn-style pull-right">
                    <span>取出收集箱</span>
                    </button>
                </form>
            </div>
            <div class="panel-body">
                {!! $question->description !!}
            </div>
            <div class="panel-footer">
                <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#answerButton{{$question->id}}" aria-expanded="false"
                    aria-controls="answerButton">
                    答案</button>
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
            <!--对错按钮-->
        </div><!--结束做题面板-->
         @endforeach
        {{ $questions->render() }}
    </div>
    @include('chapters.rightModal')
    @include('chapters.wrongModal')

@stop
