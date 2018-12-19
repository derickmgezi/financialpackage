<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>Sticky Footer Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        {{ Html::style('css/bootstrap.min.css') }}

    </head>

    <body>

        <!-- Begin page content -->
        <main role="main" class="container">

            <div class="card-group row mt-5">
                <div class="col-12 mb-4">
                    <a href="{{ URL::to('/') }}" class="btn btn btn-dark">
                        Home
                    </a>
                    <a href="{{ URL::to('purchase') }}" class="btn btn btn-dark disabled">
                        Purchase Module
                    </a>
                </div>
                <div class="col-4 mb-4">
                    <a href="{{ URL::to('vendor') }}" style="text-decoration: none;color: inherit">
                        <div class="card bg-light w-100 h-100 d-inline-block">
                            <div class="card-header">Vendor/Supplier List</div>
                            <div class="card-body">
                                <h5 class="card-title">Description</h5>
                                <p class="card-text">Manage new or existing Vendors/supplier details</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-4">
                    <a href="{{ URL::to('purchaserequisition') }}" style="text-decoration: none;color: inherit">
                        <div class="card text-white bg-secondary w-100 h-100 d-inline-block">
                            <div class="card-header">Purchase Requisition</div>
                            <div class="card-body">
                                <h5 class="card-title">Description</h5>
                                <p class="card-text">Create a request for required items or services</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-4">
                    <a href="#" style="text-decoration: none;color: inherit">
                        <div class="card bg-light w-100 h-100 d-inline-block">
                            <div class="card-header">Purchase Order</div>
                            <div class="card-body">
                                <h5 class="card-title">Description</h5>
                                <p class="card-text">Generate reports of purchase through selected supplier</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-4">
                    <a href="#" style="text-decoration: none;color: inherit">
                        <div class="card text-white bg-secondary w-100 h-100 d-inline-block">
                            <div class="card-header">Goods Receive Note</div>
                            <div class="card-body">
                                <h5 class="card-title">Description</h5>
                                <p class="card-text">Confirm if all goods have been received before payment is issued.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-4">
                    <a href="#" style="text-decoration: none;color: inherit">
                        <div class="card bg-light w-100 h-100 d-inline-block">
                            <div class="card-header">Payment</div>
                            <div class="card-body">
                                <h5 class="card-title">Description</h5>
                                <p class="card-text">Pay for goods or orders that have been delivered</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-4">
                    <a href="#" style="text-decoration: none;color: inherit">
                        <div class="card text-white bg-secondary w-100 h-100 d-inline-block">
                            <div class="card-header">Debit Note</div>
                            <div class="card-body">
                                <h5 class="card-title">Description</h5>
                                <p class="card-text">Create request for a credit note from the supplier.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-4">
                    <a href="#" style="text-decoration: none;color: inherit">
                        <div class="card bg-light w-100 h-100 d-inline-block">
                            <div class="card-header">Stock</div>
                            <div class="card-body">
                                <h5 class="card-title">Description</h5>
                                <p class="card-text">Manage stock levels based on procurement, usage and fixed minimum quantity levels.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </main>

    </body>

</html>
