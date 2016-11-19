</body>
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
            images[0] = "images/nav1.png";
            images[1] = "images/nav2.png";
            images[2] = "images/nav3.png";
            images[3] = "images/nav4.png";
            images[4] = "images/nav5.png";
            images[5] = "images/nav6.png";
            images[6] = "images/nav7.png";
            images[7] = "images/nav8.png";          
      </script>

</html>
