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
                    <a href="{{ URL::to('purchaserequisition') }}" class="btn btn btn-dark disabled">
                        Purchase Requisition
                    </a>
                </div>
                <div class="col-12 row justify-content-between mb-4">
                    <div class="col-4">
                        <a href="{{ URL::to('createPR') }}" class="btn btn-success mb-2">Create PR</a>
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
                                    <th scope="col" class="font-italic">PR ID</th>
                                    <th scope="col" class="font-italic">PR type</th>
                                    <th scope="col" class="font-italic">PR Description</th>
                                    <th scope="col" class="font-italic text-center">Manage PR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PR1</th>
                                    <td>Goods</td>
                                    <td>Purchase of Alcoholic Drinks</td>
                                    <td class="text-center">
                                            <a href="{{ URL::to('PRdetails/PR1') }}" class="btn btn-sm btn-primary">PR Details</a>
                                            <a href="{{ URL::to('assignPR/PR1') }}" class="btn btn-sm btn-success">Assign PR</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PR2</th>
                                    <td>Goods</td>
                                    <td>Purchase of Soft Drinks</td>
                                    <td class="text-center">
                                        <a href="{{ URL::to('uploadquatation/PR2') }}" class="btn btn-sm btn-success">Upload Quatation</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PR3</th>
                                    <td>Services</td>
                                    <td>Purchase of Electricity</td>
                                    <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalCenter">PR Details</a>
                                            <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter">Assign PR</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PR4</th>
                                    <td>Services</td>
                                    <td>Purchase of Monthly TV Services</td>
                                    <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalCenter">PR Details</a>
                                            <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter">Assign PR</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PR5</th>
                                    <td>Services</td>
                                    <td>Disposal of Waste</td>
                                    <td class="text-center">
                                            <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalCenter">PR Details</a>
                                            <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter">Assign PR</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>PR5</th>
                                    <td>Goods</td>
                                    <td>Purchase of Generator and its installation charges</td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModalCenter">PR Details</a>
                                        <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter">Assign PR</a>
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
