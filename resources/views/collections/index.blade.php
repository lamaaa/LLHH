@extends('layouts.default')
@section('title','收集箱')

@section('content')

    <div class="container myContainerStyle" >

        <!--筛选导航栏!-->
        <nav class="navbar navbar-default" >
            <div class="container">
                <div id="navbar" class="navbar-collapse collapse">
                    <form action="{{ route('collections.index') }}" id="screenForm" method="GET">
                        <ul class="nav navbar-nav pull-left">
                            <li>
                                <span><strong>排序：</strong></span>
                            </li>
                            <li>
                                <a href="javascript:void(0)" onclick="document.getElementById('screenForm').submit()">收藏时间</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" onclick="document.getElementById('screenForm').submit()">错误次数</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">难度<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)" onclick="document.getElementById('screenForm').submit()">全部</a></li>
                                    <li><a href="javascript:void(0)" onclick="document.getElementById('screenForm').submit()">容易</a></li>
                                    <li><a href="javascript:void(0)" onclick="document.getElementById('screenForm').submit()">中等</a></li>
                                    <li><a href="javascript:void(0)" onclick="document.getElementById('screenForm').submit()">困难</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">题型<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:void(0)" onclick="document.getElementById('screenForm').submit()">选择题</a></li>
                                    <li><a href="javascript:void(0)" onclick="document.getElementById('screenForm').submit()">计算题</a></li>
                                    <li><a href="javascript:void(0)" onclick="document.getElementById('screenForm').submit()">应用题</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="form-group">
                            <input type="text" class="form-control " placeholder="搜索题目">
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                        <a type="button" class="btn btn-info lead" href="#">组卷</a> 
                    </form>
                </div>
            </div>        
        </nav><!--结束导航栏-->





        <!--显示被筛选的试题！默认显示全部-->
        <!--做题面板，头部显示难度系数，入库时间和收集箱按钮；内容框显示题目；尾部显示选项按钮和答案按钮-->
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
              <span class="lead">
                    &nbsp收藏时间：{{ $question->collected_at }}
              </span>
              <input id="questionId" type="hidden" value="{{$question->id}}" />
              <button id="collectButton"  class="btn  btn  btn-success btn-style pull-right">
                  <span id="collectionBox">收集箱</span>
              </button>
            </div>
            <div class="panel-body">
                {!! $question->description !!}
            </div>
            <div class="panel-footer">
                  <button type="button" class="btn btn-danger" data-toggle="popover" title="答案" 
                          data-content="{!! $question->answer !!}">答案
                  </button>
            </div>
        </div><!--结束做题面板-->
         @endforeach
        {{ $questions->render() }}
    </div>


        <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
            
        <script src="/js/myjs/myJsStyle.js"></script>

@stop