@extends ('layouts.default')


@section('title','关于')

@section('content')

            <!--玥哥写做试卷页的地方-->
            <!--这是点击真题，模拟题跳转出来的页面，你可以在本地执行 php artsian serve 命令后，
               在浏览器输入 localhost:8000/doThePapers 看到对应的页面，你要做的
               1.试题在页面居中，一行一道题  2.试题框宽度适中看着舒服 3.只需写一个试题框，复制多个看效果 4.完成后反馈-->





               
      <!--做题面板，头部显示难度系数，入库时间和收集箱按钮；内容框显示题目；尾部显示选项按钮和答案按钮-->
          <div class="panel panel-default" >
            <div class="panel-heading">
              <span class="lead">难度：

                  <img src="/img/nsts.gif"></img><img src="/img/nsts.gif"></img><img src="/img/nsts.gif"></img><img src="/img/nsts.gif"></img><img src="/img/nsts.gif"></img>
              </span> <span class="lead">&nbsp入库时间：</span>
              <span>
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   
              </span>
              <button class="btn  btn-lg  btn-success ">
                  <span>收集箱</span>
              </button>
            </div>
            <div class="panel-body">
              <p>
                  已知双曲线（a＞0,b＞0）的两条渐近线均和圆C:相切，且双曲线的右焦点为圆C的圆心，则该双曲线的方程为
              </p>
            </div>
            <div class="panel-footer">
              <div class="radio" >
                    <label for="answerA" >&nbsp&nbsp&nbsp&nbsp
                      <input id="1"  class="#" type="radio" value="option1" onclick="checked" name="answerA" >
                    A
                    </label>
                    <label for="answerB">&nbsp&nbsp&nbsp&nbsp
                      <input id="2"  class="#" type="radio" value="option2" onclick="checked" name="answerB">
                      B
                    </label>
                    <label for="answerC">&nbsp&nbsp&nbsp&nbsp
                      <input id="3"  class="#" type="radio" value="option3" onclick="checked" name="answerA" >
                      C
                    </label>
                    <label for="answerD">&nbsp&nbsp&nbsp
                      <input id="4"  class="#" type="radio" value="option4" onclick="checked" name="answerB">
                      D
                    </label>
                  <span>
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                  <button type="button" class="btn-lg  btn-danger"  data-toggle="popover" title="Popover title" 
                          data-content="The answer">答案
                  </button>
              </div>
            </div>
          </div>       





@stop