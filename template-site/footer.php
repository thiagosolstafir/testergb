<script src="<?php echo $mainFolder; ?>/includes/js/app.min.js"></script>

<script src="<?php echo $mainFolder; ?>/includes/lib/picturefill.min.js"></script>
<script src="<?php echo $mainFolder; ?>/includes/lib/lightgallery-all.min.js"></script>
<script src="<?php echo $mainFolder; ?>/includes/lib/jquery.mousewheel.min.js"></script>

<script>
  $(function () {
    $('#galeria .grid').lightGallery({
      thumbnail: false,
      download: false,
      counter: false,
      zoom: false,
      share: false,
      fullScreen: false,
      autoplay: false,
      controls: false
    });

  })
</script>
</body>
</html>
