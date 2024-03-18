<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;

class ProductFilter
{

    public function transform(Request $request)
    {
        // $query_array = [];
        // $query_array = ['price', '10'];
        // return $query_array;

        $queryParameters = $request->query();
        $price = $request->query('price');
        $queryArray = [];
        foreach ($queryParameters as $key => $value) {
            // Do something with each query parameter if needed
            $queryArray[$key] = $value;
        }

        return $queryArray;

        //return $price;
    }
}
