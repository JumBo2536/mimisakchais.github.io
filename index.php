

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">
<title>test</title>


<link rel="stylesheet" href="css/md-css.min.css">
<link rel="stylesheet" href="css/md-icons.min.css">

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

</head>
<body material fluid >
<?php
header('Access-Control-Allow-Origin: http://10.27.68.38');
echo $json;
?>
<script type="text/javascript">

$.ajax({
    type: 'GET',
    url: 'http://10.27.68.38/meter/api.php?key=USA8DD2D&type=selectdate&addr=1',
    dataType: 'jsonp',
    success: function(data) {
        console.log(data);
    }
});

	/* $.getJSON('http://10.27.68.38/meter/api.php?key=USA8DD2D&type=selectdate&addr=1', function(result,status)
	{
		console.log(" => "+result);				
								
	});
	console.log(" => test");  */
	
	
	
</script>
	<div toolbar seamed bg-Grey500>
		
		<font color="white"><center><h2> test</h2></center></font>
		
		
	</div>
	
	
<div bg-grey100="" padded="">
	
	<div content>
      <div fluid card bg-Orange500="">
	  
	  
	 <center>
		<div card="" z-2="" >
		
	gggggg
		</div>
		
		</center>
	
        
		
    </div>
	
	</div>

	
</div>


	
	
	
	<!-- load scripts at the end -->

  <script src="js/zepto.min.js"></script>
  <script src="js/velocity.min.js"></script>
  <script src="js/md-js.min.js"></script>
	
  
  </body>
</html>