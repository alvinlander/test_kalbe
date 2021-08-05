<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Sell;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SellController extends Controller
{
    public function order(Request $request)
    {
        $reqCust = $request->except('quantity', 'product_id');
        try {
            $cust = Customer::create($reqCust);
            $dataOrder = [
                'customer_id' => $cust->id,
                'product_id' => $request->product_id,
                'date_order' => Carbon::now(),
                'quantity' => $request->quantity,
            ];
            $orderCreated = Sell::create($dataOrder);
            $dataProduct = Product::findOrFail($orderCreated->product_id);
            $tempQuantity = $dataProduct['quantity'];
            $dataProductUpdate['quantity'] = $tempQuantity - $orderCreated->quantity;
            $dataProduct->update($dataProductUpdate);
            return redirect()->to('/');
        } catch (Exception $e) {
            Log::info($e);
        }
    }
}
