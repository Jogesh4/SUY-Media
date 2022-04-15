@extends('admin.layouts.header')

@section('title', 'dashboard')

@section('content')

<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Manage Order</h4>

              <div class="row">
                 <div class="col-xl-12 col-lg-12">
				 
						<div class="card shadow mb-4">
                               <div class="card-header py-3">
                                    
									<div class="d-flex justify-content-between">
												<!--begin::User-->
												<div class="d-flex flex-column">
													<h6 class="m-0 font-weight-bold ">Product Orders</h6>
												</div>
												<!--end::User-->
												
											</div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class=" pb-2 table-responsive">
									<table class="cart-table table border" width="100%">
                      <thead>
                        <tr>
                          <th>Order ID </th>
                          <th>customer</th>
                          <th>photo</th>
                          <th>product</th>
                          <th>qty</th>
                          <th>status</th>
                          <th>action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>#225801</td>
                          <td>Tim Sebastian</td>
                          <td><img src="managed-seo.svg" width="80" height="80" data-max-width="80" data-max-height="80" alt=""></td>
                          <td>Still Gray Chair</td>
                          <td>61</td>
                          <td><span class="failed">Failed</span></td>
                          <td><a href="#" title=""><i class="far fa-trash-alt"></i></a>&nbsp; <a class="edit" sref="#" title=""><i class="bx bx-pencil"></i></a></td>
                        </tr>
                        <tr>
                          <td>#225833</td>
                          <td>Genelia Jobs</td>
                          <td><img src="managed-seo.svg" width="80" height="80" data-max-width="80" data-max-height="80" alt=""></td>
                          <td>Gold Wooden Chair</td>
                          <td>01</td>
                          <td><span class="paid">paid</span></td>
                          <td><a href="#" title=""><i class="far fa-trash-alt"></i></a>&nbsp; <a class="edit" sref="#" title=""><i class="bx bx-pencil"></i></a></td>
                        </tr>
                        <tr>
                          <td>#225821</td>
                          <td>Tim Sebastian</td>
                          <td><img src="managed-seo.svg" width="80" height="80" data-max-width="80" data-max-height="80" alt=""></td>
                          <td>Pure Wooden chair</td>
                          <td>30</td>
                          <td><span class="pending">pending</span></td>
                          <td><a href="#" title=""><i class="far fa-trash-alt"></i></a>&nbsp; <a class="edit" sref="#" title=""><i class="bx bx-pencil"></i></a></td>
                        </tr>
                        <tr>
                          <td>#225859</td>
                          <td>steam jobs</td>
                          <td><img src="managed-seo.svg" width="80" height="80" data-max-width="80" data-max-height="80" alt=""></td>
                          <td>Still Gray Chair</td>
                          <td>30</td>
                          <td><span class="failed">failed</span></td>
                          <td><a href="#" title=""><i class="far fa-trash-alt"></i></a>&nbsp; <a class="edit" sref="#" title=""><i class="bx bx-pencil"></i></a></td>
                        </tr>
                        <tr>
                          <td>#225801</td>
                          <td>Tim Sebastian</td>
                          <td><img src="managed-seo.svg" width="80" height="80" data-max-width="80" data-max-height="80" alt=""></td>
                          <td>Still Gray Chair</td>
                          <td>61</td>
                          <td><span class="failed">Failed</span></td>
                          <td><a href="#" title=""><i class="far fa-trash-alt"></i></a>&nbsp; <a class="edit" sref="#" title=""><i class="bx bx-pencil"></i></a></td>
                        </tr>
                        <tr>
                          <td>#225833</td>
                          <td>Genelia Jobs</td>
                          <td><img src="managed-seo.svg" width="80" height="80" data-max-width="80" data-max-height="80" alt=""></td>
                          <td>Gold Wooden Chair</td>
                          <td>01</td>
                          <td><span class="paid">paid</span></td>
                          <td><a href="#" title=""><i class="far fa-trash-alt"></i></a>&nbsp; <a class="edit" sref="#" title=""><i class="bx bx-pencil"></i></a></td>
                        </tr>
                        <tr>
                          <td>#225859</td>
                          <td>steam jobs</td>
                          <td><img src="managed-seo.svg" width="80" height="80" data-max-width="80" data-max-height="80" alt=""></td>
                          <td>Still Gray Chair</td>
                          <td>30</td>
                          <td><span class="failed">failed</span></td>
                          <td><a href="#" title=""><i class="far fa-trash-alt"></i></a>&nbsp; <a class="edit" sref="#" title=""><i class="bx bx-pencil"></i></a></td>
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