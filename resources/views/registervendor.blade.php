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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        
        <!-- Select2-Bootstrap-Themes core CSS -->
        {{ Html::style('css/select2-bootstrap.css') }}
        <!-- {{ Html::style('css/select2-bootstrap4.css') }} -->
        
        

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
                    <a href="{{ URL::to('vendor') }}" class="btn btn btn-dark">
                        Vendor/Supplier List
                    </a>
                    <a href="{{ URL::to('registervendor') }}" class="btn btn btn-dark disabled">
                        Vendor/Supplier Registration
                    </a>
                </div>
                <div class="col-12 text-center mb-3">
                        <div class="card bg-light">
                            <div class="card-header ">
                                <strong>Vendor/Supplier Registration</strong>
                            </div>
                        </div>
                </div>
                <div class="col-12 mb-4">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="">Company Name</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">TIN number</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Company Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="state" class="control-label">State</label>
                                <select id="state" class="form-control js-state-single">
                                    <option ></option>
                                    <option>Tanzania</option>
                                    <option >Uganda</option>
                                    <option >Kenya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Email Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Website</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Office Direct Line</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Name and Title of Company Representative</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Company Representative Office Tel number</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Company Representative Telephone number</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Date Company was established</label>
                                <input type="date" class="form-control" id="inputAddress" placeholder="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Telephone number of Company Representative</label>
                                <input type="tel" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Alternate Telephone number</label>
                                <input type="tel" class="form-control" id="inputCity">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="legal-structure" class="control-label">Legal Structure</label>
                                <select id="legal-structure" class="form-control js-legal-structure-single">
                                    <option ></option>
                                    <option>Corporation</option>
                                    <option >Partneship</option>
                                    <option >Sole Partneship</option>
                                    <option >Joint Venture</option>
                                    <option >Franchise</option>
                                    <option >Non-Profit</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="business-service" class="control-label">Type of Business/Commodity Service</label>
                                <select id="business-service" class="form-control js-business-service-single">
                                    <option ></option>
                                    <option>Retailer</option>
                                    <option >Publication/Broadcaster</option>
                                    <option >Manufacture</option>
                                    <option >Wholesaler</option>
                                    <option >Construction Contractor</option>
                                    <option >Professional Services</option>
                                    <option >Consultant</option>
                                    <option >Freight/Transportation</option>
                                    <option >Service Provider</option>
                                    <option >Distribution/Dealer</option>
                                    <option >Other</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="geographical-area" class="control-label">Geographical Service Area</label>
                                <select id="geographical-area" class="form-control js-geographical-area-single">
                                    <option ></option>
                                    <option>Local</option>
                                    <option >Regional</option>
                                    <option >National</option>
                                    <option >International</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="service-detials" class="control-label">Services or Goods Supplied</label>
                                <select id="service-detials" class="form-control js-service-detials-multiple" multiple="multiple">
                                    <!--<optgroup label="Bear">
                                        <option value="Castle">Castle</option>
                                        <option value="Safari">Safari</option>
                                        <option value="Konyagi">Konyagi</option>
                                    </optgroup>-->
                                    <option value="non-alcoholic">Non-alcoholic drinks</option>
                                    <option value="alcoholic">Alcoholic drinks</option>
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
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="payment-method" class="control-label">Payment Method</label>
                                <select id="payment-method" class="form-control js-payment-method-single">
                                    <option ></option>
                                    <option>Cash</option>
                                    <option >Mobile Money</option>
                                    <option >Bank</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Bank Name</label>
                                <input type="tel" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Beneficiary Name</label>
                                <input type="tel" class="form-control" id="inputCity">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Bank Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">City</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="bank-state" class="control-label">State</label>
                                <select id="bank-state" class="form-control js-bank-state-single">
                                    <option ></option>
                                    <option>Tanzania</option>
                                    <option >Uganda</option>
                                    <option >Kenya</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputAddress">International Bank Account Number (IBAN)</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Swift/Bank Identification Code (BIC)</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Bank Account Number</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    I confirm that the information provided is true 
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>

        </main>

        <!-- SCRIPTS -->
        <!-- JQuery -->
        {{HTML::script("js/jquery-3.3.1.min.js")}}
        <!-- Bootstrap core JavaScript -->
        {{HTML::script("js/bootstrap.min.js")}}
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
        <script>
            // My Select2 Javascript (external .js resource or <script> tag)
            $(document).ready(function () {
                $('.js-state-single').select2({
                    placeholder: "Select a state",
                    allowClear: true,
                    width:  '100%',
                });
            });
            
            $(document).ready(function () {
                $('.js-legal-structure-single').select2({
                    placeholder: "Legal Structure",
                    allowClear: true,
                    width:  '100%',
                });
            });
            
            $(document).ready(function () {
                $('.js-business-service-single').select2({
                    placeholder: "Type of Business/Commodity Service",
                    allowClear: true,
                    width:  '100%',
                });
            });
            
            $(document).ready(function () {
                $('.js-geographical-area-single').select2({
                    placeholder: "Geographical Service Area",
                    allowClear: true,
                    width:  '100%',
                });
            });
            
            $(document).ready(function () {
                $('.js-payment-method-single').select2({
                    placeholder: "Payment Method",
                    allowClear: true,
                    width:  '100%',
                });
            });
            
            $(document).ready(function () {
                $('.js-bank-state-single').select2({
                    placeholder: "State",
                    allowClear: true,
                    width:  '100%',
                });
            });
            
            $(document).ready(function () {
                $('.js-service-detials-multiple').select2({
                    placeholder: "Services or Goods Supplied",
                    width:  '100%',
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
    </body>

</html>
