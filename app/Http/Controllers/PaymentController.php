<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        return view('model.payment.index');
    }

    public function store($payment_id){
        return view('model.payment.store', compact('payment_id'));
    }

    public function create(){
        return view('model.payment.create');
    }

    public function edit($payment_id){
        return view('model.payment.edit', compact('payment_id'));
    }

    public function update($payment_id){
        return view('model.payment.update', compact('payment_id'));
    }

    public function destroy($payment_id){
        return view('model.payment.destroy', compact('payment_id'));
    }

    public function show($payment_id){
        return view('model.payment.show', compact('payment_id'));
    }

    
}
