
@extends ('layouts.default')

@section('content')
<div class="container">
      <!-- Single button -->
      <nav class="bs-docs-sidebar hidden-print hidden-xs hidden-sm affix pull-left hidden:overflow" style="margin-top:100px">
        <div class="btn-group-vertical" role="group">
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              &nbsp&nbsp&nbsp&nbsp必修部分&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="caret"></span>
            </button>
              <ul class="dropdown-menu" >
                <!--@foreach($chapters as $chapter)
                  <li>
                    <a href="#">{{$chapter->name}}</a>
                  </li>
                @endforeach-->
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
              </ul>
          </div>
            <!--<div class="btn-group-vertical" role="group">-->
              <!--<button type="button" class="btn btn-default"></button>-->
            <!--<div class="btn-">-->
            <div class="btn-group" role="group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp选修I&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
               </button>
              <ul class="dropdown-menu">
                <li><a href="#">第一章：集合数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
              </ul>
            </div>
            <div class="btn-group-vertical" role="group">
              <!--<button type="button" class="btn btn-default"></button>-->
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="leader">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp选修Ⅱ&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span><span class="caret"></span>
              <!--<span class="sr-only">Toggle Dropdown</span>-->
               </button>
              <ul class="dropdown-menu">
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函概念</a></li>
                <li><a href="#">第二章：基本等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集与数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
              </ul>
            </div>
            <div class="btn-group-vertical" role="group">
              <!--<button type="button" class="btn btn-default"></button>-->
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="leader">选修Ⅲ<span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
               </button>
              <ul class="dropdown-menu">
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
              </ul>
            </div>
            <div class="btn-group-vertical" role="group">
              <!--<button type="button" class="btn btn-default"></button>-->
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="strong">选修Ⅳ<span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
               </button>
              <ul class="dropdown-menu">
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
                <li><a href="#">第一章：集合与函数概念</a></li>
                <li><a href="#">第二章：基本初等函数Ⅰ</a></li>
                <li><a href="#">第三章：函数的应用</a></li>
              </ul>
            </div>
          </div>
      </nav>
      <hr >
      <div >
        <div class="radio" style="width:700px;float:right">
        <span class="lead">排序方式：&nbsp&nbsp&nbsp</span>
          <label for="male" style="margin-top:8px">
            <input id="1"  class="#" type="radio" value="option1" onclick="checked" name="orderby" >
              按收集次数
          </label>
          <label for="female">
            <input id="2"  class="#" type="radio" value="option2" onclick="checked" name="orderby">
              入库时间
          </label>
            <select class="form-control input-sm" name="type" id="difficult" style="width:80px;float:right" >
            <option value="0">全部</option>
            <option value="1">容易</option>
            <option value="2">中等</option>
            <option value="3">困难</option>
          </select>
        </div>

        <div class="embed-responsive embed-responsive-4by3 pull-right" style="width:700px ">
          <iframe class="embed-responsive-item " src="./index.html">
            

          </iframe>
        </div>
      </div>
</div>
@stop

