
@extends('layouts.shop')
@section('content')
    <section class="mt-5 container ">
        <!-- Page Content Goes Here -->

        <h1 class="mb-6 display-5 fw-bold text-center">Cart</h1>

        <div class="row g-4 g-md-8">
            <!-- Cart Items -->
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="d-none d-sm-table-cell"></th>
                                <th class="ps-sm-3">Details</th>
                                <th>Qty</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach(Cart::content() as $row)
                                <tr>
                                    <!-- image -->
                                        <td class="d-none d-sm-table-cell">
                                            <picture class="d-block bg-light p-3 f-w-20">
                                                <img class="img-fluid" src="{{$row->options->img}}" alt="">
                                            </picture>
                                        </td>
                                    <!-- image -->
                                    
                                    <!-- Details -->
                                        <td>
                                            <div class="ps-sm-3">
                                                <h6 class="mb-2 fw-bolder">
                                                    {{$row->name}}
                                                </h6>
                                                <small class="d-block text-muted">{{$row->options->has('size') ? 'Size: '.$row->options->size : ''}} {{$row->options->has('color') ? 'Color: '.$row->options->color : ''}}</small>
                                            </div>
                                        </td>
                                    <!-- Details -->
                                    
                                    <!-- Qty -->
                                        <td>
                                            <div class="px-3">
                                                <span class="small text-muted mt-1">{{$row->qty}}</span>
                                            </div>
                                        </td>
                                    <!-- /Qty -->
                    
                                    <!-- Actions -->
                                        <td class="f-h-0">
                                            <div class="d-flex justify-content-between flex-column align-items-end h-100">
                                                <a href="{{route('shop.remove_product',['id'=>$row->rowId])}}" class="link-danger text-decoration-none"><i class="ri-close-circle-line ri-lg"></i></a>
                                                <p class="fw-bolder mt-3 m-sm-0">${{round($row->total,2)}}</p>
                                            </div>
                                        </td>
                                    <!-- /Actions -->
                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /Cart Items -->
            <div class="col-12 col-lg-6 col-xl-5">
                <div class="bg-dark p-4 p-md-5 text-white">
                    <h3 class="fs-3 fw-bold m-0 text-center">Order Summary</h3>
                    <div class="py-3 border-bottom-white-opacity">
                        <div class="d-flex justify-content-between align-items-center mb-2 flex-column flex-sm-row">
                            <p class="m-0 fw-bolder fs-6">Subtotal</p>
                            <p class="m-0 fs-6 fw-bolder">${{Cart::subtotal()}}</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row mt-3 m-sm-0">
                            <p class="m-0 fw-bolder fs-6">Shipping</p>
                            <span class="text-white opacity-75 small">Will be set at checkout</span>
                        </div>
                    </div>
                    <div class="py-3 border-bottom-white-opacity">
                        <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row">
                            <div>
                                <p class="m-0 fs-5 fw-bold">Grand Total</p>
                                <span class="text-white opacity-75 small">Inc ${{Cart::tax()}} sales tax</span>
                            </div>
                            <p class="mt-3 m-sm-0 fs-5 fw-bold">${{Cart::total();}}</p>
                        </div>
                    </div>
                
                    <!-- Coupon Code-->
                    <button class="btn btn-link p-0 mt-2 text-white fw-bolder text-decoration-none" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                        aria-controls="collapseExample">
                        Have a coupon code?
                    </button>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body bg-transparent p-0">
                            <div class="input-group mb-0 mt-2">
                                <input type="text" class="form-control border-0" placeholder="Enter coupon code">
                                <button
                                    class="btn btn-white text-dark px-3 btn-sm border-0 d-flex justify-content-center align-items-center"><i
                                        class="ri-checkbox-circle-line ri-lg"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- / Coupon Code-->
                
                    <!-- Checkout Button-->
                    <a href="{{route('shop.checkout')}}" class="btn btn-white w-100 text-center mt-3"
                        role="button"><i class="ri-secure-payment-line align-bottom"></i> Proceed to checkout</a>
                    <a href="{{route('shop.checkout')}}" class="btn btn-orange w-100 text-center mt-3"
                        role="button"><i class="ri-paypal-line align-bottom"></i> Checkout with PayPal</a>
                    <!-- Checkout Button-->
                </div>
                
                <!-- Payment Icons-->
                <ul class="list-unstyled d-flex justify-content-center mt-3">
                    <li class="mx-1 border d-flex align-items-center p-2"><i class="pi pi-paypal"></i></li>
                    <li class="mx-1 border d-flex align-items-center p-2"><i class="pi pi-mastercard"></i></li>
                    <li class="mx-1 border d-flex align-items-center p-2"><i class="pi pi-american-express"></i></li>
                    <li class="mx-1 border d-flex align-items-center p-2"><i class="pi pi-visa"></i></li>
                </ul>
                <!-- / Payment Icons-->            </div>
            <!-- Cart Summary -->

            <!-- /Cart Summary -->
        </div>

        <!-- /Page Content -->
    </section>
@endsection    