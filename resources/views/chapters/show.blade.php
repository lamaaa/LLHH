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
                <form class=" form-inline navbar-form" role="form" action="" id="screenForm" method="GET">
                    <ul class="nav navbar-nav from-group pull-left">
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
                </form>
                </div>
            </div>        
        </nav><!--结束导航栏-->

            @include('questions.question')
            <div>
                {!! $questions->render() !!}
            </div>
         </div>
    </div>
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/js/myjs/myJsStyle.js"></script>
    <hr>
@stop