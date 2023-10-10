
<div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
  <div class="carousel-inner">
    <?php $i = 0;
    foreach ($carousel as $key => $value) {
    ?>
      <?php if ($value->is_aktif == 1) { ?>
        <div class="item <?php if ($i == 0) echo 'active'; ?>">
          <img src="<?php echo $this->config->item("server") ?>carousel/media/<?php echo $value->foto; ?>">
        </div>
      <?php } ?>
      <?php $i++; ?>
    <?php } ?>
  </div>
</div>
</div>