<!--<!DOCTYPE html>
 
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>Datepicker</title>
   <link href="css/redmond/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
</head>
<body>
 
<input type="date" name="date" id="date" value="" />
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script>
   (function() {
      var elem = document.createElement('input');
      elem.setAttribute('type', 'date');
 
      if ( elem.type === 'text' ) {
         $('#date').datepicker(); 
      }
   })();
 
</script>
</body>
</html>-->

<!DOCTYPE html>
<html>
    <head>
        <title>Modernizer Detect 'date' input type</title>
        <link rel="stylesheet" type="text/css" href="jquery-ui-1.10.3/themes/base/jquery.ui.all.css"/>
        <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-1.7-development-only.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.ui.core.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.ui.widget.js"></script>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.ui.datepicker.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
        <script type="text/javascript">
            $(function(){
                if(!Modernizr.inputtypes.date) {
                    console.log("The 'date' input type is not supported, so using JQueryUI datepicker instead.");
                    $("#theDate").datepicker();
                }
            });
        </script>
    </head>
    <body>
        <form>
            <input id="theDate" type="date"/>
        </form>
    </body>
</html>