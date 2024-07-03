<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Gate;
use Modules\Product\Entities\Product;
use Picqer\Barcode\BarcodeGeneratorHTML;


class BarcodeController extends Controller
{

    public function printBarcode() {
        abort_if(Gate::denies('print_barcodes'), 403);

        return view('product::barcode.index');
    }

    public function selectByBarcode(Request $request)
    {
        $barcode = $request->query('barcode');
        $product = Product::where('product_code', $barcode)->first();

        if ($product) {
            return response()->json([
                'success' => true,
                'product' => $product
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Product not found'
            ]);
        }
    }

}
