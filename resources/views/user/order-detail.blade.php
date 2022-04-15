@extends('user.layouts.header')

@section('title', 'dashboard')

@section('content')
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Order Details</h4>

              <div class="row">
                 <div class="col-xl-12 col-lg-12">
 <div class="card card-1">
        <div class="card-header bg-white">
            <div class="media flex-sm-row flex-column-reverse justify-content-between ">
                <div class="col my-auto">
                    <h4 class="mb-0">Thanks for your Order,<span class="change-color">Anjali</span> !</h4>
                </div>
                
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-between mb-3">
                <div class="col-auto">
                    <h6 class="color-1 mb-0 change-color">Receipt</h6>
                </div>
                <div class="col-auto "> <small>Receipt Voucher : 1KAU9-84UIL</small> </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card card-2">
                        <div class="card-body">
                            <div class="media">
                                <div class="sq align-self-center "> <img class="img-fluid my-auto align-self-center mr-2 mr-md-4 pl-0 p-0 m-0" src="../images/managed-seo.svg" width="135" height="135"> </div>
                                <div class="media-body my-auto text-end">
                                    <div class="row my-auto flex-column flex-md-row">
                                        <div class="col my-auto">
                                            <h6 class="mb-0"> Jack Jutti</h6>
                                        </div>
                                        <div class="col-auto my-auto text-end"> <small>Golden Blue </small></div>
                                        <div class="col my-auto"> <small>Size : M</small></div>
                                        <div class="col my-auto"> <small>Qty : 1</small></div>
                                        <div class="col my-auto">
                                            <h6 class="mb-0">600.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-3 ">
                            <div class="row">
                                <div class="col-md-3 mb-3"> <small> Track Order <span><i class=" ml-2 fa fa-refresh" aria-hidden="true"></i></span></small> </div>
                                <div class="col mt-auto">
                                    <div class="progress my-auto">
                                        <div class="progress-bar progress-bar rounded" style="width: 62%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="media row justify-content-between ">
                                        <div class="col-auto text-end"><span> <small class="text-end mr-sm-2"></small> <i class="fa fa-circle active"></i> </span></div>
                                        <div class="col-auto"> <span> <small class="text-end mr-sm-2">Out for delivary</small><i class="fa fa-circle active"></i></span></div>
                                        <div class="col-auto flex-col-auto"><small class="text-end mr-sm-2">Delivered</small><span> <i class="fa fa-circle"></i></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row mt-4">
                <div class="col">
                    <div class="row justify-content-between">
                        <div class="col-auto">
                            <p class="mb-1 text-dark"><b>Order Details</b></p>
                        </div>
                        <div class="flex-sm-col text-end col">
                            <p class="mb-1"><b>Total</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                            <p class="mb-1">4,835</p>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="flex-sm-col text-end col">
                            <p class="mb-1"> <b>Discount</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                            <p class="mb-1">150</p>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="flex-sm-col text-end col">
                            <p class="mb-1"><b>GST 18%</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                            <p class="mb-1">843</p>
                        </div>
                    </div>
                    <div class="row justify-content-between">
                        <div class="flex-sm-col text-end col">
                            <p class="mb-1"><b>Delivery Charges</b></p>
                        </div>
                        <div class="flex-sm-col col-auto">
                            <p class="mb-1">Free</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row invoice ">
                <div class="col">
                    <p class="mb-1"> Invoice Number : 788152</p>
                    <p class="mb-1">Invoice Date : 22 Jan,2022</p>
                    <p class="mb-1">Recepits Voucher:18KU-62IIK</p>
                </div>
            </div>
        </div>
		<hr>
        <div class="card-footer">
            <div class="jumbotron-fluid">
                <div class="row justify-content-between ">
                    <div class="col-auto my-auto ">
                        <h2 class="mb-0 font-weight-bold text-dark">TOTAL PAID</h2>
                    </div>
                    <div class="col-auto my-auto ml-auto">
                        <h1 class="display-3 text-dark"> 5,528</h1>
                    </div>
                </div>
                <div class="row mb-3 mt-3 mt-md-0">
                    <div class="col-auto border-line"> <small class="text-white">PAN:AA02hDW7E</small></div>
                    <div class="col-auto border-line"> <small class="text-white">CIN:UMMC20PTC </small></div>
                    <div class="col-auto "><small class="text-white">GSTN:268FD07EXX </small> </div>
                </div>
            </div>
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