<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    .box{
        width:30px;
        text-align:right;
    }
    #err{
        font-size:8px;
        color:red;
        font-weight:bold;
    }
    .ninebox{
        width:60px;
        height:60px;
        border:1px solid black;
        position:relative;
    }
    span{
        width:60px;
        height:60px;
        position:absolute;
        top:25%;
        left:25%;
        font-size:30px;

    }
</style>
</head>
<body>
    <h3>填空活用版</h3>
    <form name="main" onsubmit="return false">
        <input type="text" name="box" class="box" id="box">
        <input type="submit" value="送出" onclick="go()">
        <br><span id="err"></span>
    </form>
    <br>
    <br>
    <div id="showdata"></div>
<script>
    function go(){
        $("#err").html("");
        $("#showdata").html("");
        var box = parseInt($("#box").val(),10);
        if(isNaN(box)==true){
            $("#err").html("請輸入數字");
            $("#box").focus();
            return;
        }else if(3 > box || box > 10){
            $("#err").html("請輸入數字介於3~10之間");
            $("#box").focus();
            return;
        }else{
            var showdata = '';
            for(var i=1;i<=box;i++){
                for(var j=1;j<=box;j++){
                    showdata += "<div class='ninebox' style='display:inline-block;margin-bottom:-5px' id='"+i+j+"' onclick='javascript:getnumber(\""+i+"\",\""+j+"\")'></div>";
                }
                showdata+="<div></div>";
            }
            $("#showdata").append(showdata)
        }
    }

    function getnumber(i,j,num=null){
        var box = $("#box").val();
        var allnum = Number(box)*Number(box);
        var row = i;
        var column = j;

        if(num==null){
            var num = 1;
            $("#"+row+column).append("<span>"+num+"</span>");
            $("div").attr("onclick","");
        }

        row = Number(row)-Number(1);
        if(row==0){
            row = Number(box);
        }
         column = Number(column)+Number(1);
         if(column>box){
             column = 1;
         }
         var chkbox = $("#"+row+column)[0].innerText;
         if(chkbox!=''){
             column = Number(column)+Number(1);
             if(column>box){
                 column = 1;
             }
             var chkdoublebox = $("#"+row+column)[0].innerText;
             if(chkdoublebox!=''){
                 column = Number(column)+Number(1);
                 if(column>box){
                     column = 1;
                 }
             }
         }
         
         num = Number(num)+Number(1);
         $("#"+row+column).append("<span>"+num+"</span>");

         setTimeout(function(){
            if(allnum!=num){
                getnumber(row,column,num)
            }else{
                alert("九宮格填空已經結束囉");
            }
        }, 1000);
    }

</script>
</body>
</html>

<?



?>