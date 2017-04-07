      
  
       // <!-- 弹出框 !-->      
           
            $(function () { 
                $("[data-toggle='popover']").popover({
                    html: true,
                });
            });
          

function changeQuestionState(question_id)
{
    
    var status = document.getElementById("input" + question_id).value;
    var button_id = document.getElementById("button" + question_id).id;
   
    if( status == 0){
        $("#" + button_id).addClass("btn btn-danger");
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



        $(function () {
            $("[data-toggle='popover']").popover({
                html: true,
            });
        });
