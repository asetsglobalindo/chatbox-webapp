<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CobaController extends Controller
{
    public function index()
    {
        $url = "https://service-chat.qontak.com/api/open/v1/templates/category";
        $token = "HU3uk5s8O1gnC1ryZEplWzCr8HYIRFQ-F43eP6ou2VU"; // Simpan di .env untuk keamanan

        $response = Http::withToken($token)->get($url);

        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data);
        }

        return response()->json(['error' => 'Gagal mengambil data'], $response->status());
    }
}
