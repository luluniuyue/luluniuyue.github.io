<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>

<h2>Test GET web service</h2>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">


function getUser (id) {
	var formData={
    'path':'./20180929/',
		'action':'getProduct'
	}
	$.ajax({
   		url : "index.php",
    	type: "POST",
    	data : formData,
    success: function(data, textStatus, jqXHR)
    {
       		console.log("getUser:  ")
       		console.log(data)
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
 			console.log(textStatus)
    }
	});
}

getUser()

</script>
</body>
</html>
