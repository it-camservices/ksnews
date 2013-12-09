<div class="row">
  <div class="col-sm-12">
  <div class="well well-sm">
  <ul class="nav nav-pills nav-justified">
  <li class="active"><a href="#home" data-toggle="tab"> Normal Module <span class="badge pull-right">5</span></a></li>
  <li><a href="#profile" data-toggle="tab"> Fip Module <span class="badge pull-right">1</span></a></li>
  <li><a href="#messages" data-toggle="tab"> According <span class="badge pull-right">2</span></a></li>
</ul>  </div> 
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="home">      
    <div class="well well-sm">
    <form class="form-horizontal" role="form" action="" method="get">
      <div class="form-group">
        <label class="col-sm-3 control-label" for="ca-name">Module's Name</label>
        <div class="col-sm-9"><input id="ca-name" name="ca-name" class="form-control" type="text" placeholder="Category's Name" required></div>
      </div>
      <div class="form-group" id="vm1">
        <div class="col-sm-3 control-label">
          <select id="category" name="category"  multiple="multiple" data-bind="selectedOptions: selectedItems, multiselect: multiSelectInitOptions">
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
             <textarea  class="form-control" rows="1" type="text" data-bind="text: ko.toJSON(selectedItems())" /></textarea>                   
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-3 control-label" for="description">Description</label>
        <div class="col-sm-9"><textarea id="description" name="description" class="form-control" rows="4" type="text" placeholder="description" required ></textarea></div>
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
  </div>
  <div class="tab-pane fade" id="profile">
      <div class="well well-sm">
        <form class="form-horizontal" role="form" action="" method="get">
          <div class="form-group">
            <label class="col-sm-3 control-label" for="ca-name">Module's Name</label>
            <div class="col-sm-9"><input id="ca-name" name="ca-name" class="form-control" type="text" placeholder="Category's Name" required></div>
          </div>
      <div class="form-group" id="vm2">
        <div class="col-sm-3 control-label">
          <select id="category" name="category" multiple="multiple" data-bind="selectedOptions: selectedItems, multiselect: multiSelectInitOptions">
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
             <textarea  class="form-control" rows="1" type="text" data-bind="text: ko.toJSON(selectedItems())" /></textarea>                   
        </div>
      </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="description">Front</label>
            <div class="col-sm-9"><textarea id="description" name="description" class="form-control" rows="3" type="text" placeholder="description" required ></textarea></div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="description">Back</label>
            <div class="col-sm-9"><textarea id="description" name="description" class="form-control" rows="3" type="text" placeholder="description" required ></textarea></div>
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
  </div>
  <div class="tab-pane fade" id="messages">
     <div class="well well-sm">
        <form class="form-horizontal" role="form" action="" method="get">
          <div class="form-group">
            <label class="col-sm-3 control-label" for="Cate">Select Category</label>
            <div class="col-sm-9">
                  <select class="form-control" name="Cate" required>
                    <option value="">Select Category</option>
                    <option value="1">Nation News</option>
                    <option value="2">International News</option>
                    <option value="3">Art and Entertaiment</option>
                    <option value="4">Star</option>
                  </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="Cate">Call Article Type</label>
            <div class="col-sm-9">
                  <select class="form-control" name="art-type">
                    <option value="0">Normal</option>
                    <option value="1">Random</option>
                  </select>
            </div>
          </div>
    <div class="form-group">
        <label class="col-sm-3 control-label" for="ca-name">Number Of Article</label>
        <div class="col-sm-9"><input id="ca-name" name="ca-name" class="form-control" type="number" pattern="[0-9]*" placeholder="Use Only number 0-9" required></div>
      </div>
            <div class="form-group" id="vm3">
        <div class="col-sm-3 control-label">
          <select  id="category" name="category"  multiple="multiple" data-bind="selectedOptions: selectedItems, multiselect: multiSelectInitOptions">
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
             <textarea  class="form-control" rows="1" type="text" data-bind="text: ko.toJSON(selectedItems())" /></textarea>                   
        </div>
      </div> 
          <div class="form-group">
            <label class="col-sm-3 control-label" for="description">Description</label>
            <div class="col-sm-9"><textarea id="description" name="description" class="form-control" rows="3" type="text" placeholder="description" required ></textarea></div>
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
  </div>
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
    <ul class="pagination">
      <li class="disabled"><a href="#">&laquo;</a></li>
      <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
      <li><a href="#">&raquo;</a></li>
    </ul>
  </div>
</div>