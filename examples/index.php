<?php
  include '../header.php';
?>

<style type="text/css">
    div.columns       { }
    div.columns div   { width: 50%;  float: left; }
    div.text          { padding-right: 40px; }
    div.image         {  }
    div.clear         { clear: both; }
</style>


<div class="subpage">

    <div class="container press">
        <h2>Showcase</h2>
        <p>Below you can find a number of apps and showcases created with gaze.io.</p>
        <br/>



        <!-- EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE  -->
        <div class="columns">
            <h4>Gaze FFT</h4>

            <div class="text" >

                In the heat map

        <pre ><code class="language-markup">&lt;script src="gaze.js">&lt;/script>
&lt;script>
  var heatmap = ... // from heatmap.js library

  gaze.init();

  gaze.onfiltered(function(f) {
      heatmap.store.addDataPoint(f.windowX, f.windowY, 1)
  })
&lt;/script></code></pre>
            </div>
            <div class="image" ><img class="demo" src="/examples/fft.png"/></div>
        </div>
        <div class="clear"></div>



        <!-- EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE  -->
        <div class="columns">
            <h4>Heatmaps</h4>

            <div class="text" >

                In the heat map

        <pre ><code class="language-markup">&lt;script src="gaze.js">&lt;/script>
&lt;script>
  var heatmap = ... // from heatmap.js library

  gaze.init();

  gaze.onfiltered(function(f) {
      heatmap.store.addDataPoint(f.windowX, f.windowY, 1)
  })
&lt;/script></code></pre>
            </div>
            <div class="image" ><img class="demo" src="/examples/heatmap.jpg"/></div>
        </div>
        <div class="clear"></div>





        <!-- EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE  -->
        <div class="columns">
            <h4>Glympse</h4>

            <div class="text" >

                In the heat map

        <pre ><code class="language-markup">&lt;script src="gaze.js">&lt;/script>
&lt;script>
  var heatmap = ... // from heatmap.js library

  gaze.init();

  gaze.onfiltered(function(f) {
      heatmap.store.addDataPoint(f.windowX, f.windowY, 1)
  })
&lt;/script></code></pre>
            </div>
            <div class="image" ><img class="demo" src="/examples/glympse.jpg"/></div>
        </div>
        <div class="clear"></div>



        <br/><br/>





        <br/>
        <br/>
        <br/>
        <p>
        Got inspired? Have something cool to show? <a href="info@gaze.io">Let us know</a>, or
        clone <a href="https://github.com/gazeio/showcase">our showcase project</a>.</p>



        <h2>Videos</h2>
        <p>Below you can find a number of older videos that have been built
        upon gaze.io's ancestor library the Text 2.0 framework. While in the underlying architecture
        many things have changed since then, they might still be inspirational. Have fun :)</p>

        <h5>Text 2.0</h5>
        <iframe width="560" height="315" src="//www.youtube.com/embed/8QocWsWd7fc" frameborder="0" allowfullscreen></iframe>


        <h5>Webkit 3D + Eye Tracking</h5>
        <iframe width="560" height="315" src="//www.youtube.com/embed/RmBI7WYveYo" frameborder="0" allowfullscreen></iframe>

        <h5>eyePad</h5>
        <iframe width="420" height="315" src="//www.youtube.com/embed/7UZhB2ad8GE" frameborder="0" allowfullscreen></iframe>
    </div>

<div>


<?php
  include '../footer.php';
?>

