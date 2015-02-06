<center>
    <section class="content contentFirst">
        <h1>Contact Gegevens</h1>
        <table id="tableItemVlak">
            
            <tr><td><h2>Enschede</h2></td></tr>
            <tr><td><p>Neptunusstraat 23<br/>7521 WC Enschede</p></td></tr>
            <tr><td><br/></td></tr>
            <tr><td><h2>Telefoon</h2></td></tr>
            <tr><td><p><a href="tel:053 760 1122">053 760 1122</a></p></td></tr>
            <tr><td><br/></td></tr>
            <tr><td><h2>Servicedesk</h2></td></tr>
            <tr><td><p><a href="mailto:servicedesk@nubium.nl">servicedesk@nubium.nl</a></p></td></tr>
            <tr><td><br/></td></tr>
            <tr><td><h2>Kamer van Koophandel</h2></td></tr>
            <tr><td><p>61684635</p></td></tr>
            
        </table>
        
    </section>
    
    <section class="mapsContent">
        <div id="map-canvas"></div>
        <script>
            //Ga naar https://developers.google.com/maps/documentation/javascript/controls voor meer info!
            //Voor een statische map https://developers.google.com/maps/documentation/staticmaps/
            
            function initialize() {
                var myLatlng = new google.maps.LatLng(52.2316924,6.8557929);
                var mapOptions = {
                    center: myLatlng,
                    zoom: 15,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    panControl: false,
                    zoomControl: false,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    overviewMapControl: false
                }
                var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

                var marker = new google.maps.Marker({
                    position: myLatlng,
                   map: map,
                   title: 'Nubium'
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    </section>
    
    <section class="content">

        
        <table id="tableItemVlak">
            
            <tr><td><h2>sollicitatie</h2></td></tr>
            <tr><td><p>Wij zijn altijd geïnteresseerd om in contact te komen met mensen die denken dat ze iets relevants aan ons team toe kunnen voegen. Stuur ons je open sollicitatie naar <a href="mailto:jobs@nubium.nl">jobs@nubium.nl</a></p></td></tr>
            
        </table>
        
        
    </section>
</center>