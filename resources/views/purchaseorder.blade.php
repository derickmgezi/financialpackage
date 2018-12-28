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
                    <a href="{{ URL::to('purchaseorder') }}" class="btn btn btn-dark disabled">
                        Purchase Order
                    </a>
                </div>
                <div class="col-12 row justify-content-between mb-4">
                    <div class="col-4">
                        
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
                                    <th scope="col" class="font-italic">PO Number</th>
                                    <th scope="col" class="font-italic">PO Type</th>
                                    <th scope="col" class="font-italic">Relative PR Number</th>
                                    <th scope="col" class="font-italic">PR Description</th>
                                    <th scope="col" class="font-italic text-center">Manage PO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PO400000001</th>
                                    <td>Goods</td>
                                    <td class="text-center">PR1</td>
                                    <td>Purchase of Alcoholic Drinks</td>
                                    <td class="text-center">
                                            <a href="{{ URL::to('PRdetails/PR1') }}" class="btn btn-sm btn-info">PR Details</a>
                                            <a href="{{ URL::to('selectvendors/PR1') }}" class="btn btn-sm btn-success">Select Vendors</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PO400000002</th>
                                    <td>Goods</td>
                                    <td class="text-center">PR2</td>
                                    <td>Purchase of Soft Drinks</td>
                                    <td class="text-center">
                                        <a href="{{ URL::to('uploadquatations/PR2') }}" class="btn btn-sm btn-success">Upload Quatations</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PO800000001</th>
                                    <td>Services</td>
                                    <td class="text-center">PR3</td>
                                    <td>Purchase of Generator and its installation charges</td>
                                    <td class="text-center">
                                            <a href="{{ URL::to('selectsupplier/PR3') }}" class="btn btn-sm btn-success">Select Supplier</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PO400000003</th>
                                    <td>Goods</td>
                                    <td class="text-center">PR3</td>
                                    <td>Purchase of Generator and its installation charges</td>
                                    <td class="text-center">
                                            <a href="{{ URL::to('selectsupplier/PR3') }}" class="btn btn-sm btn-success">Select Supplier</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </main>
        
        <!-- SCRIPTS -->
        <!-- JQuery -->
        {{HTML::script("js/jquery-3.3.1.min.js")}}
        <!-- Bootstrap core JavaScript -->
        {{HTML::script("js/bootstrap.min.js")}}
        
    </body>

</html>
