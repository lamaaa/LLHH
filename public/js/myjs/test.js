$("button").click(function(){
  $.post("/collections","question_id",function(data,status){
    alert("Data: " + data + "\nStatus: " + status);
  });
});



function collectToBox(question_id){
    var btn = $("#question_id");
    btn(document).ready(function(){
        btn("collectButton").click(function(){
            btn.post("/collections/","question_id",function(resultCode){
            //     if(collectionStatus=="加入收集箱"){
            //         document.getElementById("collectButton").innerHTML = "移出收集箱";
            //         collectionStatus = "移出收集箱";
            //    }else{
            //         document.getElementById("collectButton").innerHTML = "加入收集箱";
            //         collectionStatus = "加入收集箱";
            //         //加入收集箱          
            //    }
            alert(resultCode);
            }, "json");
        });
    });
    btn.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    });
}   