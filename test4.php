<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="modernizr.js"></script>
  <script>

  /*
* JQM specific configuration of webshim:
*/
//JQM: set waitReady to false
webshim.setOptions('waitReady', false);

//jQM: set wsdoc to active page or false
webshim.setOptions('wsdoc', $('.ui-page-active').updatePolyfill().get(0) || false);

//JQM: set ready event to pageinit
webshim.setOptions('readyEvt', 'pageinit');

//jQM: update polyfills on pageinit and change active page
$(document).on('pageinit', function(e){
	webshim.setOptions('wsdoc', e.target);
	$(e.target).updatePolyfill();
});

//load all polyfill features
//or load only a specific feature with webshim.polyfill('feature-name');
webshim.polyfill('forms forms-ext');

  $(document).ready(function() {
    $(".datepicker").datepicker();
  });

  function myFunction() {
							var table = document.getElementById("mytable");
							var row = table.insertRow(0);
							var cell1 = row.insertCell(0);
							var cell2 = row.insertCell(1);
							var cell3 = row.insertCell(2);
							var cell4 = row.insertCell(3);
							cell1.innerHTML = "<input type='text' name='highschool[0]' style='height:45px;'>";
							cell2.innerHTML = "<input  class='datepicker' name='highschool[1]'>";
							cell3.innerHTML = "<input type='date' class='enddate' name='highschool[2]'>";
							cell4.innerHTML = "<input type='text' name='highschool[3]' style='height:45px;'>";

							$(document).ready(function() {
							    var textbox = '<%=datepicker.ClientID%>';
							    $('#' + textbox ).datepicker();
							  });
						}
						function myDeleteFunction() {
							document.getElementById("myTable").deleteRow(0);
						}
  </script>

</head>
<body>
<form>
    
    <table id ="mytable">
    	<th><input type="button" value="+" onclick="myFunction()"></th>
    <tr>
    <td><input class="datepicker" /></td>
    </tr>
    </table>
</form>
</body>
</html>