// create a map in the "map" div, set the view to a given place and zoom
var map = L.map('map').setView([51.505, -0.09], 2);

// add an OpenStreetMap tile layer
//L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    //attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
L.tileLayer('http://{s}.tile.cloudmade.com/6375f24019e14089b0633450f8de4c9b/1930/256/{z}/{x}/{y}.png', {
  attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <ahref="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>'
  }).addTo(map);



// add a marker in the given location, attach some popup content to it and open the popup. Most lat / lons from http://open.mapquestapi.com/geocoding/


//Beijing, China
L.marker([39.913602, 116.397196]).addTo(map)
    .bindPopup('Beijing, China<br><a href="http://www.cleanweb.co" target="_new">www.cleanweb.co</a><br><a href="https://www.facebook.com/pages/Cleanweb-Beijing/429597177119257" target="_new">facebook.com/pages/Cleanweb-Beijing/429597177119257</a><br><a href="http://www.twitter.com/cleanweb" target="_new">@Cleanweb</a>');
  
//Belgium
L.marker([50.85034, 4.35171]).addTo(map)
    .bindPopup('Belgium<br><a href="http://belgium.cleanweb.co" target="_new">belgium.cleanweb.co</a><br><a href="https://www.facebook.com/pages/Cleanweb-Belgium/176575122511395" target="_new">facebook.com/pages/Cleanweb-Belgium/176575122511395</a><br><a href="http://www.twitter.com/cleanwebbe" target="_new">@CleanwebBE</a>');  
  
//Berkeley, CA
L.marker([37.88166, -122.28448]).addTo(map)
    .bindPopup('Berkeley, CA<br><a href="http://berkeley.cleanweb.co" target="_new">berkeley.cleanweb.co</a><br><a href="https://www.facebook.com/pages/Cleanweb-Berkeley/296111370492236" target="_new">facebook.com/pages/Cleanweb-Berkeley/296111370492236</a><br><a href="http://www.twitter.com/cleanweb" target="_new">@Cleanweb</a>');

// Boston
L.marker([42.360482, -71.059568]).addTo(map)
    .bindPopup('Boston, MA<br><a href="http://boston.cleanweb.co/" target="_new">boston.cleanweb.co</a><br><a href="http://www.facebook.com/cleanwebbos" target="_new">facebook.com/cleanwebbos</a><br><a href="http://www.twitter.com/CleanWebBos" target="_new">@CleanwebBos</a>');

// Brazil
L.marker([-1.45502, -48.502368]).addTo(map)
    .bindPopup('Brazil<br><a href="http://www.cleanweb.co" target="_new">www.cleanweb.co</a><br><a href="https://www.facebook.com/pages/Cleanweb-Brasil/270768959716124" target="_new">Cleanweb-Brasil/270768959716124</a><br><a href="http://www.twitter.com/cleanwebBR" target="_new">@CleanwebBR</a>');    
  
  
// Chicago
L.marker([41.875621, -87.624371]).addTo(map)
    .bindPopup('Chicago, IL<br><a href="http://chicago.cleanweb.co/" target="_new">chicago.cleanweb.co</a><br><a href="https://www.facebook.com/pages/Cleanweb-Chicago/340213486091614" target="_new">facebook.com/pages/Cleanweb-Chicago/340213486091614</a><br><a href="http://www.twitter.com/CleanWeb" target="_new">@Cleanweb</a>');


// France
L.marker([48.856506, 2.352133]).addTo(map)
    .bindPopup('France<br><a href="http://france.cleanweb.co" target="_new">france.cleanweb.co</a><br><a href="http://www.facebook.com/cleanwebfrance" target="_new">facebook.com/cleanwebfrance</a><br><a href="http://www.twitter.com/cleanwebfr" target="_new">@CleanwebFR</a>');

// Houston
L.marker([29.984167, -95.332889]).addTo(map)
    .bindPopup('Houston, TX<br><a href="http://houston.cleanweb.co" target="_new">houston.cleanweb.co</a><br><a href="http://www.facebook.com/cleanwebtexas" target="_new">facebook.com/cleanwebtexas</a><br><a href="http://www.twitter.com/CleanwebTX" target="_new">@CleanwebTX</a>');


// Israel
L.marker([32.066157, 34.777821]).addTo(map)
    .bindPopup('Israel<br><a href="http://israel.cleanweb.co" target="_new">israel.cleanweb.co</a><br><a href="http://www.facebook.com/pages/Cleanweb-Israel/335078466593728" target="_new">facebook.com/pages/Cleanweb-Israel/335078466593728</a><br><a href="http://www.twitter.com/Cleanweb" target="_new">@Cleanweb</a>');

// Italy
L.marker([41.893258, 12.483062]).addTo(map)
    .bindPopup('Italy<br><a href="http://italy.cleanweb.co" target="_new">italy.cleanweb.co</a><br><a href="http://www.facebook.com/cleanwebit" target="_new">facebook.com/cleanwebit</a><br><a href="http://www.twitter.com/CleanwebIT" target="_new">@CleanwebIT</a>');


// LA
L.marker([34.050171, -118.241971]).addTo(map)
    .bindPopup('Los Angeles, CA<br><a href="http://losangeles.cleanweb.co" target="_new">losangeles.cleanweb.co</a><br><a href="http://www.facebook.com/cleanweb" target="_new">facebook.com/cleanweb</a><br><a href="http://www.twitter.com/Cleanweb" target="_new">@Cleanweb</a>');


// NYC
L.marker([40.730599, -73.986581]).addTo(map)
    .bindPopup('New York City, NY<br><a href="http://nyc.cleanweb.co" target="_new">nyc.cleanweb.co</a><br><a href="http://www.facebook.com/CleanwebNYC" target="_new">facebook.com/CleanwebNYC</a><br><a href="http://www.twitter.com/CleanwebNYC" target="_new">@CleanwebNYC</a>');


// San Francisco
L.marker([37.764799, -122.46299]).addTo(map)
    .bindPopup('San Francisco, CA<br><a href="http://sanfrancisco.cleanweb.co" target="_new">sanfrancisco.cleanweb.co</a><br><a href="http://www.facebook.com/Cleanweb" target="_new">facebook.com/Cleanweb</a><br><a href="http://www.twitter.com/Cleanweb" target="_new">@Cleanweb</a>');


// Scotland
L.marker([55.899956, -4.262695]).addTo(map)
    .bindPopup('Scotland <br><a href="http://scotland.cleanweb.co" target="_new">scotland.cleanweb.co</a><br><a href="http://www.facebook.com/pages/Cleanweb-Scotland/474242292613069" target="_new">facebook.com/pages/Cleanweb-Scotland/474242292613069</a><br><a href="http://www.twitter.com/CleanwebSCO" target="_new">@CleanwebSCO</a>');


// Stanford 
L.marker([37.442156, -122.163447]).addTo(map)
    .bindPopup('Stanford / Palo Alto, CA <br><a href="http://www.cleanweb.co" target="_new">www.cleanweb.co</a><br><a href="http://www.facebook.com/pages/Cleanweb" target="_new">facebook.com/pages/Cleanweb</a><br><a href="http://www.twitter.com/Cleanweb" target="_new">@Cleanweb</a>');

// The Netherlands
L.marker([52.036846, 4.383428]).addTo(map)
    .bindPopup('The Netherlands<br><a href="http://netherlands.cleanweb.co" target="_new">netherlands.cleanweb.co</a><br><a href="http://www.facebook.com/pages/Cleanweb-Netherlands/343848429068046?ref=ts&fref=ts" target="_new">facebook.com/pages/Cleanweb-Netherlands/343848429068046?ref=ts&fref=ts</a><br><a href="http://www.twitter.com/cleanweb" target="_new">@Cleanweb</a>');   

// UK 
L.marker([51.590723, -0.131836]).addTo(map)
    .bindPopup('United Kingdom<br><a href="http://www.cleanweb.co" target="_new">www.cleanweb.co</a><br><a href="http://www.facebook.com/pages/Cleanweb-UK/447637075290632" target="_new">facebook.com/pages/Cleanweb-UK/447637075290632</a><br><a href="http://www.twitter.com/CleanwebUK" target="_new">@CleanwebUK</a>');
