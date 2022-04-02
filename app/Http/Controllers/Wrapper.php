<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class Wrapper extends Controller
{
    public function surahs(){
        $json= Http::get('https://quran-api-id.vercel.app/surahs')->json();

        return response()->json($json);
    }

    public function search_surahs(){
        $json= Http::get('https://quran-api-id.vercel.app/surahs/112')->json();

        return response()->json($json);
    }

    public function ayahs(){
        $json= Http::get('https://quran-api-id.vercel.app/surahs/112/ayahs')->json();

        return response()->json($json);
    }

    public function search_ayahs(){
        $json= Http::get('https://quran-api-id.vercel.app/surahs/112/ayahs/2')->json();

        return response()->json($json);
    }

    public function random(){
        $json= Http::get('https://quran-api-id.vercel.app/random')->json();

        return response()->json($json);
    }

}



