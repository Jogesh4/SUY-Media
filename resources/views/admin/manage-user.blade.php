@extends('admin.layouts.header')

@section('title', 'dashboard')

@section('content')
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Manage User</h4>

              <div class="row">
                 <div class="col-xl-12 col-lg-12">
				 
						<div class="card shadow mb-4">
                               <div class="card-header py-3">
                                    
									<div class="table-title mb-4">
                <div class="row">
                    <div class="col-sm-5">
                        <h4>User Management</h4>
                    </div>
                    <div class="col-sm-7 text-end">
                        <a href="#" class="btn btn-secondary"><i class="fas fa-plus"></i> <span>Add New User</span></a>
                        <a href="#" class="btn btn-secondary"><i class="far fa-file"></i> <span>Export to Excel</span></a>						
                    </div>
                </div>
            </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class=" pb-2 table-responsive">
									<table class="user-list table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>						
                        <th>Date Created</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="#"><img src="managed-seo.svg" class="avatar" alt="Avatar"> Michael Holz</a></td>
                        <td>04/10/2013</td>                        
                        <td>Admin</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <a href="#" class="edit" title="" data-toggle="tooltip" data-original-title="Settings"><i class="bx bx-cog"></i></a>&nbsp;
                            <a href="#" class="edit" title="" data-toggle="tooltip" data-original-title="Delete"><i class="bx bx-x"></i></a>
                         </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><a href="#"><img src="managed-seo.svg" class="avatar" alt="Avatar"> Paula Wilson</a></td>
                        <td>05/08/2014</td>                       
                        <td>Publisher</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                            <a href="#" class="edit" title="" data-toggle="tooltip" data-original-title="Settings"><i class="bx bx-cog"></i></a>&nbsp;
                            <a href="#" class="edit" title="" data-toggle="tooltip" data-original-title="Delete"><i class="bx bx-x"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><a href="#"><img src="managed-seo.svg" class="avatar" alt="Avatar"> Antonio Moreno</a></td>
                        <td>11/05/2015</td>
                        <td>Publisher</td>
                        <td><span class="badge bg-label-danger me-1">Suspended</span></td>                        
                        <td>
                           <a href="#" class="edit" title="" data-toggle="tooltip" data-original-title="Settings"><i class="bx bx-cog"></i></a>&nbsp;
                            <a href="#" class="edit" title="" data-toggle="tooltip" data-original-title="Delete"><i class="bx bx-x"></i></a>
                        </td>                        
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><a href="#"><img src="managed-seo.svg" class="avatar" alt="Avatar"> Mary Saveley</a></td>
                        <td>06/09/2016</td>
                        <td>Reviewer</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                           <a href="#" class="edit" title="" data-toggle="tooltip" data-original-title="Settings"><i class="bx bx-cog"></i></a>&nbsp;
                            <a href="#" class="edit" title="" data-toggle="tooltip" data-original-title="Delete"><i class="bx bx-x"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><a href="#"><img src="managed-seo.svg" class="avatar" alt="Avatar"> Martin Sommer</a></td>
                        <td>12/08/2017</td>                        
                        <td>Moderator</td>
                        <td><span class="badge bg-label-warning me-1">Inactive</span></td>
                        <td>
                            <a href="#" class="edit" title="" data-toggle="tooltip" data-original-title="Settings"><i class="bx bx-cog"></i></a>&nbsp;
                            <a href="#" class="edit" title="" data-toggle="tooltip" data-original-title="Delete"><i class="bx bx-x"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination mt-3">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
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