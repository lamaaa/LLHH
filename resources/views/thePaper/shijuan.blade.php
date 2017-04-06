@extends('layouts.default')
@section('content')
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
                                <a href="javascript:void(0)" onclick="collectedTimeSort()">收藏时间</a>
                                <input type="hidden" id="" name="collectedTimeSort" value="{{$sort['collectedTime']}}">
                            </li>
                            <li>
                                <a href="javascript:void(0)" onclick="mistakeTimesSort()">错误次数</a>
                                <input type="hidden" name="mistakeTimesSort" value="{{$sort['mistakeTimes']}}">
                            </li>
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
                                <select name="type" id="type" class="form-control input" onchange="document.getElementById('screenForm').submit()">
                                    <option value="0" @if($filter['type'] == 0) selected @endif>全部</option>
                                    <option value="1" @if($filter['type'] == 1) selected @endif>选择题</option>
                                    <option value="2" @if($filter['type'] == 2) selected @endif>填空题</option>
                                    <option value="3" @if($filter['type'] == 3) selected @endif>计算题</option>
                                </select>
                            </li>
                        </ul>
                        <from>
                            <div class="form-group">
                                <input type="text" class="form-control " placeholder="搜索题目">
                            </div> 
                                <button type="submit" class="btn btn-default">搜索</button>
                                <a type="button" class="btn btn-info lead" href="#">组卷</a>
                        </from>
                    </form>
                </div>
            </div>        
        </nav><!--结束导航栏-->
@endsection