<?php
  include '../header.php';
?>

<style type="text/css">
    #showbar img { width: 210px;}

    div.columns       { }
    div.columns div   { width: 45%;  float: left; }
    div.text          { padding-right: 40px; }
    div.image         {  }
    div.clear         { clear: both; }
</style>


<div class="subpage">

    <div class="container press">
        <h2>Showcase</h2>
        <p>Below you can find a number of apps and showcases created with gaze.io. Please note that you
        should open them with a recent HTML5 browser (Chrome 33+, Firefox 28+, Internet Explorer 11), otherwise
        some features might not work as expected.</p>
        <br/>



        <p id="showbar">
            <a href="/examples/fft/"><img class="demo" id="demofft" src="/examples/fft.png"/></a>
            <a href="/examples/glympse/"><img class="demo" id="demoglympse" src="/examples/glympse.jpg"/></a>
            <a href="/examples/heatmap/"><img class="demo" id="demoheatmap" src="/examples/heatmap.jpg"/></a>
            <a href="/examples/reading/"><img class="demo" id="demoreading" src="/examples/reading.jpg"/></a>
        </p>

        <br/><br/>


        <!-- EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE EXAMPLE  -->
        <div class="columns demopanel">
            <h4 id="demotitle">Gaze FFT</h4>
            <div id="demotext" class="text"></div>
            <div class="image demopanel"><pre><code id="democode" class="language-markup">

            </code></pre></div>
        </div>
        <div class="clear"></div>

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


<script>
    var demos = {
        demofft: {
            title: "Gaze FFT",
            description: "Blah blah blah",
            code: "&lt;script src='gaze.js'>&lt;/script> \
                \n&lt;script> \
                \n  var heatmap = ... // from heatmap.js library \
                \n  var x = function(a) {} \
            \n&lt;/script>\
            "
        },
        demoglympse: {
            title: "Glympse",
            description: "Blah blah blah",
            code: "&lt;script src='gaze.js'>&lt;/script> \
                \n&lt;script> \
                \n  var heatmap = ... // from heatmap.js library \
                \n  var x = function(a) {} \
            \n&lt;/script>\
            "
        },
        demoheatmap: {
            title: "Simple Gaze Heatmaps",
            description: "Blah blah blah",
            code: "&lt;script src='gaze.js'>&lt;/script> \
                \n&lt;script> \
                \n  var heatmap = ... // from heatmap.js library \
                \n  var x = function(a) {} \
            \n&lt;/script>\
            "
        },
        demoreading: {
            title: "Reading / Skimming Detection",
            description: "Blah blah blah",
            code: "&lt;script src='gaze.js'>&lt;/script> \
                \n&lt;script> \
                \n  var heatmap = ... // from heatmap.js library \
                \n  var x = function(a) {} \
            \n&lt;/script>\
            "
        },

    }

    // Called to update the demo area
    function showDemo (name) {
        $("#demotitle").html(demos[name].title)
        $("#demotext").html(demos[name].description);
        $("#democode").html(demos[name].code);

        Prism.highlightAll();
    }

    // Handle the hovering
    var changetimer = null
    $(".demo").mouseover(function() {
        if (changetimer) clearTimeout(changetimer);
        var name = $(this).attr("id")
        changetimer = setTimeout(function() {
            showDemo(name);
        }, 500)
    }).mouseout(function() {
        if (changetimer) clearTimeout(changetimer);
    })


    setTimeout(function() {
        showDemo("demofft", 1);
    })
</script>

<?php
  include '../footer.php';
?>

