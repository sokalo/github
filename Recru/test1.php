<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <!-- Load modernizr for .load method support -->
  <script src="modernizr-latest.js" type="text/javascript"></script>

  <!-- Example 1 - Load jquery from a working CDN with local fallback -->
  <script type="text/javascript">
    // Modernizr.load is a resource loader for CSS and JavaScript
    // It works by trying to load in the script, and then immediately after, testing to see if the loaded objects are available. 
    // If they are not, then go ahead and load a local copy of that javascript as a fallback.
    //
    // The simple
    Modernizr.load([{
        load: 'http://code.jquery.com/jquery-latest.min.js',
        complete: function () {
          JQUERY_CDN = "code.jquery.com";

          // Verify if the jQuery object was loaded or not
          if ( !window.jQuery ) {
            Modernizr.load('jquery-latest.min.js');
            JQUERY_CDN = "local";
          }
        }
      },
      {
        // This will wait for the fallback to load and execute if it needs to.
        // Note: This forces the scripts to be loaded in serial, instead of the browser normal behavior to load them in parallel
        load: 'jquery-example.js'
      }
    ]);
  </script>

  <!-- Example 2 - Load three.js on browsers with webgl support, fallback to jebgl -->
  <script type="text/javascript">
    Modernizr.load({  
      // Before loading any resource, query the browser with Modernizr extension to check if WebGL is supported.
      // If the test returns true, yep url is used (in this case three.js 3D library is loaded)
      // If the test return false, the nope url is suposed to be a polyfill fallback (in this case jebgl, an applet fallback)
      test: Modernizr.webgl,  
      yep : 'http://cdnjs.cloudflare.com/ajax/libs/three.js/r61/three.min.js', /* JavaScript 3D Library */  
      nope: 'jebgl.js', /* Fallback emulator  */

      callback: function (url, result, key) {
        if (url === 'jebgl.js') {
          $('#main3').html("Webgl not supported fallback to jebgl");
        }else{
          $('#main3').html("Webgl supported loaded threejs");
        } 
      }
     });  
  </script>
  
  
  <!-- Example 3 - Load underscore.js from a invalid CDN with local fallback -->
  <script type="text/javascript">
    Modernizr.load([{
        // When loading files from invalid locations, Modernizr waits for a default Timeout before firing the "complete" callback.
        // This timeout can be prohibitively long for your site user experience.
        //
        // You can reduce the timeout by using a prefix that will overrite the global errorTimeout value.
        // This value is the number of milliseconds to wait before the callback "complete" to be called.
        // Simply prefix timeout=_delay_in_milliseconds_! to the url
        load: 'timeout=2000!http://iam_not_valid.com/underscore.min.js',
        complete: function () {
          UNDERSCORE_CDN = "iam_not_valid.com";

          // Verify if the underscore was loaded or not
          if ( !window._ ) {
            Modernizr.load('underscore.js');
            UNDERSCORE_CDN = "local";
          }
        }
      },
      {
        // This will wait for the fallback to load and execute if it needs to.
        // Note: This forces the scripts to be loaded in serial, instead of the browser normal behavior to load them in parallel
        // This will wait for the fallback to load and
        load: 'example2.js'
      }
    ]);

  </script>
</head>

<body>
  <!-- Insertion point for jquery output -->
  <h3> Working CDN </h3>
  <div id="main" style="margin-left:100px">
  </div>

  <h3> Webgl</h3>
  <!-- Insertion point for webgl output -->
  <div id="main3" style="margin-left:100px">
  </div>
  
  <h3> Invalid CDN (2s timeout)</h3>
  <!-- Insertion point for underscore output -->
  <div id="main2" style="margin-left:100px">
  </div>
</body> 
</html>