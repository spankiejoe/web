showcase("fft", {
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
});


showcase("glimpse", {
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
    "
});



showcase("reading", {
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
});


showcase("heatmap", {
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

});






showcase("transforms", {
    title: "SVGs, CSS Transforms &amp; Selection",
    description: "In this demo we apply CSS transforms to elements, \
    track SVGs and perform selection. \
    <br/><br/>\
    \
    The full source of this demo can be found in the \
    <a href='https://github.com/gazeio/showcase'>GitHub showcase repository</a>.\
    ",
    code: "&lt;script src='gaze.js'>&lt;/script> \
        \n&lt;script> \
        \n  // If an element was selected. \
        \n  gaze.onselect('.targets', function(e) { \
        \n  \    $(e.element).css('color', 'red'); \
        \n  });\
    \n&lt;/script>\
    "
});

