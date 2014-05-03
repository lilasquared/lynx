<div class="row-fluid">
  <?php foreach ($templates as $template) : ?>
    <div class="col-xs-4 col-md-3">
      <a href="/Worksheet/Edit/<?php echo $template->templateId; ?>" class="thumbnail template">
        <?php echo $template->title; ?>
      </a>
    </div>
  <?php endforeach; ?>
</div>