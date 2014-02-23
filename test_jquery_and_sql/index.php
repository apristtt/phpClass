<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
        <script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
    <script>
        function getDataFromDb() {
            $.ajax({
                    url: "getData.php",
                    type: "POST",
                    data: ''
                    })
                            .success(function(result) {
                                var obj = jQuery.parseJSON(result);
                                    if(obj != '')
                                    {
                                        $("#myBody").empty();
                                        $.each(obj, function(key, val) {
                                            var tr = "<tr>";
                                            tr = tr + "<td>" + val["CustomerID"] + "</td>";
                                            tr = tr + "<td>" + val["CustomerName"] + "</td>";
                                            tr = tr + "</tr>";
                                            $('#myTable > tbody:last').append(tr);
                                        });
                                    }
                    });
        }
        setInterval(getDataFromDb, 5000);
    </script>
</head>
<body>
   <table width="600" border="1" id="myTable">
    <thead>
       <tr>
        <td width="91"><div align="center">CustomerID</div></td>
        <td width="98"><div align="center">Name</div></div></td>
           
        </tr>
       </thead>
    <tbody id="myBody"></tbody>
    </table> 
</body>
</html>
<!--
<!DOCTYPE html>
<html>
<head>
<title>ThaiCreate.Com</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<meta charset=utf-8 />
<script>
  
function getDataFromDb()
{
	$.ajax({ 
				url: "getData.php" ,
				type: "POST",
				data: ''
			})
			.success(function(result) { 
				var obj = jQuery.parseJSON(result);
					if(obj != '')
					{
						  //$("#myTable tbody tr:not(:first-child)").remove();
						  $("#myBody").empty();
						  $.each(obj, function(key, val) {
									var tr = "<tr>";
									tr = tr + "<td>" + val["CustomerID"] + "</td>";
									tr = tr + "<td>" + val["Name"] + "</td>";
									tr = tr + "</tr>";
									$('#myTable > tbody:last').append(tr);
						  });
					}

			});

}

setInterval(getDataFromDb, 10000);   // 1000 = 1 second
</script>
</head>
<body>
 <center>
<h1>My Web</h1>

<table width="600" border="1" id="myTable">
<!-- head table -->
<!--
<thead>
  <tr>
    <td width="91"> <div align="center">CustomerID </div></td>
    <td width="98"> <div align="center">Name </div></td>
  </tr>
</thead>
-->
<!-- body dynamic rows -->
<!--
<tbody id="myBody"></tbody>
</table>

 <center>
</body>
</html>
-->
