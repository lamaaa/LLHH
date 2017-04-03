      
  
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
       // <!-- 弹出框 !-->      
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

     //   <!-- 收集箱 ！-->
          <script>  
             
              var status = 0; 
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