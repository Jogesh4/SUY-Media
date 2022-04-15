@extends('user.layouts.header')

@section('title', 'dashboard')

@section('content')

<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> My Orders</h4>

              <div class="row">
                 <div class="col-xl-12 col-lg-12">
 <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ORDER ID</th>
                        <th>CUSTOMER</th>
                        <th>PHOTO</th>
						<th>PRODUCT</th>
						<th>QTY</th>
                        <th>STATUS</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td> <strong>Angular Project</strong></td>
                        <td>Albert Cook</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                              <img src="../images/avatars/5.png" alt="Avatar" class="rounded-circle">
                            </li>
                            
                          </ul>
                        </td>
						<td>Gray</td>
						<td>1</td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                       
                      </tr>
                      <tr>
                        <td><strong>React Project</strong></td>
                        <td>Barry Hunter</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                              <img src="../images/avatars/5.png" alt="Avatar" class="rounded-circle">
                            </li>
                            
                          </ul>
                        </td>
						<td>Gray</td>
						<td>1</td>
                        <td><span class="badge bg-label-success me-1">Completed</span></td>
                       
                      </tr>
                      <tr>
                        <td><strong>VueJs Project</strong></td>
                        <td>Trevor Baker</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                              <img src="../images/avatars/5.png" alt="Avatar" class="rounded-circle">
                            </li>
                           
                          </ul>
                        </td>
						<td>Gray</td>
						<td>1</td>
                        <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                      
                      </tr>
                      <tr>
                        <td><strong>Bootstrap Project</strong>
                        </td>
                        <td>Jerry Milton</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" title="" data-bs-original-title="Lilian Fuller">
                              <img src="../images/avatars/5.png" alt="Avatar" class="rounded-circle">
                            </li>
                          </ul>
                        </td>
						<td>Gray</td>
						<td>1</td>
                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                       
                      </tr>
                    </tbody>
                  </table>
                </div>
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