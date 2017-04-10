{{--@extends ('layouts.default')--}}

@section('content')

    <div class="container">

        <!-- single button -->
        <nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix pull-left" style="margin-top:100px">
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

                        <form class=" form-inline navbar-form" role="form" action="{{ route('chapters.show', $chapter_id) }}" id="screenForm" method="GET">
                            <ul class="nav navbar-nav from-group pull-left">
                                <li class="from-group pull-left">
                                    <a  class="navbar-brand"  href="javascript:void(0);"
                                        id="created_at" onclick="sort(this.id)"><strong>排序：</strong>&nbsp&nbsp入库时间<span class="caret"></span></a>
                                </li>
                                <li class="from-group ">
                                    <a  class="navbar-brand" href="javascript:void(0);"
                                        id="collected_times" onclick="sort(this.id)">&nbsp&nbsp被收集次数<span class="caret"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                                </li>
                                <li class="form-group">
                                    <input type="hidden" value="{{$sort['order']}}" name="order" id="order">
                                    <input type="hidden" value="{{$sort['criteria']}}" name="criteria" id="criteria">
                                </li>
                                <li class="from-group" style="margin-top:8px" >
                                    <select name="difficulty" id="difficulty" onchange="document.getElementById('screenForm').submit();" class="form-control input">
                                        <option value="all" @if($filter['difficulty'] == 'all') selected @endif>难度</option>
                                        <option value="easy" @if($filter['difficulty'] == 'easy') selected @endif>容易</option>
                                        <option value="middle" @if($filter['difficulty'] == 'middle') selected @endif>中等</option>
                                        <option value="difficult" @if($filter['difficulty'] == 'difficult') selected @endif>困难</option>
                                    </select>
                                </li>
                                <li class="from-group " style="margin-top:8px"  >
                                    <select name="type" id="type" class="form-control input" onchange="document.getElementById('screenForm').submit();">
                                        <option value="all" @if($filter['type'] == 'all') selected @endif>题型</option>
                                        <option value="choice" @if($filter['type'] == 'choice') selected @endif>选择题</option>
                                        <option value="completion" @if($filter['type'] == 'completion') selected @endif>填空题</option>
                                        <option value="calculation" @if($filter['type'] == 'calculation') selected @endif>计算题</option>
                                    </select>
                                </li>
                            </ul>
                            <form class="navbar-form " >
                                <div class="form-group" style="margin-top:8px">
                                    <input type="text" class="form-control" name="search" placeholder="搜索题目">
                                </div>
                                <button type="submit" class="btn btn-default" style="margin-top:8px">搜索</button>
                            </form>
                        </form>
                    </div>
                </div>
            </nav><!--结束导航栏-->
            <!--做题面板，头部显示难度系数，入库时间和收集箱按钮；内容框显示题目；尾部显示选项按钮和答案按钮-->
            <div class=" pull-right" style="width:800px;overflow:hidden">
                 @include('questions.question')
                <div class="pull-right">
                     {!! $questions->render() !!}
                </div>
            </div>
        </div>
    </div>
@stop
