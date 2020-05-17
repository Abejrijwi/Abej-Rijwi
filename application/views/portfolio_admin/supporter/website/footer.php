</div>
<!--Main End-->
<!--Ajax Portfolio Container Start-->
<div class="ajax-portfolio-popup" data-simplebar>
    <span class="ajax-loader"></span>
    <div class="navigation-wrap">
        <span class="popup-close"><i class="fas fa-times-circle"></i></span>
    </div>
    <div class="content-wrap">
        <div class="popup-content"></div>
    </div>
</div>
<!--Ajax Portfolio Container End-->
</div>
<!--Jquery JS-->
<script src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
<!--Plugins JS-->
<script src="<?php echo base_url('public/js/plugins.min.js'); ?>"></script>
<!--Google Map Api-->
<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxjdAabKFsk7CHhYq3VNKkwRyonhLHWDo"></script>-->
<!--Site Main JS-->
<script src="<?php echo base_url('public/js/main.js'); ?>"></script>

<script src="<?php echo base_url('public/js/main-demo.js'); ?>"></script>

<script>
    $('#video-container').YTPlayer({
        videoURL: 'https://youtu.be/spDj54kf-vY',
        containment: '#video-container',
        autoPlay: true,
        showControls: false,
        loop: true,
        addRaster: true
    });
</script>
</body>
</html>