<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">

        <title>Sticky Footer Template for Bootstrap</title>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- Bootstrap core CSS -->
        {{ Html::style('css/bootstrap.min.css') }}

        <!-- Select2 core CSS -->
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> -->
        {{ Html::style('css/select2.min.css') }}

        <!-- Select2-Bootstrap-Themes core CSS -->
        {{ Html::style('css/select2-bootstrap.css') }}
        <!-- {{ Html::style('css/select2-bootstrap4.css') }} -->
        
        <!-- Material Design Bootstrap package core CSS -->
        <!-- {{ Html::style('css/mdb.min.css') }} -->

        <!-- Vue.js library -->
        {{HTML::script("js/vue.js")}}

    </head>

    <body>

        <!-- Begin page content -->
        <main role="main" class="container" id="app">

            <div class="row mt-5">
                <div class="col-12 mb-4">
                    <a href="{{ URL::to('/') }}" class="btn btn btn-dark">
                        Home
                    </a>
                    <a href="{{ URL::to('purchase') }}" class="btn btn btn-dark">
                        Purchase Module
                    </a>
                    <a href="{{ URL::to('purchaserequisition') }}" class="btn btn btn-dark">
                        Purchase Requisition
                    </a>
                    <a href="{{ URL::to('selectvendors/PR1') }}" class="btn btn btn-dark disabled">
                        Select Vendors
                    </a>
                </div>
                <div class="col-12 text-center mb-3">
                        <div class="card bg-light">
                            <div class="card-header ">
                                <strong>Select Vendors for PR1</strong>
                            </div>
                        </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="alert alert-info" role="alert">
                        <!-- <span class="h5">Point to consider!<br></span> -->
                        <a href="#" class="alert-link">Vendor Selection</a><br>
                        <span>Make sure you contact <a href="#" class="alert-link">atleast three Vendors</a></span>
                        <hr>
                        <span>A waiver form will be required incase less than <a href="#" class="alert-link">three vendors</a> will be contacted</span>
                    </div>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="font-weight-bold" for="inputPassword4">Select Vendors</label>
                                <select class="js-pr-assignmnet-multiple custom-select custom-select-sm" multiple="multiple">
                                    <option value="" disabled>Select Vendors</option>
                                    <option>Beka Kioski</option>
                                    <option>Ngekewa Bar</option>
                                    <option>Molano</option>
                                    <option>Mama Max</option>
                                    <option>Muha Shop</option>
                                    <option>Donald Bar Bar</option>
                                </select>
                            </div>
                        </div>
                        <button v-if="!show_PR_details" type="submit" class="btn btn-primary">Assign PR</button>
                        <button v-if="!show_PR_details" v-on:click="showPRDetails" type="button" class="btn btn-success">Show PR detials</button>
                        <button v-else v-on:click="hidePRDetails" type="button" class="btn btn-warning">Hide PR detials</button>
                    </form>
                    <form v-show="show_PR_details">
                        <div class="form-row mt-4">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold" for="inputEmail4">PR Description</label>
                                <input type="text" class="form-control form-control-sm" value="Purchase of Alcoholic Drinks" placeholder="Enter PR Description" disabled>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="font-weight-bold" for="inputPassword4">Request Type</label>
                                <select class="js-request-type-single custom-select custom-select-sm" disabled>
                                    <option value="" disabled selected>Select Request Type</option>
                                    <option selected>Quotation</option>
                                    <option>Proposal</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="font-weight-bold" for="inputPassword4">Requesting Unit</label>
                                <input type="text" class="form-control form-control-sm" value="Sales Unit" placeholder="Enter Requesting Unit" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label class="font-weight-bold" for="inputPassword4">PR Type</label>
                                <select :class="'js-pr-type-single custom-select custom-select-sm'" disabled>
                                    <option value="" disabled>Select Item Type</option>
                                    <option selected>Goods</option>
                                    <option>Service</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold" for="inputPassword4">Good or Services to be suplied</label>
                                <select class="js-goods-or-services-multiple custom-select custom-select-sm" multiple disabled>
                                    <option value="" disabled>Select Request Type</option>
                                    <option value="non-alcoholic">Non-alcoholic drinks</option>
                                    <option value="alcoholic" selected>Alcoholic drinks</option>
                                    <option value="OR">Toiletries</option>
                                    <option value="WA">Crockery</option>
                                    <option value="WA">Electricity</option>
                                    <option value="WA">Water</option>
                                    <option value="WA">Rent</option>
                                    <option value="WA">Furniture</option>
                                    <option value="WA">Electronic Equipment</option>
                                    <option value="WA">TV Cable Services‎</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="font-weight-bold" for="inputPassword4">Expected Delivery Date</label>
                                <input type="date" class="form-control form-control-sm" value="2019-01-22" placeholder="Enter Delivery Date" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <span class="font-weight-bold">List of Items to be procured</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <span class="font-weight-bold font-italic">Type</span>
                            </div>
                            <div class="form-group col-md-3">
                                <span class="font-weight-bold font-italic">Description</span>
                            </div>
                            <div class="form-group col-md-2">
                                <span class="font-weight-bold font-italic">Quantity</span>
                            </div>
                            <div class="form-group shadow-textarea col-md-5">
                                <span class="font-weight-bold font-italic">Specifications</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                            <select class="custom-select custom-select-sm"  disabled>
                                <option value="" disabled>Select Item Type</option>
                                <option selected>Goods</option>
                                <option>Service</option>
                            </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control form-control-sm" value="Castle Lite Bear" placeholder="Description of Services/Goods" disabled>
                            </div>
                            <div class="form-group col-md-2">
                                <input type="number" min="1" class="form-control form-control-sm" value="72" placeholder="Quantity" disabled>
                            </div>
                            <div class="form-group shadow-textarea col-md-5">
                            <textarea type="text" rows="3" class="form-control form-control-sm" placeholder="Enter Specs" disabled>Castle lite 220ml Botlle</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                            <select class="custom-select custom-select-sm"  disabled>
                                <option value="" disabled>Select Item Type</option>
                                <option selected>Goods</option>
                                <option>Service</option>
                            </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control form-control-sm" value="Safari Lager Bear" placeholder="Description of Services/Goods" disabled>
                            </div>
                            <div class="form-group col-md-2">
                                <input type="number" min="1" class="form-control form-control-sm" value="24" placeholder="Quantity" disabled>
                            </div>
                            <div class="form-group shadow-textarea col-md-5">
                            <textarea type="text" rows="3" class="form-control form-control-sm" placeholder="Enter Specs" disabled>Safari Lager Botlle of 350ml</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                            <select class="custom-select custom-select-sm"  disabled>
                                <option value="" disabled>Select Item Type</option>
                                <option selected>Goods</option>
                                <option>Service</option>
                            </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control form-control-sm" value="Konyagi Ndogo Wiskey" placeholder="Description of Services/Goods" disabled>
                            </div>
                            <div class="form-group col-md-2">
                                <input type="number" min="1" class="form-control form-control-sm" value="13" placeholder="Quantity" disabled>
                            </div>
                            <div class="form-group shadow-textarea col-md-5">
                            <textarea type="text" rows="3" class="form-control form-control-sm" placeholder="Enter Specs" disabled>Konyagi Ndogo Wiskey Botlle of 300ml</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                            <select class="custom-select custom-select-sm"  disabled>
                                <option value="" disabled>Select Item Type</option>
                                <option selected>Goods</option>
                                <option>Service</option>
                            </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control form-control-sm" value="Konyagi Kubwa Wiskey" placeholder="Description of Services/Goods" disabled>
                            </div>
                            <div class="form-group col-md-2">
                                <input type="number" min="1" class="form-control form-control-sm" value="8" placeholder="Quantity" disabled>
                            </div>
                            <div class="form-group shadow-textarea col-md-5">
                                <textarea type="text" rows="3" class="form-control form-control-sm" placeholder="Enter Specs" disabled>Konyagi Ndogo Wiskey Botlle of 500ml</textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </main>

        <!-- SCRIPTS -->
        <!-- JQuery -->
        {{HTML::script("js/jquery-3.3.1.min.js")}}

        <!-- Bootstrap tooltips -->
        {{HTML::script("js/popper.min.js")}}

        <!-- Bootstrap core JavaScript -->
        {{HTML::script("js/bootstrap.min.js")}}

        <!-- MDB core JavaScript -->
        {{HTML::script("js/mdb.min.js")}}
        <script>
            // Material Select Initialization
            $(document).ready(function () {
                $('.mdb-select').materialSelect();
            });
        </script>
        
        <!-- MDB core JavaScript -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>t -->
        {{HTML::script("js/select2.full.js")}}
        <script>
            // My Select2 Javascript (external .js resource or <script> tag)
            $(document).ready(function () {
                $('.js-pr-assignmnet-multiple').select2({
                    placeholder: "Select Vendors",
                    width: '100%',
                });
            });

           $(document).ready(function () {
                $('.js-goods-or-services-multiple').select2({
                    placeholder: "Select Type of Goods or Services to be supplied",
                    allowClear: true,
                    width: '100%',
                });
            });
            
            // Set the "bootstrap" theme as the default theme for all Select2
            $.fn.select2.defaults.set( "theme", "bootstrap" );
            
            var placeholder = "Select a State";
                    
            $( ".select2-single, .select2-multiple" ).select2( {
                    placeholder: placeholder,
                    width: null,
                    containerCssClass: ':all:'
            } );

            $( ".select2-allow-clear" ).select2( {
                    allowClear: true,
                    placeholder: placeholder,
                    width: null,
                    containerCssClass: ':all:'
            } );
        </script>

        <script>
            var vm = new Vue({
                el:"#app",
                data:{
                    show_PR_details:false,
                },
                methods:{
                    showPRDetails: function(){
                        this.show_PR_details = true;
                    },
                    hidePRDetails: function(){
                        this.show_PR_details = false;
                    }
                }
            });
        </script>
    </body>

</html>
