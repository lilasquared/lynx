<div class="modal fade" id="<?php echo $modalId; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" action="<?php echo $action; ?>" method="<?php echo $method; ?>">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><?php echo $title; ?></h4>
        </div>
        <div class="modal-body">
          <?php foreach ($inputs as $key => $input) : ?>
            <input 
              class="form-control input-lg"
              name="<?php echo $input['name']; ?>" type="<?php echo $input['type']; ?>"
              <?php echo $input['required']; ?> placeholder="<?php echo $input['placeholder']; ?>">
          <?php endforeach; ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary"><?php echo $submitText; ?></button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->