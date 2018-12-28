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

        <!-- Select2 core CSS -->
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" /> -->
        {{ Html::style('css/select2.min.css') }}
        
        <!-- Select2-Bootstrap-Themes core CSS -->
        {{ Html::style('css/select2-bootstrap.css') }}
        <!-- {{ Html::style('css/select2-bootstrap4.css') }} -->
        
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
                    <a href="{{ URL::to('uploadquotations/PR2') }}" class="btn btn btn-dark disabled">
                        Upload Quotations
                    </a>
                </div>
                <div class="col-12 text-center mb-3">
                    <div class="card bg-light">
                        <div class="card-header ">
                            <strong>Upload Quotations from Vendors for PR2</strong>
                        </div>
                    </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="alert alert-info" role="alert">
                        <!-- <span class="h5">Point to consider!<br></span> -->
                        <a href="#" class="alert-link">Selection of more Vendors</a>
                        <hr>
                        <span>
                            You still have a <a href="#" class="alert-link">7 day window</a> to assign the PR to more vendors
                        </span>
                    </div>
                    <form class="mb-4">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="font-weight-bold" for="inputPassword4">Selected Vendors</label>
                                <select class="js-pr-assignmnet-multiple custom-select custom-select-sm" multiple="multiple" :disabled="!select_more_vendors">
                                    <option value="" disabled>Select Vendors</option>
                                    <option selected>Beka Kioski</option>
                                    <option selected>Ngekewa Bar</option>
                                    <option selected>Molano</option>
                                    <option>Mama Max</option>
                                    <option>Muha Shop</option>
                                    <option selected>Donald Bar Bar</option>
                                </select>
                            </div>
                        </div>
                        <button v-if="!select_more_vendors" v-on:click="selectMoreVendors" type="button" class="btn btn-primary">Select more Vendors</button>
                        <button v-if="select_more_vendors" type="submit" class="btn btn-success">Assign PR</button>
                        <button v-if="select_more_vendors" v-on:click="hideVendorSelection" type="button" class="btn btn-danger">Close</button>
                    </form>

                    <div class="alert alert-info" role="alert">
                        <!-- <span class="h5">Point to consider!<br></span> -->
                        <a href="#" class="alert-link">Update and Reveiwe of quotations</a>
                        <hr>
                        <span>
                            You still have a <a href="#" class="alert-link">14 day window</a> to update and review these quotations
                        </span>
                    </div>
                    <div class="row align-items-stretch">
                        <div class="col-md-4 mb-4">
                            <div class="card border-info h-100">
                                <div class="card-header h4">Donald Bar</div>
                                <div class="card-body">
                                    <div v-if="!updatequotestatus" class="text-info">
                                        <h5 class="card-title">Quote status pending</h5>
                                        <div>
                                            <hr>
                                            <button class="btn btn-info" v-on:click="updateQuoteStatus" type="button">Update Quote Status</button>
                                        </div>
                                    </div>
                                    <form v-else>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label class="font-weight-bold">Quotation provided?</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-unavailable" v-model="donaldbarquotationstatus" name="donaldbarquotationstatus" value="Yes">
                                                            <label class="custom-control-label" for="donald-bar-quotation-unavailable">Yes</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available" v-model="donaldbarquotationstatus" name="donaldbarquotationstatus" value="No">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div v-if="donaldbarquotationexists" class="form-group">
                                                <hr>
                                                <label class="font-weight-bold">Quotation</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div v-else class="form-group col-md-12">
                                                <hr>
                                                <label class="font-weight-bold">Reason why Quotation was not provided</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-no-response" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="No respnse">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-no-response">Vendor didnt respond</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-no-stock" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="Items out of stock">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-no-stock">Items out of Vendors stock</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-others" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="Others">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-others">Other reasons</label>
                                                            <input v-if="donaldbarquotationunavailabilityspecifyreason" type="text" class="form-control" id="inputAddress" placeholder="Please specify">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" class="btn btn-danger" v-on:click="exitUpdateQuoteStatus">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card border-success h-100">
                                <div class="card-header h4">Molano</div>
                                <div class="card-body">
                                    <div v-if="!reviewquotation" class="text-success">
                                        <h5 class="card-title">Quote Submited</h5>
                                        <hr>
                                        <button class="btn btn-success" v-on:click="previewQuotation" type="button">Preview Quote</button>
                                        <button class="btn btn-warning" v-on:click="reviewQuotation" type="button">Review Quote</button>
                                    </div>
                                    <form v-else>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label class="font-weight-bold">Quotation provided?</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-unavailable" v-model="donaldbarquotationstatus" name="donaldbarquotationstatus" value="Yes">
                                                            <label class="custom-control-label" for="donald-bar-quotation-unavailable">Yes</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available" v-model="donaldbarquotationstatus" name="donaldbarquotationstatus" value="No">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div v-if="donaldbarquotationexists" class="form-group">
                                                <hr>
                                                <label class="font-weight-bold">Quotation</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div v-else class="form-group col-md-12">
                                                <hr>
                                                <label class="font-weight-bold">Reason why Quotation was not provided</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-no-response" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="No respnse">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-no-response">No response from Vendor</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-no-stock" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="Items out of stock">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-no-stock">Items out of Vendors stock</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-others" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="Others">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-others">Other reasons</label>
                                                            <input v-if="donaldbarquotationunavailabilityspecifyreason" type="text" class="form-control" id="inputAddress" placeholder="Please specify">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" v-on:click="exitReviewQuotation" class="btn btn-danger">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card border-danger h-100">
                                <div class="card-header h4">Ngekewa Bar</div>
                                <div class="card-body">
                                    <div v-if="!reviewquotation" class="text-danger">
                                        <h5 class="card-title">Quote wasnt provided</h5>
                                        <div v-if="previewreason"><a href="#" class="alert-link text-danger">Reason:</a> <span class="font-italic">No response from Vendor</span></div>
                                        <hr>
                                        <button v-if="!previewreason" class="btn btn-danger" v-on:click="previewReason" type="button">Preview Reason</button>
                                        <button v-else class="btn btn-danger" v-on:click="hideReason" type="button">Hide Reason</button>
                                        <button class="btn btn-warning" v-on:click="reviewQuotation" type="button">Review Quote</button>
                                    </div>
                                    <form v-else>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label class="font-weight-bold">Quotation provided?</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-unavailable" v-model="donaldbarquotationstatus" name="donaldbarquotationstatus" value="Yes">
                                                            <label class="custom-control-label" for="donald-bar-quotation-unavailable">Yes</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available" v-model="donaldbarquotationstatus" name="donaldbarquotationstatus" value="No">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div v-if="donaldbarquotationexists" class="form-group">
                                                <hr>
                                                <label class="font-weight-bold">Quotation</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div v-else class="form-group col-md-12">
                                                <hr>
                                                <label class="font-weight-bold">Reason why Quotation was not provided</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-no-response" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="No respnse">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-no-response">Vendor didnt respond</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-no-stock" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="Items out of stock">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-no-stock">Items out of Vendors stock</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-others" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="Others">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-others">Other reasons</label>
                                                            <input v-if="donaldbarquotationunavailabilityspecifyreason" type="text" class="form-control" id="inputAddress" placeholder="Please specify">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" v-on:click="exitReviewQuotation" class="btn btn-danger">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-4">
                            <div class="card border-success h-100">
                                <div class="card-header h4">Beka Kioski</div>
                                <div class="card-body">
                                    <div v-if="!reviewquotation" class="text-success">
                                        <h5 class="card-title">Quote Submited</h5>
                                        <hr>
                                        <button class="btn btn-success" v-on:click="previewQuotation" type="button">Preview Quote</button>
                                        <button class="btn btn-warning" v-on:click="reviewQuotation" type="button">Review Quote</button>
                                    </div>
                                    <form v-else>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label class="font-weight-bold">Quotation provided?</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-unavailable" v-model="donaldbarquotationstatus" name="donaldbarquotationstatus" value="Yes">
                                                            <label class="custom-control-label" for="donald-bar-quotation-unavailable">Yes</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available" v-model="donaldbarquotationstatus" name="donaldbarquotationstatus" value="No">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available">No</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div v-if="donaldbarquotationexists" class="form-group">
                                                <hr>
                                                <label class="font-weight-bold">Quotation</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div v-else class="form-group col-md-12">
                                                <hr>
                                                <label class="font-weight-bold">Reason why Quotation was not provided</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-no-response" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="No respnse">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-no-response">No response from Vendor</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-no-stock" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="Items out of stock">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-no-stock">Items out of Vendors stock</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-others" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="Others">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-others">Other reasons</label>
                                                            <input v-if="donaldbarquotationunavailabilityspecifyreason" type="text" class="form-control" id="inputAddress" placeholder="Please specify">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="button" v-on:click="exitReviewQuotation" class="btn btn-danger">Close</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quotation Preview Modal -->
                    <div v-if="showquotation" class="modal fade molanoQuotationPreviewModal" id="molanoQuotationPreviewModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Quotation from Molano</h5>
                                    <button type="button" class="close" v-on:click="stopQuotationPreview" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="{{ url('/storage/quotations/proforma-invoice-template.pdf') }}" allowfullscreen style="width: 100%;"></iframe>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" v-on:click="stopQuotationPreview" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div><!-- end of Quotation Preview Modal -->
                </div>
            </div>

        </main>

        <!-- SCRIPTS -->
        <!-- JQuery -->
        {{HTML::script("js/jquery-3.3.1.min.js")}}
        <!-- Bootstrap core JavaScript -->
        {{HTML::script("js/bootstrap.min.js")}}
        
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
                    donaldbarquotationstatus:"Yes",
                    donaldbarquotationexists:true,
                    donaldbarquotationunavailabilityreason:"",
                    donaldbarquotationunavailabilityspecifyreason:false,
                    showquotation:false,
                    reviewquotation:false,
                    updatequotestatus:false,
                    previewreason:false,
                    select_more_vendors:false,
                },
                updated: function(){
                    if(this.showquotation == true){
                        $('#molanoQuotationPreviewModal').modal('show');
                    }
                },
                beforeUpdate: function(){
                    if(this.donaldbarquotationstatus == "Yes"){
                        this.donaldbarquotationexists = true;
                    }

                    if(this.donaldbarquotationstatus == "No"){
                        this.donaldbarquotationexists = false;
                    }

                    if(this.donaldbarquotationunavailabilityreason != "Others"){
                        this.donaldbarquotationunavailabilityspecifyreason = false;
                    }else{
                        this.donaldbarquotationunavailabilityspecifyreason = true;
                    }
                },
                methods:{
                    previewQuotation: function(){
                        this.showquotation = true;

                        $('#molanoQuotationPreviewModal').modal('show');
                    },
                    reviewQuotation: function(){
                        this.reviewquotation = true;
                    },
                    exitReviewQuotation: function(){
                        this.reviewquotation = false;
                    },
                    stopQuotationPreview: function(){
                        this.showquotation = false;
                    },
                    updateQuoteStatus: function(){
                        this.updatequotestatus = true;
                    },
                    exitUpdateQuoteStatus: function(){
                        this.updatequotestatus = false;
                    },
                    previewReason: function(){
                        this.previewreason = true;
                    },
                    hideReason: function(){
                        this.previewreason = false;
                    },
                    selectMoreVendors: function(){
                        this.select_more_vendors = true;
                    },
                    hideVendorSelection: function(){
                        this.select_more_vendors = false;
                    },
                }
            });
        </script>
    </body>

</html>
