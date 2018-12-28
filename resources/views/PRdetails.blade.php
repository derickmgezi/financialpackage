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
                    <a href="{{ URL::to('PRdetails/PR1') }}" class="btn btn btn-dark disabled">
                        PR Details
                    </a>
                </div>
                <div class="col-12 text-center mb-3">
                        <div class="card bg-light">
                            <div class="card-header ">
                                <strong>PR1 details</strong>
                            </div>
                        </div>
                </div>
                <div class="col-12 mb-4">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold" for="inputEmail4">PR Description</label>
                                <input type="text" class="form-control form-control-sm" value="Purchase of Alcoholic Drinks" placeholder="Enter PR Description" :disabled="edit_PR">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="font-weight-bold" for="inputPassword4">Request Type</label>
                                <select class="js-request-type-single custom-select custom-select-sm" :disabled="edit_PR">
                                    <option value="" disabled selected>Select Request Type</option>
                                    <option selected>Quotation</option>
                                    <option>Proposal</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="font-weight-bold" for="inputPassword4">Requesting Unit</label>
                                <input type="text" class="form-control form-control-sm" value="Sales Unit" placeholder="Enter Requesting Unit" :disabled="edit_PR">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label class="font-weight-bold" for="inputPassword4">PR Type</label>
                                <select :class="'js-pr-type-single custom-select custom-select-sm'" :disabled="edit_PR">
                                    <option value="" disabled>Select Item Type</option>
                                    <option selected>Goods</option>
                                    <option>Service</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold" for="inputPassword4">Good or Services to be suplied</label>
                                <select class="js-goods-or-services-multiple custom-select custom-select-sm" multiple :disabled="edit_PR">
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
                                <input type="date" class="form-control form-control-sm" value="2019-01-22" placeholder="Enter Delivery Date" :disabled="edit_PR">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <span class="font-weight-bold">List of items to be procured</span>
                                <button v-if="!edit_PR" type="button" v-on:click="addLineItem" class="btn btn-success btn-sm">New line item</button>
                                <button v-if="number_of_line_items > 1 && !edit_PR" type="button" v-on:click="removeLineItem" class="btn btn-danger btn-sm">Remove line item</button>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <span class="font-weight-bold">Type</span>
                            </div>
                            <div class="form-group col-md-3">
                                <span class="font-weight-bold">Description</span>
                            </div>
                            <div class="form-group col-md-2">
                                <span class="font-weight-bold">Quantity</span>
                            </div>
                            <div class="form-group shadow-textarea col-md-5">
                                <span class="font-weight-bold">Specifications</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                            <select class="js-item-type-single custom-select custom-select-sm"  :disabled="edit_PR">
                                <option value="" disabled>Select Item Type</option>
                                <option selected>Goods</option>
                                <option>Service</option>
                            </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control form-control-sm" value="Castle Lite Bear" placeholder="Description of Services/Goods" :disabled="edit_PR">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="number" min="1" class="form-control form-control-sm" value="72" placeholder="Quantity" :disabled="edit_PR">
                            </div>
                            <div class="form-group shadow-textarea col-md-5">
                            <textarea type="text" rows="3" class="form-control form-control-sm" placeholder="Enter Specs" :disabled="edit_PR">Castle lite 220ml Botlle</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                            <select class="js-item-type-single custom-select custom-select-sm"  :disabled="edit_PR">
                                <option value="" disabled>Select Item Type</option>
                                <option selected>Goods</option>
                                <option>Service</option>
                            </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control form-control-sm" value="Safari Lager Bear" placeholder="Description of Services/Goods" :disabled="edit_PR">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="number" min="1" class="form-control form-control-sm" value="24" placeholder="Quantity" :disabled="edit_PR">
                            </div>
                            <div class="form-group shadow-textarea col-md-5">
                            <textarea type="text" rows="3" class="form-control form-control-sm" placeholder="Enter Specs" :disabled="edit_PR">Safari Lager Botlle of 350ml</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                            <select class="js-item-type-single custom-select custom-select-sm"  :disabled="edit_PR">
                                <option value="" disabled>Select Item Type</option>
                                <option selected>Goods</option>
                                <option>Service</option>
                            </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control form-control-sm" value="Konyagi Ndogo Wiskey" placeholder="Description of Services/Goods" :disabled="edit_PR">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="number" min="1" class="form-control form-control-sm" value="13" placeholder="Quantity" :disabled="edit_PR">
                            </div>
                            <div class="form-group shadow-textarea col-md-5">
                            <textarea type="text" rows="3" class="form-control form-control-sm" placeholder="Enter Specs" :disabled="edit_PR">Konyagi Ndogo Wiskey Botlle of 300ml</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                            <select class="js-item-type-single custom-select custom-select-sm"  :disabled="edit_PR">
                                <option value="" disabled>Select Item Type</option>
                                <option selected>Goods</option>
                                <option>Service</option>
                            </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control form-control-sm" value="Konyagi Kubwa Wiskey" placeholder="Description of Services/Goods" :disabled="edit_PR">
                            </div>
                            <div class="form-group col-md-2">
                                <input type="number" min="1" class="form-control form-control-sm" value="8" placeholder="Quantity" :disabled="edit_PR">
                            </div>
                            <div class="form-group shadow-textarea col-md-5">
                            <textarea type="text" rows="3" class="form-control form-control-sm" placeholder="Enter Specs" :disabled="edit_PR">Konyagi Ndogo Wiskey Botlle of 500ml</textarea>
                            </div>
                        </div>
                        <div v-if="!edit_PR" class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="font-weight-bold" class="form-check-label" for="gridCheck">
                                    I confirm that the information provided is true 
                                </label>
                            </div>
                        </div>
                        <button v-if="edit_PR" v-on:click="editPR" type="button" class="btn btn-warning">Edit PR</button>
                        <button v-else type="submit" class="btn btn-primary">Save</button>
                        <button v-if="!edit_PR" v-on:click="cancelPREdit" type="button" class="btn btn-danger">Close</button>
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
                $('.js-pr-type-single').select2({
                    placeholder: "Select Item Type",
                    allowClear: true,
                    width: '100%',
                });
            });

            $(document).ready(function () {
                $('.js-request-type-single').select2({
                    placeholder: "Select Request Type",
                    allowClear: true,
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
                    line_item:0,
                    number_of_line_items:1,
                    edit_PR:true,
                },
                mounted() {
                    $(document).ready(function () {
                        $('.js-item-type-single').select2({
                            placeholder: "Select Item Type",
                            allowClear: true,
                            width: '100%',
                        });
                    });
                },
                beforeUpdate() {
                    $(document).ready(function () {
                        $('.js-item-type-single').select2({
                            placeholder: "Select Item Type",
                            allowClear: true,
                            width: '100%',
                        });
                    });
                },
                methods:{
                    addLineItem: function(){
                        this.number_of_line_items = this.number_of_line_items+1;
                    },
                    removeLineItem: function(){
                        if(this.number_of_line_items > 1)
                        this.number_of_line_items = this.number_of_line_items-1;
                    },
                    editPR: function(){
                        this.edit_PR = false;
                    },
                    cancelPREdit: function(){
                        this.edit_PR = true;
                    }
                }
            });
        </script>
    </body>

</html>
