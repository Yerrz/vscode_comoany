<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>jQuery UI Autocomplete - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <script>
  $(function() {
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];
    $( "#tags" ).autocomplete({
    //   mustMatch: true,
      source: availableTags,
      response: function( event, ui ) {},
      search: function( event, ui ) {
        $('#hidden').val('');
        console.log('搜索时#hidden:',$('#hidden').val());
        console.log('搜索时#tags:',$('#tags').val());
      },
      select: function( event, ui ) {
          console.log('ui.item:',ui.item);
          $('#hidden').val(ui.item.value);
          console.log('#hidden:',$('#hidden').val());
          console.log('#tags:',$('#hidden').val());
      }
    });

    $('#button').click(function(){
        $input = $('#tags').val();
        $input2 = $('#hidden').val();
        if($input2 == ''){
            $('#tags').val('');
            console.log('请从下拉选择列表中选择数据');
        }
        else{
            $('#gain').val($input);
        }
        console.log('#tags点击后：',$input);
        console.log('#hidden点击后：',$input2);
  })
  });
  </script>
</head>
<body>
 
<div class="ui-widget">
  <label for="tags">Tags: </label>
  <input id="tags">
  <input type="button" id="button" value="确定">
  <input id="gain">

  <input type="hidden" id="hidden">
</div>
 
 
</body>
</html>
