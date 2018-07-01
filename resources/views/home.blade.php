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
                    <a href="{{ URL::to('/') }}" class="btn btn btn-dark disabled">
                        Home
                    </a>
                </div>
                
                <div class="col-4 mb-4">
                    <a href="{{ URL::to('purchase') }}" style="text-decoration: none;color: inherit">
                        <div class="card bg-light w-100 h-100 d-inline-block">
                            <div class="card-header">Purchase Module</div>
                            <div class="card-body">
                                <h5 class="card-title">Description</h5>
                                <p class="card-text">The Purchasing Module makes purchasing, vendor management and receiving inventory fast and easy.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-4">
                    <a href="#" style="text-decoration: none;color: inherit">
                        <div class="card text-white bg-secondary w-100 h-100 d-inline-block">
                            <div class="card-header">Sales Module</div>
                            <div class="card-body">
                                <h5 class="card-title">Description</h5>
                                <p class="card-text">The Sales Module gives business owners and entrepreneurs flexibility in orders, invoicing, customer returns, customer refunds and accepting customer payments.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-4">
                    <a href="#" style="text-decoration: none;color: inherit">
                        <div class="card bg-light w-100 h-100 d-inline-block">
                            <div class="card-header">Payroll Module</div>
                            <div class="card-body">
                                <h5 class="card-title">Description</h5>
                                <p class="card-text">Payroll Module records earnings, calculates deduction and prepares and prints checks and associated payroll reports</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-4">
                    <a href="#" style="text-decoration: none;color: inherit">
                        <div class="card text-white bg-secondary w-100 h-100 d-inline-block">
                            <div class="card-header">Fixed Asset Module</div>
                            <div class="card-body">
                                <h5 class="card-title">Description</h5>
                                <p class="card-text">Fixed Asset Module tracks your assets and calculates and posts depreciation at the end of each accounting period</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-4">
                    <a href="#" style="text-decoration: none;color: inherit">
                        <div class="card bg-light w-100 h-100 d-inline-block">
                            <div class="card-header">Financial Module</div>
                            <div class="card-body">
                                <h5 class="card-title">Description</h5>
                                <p class="card-text">finance module gathers financial data and generates reports such as ledgers, trail balance data, overall balance sheets and quarterly financial statements</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 mb-4">
                    <a href="#" style="text-decoration: none;color: inherit">
                        <div class="card text-white bg-secondary w-100 h-100 d-inline-block">
                            <div class="card-header">Petty Cash Module</div>
                            <div class="card-body">
                                <h5 class="card-title">Description</h5>
                                <p class="card-text">Petty Cash Management module simplifies the daily and monthly tasks required to manage the petty cash account and provides instant visibility into how your petty cash is being spent.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </main>

    </body>

</html>
