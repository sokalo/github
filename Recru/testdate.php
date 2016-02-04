<?php
if(isset($_POST['zipcode']) && is_numeric($_POST['zipcode'])){
    $zipcode = $_POST['zipcode'];
}else{
    $zipcode = '130405';
}
$result = file_get_contents('http://weather.yahooapis.com/forecastrss?p=' . $zipcode . '&u=f');
$xml = simplexml_load_string($result);
//echo htmlspecialchars($result, ENT_QUOTES, 'UTF-8');
$xml->registerXPathNamespace('yweather', 'http://xml.weather.yahoo.com/ns/rss/1.0');
$location = $xml->channel->xpath('yweather:location');
if(!empty($location)){
    foreach($xml->channel->item as $item){
        $current = $item->xpath('yweather:condition');
        $forecast = $item->xpath('yweather:forecast');
        $current = $current[0];
        $output = <<<END
            <h1 style="margin-bottom: 0">Weather for {$location[0]['city']}, {$location[0]['region']}</h1>
            <small>{$current['date']}</small>
            <h2>Current Conditions</h2>
            <p>
            <span style="font-size:72px; font-weight:bold;">{$current['temp']}&deg;F</span>
            <br/>
            <img src="http://l.yimg.com/a/i/us/we/52/{$current['code']}.gif" style="vertical-align: middle;"/>&nbsp;
            {$current['text']}
            </p>
            <h2>Forecast</h2>
            {$forecast[0]['day']} - {$forecast[0]['text']}. High: {$forecast[0]['high']} Low: {$forecast[0]['low']}
            <br/>
            {$forecast[1]['day']} - {$forecast[1]['text']}. High: {$forecast[1]['high']} Low: {$forecast[1]['low']}
            <br/>
            {$forecast[2]['day']} - {$forecast[2]['text']}. High: {$forecast[2]['high']} Low: {$forecast[2]['low']}
            <br/>
            {$forecast[3]['day']} - {$forecast[3]['text']}. High: {$forecast[3]['high']} Low: {$forecast[3]['low']}
            <br/>
            {$forecast[4]['day']} - {$forecast[4]['text']}. High: {$forecast[4]['high']} Low: {$forecast[4]['low']}
            </p>
END;
    }
}else{
    $output = '<h1>No results found, please try a different zip code.</h1>';
}
?>
<html>
<head>
<title>Weather</title>
<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
}
label {
    font-weight: bold;
}
</style>
</head>
<body>
<form method="POST" action="">
<label>Zip Code:</label> <input type="text" name="zipcode" size="8" value="" /><br /><input type="submit" name="submit" value="Lookup Weather" />
</form>
<hr />
<?php echo $output; ?>
</body>
</html>