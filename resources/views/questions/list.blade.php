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
        <div class="radio pull-right" style="width:700px">
          <span class="lead">排序方式：&nbsp&nbsp&nbsp</span>
          <label for="male" style="margin-top:8px">
            <input id="1"  class="#" type="radio" value="option1" onclick="checked" name="orderby" >
              按收集次数
          </label>
          <label for="female">
            <input id="2"  class="#" type="radio" value="option2" onclick="checked" name="orderby">
              入库时间
          </label>
            <form action="www.baidu.com" method="GET" name="sortForm">
                <span class="lead"> 难度： </span>
                <select class="form-control input" name="type" id="difficult" style="width:80px;float:right" >
                    <option value="0">全部</option>
                    <option value="1">容易</option>
                    <option value="2">中等</option>
                    <option value="3">困难</option>
                </select>
            </form>

        </div><!--结束方式选项-->

      <!--做题面板，头部显示难度系数，入库时间和收集箱按钮；内容框显示题目；尾部显示选项按钮和答案按钮-->
        <div class=" pull-right" style="width:800px">
            @foreach($questions as $question)
              <!--做题面板，头部显示难度系数，入库时间和收集箱按钮；内容框显示题目；尾部显示选项按钮和答案按钮-->
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
              <span>

              </span>
              <button type="button" id="collectButton" data-complete-text="移出收集箱" class="btn  btn-success pull-right" data-toggle="button"
                       onclick="saveToCollectionBox();" autocomplete="off">
                  加入收集箱
              </button>
            </div>

            <div class="panel-body">
              <p>
                  {!!$question->description!!}
              </p>
            </div>
            <div class="panel-footer">
               <button type="button" class="btn btn-danger" title="答案"  
			         data-container="body" data-toggle="popover" 
		          	data-content="{!! $question->answer !!}">答案
              	</button>
            </div>
          </div><!--结束做题面板-->
             @endforeach
                {!! $questions->render() !!}
        </div>
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
<hr>
@stop

