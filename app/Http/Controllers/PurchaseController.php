<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        return view('purchase');
    }
    
    public function vendor_index() {
        //
        return view('vendor');
    }
    
    public function vendor_registration() {
        //
        return view('registervendor');
    }

    public function pr_index() {
        //
        return view('purchaserequisition');
    }

    public function create_PR() {
        //
        return view('createPR');
    }

    public function PR_details($id) {
        //
        return view('PRdetails');
    }

    public function select_vendors($id) {
        //
        return view('selectvendors');
    }

    public function upload_quatations($id) {
        //
        return view('uploadquatations');
    }

    public function select_supplier($id) {
        //
        return view('selectsupplier');
    }

    public function purchaseorder() {
        //
        return view('purchaseorder');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
