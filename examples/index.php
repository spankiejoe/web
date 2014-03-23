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
            <a href="/examples/glimpse/"><img class="demo" id="demoglimpse" src="/examples/glimpse.jpg"/></a>
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
        <p>
        Got inspired? Have something cool to show? <a href="info@gaze.io">Let us know</a>, or
        clone <a href="https://github.com/gazeio/showcase">our showcase project</a>.</p>

        <br/>
        <br/>


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
            description: "In the FFT demo we visualize raw gaze data in a special form. \
            We <a href='http://nayuki.eigenstate.org/page/free-small-fft-in-multiple-languages'> \
            transform the data</a> from the time into the frequency domain, so that \
            the individual vertical and horizontal sine-components become visible. <br/><br/> \
            \
            Apart from the fact that it looks nice, the spectral analysis of gaze data \
            can give you a better understanding what your precision and accuracy error is \
            actually composed of. <br/><br/>\
            \
            The full source of this demo can be found in the \
            <a href='https://github.com/gazeio/showcase'>GitHub showcase repository</a>.\
            ",
            code: "&lt;script src='gaze.js'>&lt;/script> \
                \n&lt;script> \
                \n  gaze.init() \
                \n  \
                \n  // We tap into the raw eye tracker signal. \
                \n  gaze.onraw(function(raw) { \
                \n      var x = raw.left.screenX;\
                \n      var y = raw.left.screenX;\
                \n  \
                \n      // And update using an external FFT library.\
                \n      ... \
                \n  })\
            \n&lt;/script>\
            "
        },


        demoglimpse: {
            title: "Glimpse",
            description: "Inspired by <a href='http://www.spritzinc.com/'>Spritz</a> we \
            thought their demo would be even more interesting if it were gaze aware.<br/> <br/>\
            \
            Similar to Spritz, text in this demo is presented word-by-word. In addition we register \
            a gaze over / gaze out listener on the central display area and pause as long as the user \
            is not looking. <br/><br/>\
            \
            The full source of this demo can be found in the \
            <a href='https://github.com/gazeio/showcase'>GitHub showcase repository</a>.\
            ",
            code: "&lt;script src='gaze.js'>&lt;/script> \
                \n&lt;script> \
                \n  gaze.init() \
                \n  \
                \n  // Register a callback when gaze enters or leaves. \
                \n  gaze.ongazeover(function(e) { \
                \n  \
                \n      if (e.type == 'over') { /* Start reading ... */ }\
                \n      if (e.type == 'out') { /* Stop reading ... */ } \
                \n  })\
            \n&lt;/script>\
            ",
        },


        demoheatmap: {
            title: "Heat Maps",
            description: "Everyone loves heat maps. They allow for an intuitive \
            visualization of one or many viewers, and creating one in HTML5 thanks to the \
            awesome <a href='http://www.patrick-wied.at/static/heatmapjs/'>heatmap.js</a> \
            library is a piece of cake. <br/><br/>\
            \
            The full source of this demo can be found in the \
            <a href='https://github.com/gazeio/showcase'>GitHub showcase repository</a>.\
            ",
            code: "&lt;script src='gaze.js'>&lt;/script> \
                \n&lt;script> \
                \n  gaze.init() \
                \n  \
                \n  var heatmap = ... // from heatmap.js library \
                \n  \
                \n  // Use smooth, filtered data for the heatmap. \
                \n  gaze.onfiltered(function(f) { \
                \n  \
                \n      heatmap.store.addDataPoint(f.windowX, f.windowY, 1);\
                \n  })\
                \n&lt;/script>\
            "
        },
        demoreading: {
            title: "Reading / Skimming Classification",
            description: "This demo shows a real time reading / skimming classifier. Based \
            on your eye movement in the document the library tries to guesstimate \
            if you are more likely reading for meaning, or if you are rather skimming the \
            document without carefully considering it word for word. <br/><br/>\
            \
            Behind the curtains it shows that the core library can be dynamically \
            extended (the classifier function is not part of the main library yet)\
            and how this is done. \
            <br/><br/>\
            \
            And in case you are interested, the underlying classifier is a (really quick and really dirty) \
            re-implementation of: <br/><br/>\
            <i>Biedert, R., Buscher, G., Hees, J., &amp; Dengel, A. (2012). \
            A Robust Realtime Reading-Skimming Classifier (pp. 123–130). Presented at the \
            Proceedings of the 2012 Symposium on Eye-Tracking Research &amp; Applications. \
            doi:10.1145/2168556.2168575 </i>\
            <br/><br/>\
            \
            The full source of this demo can be found in the \
            <a href='https://github.com/gazeio/showcase'>GitHub showcase repository</a>.\
            ",
            code: "&lt;script src='gaze.js'>&lt;/script> \
                \n&lt;script> \
                \n  // Define your own extension. \
                \n  gaze.extend({ \
                \n      onreading: function(listener) { \
                \n          // Register the listener ... \
                \n      } \
                \n  }, { id: 'reading'});\
                \n  \
                \n  // And later use it \
                \n  gaze.onreading(function(r) { \
                \n      // ... \
                \n  })\
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

