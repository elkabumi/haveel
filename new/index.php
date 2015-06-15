<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.content{
    background:#98bf21;height:505px;width:808px;position:absolute;
    background: url("content.png");
}

.title1{
    width: 404px;
    opacity: 0;
    height: 200px;
   
    float: left;
    position: absolute;
}


.title2{
    width: 404px;
    opacity: 0;
    height: 200px;
   
    margin-left: 404px;
    position: absolute;
}

</style>
<script src="jquery.js"></script>
<script> 
$(document).ready(function(){
    $("button").click(function(){
        $(".content").animate({
            marginTop : '355px',
            height: '150px'
           
        }, 1000);

        $(".title1").animate({
            opacity: '1'
        }, 1000);

         $(".title2").animate({
            opacity: '1'
        }, 1000);
    });
});
</script> 
</head>
<body>

<button>Start Animation</button>
<br>
<div class="title1">Judul 1</div>
<div class="title2">Judul 2</div>
<div class="content">

</div>

</body>
</html>
