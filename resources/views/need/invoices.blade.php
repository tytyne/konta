        @extends('layouts.master')
        <!-- page content -->
        @section('content')
        <div class="right_col" role="main">
          <div class="">
             <div class="page-title">
              <div class="title_left">
                <h3>Invoices</h3>
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
                     <div class="row">
                      <div class="col-sm-4"></div>
                      <div class="col-sm-2"></div>
                      <div class="col-sm-6">
                         <form action=""> 
                              <div class="row">
                              
                                  <div class="input-group">
                                    <input type="text" class="form-control" placeholder="filter invoice" id="txtSearch"/>
                                    <div class="input-group-btn">
                                      <button class="btn btn-primary" type="submit">
                                        <span class="glyphicon glyphicon-search"></span>
                                      </button>
                                       <button type="button" class="btn btn-primary"> + add invoice</button>
                                    </div>
                                  </div>   
                              </div>
                            </form>
                         
                    </div>
                    </div>    
                </div>
                    
            <table class=" table table-bordered">
              <thead class="thead-light">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Account</th>
                  <th scope="col">Amount</th>
                  <th scope="col">Invoice Date</th>
                <th scope="col">Due Date</th> 
                <th scope="col">Status</th>
                  <th scope="col">Type</th>
                <th scope="col">Manage</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>

                  <td></td>
                  <td></td>  
                    <td></td>
                    <td></td>
                    <td></td>
                  <td></td>
                  <td></td>  
                    <td></td>
            

                </tr>


            </tbody>
            </table>
                  </div>
                    
              </div>
            </div>

              </div>
            </div>
          </div>
       
@endsection