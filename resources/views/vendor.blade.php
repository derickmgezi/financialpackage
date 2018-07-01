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

            <div class="row mt-5">
                <div class="col-12 mb-4">
                    <a href="{{ URL::to('/') }}" class="btn btn btn-dark">
                        Home
                    </a>
                    <a href="{{ URL::to('purchase') }}" class="btn btn btn-dark">
                        Purchase Module
                    </a>
                    <a href="{{ URL::to('vendor') }}" class="btn btn btn-dark disabled">
                        Vendor/Supplier List
                    </a>
                </div>
                <div class="col-12 row justify-content-between mb-4">
                    <div class="col-4">
                        <a href="{{ URL::to('registervendor') }}" class="btn btn-success mb-2">Register New Vendor</a>
                    </div>

                    <div class="col-4">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">Submit</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <table class="table table-hover mb-4">
                            <thead>
                                <tr>
                                    <th scope="col">Vendor ID</th>
                                    <th scope="col">Vendor Name</th>
                                    <th scope="col">Services Offered</th>
                                    <th scope="col">Contact Details</th>
                                    <th scope="col">Vendor TIN</th>
                                    <th scope="col">Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>VND0001</th>
                                    <td>Cocacola</td>
                                    <td>Drinks</td>
                                    <td>P.O.Box 78976 Dar es salaam Tanzania, Tel:+255692-274732</td>
                                    <td>TIN9234785312</td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Full Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>VND0001</th>
                                    <td>Cocacola</td>
                                    <td>Drinks</td>
                                    <td>P.O.Box 78976 Dar es salaam Tanzania, Tel:+255692-274732</td>
                                    <td>TIN9234785312</td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Full Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>VND0001</th>
                                    <td>Cocacola</td>
                                    <td>Drinks</td>
                                    <td>P.O.Box 78976 Dar es salaam Tanzania, Tel:+255692-274732</td>
                                    <td>TIN9234785312</td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Full Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>VND0001</th>
                                    <td>Cocacola</td>
                                    <td>Drinks</td>
                                    <td>P.O.Box 78976 Dar es salaam Tanzania, Tel:+255692-274732</td>
                                    <td>TIN9234785312</td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Full Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>VND0001</th>
                                    <td>Cocacola</td>
                                    <td>Drinks</td>
                                    <td>P.O.Box 78976 Dar es salaam Tanzania, Tel:+255692-274732</td>
                                    <td>TIN9234785312</td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Full Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>VND0001</th>
                                    <td>Cocacola</td>
                                    <td>Drinks</td>
                                    <td>P.O.Box 78976 Dar es salaam Tanzania, Tel:+255692-274732</td>
                                    <td>TIN9234785312</td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Full Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>VND0001</th>
                                    <td>Cocacola</td>
                                    <td>Drinks</td>
                                    <td>P.O.Box 78976 Dar es salaam Tanzania, Tel:+255692-274732</td>
                                    <td>TIN9234785312</td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Full Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>VND0001</th>
                                    <td>Cocacola</td>
                                    <td>Drinks</td>
                                    <td>P.O.Box 78976 Dar es salaam Tanzania, Tel:+255692-274732</td>
                                    <td>TIN9234785312</td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Full Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>VND0001</th>
                                    <td>Cocacola</td>
                                    <td>Drinks</td>
                                    <td>P.O.Box 78976 Dar es salaam Tanzania, Tel:+255692-274732</td>
                                    <td>TIN9234785312</td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Full Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>VND0001</th>
                                    <td>Cocacola</td>
                                    <td>Drinks</td>
                                    <td>P.O.Box 78976 Dar es salaam Tanzania, Tel:+255692-274732</td>
                                    <td>TIN9234785312</td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Full Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>VND0001</th>
                                    <td>Cocacola</td>
                                    <td>Drinks</td>
                                    <td>P.O.Box 78976 Dar es salaam Tanzania, Tel:+255692-274732</td>
                                    <td>TIN9234785312</td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Full Details</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>VND0001</th>
                                    <td>Cocacola</td>
                                    <td>Drinks</td>
                                    <td>P.O.Box 78976 Dar es salaam Tanzania, Tel:+255692-274732</td>
                                    <td>TIN9234785312</td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalCenter">Full Details</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </main>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Company Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body row">
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Company Name</div>
                            <div class="col-6 font-weight-light">Monamed Enterprises</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Registration ID</div>
                            <div class="col-6 font-weight-light">VND0001</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">TIN Number</div>
                            <div class="col-6 font-weight-light">TIN9234785312</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Address</div>
                            <div class="col-6 font-weight-light">P.O.Box 78976 Dar es salaam Tanzania</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Telephone Number</div>
                            <div class="col-6 font-weight-light">+255-692-274-732</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Email Address</div>
                            <div class="col-6 font-weight-light">derickmgezi@gmail.com</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Website Address</div>
                            <div class="col-6 font-weight-light">driknu.co.tz</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Name and Title of Company Representative</div>
                            <div class="col-6 font-weight-light">Derick Ruganuza CEO</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Telephone Numbers of Company Representative</div>
                            <div class="col-6 font-weight-light">+255-692-274-732,<br> +255-714-939-901</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Date Company was established</div>
                            <div class="col-6 font-weight-light">28th August 2002</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Gross annual sales for last three years</div>
                            <div class="col-6 font-weight-light">$620,000 - 2017<br>$780,000 - 2016<br>$650,000 - 2015</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Legal Structure</div>
                            <div class="col-6 font-weight-light">Corporation</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Type of Business/Commodity Service</div>
                            <div class="col-6 font-weight-light">Retailer</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Details on services or goods supplied</div>
                            <div class="col-6 font-weight-light">Soft Drinks, Bear</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Geographical Service Area</div>
                            <div class="col-6 font-weight-light">Local</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Payment Method</div>
                            <div class="col-6 font-weight-light">Bank</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Bank Name</div>
                            <div class="col-6 font-weight-light">CRDB</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Bank Address</div>
                            <div class="col-6 font-weight-light">P.O.Box 78976 Dar es salaam, Mtendeli Street, Plot number 6 Kinondoni</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Beneficiary Name</div>
                            <div class="col-6 font-weight-light">Delight Derica Ruganuza</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">International Bank Account Number (IBAN)</div>
                            <div class="col-6 font-weight-light">J0852337008</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Swift/Bank Identification Code (BIC)</div>
                            <div class="col-6 font-weight-light">CDRD7899</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Bank Account Number</div>
                            <div class="col-6 font-weight-light">J0852337008</div>
                        </div>
                        <div class="col-12 row mb-2">
                            <div class="col-6 text-right">Supporting Documents</div>
                            <div class="col-6 font-weight-light"><span>Financial Statement</span></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- SCRIPTS -->
        <!-- JQuery -->
        {{HTML::script("js/jquery-3.3.1.min.js")}}
        <!-- Bootstrap core JavaScript -->
        {{HTML::script("js/bootstrap.min.js")}}
        
    </body>

</html>
