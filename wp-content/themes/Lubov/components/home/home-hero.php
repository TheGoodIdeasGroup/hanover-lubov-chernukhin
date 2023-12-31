<?php
$videoMp4 = get_field('video_mp4');
$videoWebm = get_field('video_webm');
$title = get_field('hero_title');
$heroImg = get_field('home_hero_image');
$subTitle = get_field('sub_title');

$videoEmbedLink = get_field('video_embed_link');
?>

<section class="hero">
    <div class="hero-inner">
      <div class="hero-content ">
        <?php if($videoMp4 || $videoWebm): ?>
        <div class="hero-video">
          <video autoplay muted loop playsinline width="100%" height="auto">
            <?php if($videoMp4): ?>
            <source src="<?php echo $videoMp4['url']; ?>" type="video/mp4">
            <?php endif; ?>
            <?php if($videoWebm): ?>
            <source src="<?php echo $videoWebm['url']; ?>" type="video/webm">
            <?php endif; ?>
            Your browser does not support the video tag.
          </video>
        </div>
        <?php else: ?>
          <div class="hero-img" style="background-image:url(<?php echo $heroImg['url'] ?>)">
          </div>
        <?php endif; ?>
        <div class="hero-title content-bounds">
          <div class="hero-title-inner">
            <h1 class="mb-5"><?php echo $title; ?></h1>
            <?php echo $subTitle; ?>
          </div>
        </div>
      </div>
    </div>
  </section>