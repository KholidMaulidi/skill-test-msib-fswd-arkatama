<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
class penggunaController extends Controller
{
    public function store(Request $request)
    {
        $input = $request->input('data');

        preg_match('/^(.*?)(\d+)\s+(.*)$/', $input, $matches);

        if (count($matches) == 4) {
            $name = strtoupper(trim($matches[1]));
            $age = $matches[2];
            $city = strtoupper(trim($matches[3]));

            $city = preg_replace('/\b(?:tahun|thn|th)\b/i', '', $city);

            $user = new Pengguna;
            $user->name = $name;
            $user->age = $age;
            $user->city = $city;
            $user->save();

            return redirect()->route('home')->with('success', 'Data berhasil disimpan');
        } else {
            return redirect()->route('home')->with('error', 'Format data tidak valid');
        }
    }

}
