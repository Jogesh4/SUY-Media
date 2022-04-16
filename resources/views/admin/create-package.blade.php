@extends('admin.layouts.header')

@section('title', 'dashboard')

@section('content')

<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Add Package</h4>

              <div class="row">
                 <div class="col-xl-12 col-lg-12">
				 <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                               
                                <div class="card-body">
                                    <div class=" pb-2">
                                        <div class="row">    

    <div class="col-lg-12 col-md-12 mb-4 element-title">
	 <h4 class="mb-4">Add Package</h4>
       <div class="row"> 
	    <div class="col-lg-6 col-md-6 col-12 mb-2">
		<input type="text" class="form-control" placeholder="Price">
		</div>
		<div class="col-lg-6 col-md-6 col-12 mb-2">
		<select class="form-control">
								<option value="">Months / Year</option>
								<option value="">Per Month</option>
								<option value="">One Year</option>
								<option value="">Two Year</option>
								<option value="">Three Year</option>
							  </select>
		</div>
		
		</div>
		<div class="row"> 
	    <div class="col-lg-6 col-md-6 col-12 mb-2">
		<input type="text" class="form-control" placeholder="Price">
		</div>
		<div class="col-lg-6 col-md-6 col-12 mb-2">
		<input type="text" class="form-control" placeholder="Price">
		</div>
		
		</div>
		<div class="row"> 
	    <div class="col-lg-6 col-md-6 col-12 mb-2">
		<input type="text" class="form-control" placeholder="Price">
		</div>
		<div class="col-lg-6 col-md-6 col-12 mb-2">
		<input type="text" class="form-control" placeholder="Price">
		</div>
		
		</div>
		 
    </div>

    

<div class="d-flex justify-content-end">
													<a href="#" class="add-btn" data-bs-toggle="modal" data-bs-target="">Add</a>
												</div>
</div>          
                               
                            </div>
                        </div>
                        <!-- Area -->
                       

                       
                    </div>
						<div class="card shadow mb-4">
                               <div class="card-header py-3">
                                    
									<div class="d-flex justify-content-between">
												<!--begin::User-->
												<div class="d-flex flex-column">
													<h6 class="m-0 font-weight-bold ">Category List</h6>
												</div>
												<!--end::User-->
												
											</div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class=" pb-2 table-responsive">
									<table class="table">
                                  <thead>
                                    <tr>
									 <th scope="col">S.no</th>
                                    <th scope="col">Name</th>
                                    <th scope="col" class="text-end">Action</th>
									<th scope="col" class="text-end">Action</th>
                                    </tr>
                                  </thead>

                                  <tbody>
                                  <tr>
								   <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">1</label>
              </div>
            </td>
                                  <td>David Andrew</td>
                                  <td class="text-end"><a class="edit" href="#"><i class="bx bx-edit"></i></a></td>
								  <td class="text-end"><a class="edit" href="#"><i class=" bx bx-trash"></i></a></td>
                                  </tr>  
<tr>
								   <td>
              <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                  <label class="custom-control-label" for="customCheck1">2</label>
              </div>
            </td>
                                  <td>David Andrew</td>
                                  <td class="text-end"><a class="edit" href="#"><i class="bx bx-edit"></i></a></td>
								  <td class="text-end"><a class="edit" href="#"><i class=" bx bx-trash"></i></a></td>
                                  </tr>


                                  </tbody>                                        
                                </table>
                                       
                                   
                                    
                               
                            </div>
                        </div>
                        <!-- Area -->
                       

                       
                    </div>
					
					
</div>
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                  © 2022
                </div>
                
              </div>
            </footer>
            <!-- / Footer -->
          </div>

@endsection
