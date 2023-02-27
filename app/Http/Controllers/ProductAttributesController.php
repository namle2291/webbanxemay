<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductAttributes;
use Illuminate\Http\Request;

class ProductAttributesController extends Controller
{
    function add($id = null)
    {
        $product_id = Product::find($id);
        $product_attr = ProductAttributes::where('id_product', $id)->get();
        return view('admin.attribute.add', compact('product_id', 'product_attr'));
    }
    function store(Request $request)
    {
        $data = $request->all();
        $id_product = $request->id_product;
        unset($data['_token']);

        $this->customValidator($data, [
            'color' => 'required|array|min:1',
            'stock' => 'required|array|min:1'
        ], [
            'color' => 'Màu sắc',
            'stock' => 'Tồn kho'
        ]);

        foreach ($data['color'] as $key => $value) {
            $attr = new ProductAttributes();
            $attr->color = $data['color'][$key];
            $attr->stock = $data['stock'][$key];
            $file = $data['image'][$key];
            if ($file != null) {
                $filename = $file->hashName();
                $file->storeAs('/public/product_attr', $filename);
                $attr->image = $filename;
            }
            $attr->id_product = $id_product;
            $attr->save();
        }

        return redirect()->back();
    }
}
