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
                                <a href="javascript:void(0)" id="collected_at" onclick="sort(this.id)">收藏时间</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" id="mistake_times" onclick="sort(this.id)">错误次数</a>
                            </li>
                            <input type="hidden" value="{{$sort['order']}}" name="order" id="order">
                            <input type="hidden" value="{{$sort['criteria']}}" name="criteria" id="criteria">
                            <li class="dropdown">
                                <label for="">难度</label>
                                <select name="difficulty" id="difficulty" class="form-control input" onchange="document.getElementById('screenForm').submit()" >
                                    <option value="0" @if($filter['difficulty'] == 0) selected @endif>全部</option>
                                    <option value="1" @if($filter['difficulty'] == 1) selected @endif>容易</option>
                                    <option value="2" @if($filter['difficulty'] == 2) selected @endif>中等</option>
                                    <option value="3" @if($filter['difficulty'] == 3) selected @endif>困难</option>
                                </select>
                            </li>
                            <li class="dropdown">
                                <label for="">题型</label>
                                <select name="type" id="type" class="form-control input " onchange="document.getElementById('screenForm').submit()">
                                    <option value="0" @if($filter['type'] == 0) selected @endif>全部</option>
                                    <option value="1" @if($filter['type'] == 1) selected @endif>选择题</option>
                                    <option value="2" @if($filter['type'] == 2) selected @endif>填空题</option>
                                    <option value="3" @if($filter['type'] == 3) selected @endif>计算题</option>
                                </select>
                            </li>
                        </ul>
                        <div class="form-group">
                            <input type="text" class="form-control" name="search" placeholder="搜索题目">
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
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
              </span> <span class="lead">&nbsp收藏时间：{{ $question->collected_at }}</span>
              </span> <span class="lead">&nbsp错误次数：{{ $question->mistake_times }}</span>
              <button class="btn  btn  btn-success btn-style pull-right">
                  <span>收集箱</span>
              </button>
            </div>
            <div class="panel-body">
                {!! $question->description !!}
            </div>
            <div class="panel-footer">
                <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#answerButton{{$question->id}}" aria-expanded="false" 
                    aria-controls="answerButton">
                    答案</button>
            </div>
            <div class="collapse" id="answerButton{{$question->id}}">
                {!! $question->answer !!}
            </div>


        </div><!--结束做题面板-->
         @endforeach
        {{ $questions->render() }}
    </div>


        <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
            
        <script src="/js/myjs/myJsStyle.js"></script>

        <!-- 弹出框 !-->
            <script>
            $(function () {
                $("[data-toggle='popover']").popover({
                    html: true,
                });
            });

            function sort(criteria){
                document.getElementById('criteria').value = criteria;
                var order = document.getElementById('order').value;
                var screenForm = document.getElementById('screenForm');

                if (order == "asc")
                {
                    document.getElementById('order').value = "desc";
                    screenForm.submit();
                }
                else
                {
                    document.getElementById('order').value = "asc";
                    screenForm.submit();
                }
            }
          </script>
@stop
