<form class="form-horizontal" action="/Portal/Save" method="POST">
  <?php foreach($settings as $setting) : ?>
  <div class="form-group">
    <label class="control-label col-xs-2"><?php echo $setting->option; ?>: </label>
    <div class="col-xs-9">
    <?php if ($setting->option == "maxThreads") : ?>
      <input type="number" class="form-control input-lg" name="<?php echo $setting->option;?>" value="<?php echo $setting->value; ?>" min="5">
    <?php else : ?>
      <input type="text" class="form-control input-lg" name="<?php echo $setting->option;?>" value="<?php echo $setting->value; ?>">
    <?php endif; ?>
    </div>
  </div>
  <?php endforeach; ?>
  <div class="form-group">
    <div class="col-xs-4 col-xs-offset-4">
      <button class="btn btn-primary btn-block btn-lg" type="submit">
        <span class="btn-text">Save Settings</span>
        <span class="glyphicon glyphicon-ok"></span>
      </button>
    </div>
  </div>
</form>