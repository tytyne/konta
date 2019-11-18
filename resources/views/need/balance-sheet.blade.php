        @extends('layouts.master')
        <!-- page content -->
        @section('content')
        <div class="right_col" role="main">
          <div class="">
             <div class="page-title">
              <div class="title_left">
                <h3>Transactions</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group row pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    
              <h5>Balance Sheet</h5>
                </div>
                    
            <table class=" table table-bordered">
              <thead class="thead-light">
                <tr>
                 
                  <th scope="col">Account</th>
                <th scope="col">Balance</th>
              
                  
                </tr>
              </thead>
              <tbody>
                <tr>

                  <td></td>
                  <td></td>  

                </tr>


            </tbody>
            </table>
                    
                    <h4 class="pull-right"> TOTAL:_______________</h4>
                  </div>
                    
              </div>
            </div>

              </div>
            </div>
          </div>
       
@endsection