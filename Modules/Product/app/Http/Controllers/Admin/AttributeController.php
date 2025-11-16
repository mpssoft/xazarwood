<?php

namespace Modules\Product\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Product\Models\Attribute;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getValues(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required'
            ]
        );

        $attr = Attribute::where('name',$data['name'])->first();

        if(is_null($attr))
            return response(['data' => []]);

        return response(['data'=> $attr->values()->pluck('value')]);
    }

}
