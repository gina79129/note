<style>
    span{
        text-align:center;
        position:absolute;
        top:15px;
        left:30px;
        font-size:50px;

    }
</style>
<?php
$a = 1;
for($i=1;$i<=3;$i++){
    for($j=1;$j<=3;$j++){
        echo "<div style='width:90px;height:90px;border:1px solid black;position:relative;display:inline-block' onclick='javascript:getnumber(".($a).")' id='".($a++
        )."'></div>";
    }
    echo "<br>";
}

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(function(){})
    function getnumber(i,no=null){
        if(no==null){
        var spanappend = '';
        spanappend ="<span>1</span>";
        $("#"+i).append(spanappend);
        $("div").attr("onclick","");
        findall(i,1)
        }else{
        findall(i,no)

        }
    }

    function findall(i,number){
        var find2,val,sumno;
        if(i==6 || i==9){
            sumno = "#"+(Number(i)-Number(5));
            find2 = $(sumno)[0].id;
            val = $("#"+find2)[0].innerHTML;
            if(val!=''){
                sumno = "#"+(Number(i)-Number(4));
                find2 = $(sumno)[0].id;
            }
        }else if(i==3){
            sumno = "#"+(Number(i)+Number(4));
            find2 = $(sumno)[0].id;
            val = $("#"+find2)[0].innerHTML;
            if(val!=''){
                sumno = "#"+(Number(i)+Number(5));
                find2 = $(sumno)[0].id;
            }
        }else if(i==1 || i==2){
            sumno = "#"+(Number(i)+Number(7));
            find2 = $(sumno)[0].id;
            val = $("#"+find2)[0].innerHTML;
            if(val!=''){
                sumno = "#"+(Number(i)+Number(8));
                console.log(find2)
                if(sumno=="#10"){
                    sumno = "#"+(Number(i)+Number(5));
                    find2 = $(sumno)[0].id; 
                }else{
                    find2 = $(sumno)[0].id;
                }
            }
        }else{
            sumno = "#"+(Number(i)-Number(2));
            find2 = $(sumno)[0].id;
            val = $("#"+find2)[0].innerHTML;
            if(i==8 && find2==6 && val!=''){
                sumno = "#"+(Number(i)-Number(4));
                find2 = $(sumno)[0].id;
            }else if(i==5 && find2==3 && val!=''){
                sumno = "#"+(Number(i)-Number(4));
                find2 = $(sumno)[0].id;
            }else if((i!=8 && find2 !=6 && val!='') || (i!=5 && find2 !=3 && val!='')){
                sumno = "#"+(Number(i)-Number(1));
                find2 = $(sumno)[0].id;
                val = $("#"+find2)[0].innerHTML;
                if(val!=''){
                    sumno = "#"+(Number(i)-Number(4));
                    find2 = $(sumno)[0].id;
                }           
            } 
        }
        var number = Number(number)+Number(1);
        $("#"+find2).append("<span>"+number+"</span>");
        setTimeout(function(){
            if(number!=9){
                getnumber(find2,number)
            }else{
                alert("九宮格填空已經結束囉");
            }
        }, 1000);
    }

</script>