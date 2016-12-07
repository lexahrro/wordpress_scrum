<?php
/**
 * Template Name: STREAM
 */


get_header();

?>
<body>
<body>
<!-- 1. The <iframe> (and video player) will replace this <div> tag. -->


<script>
    // 2. This code loads the IFrame Player API code asynchronously.
    var tag = document.createElement('script');

    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // 3. This function creates an <iframe> (and YouTube player)
    //    after the API code downloads.
    var player;
    function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
            height: '480',
            width: '854',
            videoId: 'Dzqx__fFNaU',
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
        player.mute();
        player.playVideo();
    }

    // 5. The API calls this function when the player's state changes.
    //    The function indicates that when playing a video (state=1),
    //    the player should play for six seconds and then stop.
    var done = false;
    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
            setTimeout(stopVideo, 6000);
            done = true;
        }
    }
    function stopVideo() {
        player.stopVideo();
    }
</script>


<section id="section1">
    <div class="container-fluid container-stream">
        <div class="row row-button">
            <div class="col-md-6">
                <script src= "http://player.twitch.tv/js/embed/v1.js"></script>
                <div id="{PLAYER_DIV_ID}"></div>
                <script type="text/javascript">
                    var options = {
                        width: 854,
                        height: 480,
                        channel: "{monstercat}",

                        //video: "{VIDEO_ID}"
                    };
                    var player = new Twitch.Player("{PLAYER_DIV_ID}", options);
                    player.setVolume(0.5);
                </script>
            </div>
            <div class="col-md-6">
                <div id="player"></div>
            </div>
        </div>
    </div>
    <?php

    $link = file_get_contents("https://api.twitch.tv/kraken/streams/janmyy");
    $streams = json_decode($link);

    if ($streams == null){
        echo "Live Offline";
    }
    else{
        echo $streams -> stream -> game;
    }
    ?>
</section>
</body>
