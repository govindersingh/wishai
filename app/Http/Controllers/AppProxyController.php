<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Share;
use App\Models\Cart;
use App\Models\Customers;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class AppProxyController extends Controller
{
    public function index()
    {
        $shareId = randomNumber(30);
        return $shareId;
    }

    public function saveWish(Request $request)
    {
        $input = $request->input();
        $shareId = (!$input['share_id']) ? randomNumber(30) : $input['share_id'];
        try {
            //| Create OR Update shared link data.
            $share = Share::firstOrNew(['share_id' => $shareId]);
            $share->user_id = Auth::id();
            $share->customer_id = $input['customer']['customer_id'];
            $share->save();

            //| Create OR Update Customer data.
            $customer = Customers::firstOrNew(['share_id' => $shareId],['customer_id' => $input['customer']['customer_id']]);
            $customer->user_id = Auth::id();
            $customer->customer_name = $input['customer']['customer_name'];
            $customer->customer_email = $input['customer']['customer_email'];
            $customer->save();

            //| Create Product data.
            Products::updateOrCreate(['share_id' => $shareId, 'variant_id' => $input['product']['variant_id']],[
                'user_id' =>  Auth::id(),
                'customer_id' => $input['customer']['customer_id'],
                'product_id' => $input['product']['product_id'],
                'handle' => $input['product']['handle']
            ]);
            $product = Products::where('share_id', $shareId)->get(['product_id','variant_id','handle']);

            $data = [
                "wishai_page" => "/pages/wishai",
                "share_id" => $shareId,
                "product" => $product,
                "wishlist_count" => count($product)
            ];
            return response()->json($data);
        } catch (\Exception $error) {
            echo $error->getMessage();
        }
    }
}


function randomNumber($length)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
