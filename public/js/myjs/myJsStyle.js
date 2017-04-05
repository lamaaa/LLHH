      
  
       // <!-- 弹出框 !-->      
           
            $(function () { 
                $("[data-toggle='popover']").popover({
                    html: true,
                });
            });
          

     //   收集箱 
           
             
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


//Ajax
function collectToBox(question_id){
    var btn = $("#question_id");
    btn(document).ready(function(){
        btn("button").click(function(){
            btn.post("localhost:8000/collects","question_id",function(collectionStatus){
                if(collectionStatus=="加入收集箱"){
                    document.getElementById("collectButton").innerHTML = "移出收集箱";
                    collectionStatus = "移出收集箱";
               }else{
                    document.getElementById("collectButton").innerHTML = "加入收集箱";
                    collectionStatus = "加入收集箱";
                    //加入收集箱          
               }
            });
        });
    });
    btn.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });
}        
          