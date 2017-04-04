      
  
       // <!-- 弹出框 !-->      
           
            $(function () { 
                $("[data-toggle='popover']").popover({
                    html: true,
                });
            });

            // window.onload = function(){
            //     var theSelect = document.getElementsByName("type");
            //     var theForm = document.getElementsByName("sortForm");
            //     // theSelect[0].onchange=function () {
            //     //     theForm[0].submit();
            //     // }
            // }
          

     //   <!-- 收集箱 ！-->
           
             
              var status = 0; 
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

        
          