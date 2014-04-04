<?php
  include '../header.php';
?>

<div class="subpage">

    <div class="container">
        <h2>General Questions</h2>
        <p>In this section you will find answers to the most frequently asked questions.</p>
        <br/>
        <p>
            <div class="question"><a name="features"></a>What features are supported?</div>
            <div class="answer">
            TBD
<!--                 <ul>
                    <li>Runs on Windows, Mac OS and Linux</li>
                    <li>JavaScript</li>
                    <li>Built on open web standards</li>
                </ul>
 -->            </div>

            <div class="question"><a name="features"></a>What trackers are supported?</div>
            <div class="answer">
            At the moment the following trackers are supported on Windows:<br/><br/>
                <ul>
                    <li>Tobii EyeX</li>
                    <li>Tobii REX</li>
                    <li>Tobii X2</li>
                    <li>Tobii T60 / X60</li>
                </ul>
            The X120 / TX300 should work too, but internal relay
            downsampling is not implemented yet so their tracking rate might be too high.
            Note that the current Windows limitation is due to driver support. The gaze.io library
            works perfectly well on every operating system and every modern browser, and once drivers
            are available for these platforms, gaze.io will work there too.
            </div>

            <div class="question">Is it open source?</div>
            <div class="answer">Yes, see <a href="/about">here</a>. The gaze.io library
            also uses parts of the former Text 2.0 framework which have now been relicensed
            under the BSD license too.
            </div>

        </p>
    </div>


    <div class="container">
        <h2>How Can I Use My Tracker?</h2><a name="I_MOUSEFALLBACK"></a>
        <p>If you visit a web page that uses gaze.io you might get a message that it could not
        find your eye tracker. This means either you have not connected your eye tracker
        and started the <code>relay</code>, or that the relay
        could not be found. First, download the current relay:<br/><br/>

        <center>
            <a href="http://downloads.gaze.io/relay/relay-0.2.2.exe">
            <button type="submit" class="btn btn-info">Download Relay</button>
            </a><br/>
            <span style="font-size: 80%;">(v0.2.2, Windows x64)</span>
        </center>
        <br/>
        For Tobii eye trackers, proceed according to these steps.<br/><br/>
            <ul>
                <li>Make sure you have the <a href="http://www.microsoft.com/en-us/download/details.aspx?id=30679">Redistributable for Visual Studio 2012 </a> installed.</li>
                <li>Make sure you have <a href="http://support.apple.com/kb/DL999">Bonjour </a> installed.</li>
                <li>Make sure you have the <a href="http://www.tobii.com/en/eye-tracking-research/global/support-and-downloads/?product=23724">Eye Tracker Browser</a> installed.</li>
                <br/><span style="font-size:80%">The previous 3 steps might be optional depending on your config. However, if you are unsure or things don't work better download and run them anyway.</span><br/><br/>
                <li>Configure your eye tracker.</li>
                <li>Reload the page where you came from.</li>
            </ul>

        <center><img src="/faq/help.relay.png"></center>
        If you have a supported eye tracker and that does not work, please file a bug.
        </p>
        <br/>
    </div>


    <div class="container">
        <h2>Technical Questions</h2>
        <p>Questions you might run in to using the library or developing for it.</p>
        <br/>
        <p>
            <div class="question"><a name="features"></a>Why does my tracking suddenly stop?</div><a name="W_DATASTALL"></a>
            <div class="answer">
            This can have several reasons. First make sure you did not accidentally unplug your eye tracker.
            Using the <code>relay</code>, it might just have crashed, so you might want to try to restart it.
            Information for other back ends will be updated soon.
            </div>
        </p>
    </div>


<!--     <div class="container">
        <h2>Developer Questions</h2>
        <p>Answers to some of the developer questions that have been asked over the pasts years.</p>
        <br/>
        <p>
        </p>
    </div>
 -->
<div>

<script>
    $(document).ready(function() {
        setTimeout(function() {
            window.scrollBy(0,-150);
        }, 200)

    });
</script>

<?php
  include '../footer.php';
?>

