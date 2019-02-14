<script type="text/javascript" src="//cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/clappr-chromecast-plugin@latest/dist/clappr-chromecast-plugin.min.js"></script>
<!-- GTH -->
<style>
    /* Fix the player container to take up 100% width and to calculate its height based on its children. */
    [data-player] {
        position: relative;
        width: 100%;
        height: auto;
        margin: 0;    
    }
    
    /* Fix the video container to take up 100% width and to calculate its height based on its children. */
    [data-player] .container[data-container] {
        width: 100%;
        height: auto;
        max-height:550px;
        position: relative;
    }
    
    /* Fix the media-control element to take up the entire size of the player. */
    [data-player] .media-control[data-media-control] {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
    
    /* Fix the video element to take up 100% width and to calculate its height based on its natural aspect ratio. */
    [data-player] video {
        position: relative;
        display: block;
        width: 100%;
        height: auto;
    }
</style>
<div id="player" class="embed-responsive embed-responsive-16by9"></div>
<script>
            window.addEventListener('load', function() {
                var playerElement = document.getElementById("player");
                var player = new Clappr.Player({
                source: window.atob('<?php echo base64_encode($m3u8_1);?>'),
                baseUrl: '/latest',
                poster: '',
                persistConfig: true,
                flushLiveURLCache: true,
                autoPlay: false,
                maxBufferLength: 10,
                actualLiveTime: true,
                height: 'auto',
                width:  "100%",
                disableVideoTagContextMenu: true,
                watermark: "https://teleonline.org/img/logo_reproductor.png", position: 'top-left',
                watermarkLink: "https://teleonline.org/",
                gaAccount: '',
                gaTrackerName: 'teleonline_ORG_player',
                mediacontrol: {seekbar: "yellow", buttons: "#yellow"},
                plugins: [LevelSelector,ChromecastPlugin],
                    levelSelectorConfig: {
                        title: 'Calidad',
                        labels: {
                            3: 'HD 1080',
                            2: 'HD 720',
                            1: 'SD 404',
                            0: 'SD 360',
                        }
                    },
                    chromecast: {
                          appId: '',
                          media: {
                            title: 'Ver la tele con Chromecast',
                            subtitle: 'Por que ver la tele mola'
                          }
                        },
                });
                player.attachTo(playerElement);
            });
        </script>
