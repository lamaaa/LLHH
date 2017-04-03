@extends ('layouts.default')
@section('content')
   <!--做题面板，头部显示难度系数，入库时间和收集箱按钮；内容框显示题目；尾部显示选项按钮和答案按钮-->
          <div class="panel panel-default" >
            <div class="panel-heading">
               <button type="button" id="collectButton" data-complete-text="移出收集箱" class="btn  btn-success pull-right" 
                       onclick="saveToCollectionBox();" autocomplete="off">
                  加入收集箱
              </button>

              <button type="button" id="saveButton" data-complete-text="保存功" 
              onclick="saveToModal();" class="btn btn-primary pull-right " autocomplete="off">  
              保存  
              </button>  
            </div>
          </div>    
          	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
          <script>  
               var status = 0;//初始化被收集的状态
              // function saveToModal(){  
              //     var btn = $("#saveButton");  
                  

                 
              //     if(status == 0){
              //       btn.button('complete');  
              //       status = 1; //被收集
              //     }else{
              //       btn.button('reset');
              //       status = 0; //没被收集
              //     }  
 
              // } 
                            // var status = 0;//初始化被收集的状态
              function saveToCollectionBox(){  
                  var btn = $("#collectButton"); 
                 
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