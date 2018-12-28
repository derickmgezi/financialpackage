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
                    <a href="{{ URL::to('selectsupplier/PR3') }}" class="btn btn btn-dark disabled">
                        Select Supplier 
                    </a>
                </div>
                <div class="col-12 text-center mb-3">
                        <div class="card bg-light">
                            <div class="card-header ">
                                <strong>Select Supplier for PR3</strong>
                            </div>
                        </div>
                </div>
                <div class="col-12 mb-4">
                    <div class="alert alert-info" role="alert">
                        <!-- <span class="h5">Point to consider!<br></span> -->
                        <a href="#" class="alert-link">Supplier Selection</a>
                        <hr>
                        <span>Make sure you select <a href="#" class="alert-link">one supplier</a> for each and every item</span>
                    </div>
                    <form>
                        <div class="form-row mt-4">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold" for="inputEmail4">PR Description</label>
                                <input type="text" class="form-control form-control-sm" value="Purchase of Generator and its installation charges" placeholder="Enter PR Description" disabled>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="font-weight-bold" for="inputPassword4">Request Type</label>
                                <select class="js-request-type-single custom-select custom-select-sm" disabled>
                                    <option value="" disabled selected>Select Request Type</option>
                                    <option>Quotation</option>
                                    <option selected>Proposal</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="font-weight-bold" for="inputPassword4">Requesting Unit</label>
                                <input type="text" class="form-control form-control-sm" value="Administration Unit" placeholder="Enter Requesting Unit" disabled>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label class="font-weight-bold" for="inputPassword4">PR Type</label>
                                <select :class="'js-pr-type-single custom-select custom-select-sm'" disabled>
                                    <option value="" disabled>Select Item Type</option>
                                    <option>Goods</option>
                                    <option selected>Service</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold" for="inputPassword4">Good or Services to be suplied</label>
                                <select class="js-goods-or-services-multiple custom-select custom-select-sm" multiple disabled>
                                    <option value="" disabled>Select Request Type</option>
                                    <option value="non-alcoholic">Non-alcoholic drinks</option>
                                    <option value="alcoholic">Alcoholic drinks</option>
                                    <option value="OR">Toiletries</option>
                                    <option value="WA">Crockery</option>
                                    <option value="WA" selected>Electricity</option>
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
                            <div class="form-group col-md-1">
                                <span class="font-weight-bold font-italic">Type</span>
                            </div>
                            <div class="form-group col-md-3">
                                <span class="font-weight-bold font-italic">Item Description</span>
                            </div>
                            <div class="form-group col-md-1">
                                <span class="font-weight-bold font-italic">Quantity</span>
                            </div>
                            <div class="form-group col-md-4">
                                <span class="font-weight-bold font-italic">Specifications</span>
                            </div>
                            <div class="form-group col-md-3">
                                <span class="font-weight-bold font-italic">Supplier</span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-1">
                            <select class="js-item-type-single custom-select custom-select-sm"  disabled>
                                <option value="" disabled>Select Item Type</option>
                                <option selected>Goods</option>
                                <option>Service</option>
                            </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control form-control-sm" value="Generator" placeholder="Description of Services/Goods" disabled>
                            </div>
                            <div class="form-group col-md-1">
                                <input type="number" min="1" class="form-control form-control-sm" value="1" placeholder="Quantity" disabled>
                            </div>
                            <div class="form-group shadow-textarea col-md-4">
                                <textarea type="text" rows="3" class="form-control form-control-sm" placeholder="Enter Specs" disabled>24KVA of any modal with Automatic failover system</textarea>
                            </div>
                            <div class="form-group col-md-3">
                                <select class="js-supplier-single custom-select custom-select-sm">
                                    <option value="">Select Supplier</option>
                                    <option>Marywater Electronics</option>
                                    <option>Gumbiro Electronics</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-1">
                            <select class="js-item-type-single custom-select custom-select-sm"  disabled>
                                <option value="" disabled>Select Item Type</option>
                                <option>Goods</option>
                                <option selected>Service</option>
                            </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control form-control-sm" value="Generator installation Charges" placeholder="Description of Services/Goods" disabled>
                            </div>
                            <div class="form-group col-md-1">
                                <input type="number" min="1" class="form-control form-control-sm" value="1" placeholder="Quantity" disabled>
                            </div>
                            <div class="form-group shadow-textarea col-md-4">
                                <textarea type="text" rows="3" class="form-control form-control-sm" placeholder="Enter Specs" disabled>Creating an electric system for the Generator into the building and intergrating it with electric sytem in BUilding</textarea>
                            </div>
                            <div class="form-group col-md-3">
                                <select class="js-supplier-single custom-select custom-select-sm">
                                    <option value="">Select Supplier</option>
                                    <option>Marywater Electronics</option>
                                    <option>Gumbiro Electronics</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold" for="inputEmail4">Upload analysis Documentation</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button v-if="!show_quotations" type="submit" class="btn btn-primary mb-4">Save</button>
                        <button v-if="!show_quotations" v-on:click="showQuotations" type="button" class="btn btn-success mb-4">Show Quotation Status</button>
                        <button v-else v-on:click="hideQuotations" type="button" class="btn btn-danger mb-4">Hide Quotations</button>
                    </form>

                    <div v-if="show_quotations" class="alert alert-info" role="alert">
                        <!-- <span class="h5">Point to consider!<br></span> -->
                        <a href="#" class="alert-link">Selection of more Vendors</a>
                        <hr>
                        <span>
                            You still have a <a href="#" class="alert-link">7 day window</a> to assign the PR to more vendors
                        </span>
                    </div>

                    <form v-if="show_quotations" class="mt-4">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label class="font-weight-bold" for="inputPassword4">Selected Vendors</label>
                                <select class="js-selected-vendors-multiple custom-select custom-select-sm" multiple="multiple" :disabled="!select_more_vendors">
                                    <option value="" disabled>Select Vendors</option>
                                    <option selected>Marywater Electronics</option>
                                    <option selected>Tanesco</option>
                                    <option selected>Gumbiro Electronics</option>
                                </select>
                            </div>
                        </div>
                        <button v-if="!select_more_vendors" v-on:click="selectMoreVendors" type="button" class="btn btn-primary mb-4">Select more Vendors</button>
                        <button v-if="select_more_vendors" type="submit" class="btn btn-success mb-4">Assign PR</button>
                        <button v-if="select_more_vendors" v-on:click="hideVendorSelection" type="button" class="btn btn-danger mb-4">Close</button>
                    </form>

                    <div v-if="show_quotations" class="alert alert-info" role="alert">
                        <!-- <span class="h5">Point to consider!<br></span> -->
                        <a href="#" class="alert-link">Update and Reveiwe of quotations</a>
                        <hr>
                        <span>
                            You still have a <a href="#" class="alert-link">14 day window</a> to update and review these quotations
                        </span>
                    </div>

                    <div v-if="show_quotations" class="row align-items-stretch">
                        <div class="col-md-4 mb-4">
                            <div class="card border-success h-100">
                                <div class="card-header h4">Marywater Electronics</div>
                                <div class="card-body">
                                    <div v-if="!reviewquotation" class="text-success">
                                        <h5 class="card-title">Proposal Submited</h5>
                                        <hr>
                                        <button class="btn btn-success" v-on:click="previewQuotation" type="button">Preview Quote</button>
                                        <button class="btn btn-warning" v-on:click="reviewQuotation" type="button">Review Quote</button>
                                    </div>
                                    <form v-else>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label class="font-weight-bold">Proposal provided?</label>
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
                                                <label class="font-weight-bold">Technical Proposal</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <label class="font-weight-bold">Financial Proposal</label>
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
                                                <label class="font-weight-bold">Reason why Proposal was not provided</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-no-response" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="No respnse">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-no-response">No response from Vendor</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-no-stock" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="Items out of stock">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-no-stock">Vendor couldnt supply the requested services</label>
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
                                <div class="card-header h4">Tanesco</div>
                                <div class="card-body">
                                    <div v-if="!reviewquotation" class="text-danger">
                                        <h5 class="card-title">Proposal wasnt provided</h5>
                                        <div v-if="previewreason"><a href="#" class="alert-link text-danger">Reason:</a> <span class="font-italic">No response from Vendor</span></div>
                                        <hr>
                                        <button v-if="!previewreason" class="btn btn-danger" v-on:click="previewReason" type="button">Preview Reason</button>
                                        <button v-else class="btn btn-danger" v-on:click="hideReason" type="button">Hide Reason</button>
                                        <button class="btn btn-warning" v-on:click="reviewQuotation" type="button">Review Quote</button>
                                    </div>
                                    <form v-else>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label class="font-weight-bold">Proposal provided?</label>
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
                                                <label class="font-weight-bold">Technical Proposal</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <label class="font-weight-bold">Financial Proposal</label>
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
                                                <label class="font-weight-bold">Reason why Proposal was not provided</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-no-response" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="No respnse">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-no-response">Vendor didnt respond</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-no-stock" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="Items out of stock">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-no-stock">Vendor couldnt supply the requested services</label>
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
                                <div class="card-header h4">Gumbiro Electronics</div>
                                <div class="card-body">
                                    <div v-if="!reviewquotation" class="text-success">
                                        <h5 class="card-title">Proposal Submited</h5>
                                        <hr>
                                        <button class="btn btn-success" v-on:click="previewQuotation" type="button">Preview Quote</button>
                                        <button class="btn btn-warning" v-on:click="reviewQuotation" type="button">Review Quote</button>
                                    </div>
                                    <form v-else>
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label class="font-weight-bold">Proposal provided?</label>
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
                                                <label class="font-weight-bold">Technical Proposal</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                                <label class="font-weight-bold">Financial Proposal</label>
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
                                                <label class="font-weight-bold">Reason why Proposal was not provided</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-no-response" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="No respnse">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-no-response">No response from Vendor</label>
                                                        </div>
                                                        <div class="custom-control custom-radio">
                                                            <input class="custom-control-input" type="radio" id="donald-bar-quotation-available-reason-no-stock" v-model="donaldbarquotationunavailabilityreason" name="donaldbarquotationunavailabilityreason" value="Items out of stock">
                                                            <label class="custom-control-label" for="donald-bar-quotation-available-reason-no-stock">Vendor couldnt supply the requested services</label>
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
                $('.js-request-type-single').select2({
                    placeholder: "Select Request Type",
                    width: '100%',
                });
            });

            $(document).ready(function () {
                $('.js-pr-type-single').select2({
                    placeholder: "Select PR Type",
                    allowClear: true,
                    width: '100%',
                });
            });

            $(document).ready(function () {
                $('.js-item-type-single').select2({
                    placeholder: "Select PR Type",
                    allowClear: true,
                    width: '100%',
                });
            });

            $(document).ready(function () {
                $('.js-supplier-single').select2({
                    placeholder: "Select Supplier",
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
                    donaldbarquotationstatus:"Yes",
                    donaldbarquotationexists:true,
                    donaldbarquotationunavailabilityreason:"",
                    donaldbarquotationunavailabilityspecifyreason:false,
                    showquotation:false,
                    reviewquotation:false,
                    updatequotestatus:false,
                    previewreason:false,
                    select_more_vendors:false,
                    show_quotations:false,
                },
                updated: function(){
                    if(this.showquotation == true){
                        $('#molanoQuotationPreviewModal').modal('show');
                    }

                    $(document).ready(function () {
                        $('.js-selected-vendors-multiple').select2({
                            placeholder: "Select Vendors",
                            allowClear: true,
                            width: '100%',
                        });
                    });
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
                    showQuotations: function(){
                        this.show_quotations = true;
                    },
                    hideQuotations: function(){
                        this.show_quotations = false;
                    }
                }
            });
        </script>
    </body>

</html>
