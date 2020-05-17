<!--Banner Section Start-->
<section id="home" class="banner-section pt-page" style="background-image: url('img/background/home-bg.jpg')">

    <div id="video-container"></div>

    <div class="banner-content">
        <!--Banner Text-->
        <h1 class="mb-20"><?php echo $_SESSION['logged_in']['first_name'] ?> <span><?php echo $_SESSION['logged_in']['last_name'] ?></span></h1>

        <!--Animated Text-->
        <p class="cd-headline clip is-full-width">
            <span>I am a </span>
            <span class="cd-words-wrapper">
                <b class="is-visible" style="text-transform: capitalize;"><?php echo $query->employee_designation ?></b>
            </span>
        </p>

    </div>

</section>
<!--Banner Section End-->