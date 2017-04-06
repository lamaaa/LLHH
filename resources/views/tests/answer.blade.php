@extends ('layouts.default')
@section('content')
        <!--筛选导航栏!-->
        <nav class="navbar navbar-default" >
            <div class="container">
                <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav pull-left">
                            <li>
                                <span><strong>排序：</strong></span>
                            </li>
                            <li>
                                <a href="javascript:void(0)" onclick="collectedTimeSort()">收藏时间</a>
                                <input type="hidden" id="" name="collectedTimeSort" value="">
                            </li>
                            <li>
                                <a href="javascript:void(0)" onclick="mistakeTimesSort()">错误次数</a>
                                <input type="hidden" name="mistakeTimesSort" value="">
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
                            <div class="form-group">
                                <input type="text" class="form-control " placeholder="搜索题目">
                            </div> 
                                <button type="submit" class="btn btn-default">搜索</button>
                                <a type="button" class="btn btn-info lead" href="#">组卷</a>
                  </div>
              </div>        
          </nav><!--结束导航栏-->
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