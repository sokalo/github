<html>
<head></head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script>
function myvalue() 
{
   var a = 3;
  $.ajax({
  url: 'ajax_example.php'
  cache: false,
  type: 'GET',
  data: {var: a},
  dataType: 'JSON',
  beforeSend: function() { alert("About to deploy ajax request");
  success: function(response)
  {     
        console.log(response);
         if(response.success) 
         {
               alert(response.var); 
         } else 
         {
            alert(response.message); 
         }
  }
}});
 $(document.ready(function() {
    myvalue();
 });
}
<script>

</body>
</html>