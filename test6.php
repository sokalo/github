<!--<html>
<head>
    <title>Hello Modernizr</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="~/modernizr.js"></script>

</head>
<body>
<input type="date"/>
</body>
</html>



<script>
Modernizr.load({
    test: Modernizr.inputtypes.date,
    nope: ['http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.min.js', 'jquery-ui.css'],
    complete: function () {
        $('input[type=date]').datepicker({
            dateFormat: 'yy-mm-dd'
        });
    }
});

$('input[type=date]').datepicker({
        dateFormat: 'yy-mm-dd'
});
</script>-->

<!doctype html>
<html>
<head>
    <title>jQuery UI Date Picker with Modernizr</title>
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"></style>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script type="text/javascript" src="http://modernizr.com/downloads/modernizr-latest.js"></script>
    <script type="text/javascript">
        $(function() {
            var nativeDateInputIsSupported = Modernizr.inputtypes.date;
            if (!nativeDateInputIsSupported) {
                $("input[type='date']").datepicker();            
            }
        });
    </script>
</head>
<body>
  <form action="#">
    <!-- 
          this will show native date picker if supported, 
          otherwise it will show jQuery UI Date Picker 
    -->
    <input type="date" />
  </form>    
</body>
</html>