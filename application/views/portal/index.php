<div class="row">
  <div class="col-sm-3">
    <button type="button" class="btn btn-block btn-lg btn-primary"
      data-toggle="modal" data-target="#modalCreateTemplate">
      <span class="glyphicon glyphicon-plus" ></span> New Template
    </button>
  </div>
  <div class="col-sm-3">
    <a class="btn btn-block btn-lg btn-info" href="Template/View">
      <span class="glyphicon glyphicon-th-list" ></span> View Templates
    </a>
  </div>
</div>

<?php $this->load->view('templates/modal', $modalCreateTemplate); ?>