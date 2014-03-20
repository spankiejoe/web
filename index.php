<?php
  include 'header.php';
?>



    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container ribbonholder">
        <div class="ribbon-wrapper-green"><div class="ribbon-green">Alpha</div></div>
        <pre><code class="language-markup">               
          &lt;script src="gaze.js">&lt;/script>
          &lt;script>
              gaze.init();

              gaze.ongazeover(".trees_of_green", function(e) {
                  alert("I see ... ", e);
              });
          &lt;/script>
        </code></pre>

        <p style="text-align:center;">Eye tracking in HTML. The way you want it.</p>
      </div>
      <p style="text-align:center; margin-top:20px; font-size: 60%;"><a href="/press">As featured on iX - Wired - CrunchGear - PC Pro - n-tv</a></p>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">

        <div class="cell">
        <div class="fixedcell">
          <h2>News</h2>
          <p>
            <ul class="news">
              <!--<li>New web site launched.<br/><span class="newsdate">- March 15, 2014</span></li> -->
              <li>Web site uploaded to GitHub, yay!<br/><span class="newsdate">- March 20, 2014</span></li>
              <li>Working version of fallback relay for eye trackers that don't natively support websocket gaze data.<br/><span class="newsdate">- March 20, 2014</span></li>
            </ul>
          </p>
          <p class="bottomlink"><a class="btn btn-default" href="https://twitter.com/gazeio">Twitter &raquo;</a></p>
        </div>          
        </div>

        <div class="cell" style="position: relative;">
        <div class="fixedcell">
          <h2>Features</h2>
          <p>Gaze.io is the fastest possible way to create stunning cross platform eye 
          tracking apps, and it supports both interaction and analysis. 
          In runs on Chrome, Firefox, Internet Explorer 10+ and Safari, 
          on Windows, Mac OS and Linux, given the eye tracker runs on said platform and 
          has an open API.</p>          
          <p class="bottomlink"><a class="btn btn-default" href="/faq/#features">Features &amp; Compatibilty &raquo;</a></p>
        </div>          
        </div>

        <div class="cell">
        <div class="fixedcell">        
          <h2>Examples</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p class="bottomlink"><a class="btn btn-default" href="#">Have a look &raquo;</a></p>
        </div>
      </div>
      </div>
<?php
  include 'footer.php';
?>

