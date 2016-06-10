@extends('layouts.master')

@section('topscript')
    <link rel="icon" href="/img/LM.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Map</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/weathermap.css">
@stop

@section('body')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWT8nXLMje5dPaaTeZp2xaxSRmyLc1iL4"></script>
@stop

@section('lowerbody') 
  <div id= "title">
        <h1>3 Day Forecast</h1>
    </div>

    <div class="container">
        <h3 id="city"></h3>
        <div class="row" id="weather-info">    
        </div>
    </div>

    <div id= "map-background">
        <div id="map-canvas" >
        </div>
    </div>
<!-- ********************************************************************************************* -->
<script type="text/javascript">
(function() {
    "use strict";
    // map options
    var mapOptions = {
        zoom: 9,
        center: {
            lat:  29.42,
            lng: -98.49
        },
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    var location = {lat: 29.42, lng: -98.49}
    var geocoder = new google.maps.Geocoder();

    // Render the map
    //var sanantonio = {lat: 29.42, lng: -98.49};
    var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);        
    
    var marker = new google.maps.Marker({
        position: map.center,
        map: map,
        draggable: true,
        animation: google.maps.Animation.DROP,
        title: "drag this little guy"
    });

    //this is the function for the SA default location's weather info
    function getWeather(lat, long) {
        $.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
            APPID: "d4509b3c6487ce95a133c0413b2adc31",
            lat: 29.42,
            lon: -98.49,
            units: "imperial",
            cnt: 3
        }).done(function(data) {
            console.log(data);
            $('#city').html(data.city.name+", "+data.city.country);

            var forecast = " ";
            data.list.forEach(function(element, index, array) { 
                forecast += '<div class="col-md-4">' 
                forecast += "<p>" + '<img src="http://openweathermap.org/img/w/'+ data.list[0].weather[0].icon + '.png">' + "</p>"
                forecast +=  "<p>"+"High: "+element.temp.max+'&deg;'+"F"+" /"+" Low: "+element.temp.min+'&deg;'+"F"+"</p>"
                forecast +=  "<p>"+"Humidity: "+element.humidity+"</p>"
                forecast +=  "<p>"+"Wind: "+element.speed+" mph "+"</p>"
                forecast += '</div>'
            });
            $("#weather-info").html(forecast);
        });
    
    //this is event listener for moving the marker and getting the weather for that local
    google.maps.event.addListener(marker, 'dragend', function() {
        $.get("http://api.openweathermap.org/data/2.5/forecast/daily", {
            APPID: "d4509b3c6487ce95a133c0413b2adc31",
            lat: this.position.lat(),
            lon: this.position.lng(),
            units: "imperial",
            cnt: 3
        }).done(function(data) {
            console.log(data);
            $('#city').html(data.city.name+", "+data.city.country);
    
            var forecast = " ";
            data.list.forEach(function(element, index, array) { 
                forecast += '<div class="col-md-4">' 
                forecast += "<p>" + '<img src="http://openweathermap.org/img/w/'+ data.list[0].weather[0].icon + '.png">' + "</p>"
                forecast +=  "<p>"+"High: "+element.temp.max+'&deg;'+"F"+" /"+" Low: "+element.temp.min+'&deg;'+"F"+"</p>"
                forecast +=  "<p>"+"Humidity: "+element.humidity+"</p>"
                forecast +=  "<p>"+"Wind: "+element.speed+" mph "+"</p>"
                forecast += '</div>'
            });
            $("#weather-info").html(forecast);
        });
    });
};
getWeather();  

 })();
</script> 
@stop
