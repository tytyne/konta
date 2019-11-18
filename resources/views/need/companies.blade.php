
        @extends('layouts.master')
        <!-- page content -->
        @section('content')
        <div class="right_col" role="main">
          <div class="">
             <div class="page-title">
              <div class="title_left">
                <h3>Companies</h3>
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
                    
                      <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModalNorm">
                        Add new Company
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" 
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <button type="button" class="close" 
                                       data-dismiss="modal">
                                           <span aria-hidden="true">&times;</span>
                                           <span class="sr-only">Close</span>
                                    </button>
                                   
                                </div>

                                <!-- Modal Body -->
                                <div class="modal-body">

                                    <form role="form">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Add New Company</label>
                                          <input type="email" class="form-control"
                                          id="newcompany" placeholder="Enter company"/>
                                      </div>
                                    </form>


                                </div>

                                <!-- Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default"
                                            data-dismiss="modal">
                                                Close
                                    </button>
                                    <button type="submit" class="btn btn-primary"   data-dismiss="modal" >Submit</button>
                                   
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   

          <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Logo</th>
                  <th scope="col">Company Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Phone</th>
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
  