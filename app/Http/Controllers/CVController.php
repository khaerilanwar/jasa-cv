<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CV;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function ats(Request $request)
    {
        $sortBy = $request->query('sort');
        $modelData =
            $sortBy === 'favorite' ?
            CV::byCategory('ats')->orderBy('favorite_number', 'desc') :
            CV::byCategory('ats')->orderBy('code_name', 'asc');

        $data = [
            'model' => $modelData->simplePaginate(10)
        ];

        return view('pages.cv-ats', $data);
    }

    public function creative(Request $request)
    {
        $sortBy = $request->query('sort');
        $modelData =
            $sortBy === 'favorite' ?
            CV::byCategory('creative')->orderBy('favorite_number', 'desc') :
            CV::byCategory('creative')->orderBy('code_name', 'asc');

        $data = [
            'model' => $modelData->simplePaginate(10)
        ];

        return view('pages.cv-creative', $data);
    }
}
