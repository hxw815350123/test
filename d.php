<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<style type="text/css">
.box { margin: 50px auto; width: 200px; height: 320px; overflow: hidden; }
.wrap { width: 400px; }
.box-2-1,
.box-2-2 { width: 200px; height: 320px; float: left; }
.box-2-1 { background: #d7d7d7; }
.box-2-2 { background: #b10000; }
.css3 > div{ width:100px;height:150px;border:1px solid #e8e8e8; background: #f2f2f2;display:inline-block;margin-right:30px;}
.ratate{-webkit-transform:rotate(20deg);-webkit-animation:test2 2s linear 1;}
.ratateX{-webkit-transform:rotate(20deg);}
.skew{-webkit-transform:skew(30deg);}
.scale{-webkit-transform:scale(0.5,0.6) skew(30deg);}
.scale:hover{-webkit-transition:width 2s linear;width:500px;animation-fill-mode:forwards; }
.translate{-webkit-transform: translate(-200px,200px);}
.translate3d{-webkit-transform: translate3d(-200px,40px,20px;)}
@-webkit-keyframes test2{
    50%{-webkit-transform: translate(-200px,200px);}
}
::selection{background:#b10000;color:#fff;}
::-moz-selection{background:#ef00f0;}
.number{position: relative;height:28px;width:200px;}
.number input{position: absolute;left:0;height:28px;width:100%;}
</style>
<body>
    <div class="number">
    	<input type="text">
    	 <span></span>
    	 <span></span>
    	 <span></span>
    </div>
    <div class="box">
        <div class="wrap">
            <div class="box-2-1">
                <input type="text">
                <input type="button" value="change">
            </div>
            <div class="box-2-2" style="width:0;">
                <input type="text">
                <input type="button" value="change">
            </div>
        </div>
    </div>
    <div class="css3">
    	<div class="ratate"></div>
    	<div class="ratateX"></div>
    	<div class="skew"></div>
    	<div class="scale"></div>
    	<div class="translate"></div>
    	<div class="translate3d"></div>

    </div>
</body>
<script type="text/javascript" src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
    $(".wrap > div > input[type='button']").on("click", function(e) {
        $(this).parent().animate({"width":"0"},200);
        $(this).parent().siblings().animate({"width":"200"},200);
    })

    $(".css3 > div").each(function(){
    	$(this).html($(this).attr("class"));
    })
})
</script>

</html>
