<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
  body{}
  .twoColFixLtHdr #sidebar1 {
  float: left; /* since this element is floated, a width must be given */
  width: 160px;
  padding-right: 10px;
  padding-bottom: 15px;
  padding-left: 0px;
  background-color: #FFFFFF;
  padding-top: 35px;
  margin-left: 
}
  
</style>
<body class="twoColFixLtHdr">

<div class="w3-sidebar w3-bar-block w3-black w3-card" style="width:130px">
  <h5 class="w3-bar-item">Menu</h5>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Fade')">Fade</button>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Left')">Left</button>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Right')">Right</button>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Top')">Top</button>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Bottom')">Bottom</button>
  <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Zoom')">Zoom</button>
</div>

<div style="margin-left:130px" class="sidebar1">
  <div class="w3-padding">Use any of the w3-animate-classes to fade, zoom or slide in tab content.</div>


  <div id="Fade" class="w3-container city w3-animate-opacity" style="display:none">
    <h2>Fade in</h2>
    <p>London is the capital city of England.</p>
    <p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
  </div>

  <div id="Left" class="w3-container city w3-animate-left" style="display:none">
    <h2>Slide in from left</h2>
    <p>Paris is the capital of France.</p> 
    <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
  </div>

  <div id="Top" class="w3-container city w3-animate-top" style="display:none">
    <h2>Slide in from top</h2>
    <p>Tokyo is the capital of Japan.</p>
    <p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
  </div>

  <div id="Right" class="w3-container city w3-animate-right" style="display:none">
    <h2>Slide in from right</h2>
    <p>London is the capital city of England.</p>
    <p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
  </div>

  <div id="Bottom" class="w3-container city w3-animate-bottom" style="display:none">
    <h2>Slide in from bottom</h2>
    <p>Paris is the capital of France.</p> 
    <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
  </div>

  <div id="Zoom" class="w3-container city w3-animate-zoom" style="display:none">
    <h2>Zoom in</h2>
    <p>Tokyo is the capital of Japan.</p>
    <p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
  </div>

</div>

<script>
function openLink(evt, animName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(animName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>

</body>
</html>
