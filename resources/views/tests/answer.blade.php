@extends ('layouts.default')
@section('content')
      <!--做题面板，头部显示难度系数，入库时间和收集箱按钮；内容框显示题目；尾部显示选项按钮和答案按钮-->
      <div class="container">
          <div class="panel panel-default" >
            <div class="panel-heading">
              <span class="lead">难度：

                  <img src="/img/nsts.gif"></img><img src="/img/nsts.gif"></img><img src="/img/nsts.gif"></img><img src="/img/nsts.gif"></img><img src="/img/nsts.gif"></img>
              </span> <span class="lead">&nbsp入库时间：</span>
               <button type="button" id="collectButton" data-complete-text="移出收集箱" class="btn  btn-success pull-right" 
                       onclick="saveToCollectionBox();" autocomplete="off">
                  加入收集箱
              </button>
            </div>
            <div class="panel-body">
              <p>
                  已知双曲线（a＞0,b＞0）的两条渐近线均和圆C:相切，且双曲线的右焦点为圆C的圆心，则该双曲线的方程为
              </p>
            </div>
            <div class="panel-footer">
                  <button type="button" class="btn-lg  btn-danger"  data-toggle="popover" title="Popover title" 
                          data-content="The answer">答案
                  </button>
            </div>
          </div>     
        </div> 
      </div>   
          	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
          <script src="/js/myjs/myJsStyle.js"></script>    
@stop