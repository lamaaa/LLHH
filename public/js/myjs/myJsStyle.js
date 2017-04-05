      
  
       // <!-- 弹出框 !-->      
           
            $(function () { 
                $("[data-toggle='popover']").popover({
                    html: true,
                });
            });
          

     //   收集箱 
           
             
            //   var status = 0; 
            //   function saveToCollectionBox(){  
            //       var btn = $("#collectButton"); 
                 
            //       if(status == 0){
            //         btn.button('complete');  
            //         status = 1; //被收集
            //       }else{
            //         btn.button('reset');
            //         status = 0; //没被收集
            //       }      
            //   }  


//Ajax
    // var btn = $("#collectButton");
    // var question_id = document.getElementById("questionId").value;
    // btn(document).ready(function(){
    //     btn("#collectButton").click(function(){
    //         btn.post("/collections/","question_id",function(collectionStatus){
    //         //     if(collectionStatus=="加入收集箱"){
    //         //         document.getElementById("collectButton").innerHTML = "移出收集箱";
    //         //         collectionStatus = "移出收集箱";
    //         //    }else{
    //         //         document.getElementById("collectButton").innerHTML = "加入收集箱";
    //         //         collectionStatus = "加入收集箱";
    //         //         //加入收集箱   
      
    //         //    }
    //                     alert(collectionStatus);
    //         });
    //     });
    // });
    // btn.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
    //     }
    // });        
   
$("#collectButton").click(function(){
    var question_id = document.getElementById("questionId").value;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: "/collections",
        data: {question_id: question_id},
        success:function(result){
            if(result.resultCode==0)
                alert("收入试题出错");
            else if(result.resultCode==2){
                document.getElementById("collectionBox").innerHTML="移出收集箱";
                document.getElementById("collectButton").setAttribute("id","deleteCollectButton");
                alert("重复收入试题");
            }
                
            else{
                document.getElementById("collectionBox").innerHTML="移出收集箱";
                document.getElementById("collectButton").setAttribute("id","deleteCollectButton");
            }      
        }
    })
})


$("#deleteCollectButton").click(function(){
    var question_id = document.getElementById("questionId").value;
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url:"/collections/delete",
        data: {question_id: question_id},
        success:function(result){
            if(result.resultCode==0)
                alert("收入试题出错");
            else{
                document.getElementById("collectionBox").innerHTML="加入收集箱";
                document.getElementById("deleteCollectionButton").setAttribute("id","collectionButton");
            }
            alert(result);
        }
    })
})