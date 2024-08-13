<!DOCTYPE html>
<html>
<head>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script>
$(function(){
    console.log("test");

    $('#tab li').click(function(){
        var index = $(this).index();
        console.log(index);
        var flag = $(this).find('a').attr('flag');
        var id = $(this).find('a').attr('id');
        console.log(flag,id);

        if(flag == "false"){
            console.log("yes");
            var src = $(this).find('img').attr('src').replace('deng01.png','deng02.png');
            console.log(src);
            // src.replace('deng01.png','deng02.png');
            $(this).find('img').attr('src',src);
            $(this).find('a').attr('flag','true');
        }
    });
});
</script>

<style>
    ul{
        display:flex;
        flex-direction:row;
        list-style:none;
    }
    li{
        border:1px solid #ccc;
    }
    .tab_hidden{
        display:none;
    }
</style>
</head>
<body>
 
<div class="">
<ul id="tab">
    <li>
        <a id="password" flag="false"><img src="../image/deng01.png" alt=""></a>
        <!-- <a id="tab_selected" class="tab_hidden"><img src="../image/deng02.png" alt=""></a> -->
    </li>
    <li>
        <a id="email" flag="false"><img src="../image/deng01.png" alt=""></a>
        <!-- <a id="tab_selected" class="tab_hidden"><img src="../image/deng02.png" alt=""></a> -->
    </li>
    <li>
        <a id="edit" flag="false"><img src="../image/deng01.png" alt=""></a>
        <!-- <a id="tab_selected" class="tab_hidden"><img src="../image/deng02.png" alt=""></a> -->
    </li>
</ul>
</div>
 
 
</body>
</html>
