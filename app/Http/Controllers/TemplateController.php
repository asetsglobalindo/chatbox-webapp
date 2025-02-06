<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TemplateController extends Controller
{
    public function index()
    {
        $token = env('QONTAK_API_TOKEN'); // Gunakan env untuk keamanan
        $url_category = "https://service-chat.qontak.com/api/open/v1/templates/category";
        $url_language = "https://service-chat.qontak.com/api/open/v1/templates/language";

        // Request API
        $responseCategory = Http::withToken($token)->get($url_category);
        $responseLanguage = Http::withToken($token)->get($url_language);

        // Cek jika kedua request sukses
        if ($responseCategory->successful() && $responseLanguage->successful()) {
            $categories = $responseCategory->json();
            $languages = $responseLanguage->json();

            return view('dashboard.templateMessage.index', compact('categories', 'languages'));
        }

        return response()->json(['error' => 'Gagal mengambil data'], 500);
    }


    public function store(Request $request)
    {

        $response = Http::withHeaders([
            'Authorization' => 'Bearer HU3uk5s8O1gnC1ryZEplWzCr8HYIRFQ-F43eP6ou2VU',
            'Content-Type' => 'application/json',
        ])->post('https://service-chat.qontak.com/api/open/v1/templates/whatsapp', [
            'name' => $request->template_name,
            'category' => $request->category,
            'attributes' => [
                [
                    'components' => [
                        [
                            'type' => 'BODY', // Komponen tipe BODY
                            'text' => 'string',
                            'example' => [
                                'body_text' => ['string'],
                                'header_text' => ['string'],
                                'header_handle' => ['string']
                            ]
                        ],
                        [
                            'type' => 'BUTTONS', // Komponen tipe BUTTONS untuk tombol
                            'buttons' => [
                                [
                                    'type' => 'PHONE_NUMBER', // Tipe tombol PHONE_NUMBER
                                    'text' => 'Contact us now', // Menambahkan text pada tombol
                                    'phone_number' => '6285647715796', // Nomor telepon yang valid
                                    'example' => ['string']
                                ],
                                [
                                    'type' => 'URL', // Tipe tombol URL
                                    'text' => 'Visit our YouTube', // Menambahkan text pada tombol
                                    'url' => 'https://youtu.be/5ch94AaPZRQ?si=-dbjWNoDxCxW--NZ',
                                    'example' => ['string']
                                ]
                            ]
                        ]
                    ],
                    'language' => $request->language
                ]
            ]
        ]);

        return $response->json();
    }
}
