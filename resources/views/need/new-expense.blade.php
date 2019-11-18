
        @extends('layouts.master')
        <!-- page content -->
        @section('content')
        <div class="right_col" role="main">
          <div class="">
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
                      <h6>Add Expense </h6>
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
                      <h6>Recent Expenses </h6>
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
          </div>
      @endsection

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!--jquery link -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>   
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
