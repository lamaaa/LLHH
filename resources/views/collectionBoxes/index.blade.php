@extends('layouts.default')
@section('title','收集箱')

@section('content')

    <div class="container myContainerStyle" >

    <!--筛选导航栏!-->

        <nav class="navbar navbar-default" >
            <div class="container">
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-left">
                        <li> 
                            <a href="#" class="navbar-brand"><span><strong>排序：</strong></span></a>
                        </li>
                        <li>
                            <a href="#">收藏时间: </a>
                        </li>
                        <li>
                            <a href="#">错误次数</a>
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
                    <form class="navbar-form">
                        <div class="form-group">
                            <input type="text" class="form-control " placeholder="搜索题目">
                        </div>
                        <button type="submit" class="btn btn-default">搜索</button>
                        <a type="button" class="pull-right  lead" href="#">组卷</a> 
                    </form>
                </div>
            </div>
                    
        </nav>




    <!--显示被筛选的试题！默认显示全部-->
        <!--做题面板，头部显示难度系数，入库时间和收集箱按钮；内容框显示题目；尾部显示选项按钮和答案按钮-->
        <div class="panel panel-default" >
            @foreach($collectQuestions as $collectQuestion)
            <div class="panel-heading">
              <span class="lead">难度：
                  @for($countStar = 0; $countStar < $collectQuestion->difficulty; $countStar++)
                      <img src="/img/sts.gif" alt="a start">
                  @endfor
                  @for($countStar = 0; $countStar < 5 - $collectQuestion->difficulty; $countStar++)
                      <img src="/img/nsts.gif" alt="a null start">
                  @endfor
              </span> <span class="lead">&nbsp收藏时间：{{ $collectQuestion->collected_at }}</span>
              <button class="btn  btn  btn-success btn-style pull-right">
                  <span>收集箱</span>
              </button>
            </div>
            <div class="panel-body">
                {!! $collectQuestion->description !!}
            </div>
            <div class="panel-footer">
                  <button type="button" class="btn btn-danger"  data-toggle="popover" title="答案" 
                          data-content="{!! $collectQuestion->answer !!}">答案
                  </button>
            </div>
            @endforeach
        </div>
    </div>


        <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
            
        <!-- 弹出框 !-->      
            <script>
            $(function () { 
                $("[data-toggle='popover']").popover({
                    html: true,
                });
            });

            window.onload = function(){
                var theSelect = document.getElementsByName("type");
                var theForm = document.getElementsByName("sortForm");
                theSelect[0].onchange=function () {
                    theForm[0].submit();
                }
            }
          </script>  

        <!-- 收集箱 ！-->
          <script>  
              var status = 0;//初始化被收集的状态
              function saveToCollectionBox(){  
                  var btn = $("#collectButton "); 
                 
                  if(status == 0){
                    btn.button('complete');  
                    status = 1; //被收集
                  }else{
                    btn.button('reset');
                    status = 0; //没被收集
                  }      
              }  
          </script> 
@stop
