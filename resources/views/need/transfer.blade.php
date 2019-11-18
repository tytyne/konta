     
        @extends('layouts.master')
        <!-- page content -->
        @section('content')
        <div class="right_col" role="main">
       
            <div class="page-title">
              <div class="title_left">
                <h3>Transactions</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                  <div class="col-sm-4">
                  <div class="x_panel">
                  <div class="x_title">
                      <h6>Add Transfer </h6>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                      <form action=" " class="form-horizontal">
                        <br> 
                        <div class="form-group">
                        <label for="last_name" class="col-sm-3 control-label">Account</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                        </div>
                        <br><br>
                          
                        <div class="form-group">
                        <label for="last_name" class="col-sm-3 control-label">Date</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                        <label for="last_name" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                        </div>

                          
                          <br><br>
                        <div class="form-group">
                        <label for="last_name" class="col-sm-3 control-label">Amount</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                        </div>
                          <button id="advanced">Advanced</button>
                           
                      </form>
                      
                       <form  id="advanced_form" action=" " class="form-horizontal">
                        <br> 
                        <div class="form-group">
                        <label for="last_name" class="col-sm-3 control-label">Category</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                        </div>
                        <br><br>
                          
                        <div class="form-group">
                        <label for="last_name" class="col-sm-3 control-label">Tags</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                        <label for="last_name" class="col-sm-3 control-label">Payer</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                        </div>
                        <br><br> 
                        <div class="form-group">
                        <label for="last_name" class="col-sm-3 control-label">Method</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                        </div>
                        <br><br>
                          
                        <div class="form-group">
                        <label for="last_name" class="col-sm-3 control-label">Ref#</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                        </div>
                        <br><br>
        
                        <button type="submit" class="btn btn-info pull-right" >Submit</button>
                    </div>
                  </div>
                </div>
                  
                    <div class="col-sm-8">
                <div class="x_panel">
                  <div class="x_title">
                      <h6>Recent Transfers </h6>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                      
                         <table class="table table-bordered">
                        <thead class="thead-light">
                          <tr>
                            <th>Description</th>
                            <th>Amount</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>John cash</td>
                            <td>100</td>
                          </tr>
                    
                          <tr>
                            <td>July sales</td>
                            <td>3000</td>
                          </tr>
                        </tbody>
                      </table>
                        </div>
                  </div>
                </div> 
    </div>
    </div>
    </div>
    </div>
                @endsection
  