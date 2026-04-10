<h1>Location of The Datacentre</h1>
<p>The exact location of the Oracle Cloud Datacentre this website is hosted on is unknown. According to Oracle it's in Amsterdam, but no further information is provided. According to some sources Oracle uses Equinox's AM4 Datacentre.</p>
<div class="tab">
    <button class="tablinks" onclick="openTab(event, 'GM')">Google Maps</button>
    <button class="tablinks" onclick="openTab(event, 'OSM')">Open Street Map</button>
</div>

<div id="GM" class="tabcontent">
    <iframe width="600" height="450" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d609.2182336556654!2d4.961687905339374!3d52.354589809443794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6090049c2ddad%3A0xe91e9a3342584e0c!2sEquinix%20AM4!5e0!3m2!1sen!2shu!4v1774424190900!5m2!1sen!2shu" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <br/>
    <small><a target="_blank" href="https://maps.app.goo.gl/ny3ukPopscQpaXiv7">Open Map Externally</a></small>
</div>

<div id="OSM" class="tabcontent">
    <iframe width="425" height="450" loading="lazy" src="https://www.openstreetmap.org/export/embed.html?bbox=4.960230588912965%2C52.35356517871814%2C4.961968660354615%2C52.3549658676064&amp;layer=mapnik" style="border: none"></iframe>
    <br/>
    <small><a target="_blank" href="https://www.openstreetmap.org/?#map=19/52.354266/4.961100&amp;layers=D">Open Map Externally</a></small>
</div>

<script>
function openTab(evt, elementid) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(elementid).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>