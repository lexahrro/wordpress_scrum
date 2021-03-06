<?php
/**
 * Template Name: STREAM
 */


get_header();

?>
<body>
<!-- 1. The <iframe> (and video player) will replace this <div> tag. -->

<script src= "http://player.twitch.tv/js/embed/v1.js"></script>
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
    <div class="container">
        <div class="row">
            <img class="img-responsive" src="<?php bloginfo('url'); ?>/wp-content/themes/dazzling/img/streams.png" alt="fond_img">
        </div>
        <div class="row row-stream">
            <div class="col-md-6">
                <h2 class="text-center caption-stream">Notre chaine Twitch</h2>
                <div id="twitch"></div>

                <script type="text/javascript">
                    var options = {
                        height: '480',
                        width: '854',
                        channel: "{monstercat}",
                        muted: true,

                        //video: "{VIDEO_ID}"
                    };
                    var player = new Twitch.Player("twitch", options);
                    player.setVolume(0.5);
                </script>
            </div>
            <div class="col-md-6">
                <h2 class="text-center caption-stream">Notre chaine Youtube</h2>
                <div id="player"></div>
            </div>
        </div>
    </div>

</section>
</body>

<?php get_footer(); ?>