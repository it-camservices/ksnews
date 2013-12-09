<div class="row">
  <div class="col-sm-12"> 
     <div class="well well-sm">
        <form class="form-horizontal" role="form" action="" method="get">
          <div class="form-group">
            <label class="col-sm-3 control-label" for="Cate">Hot News Tittle</label>
            <div class="col-sm-9">
                  <input id="hotnews-tille" name="hotnews-tille" class="form-control" type="text" placeholder="Hot News Title " required>
            </div>
          </div>
      <div class="form-group" id="vm1">
        <div class="col-sm-3 control-label">
          <select id="category" name="category"  multiple="multiple" data-bind="selectedOptions: selectedItems, multiselect: multiSelectInitOptions" required>
              <option value="cheese">Cheese</option>
              <option value="tomatoes">Tomatoes</option>
              <option value="mozarella">Mozzarella</option>
              <option value="mushrooms">Mushrooms</option>
              <option value="pepperoni">Pepperoni</option>
              <option value="onions">Onions</option>
              <option value="onions">Onions</option>
              <option value="onions">Onions</option>
              <option value="onions">Onions</option>
              <option value="onions">Onions</option>
              <option value="onions">Onions</option>
              <option value="onions">Onions</option>
          </select>
        </div>
        <div class="col-sm-9">           
             <textarea  class="form-control" rows="1" type="text" data-bind="text: ko.toJSON(selectedItems())"/></textarea>                   
        </div>
      </div>

      <div class="form-group">
            <label class="col-sm-3 control-label" for="description">Description</label>
            <div class="col-sm-9"><textarea id="description" name="description" class="form-control" rows="3" type="text" placeholder="description" required ></textarea></div>
      </div> 

          <div class="form-group">
            <label class="col-sm-3 control-label" for="alert">Select Style</label>
            <div class="col-sm-9">
              <select class="form-control" name="alert" required>
                <option value="alert-success">alert-success</option>
                <option value="alert-info">alert-info</option>
                <option value="alert-warning">alert-warning</option>
                <option value="alert-danger">alert-danger</option>
              </select>
            </div>
          </div> 
      <div class="form-group">
      <label class="col-sm-3 control-label" for="p-menu">Url</label>
      <div class="col-sm-9">
      <div class="col-sm-6">
       <input id="url" name="url" class="form-control" type="url" placeholder="url parth">
      </div>
      <div class="col-sm-3">
        <label><input type="checkbox" value="fa-spin"> Button Close</label>
      </div>
      <div class="col-sm-3">
      <label><input type="checkbox" value="fa-spin"> Fade Out</label>
      </div>

      </div>
    </div>

            <div class="form-group">
      <label class="col-sm-3 control-label" for="p-menu">icon</label>
      <div class="col-sm-9">
      <div class="col-sm-3 font-awe">
        <select class="form-control" name="p-menu">
          <option value="">Select Icon</option>
          <option value="fa-glass">&#xf000;</option>
          <option value="fa-heart">&#xf004;</option>
          <option value="fa-film">&#xf008;</option>
          <option value="fa-check">&#xf00c;</option>
          <option value="fa-power-off">&#xf011;</option>
        </select>
      </div>
      <div class="col-sm-3 font-awe">
        <select class="form-control" name="p-menu">
          <option value="">Icon Size</option>
          <option value="fa-lg" style="font-size:150%;">&#xf004;</option>
          <option value="fa-2x" style="font-size:200%;">&#xf004;</option>
          <option value="fa-3x" style="font-size:300%;">&#xf004;</option>
          <option value="fa-4x" style="font-size:400%;">&#xf004;</option>
          <option value="fa-5x" style="font-size:500%;">&#xf004;</option>
        </select>
      </div>
      <div class="col-sm-3 font-awe">
        <label><input type="checkbox" value="fa-spin"> Animation</label>
      </div>
      <div class="col-sm-3">
        <label><input type="checkbox" value="fa-border"> Border </label>
      </div>
      </div>
    </div>
          <div class="form-group">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
              <button class="btn btn-primary" type="submit"><i class="fa fa-check-square"></i> &nbsp;Save</button>
              <button class="btn btn-default" type="reset"><i class="fa fa-refresh"></i> &nbsp; Reset</button>
            </div>
          </div>               
        </form>
     </div>
    <div class="row">
      <div class="table-responsive">
        <table class="table table-hover table-bordered">
        <tr class="active"><th>No</th><th>Name</th><th>Type</th><th>Category</th><th>Edit</th><th>Del</th></tr>
        <tr class="success"><td>1</td><td>ព័ត៌មានជាតិ</td><td>Root</td><td>20-12-2013</td><td><a href=""><i class="fa fa-pencil-square-o fa-lg"></i></a></td><td><a href=""><i class="fa fa-times-circle fa-lg"></i></a></td></tr>
        <tr><td>2</td><td>ព័ត៌មានអន្តរជាតិ</td><td>Root</td><td>Root</td><td><a href=""><i class="fa fa-pencil-square-o fa-lg"></i></a></td><td><a href=""><i class="fa fa-times-circle fa-lg"></i></a></td></tr>
        <tr class="success"><td>3</td><td>សិល្បៈ និង​កំសាន្ដ</td><td>Root</td><td>20-12-2013</td><td><a href=""><i class="fa fa-pencil-square-o fa-lg"></i></a></td><td><a href=""><i class="fa fa-times-circle fa-lg"></i></a></td></tr>
        <tr><td>4</td><td>តារា</td><td>Sub</td><td>20-12-2013</td><td><a href=""><i class="fa fa-pencil-square-o fa-lg"></i></a></td><td><a href=""><i class="fa fa-times-circle fa-lg"></i></a></td></tr>
        <tr class="success"><td>5</td><td>កំណាព្យ</td><td>Sub</td><td>20-12-2013</td><td><a href=""><i class="fa fa-pencil-square-o fa-lg"></i></a></td><td><a href=""><i class="fa fa-times-circle fa-lg"></i></a></td></tr>
        </table>
      </div>
  </div>
  </div>
</div>