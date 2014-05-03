<div class="row">
  <div class="col-md-2">
    <div id="problemTabs" class="btn-group-vertical">
      <button type="button" class="btn btn-default" data-problemtype="1" data-toggle="modal" data-target="#problemModal">Addition</button>
      <button type="button" class="btn btn-default">Multiplication</button>
      <button type="button" class="btn btn-default">Addition</button>
      <button type="button" class="btn btn-default">Addition</button>
      <button type="button" class="btn btn-default">Addition</button>
      <button type="button" class="btn btn-default">Addition</button>
      <button type="button" class="btn btn-default">Addition</button>
      <button type="button" class="btn btn-default">Addition</button>
      <button type="button" class="btn btn-default">Addition</button>
    </div>
  </div>
  <div class="col-md-10">
    <!-- <input type="text" class="form-control" placeholder="Worksheet Title"><br /> -->
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Category</th>
          <th>Option 1</th>
          <th>Option 2</th>
          <th>Option 3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Addition</td>
          <td>Yes</td>
          <td>No</td>
          <td>Maybe</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<div class="row">
  <div class="col-md-2 col-md-offset-10">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSaveWorksheet">Save Worksheet</button>
  </div>
</div>

<div class="modal fade" id="problemModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Customize This Problem</h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add to Worksheet</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="modalSaveWorksheet">
  <div class="modal-dialog">
    <div class="modal-content">
      <form role="form" action="Worksheet/Save" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Save The Worksheet</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input type="text" name="title" class="form-control input-lg" placeholder="Worksheet Title" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->