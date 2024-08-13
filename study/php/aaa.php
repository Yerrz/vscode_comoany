<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(function(){
  console.log("未填写");

  $("#button").click(function(){
    console.log('aa');
  });
});
</script>
</head>

<body>
<input type="text" id="tags">
<input type="button" value="提交" id="button">
<!-- <button>点我</button> -->
</body>
</html>
