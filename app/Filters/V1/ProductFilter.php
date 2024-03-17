<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;

class ProductFilter
{

    public function transform(Request $request)
    {
        // accept query parameters


        // return array for query in database
        return "hello world";
    }
}
