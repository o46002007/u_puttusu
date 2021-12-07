<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Object_;
use function PHPUnit\Framework\throwException;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProducts()
    {
        try {
        //PRENDERE PARAMETRI DA INPUT//
        // $department = request()->input('department_id');
            $products = Products::get();
            return response()->json(['status' => true, 'result' => $products, 'count' => $products->count()], 200);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'result' => $e->getMessage()], 400);
        }
    }
}