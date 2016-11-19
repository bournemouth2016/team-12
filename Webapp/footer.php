<div class="home-button-container">
  <a href="/"><div class="home-button"><i class="demo-icon icon-home">&#xe800;</i></div></a>
</div>

<script type = "text/javascript">
    function displayNextImage() {
        x = (x === images.length - 1) ? 0 : x + 1;
        document.getElementById("img").src = images[x];
    }
    function displayPreviousImage() {
        x = (x <= 0) ? images.length - 1 : x - 1;
        document.getElementById("img").src = images[x];
    }
    function startTimer() {
        setInterval(displayNextImage, 4000);
    }
    var images = [], x = -1;
      images[0] = "images/nav01.png";
      images[1] = "images/nav02.png";
      images[2] = "images/nav03.png";
      images[3] = "images/nav04.png";
      images[4] = "images/nav05.png";
      images[5] = "images/nav06.png";
      images[6] = "images/nav07.png";
      images[7] = "images/nav08.png";
      images[4] = "images/nav09.png";
      images[5] = "images/nav10.png";
      images[6] = "images/nav11.png";
      images[7] = "images/nav12.png";                      
</script>

</body>
</html>
