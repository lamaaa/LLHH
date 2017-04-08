@extends('layouts._link')
@section('content')
<!--开始选择组成试卷类型-->
<div class="container myContainerStyle" style="width:800px">
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-success">
        <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <span class="">选择知识点：</span>
            </a>
        </h4> 
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
            <!--<div class="panel-body panel-group" id="subaccordion" role="tablist" aria-mutiselectable="ture">-->
                <!--书//待完成-->
                <!--<div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">选修一</li>
                        <li class="list-group-item">选修二</li>
                        <li class="list-group-item">选修三</li>
                    </ul>
                </div>-->
                <div class="checkbox">
                    <label class="checkbox-inline">
                        <input type="text">
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="option1" id="part1"> <span class="lead">选修1&nbsp&nbsp</span>
                    </label>
                    <label class="checkbox-inline">                   
                        <input type="checkbox" value="option2" id="part2"><span class="lead">选修2&nbsp&nbsp</span>
                    </label> 
                    <label class="checkbox-inline">                  
                        <input type="checkbox" value="option3" id="part3"><span class="lead">选修3&nbsp&nbsp</span>
                    </label>   
                    <label class="checkbox-inline">                 
                        <input type="checkbox" value="option4" id="part4"><span class="lead">选修4&nbsp&nbsp</span>
                    </label>                                         
                </div>   
            </div>
        </div>
    </div>
    <div class="panel panel-info">
        <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
             aria-expanded="false" aria-controls="collapseTwo">
             <span >选择难度：</span>
            </a>
        </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div class="radio">
                    <label class="radio-inline">
                        <input type="radio" value="option1" id="part1"> <span class="lead">全部&nbsp&nbsp</span>
                    </label>
                    <label class="radio-inline">                   
                        <input type="radio" value="option2" id="part2"><span class="lead">容易&nbsp&nbsp</span>
                    </label> 
                    <label class="radio-inline">                  
                        <input type="radio" value="option3" id="part3"><span class="lead">中等&nbsp&nbsp</span>
                    </label>   
                    <label class="radio-inline">                    
                        <input type="radio" value="option4" id="part4"><span class="lead">困难&nbsp&nbsp</span>
                    </label>                                         
                </div>    
            </div>
        </div>
    </div>
    <div class="panel panel-warning">
        <div class="panel-heading" role="tab" id="headingThree">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <span class="">选择题型：</span>
            </a>
        </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                <div class="checkbox">
                    <label class="checkbox-inline">
                        <input type="checkbox" value="option1" id="part1"> <span class="lead">选择题&nbsp&nbsp</span>
                    </label>
                    <label class="checkbox-inline">                   
                        <input type="checkbox" value="option2" id="part2"><span class="lead">计算题&nbsp&nbsp</span>
                    </label> 
                    <label class="checkbox-inline">                  
                        <input type="checkbox" value="option3" id="part3"><span class="lead">应用题&nbsp&nbsp</span>
                    </label>                                            
                </div>  
            </div>
        </div>
    </div>
    <div class="panel panel-danger">
        <div class="panel-heading" role="tab" id="headingFour">
        <h4 class="panel-title">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
            <span class="">选择其它：</span>
            </a>
        </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body">
                <div class="checkbox">
                    <label class="checkbox-inline">
                        <input type="checkbox" value="option1" id="part1"> <span class="lead">收集箱题目&nbsp&nbsp</span>
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="option2" id="part2"> <span class="lead"> 我的错题&nbsp&nbsp</span>
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" value="option3" id="part3"> <span class="lead">易错题&nbsp&nbsp</span>
                    </label> 
                    <label class="checkbox-inline">
                        <input type="checkbox" value="option4" id="part4"> <span class="lead">最热收集&nbsp&nbsp</span>
                    </label>
                    <label class="checkbox-inline pull-right">
                        
                    </label>                                           
                </div>  
            </div>
        </div>
    </div>
    </div>
    <button type="button" class="btn btn-info pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">生成试卷</button>
    @include('thePaper.doPaper')
</div><!--选择结束-->
@endsection