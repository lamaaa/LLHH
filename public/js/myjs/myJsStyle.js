      
  
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
   
// $(".collectButton").click(function(){
//     var question_id = document.getElementById("questionId").value;
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.ajax({
//         method: "POST",
//         url: "/collections",
//         data: {question_id: question_id},
//         success:function(result){
//             if(result.resultCode==0)
//                 alert("收入试题出错");
//             else if(result.resultCode==2){
//                 document.getElementById("collectionBox").innerHTML="移出收集箱";
//             }       
//             else{
//                 document.getElementById("collectionBox").innerHTML="移出收集箱";
//             }      
//         }
//     })
// })


// $("#deleteCollectButton").click(function(){
//     var question_id = document.getElementById("questionId").value;
//      $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.ajax({
//         method: "POST",
//         url:"/collections/delete",
//         data: {question_id: question_id},
//         success:function(result){
//             if(result.resultCode==0)
//                 alert("收入试题出错");
//             else{
//                 document.getElementById("collectionBox").innerHTML="加入收集箱";
//                 document.getElementById("deleteCollectionButton").setAttribute("id","collectionButton");
//             }
//         }
//     })
// })


//收集箱按钮，点击后加入或者移除收集箱
// $(".collectStatus").click(function(){
//     //获取试题被收集的状态
//     var status = document.getElementById("collStatus").value;
//     alert(document.getElementById("questionId").value);
//     if( status==0){
//         // document.getElementById("collStatus").setAttribute("value","delete");
//             var question_id = document.getElementById("questionId").value;
//             document.getElementById('collStatus').value = 1;
//             // $("#questionId").addClass("btn btn-danger");
//             $.ajaxSetup({
//                 headers: {
//                     'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
//                 }
//             });
//             $.ajax({
//                 method: "POST",
//                 url: "/collections",
//                 data: {question_id: question_id},
//                 success:function(result){
//                     if(result.resultCode==0)
//                         alert("收入试题出错");
//                     else if(result.resultCode==2){
//                         document.getElementById("collectionBox").innerHTML="移出收集箱";
//                     }       
//                     else{
//                         document.getElementById("collectionBox").innerHTML="移出收集箱";
//                     }      
//                 }   
//             })
//     }else{
        
//             // document.getElementById("collStatus"alert(status);).setAttribute("value","add");
//             var question_id = document.getElementById("questionId").value;
//             document.getElementById('collStatus').value = 0;
//             // $("#questionId").addClass("btn btn-success");
//             $.ajaxSetup({
//                 headers: {
//                     'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
//                 }
//             });
//             $.ajax({
//                 method: "POST",
//                 url:"/collections/delete",
//                 data: {question_id: question_id},
//                 success:function(result){
//                     if(result.resultCode==0)
//                         alert("收入试题出错");
//                     else{
//                         document.getElementById("collectionBox").innerHTML="加入收集箱";
//                     }
//                 }
//             });
//         }
// });


//改变收集箱按钮的样式
function changeQuestionState(question_id)
{
    
    var status = document.getElementById("input" + question_id).value;
    var button_id = document.getElementById("button" + question_id).id;
   
    if( status == 0){
        $("#" + button_id).addClass("btn-danger");
        document.getElementById("input" + question_id).value = 1;
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
                        document.getElementById("button" + question_id).innerHTML="移出收集箱";
                    }       
                    else{
                        document.getElementById("button" + question_id).innerHTML="移出收集箱";
                    }      
                }   
            })
    }else{
        document.getElementById("input" + question_id).value = 0;
         $("#" + button_id).removeClass(" btn-danger");
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
                        document.getElementById("button" + question_id).innerHTML="加入收集箱";
                    }
                }
            });
        }

}

//用Ajax渲染对错按钮,点击后给后台传数据，做对或者做错
function addRightRecord(question_id)
{
        //获取当前试题对象
        var btn_state =document.getElementById("trueBtn"+question_id);
        //试题绑定的Id
        var btn_id = btn_state.id;
        
        $("#"+btn_id).addClass("btn-success");
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN' :$('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            method:"POST",
            url:"/records",
            data:{question_id: question_id, isRight: true},
            success:function(result){
                if(result.resultCode==0)
                    alert("出了一些错误");
                else{
                   
                }
            }
        });
}

function addWrongRecord(question_id){
    //获取当前试题对象
    var btn_state =document.getElementById("falseBtn"+question_id);
    //试题绑定的Id
    var btn_id = btn_state.id;

     $("#" + btn_id).addClass("btn-danger");
    $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN' :$('meta[name="csrf-token"]').attr('content')
          }
       });
     $.ajax({
          method:"POST",
          url:"/records",
         data: {question_id: question_id, isRight: false},
         success:function(result){
             if(result.resultCode==0)
                alert("出现了一些错误");
            else{        
                }
         }
     });
}





        $(function () {
            $("[data-toggle='popover']").popover({
                html: true,
            });
        });
