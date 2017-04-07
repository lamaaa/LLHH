@extends ('layouts.default')
@section('content')
    <div class="container" style="margin-top:15px">
        <!--选择知识点导航栏-->
        <nav class="navbar navbar-default" >
            <div class="navbar-header">
                <span class="navbar-brand">选择知识点:</span>
            </div>    
            <div class="checkbox">
                <label class="checkbox-inline">
                    <input type="checkbox" value="option1" id="part1"> <span>选修1&nbsp&nbsp</span>
                </label>
                 <label class="checkbox-inline">                   
                    <input type="checkbox" value="option2" id="part2"><span>选修2&nbsp&nbsp</span>
                </label> 
                <label class="checkbox-inline">                  
                    <input type="checkbox" value="option3" id="part3"><span>选修3&nbsp&nbsp</span>
                </label>   
                <label class="checkbox-inline">                 
                    <input type="checkbox" value="option4" id="part4"><span>选修4&nbsp&nbsp</span>
                </label>                                         
            </div>    
        </nav><!--结束导航栏-->

        <!--选择难度导航栏-->
        <nav class="navbar navbar-default" >

            <!--选择难度-->
            <div class="navbar-header">
                <span class="navbar-brand">难度:</span>
            </div>    
            <div class="radio">
                <label class="radio-inline">
                    <input type="radio" value="option1" id="part1"> <span>全部&nbsp&nbsp</span>
                </label>
                 <label class="radio-inlin">                   
                    <input type="radio" value="option2" id="part2"><span>容易&nbsp&nbsp</span>
                </label> 
                <label class="radio-inlin">                  
                    <input type="radio" value="option3" id="part3"><span>中等&nbsp&nbsp</span>
                </label>   
                <label class="radio-inlin">                    
                    <input type="radio" value="option4" id="part4"><span>困难&nbsp&nbsp</span>
                </label>                                         
            </div>    <!--结束选择-->

        </nav><!--结束导航栏-->


        <nav class="navbar navbar-default" >
            <div class="navbar-header">
                <span class="navbar-brand">选择题型：</span>
            </div>    
            <div class="checkbox">
                <label class="checkbox-inline">
                    <input type="checkbox" value="option1" id="part1"> <span>选择题&nbsp&nbsp</span>
                </label>
                 <label class="checkbox-inline">                   
                    <input type="checkbox" value="option2" id="part2"><span>计算题&nbsp&nbsp</span>
                </label> 
                <label class="checkbox-inline">                  
                    <input type="checkbox" value="option3" id="part3"><span>应用题&nbsp&nbsp</span>
                </label>                                            
            </div>    
        </nav><!--结束导航栏-->
    


        <nav class="navbar navbar-default" >

            <!--选择-->
            <div class="navbar-header">
                <span class="navbar-brand">其他选择：</span>
            </div>      
            <div class="checkbox">
                <label class="checkbox-inline">
                    <input type="checkbox" value="option1" id="part1"> <span>收集箱题目&nbsp&nbsp</span>
                </label>
                <label class="checkbox-inline">
                    <input type="checkbox" value="option2" id="part1"> <span>我的错题&nbsp&nbsp</span>
                </label>                                          
            </div>    <!--结束选择-->

        </nav><!--结束导航栏-->
        <button type="submit" class="btn btn-primary ">生成试卷</button>
    </div>
          	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="/js/myjs/myJsStyle.js"></script>    
@stop