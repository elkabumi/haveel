<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JS Bin</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="jquery.js"></script>
 

</head>
<body>
	
	 <h1 id="image" class="fadeIn">test</h1>
  <div class="crossRotate" id="crossRotate" tabindex="1">

   

</div>


</body>
</html>

 <script type="text/javascript">
  $('#crossRotate').click(function(){
    $('#image').toggleClass('transparent');
    
});
  </script>