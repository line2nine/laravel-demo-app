<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DictionaryController extends Controller
{
    public function showForm()
    {
        return view('dictionary');
    }

    public function findByKeyword($eng, $keyword, $vie)
    {
        for ($i = 0; $i < count($eng); $i++) {
            if ($keyword == $eng[$i]) {
                return $vie[$i];
            }
        }
        return null;
    }

    public function dictionary(Request $request)
    {
        $transForm = $request->eng;
        $eng = ['bird', 'dog', 'cat', 'mouse'];
        $vie = ['con chim', 'con chó', 'con mèo', 'con chuột'];
        $result = $this->findByKeyword($eng, $transForm, $vie);
        return view('/translate', compact('result'));
    }
}
