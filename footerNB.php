<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
    font-family:'Roboto Mono', monospace;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: auto;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

/* Style the container/contact section */
.container {
    border-radius: 5px;
   	background-color: light-grey;
    padding: 10px;
    position:auto;
}

.columns {
    float: left;
    width: 100%;
    margin-top: auto;
    padding: 20px;
}
.rows:after {
    content: "";
    display: table;
    clear: both;
}
.space{
    line-height:1.6;
    margin-right:30px;
    margin-left: auto;
    margin top:20px;
    margin-bottom:2px;

}

@media screen and (max-width: 600px) {
    .column, input[type=submit] {
        width: 100%;
       
    }
}
</style>
</head>
<body>
<div class="container">
    
        <div class="rows">
            <div class="columns">
            <div id="map" style="width:100%;height:500px"></div>
            </div>
            <div class="column">
            <div class="w3-col m8 w3-panel">
        <div class="w3-large space">
        <i class="fa fa-map-marker fa-fw w3-hover-text-light-blue w3-xxlarge "></i> New York, US<br>
        <i class="fa fa-phone fa-fw w3-hover-text-light-blue w3-xxlarge "></i> Phone: 732-599-7666<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-light-blue w3-xxlarge"></i> Email: nidhibrahmbhatt@hotmail.com<br>
        </div>
            </div>
        </div>
    </div>

        <script>
        function myMap() {
        var myCenter = new google.maps.LatLng(40.910275, -73.778902);
        var mapCanvas = document.getElementById("map");
        var mapOptions = {center: myCenter, zoom: 12};
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({position:myCenter});
        marker.setMap(map);
        }
        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvyM521Gzn4KIx9vyWaRycdVp9o_4AR1Y&callback=myMap"></script>

    </div>

</html>
<!--<html>
<body>
<div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact Me</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Chicago, US</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +00 151515</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: mail@mail.com</p>
    </div><br>
    <p>Lets get in touch. Send me a message:</p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>

  </div>
</body>
</html>-->