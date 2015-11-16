<?php include_once("header.php") ?>
<section id="generalExplanation">
    <br>
<article>Auf dieser Testumgebung werde ich mich austoben jajajajaja</article>
    
<section>

    
<section id="map">
<script>
	var map = L.map('map').setView([52.52113, 13.38577], 5);
	L.tileLayer('http://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
		attribution: false,
		maxZoom: 17
	}).addTo(map);
	var marker = L.marker([52.52113, 13.38577]).addTo(map);
	marker.bindPopup("Berlin");
    map.setView(new L.LatLng(52.52113, 13.38577),9);
	
</script>
</section>
    <section>
        <p> </p>
    </section>
    <div class="askOfferOverview">
    <section id="leftSct">
        <div id="leftChart">
            <article>
                <a href="firstForm.php"> <h2>Formulare</h2></a>
                <ul>
                    <li>Offering german lessons</li>
                    <li>one winterjacket for free!</li>
                </ul>
            </article>
            
        </div>
    </section>
    <section id="rightSct">
        <div id="rightChart">
            <article>
                <h2>Needs</h2>
                <ul>
                    <li>searching a bycicle</li>
                    <li>need help with papers</li>
                </ul>
            </article>
        </div>
    </section>
    </div></section>



    
    
    </section>  
  


    </section>
    </div></section>
<?php include_once("footer.php") ?>