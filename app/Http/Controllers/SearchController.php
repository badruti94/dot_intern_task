<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function provinsiSearch(Request $request)
    {
        $q = $request->q;
        $data = $this->ambilData('https://api.rajaongkir.com/starter/province');
        $dataSearch = [];

        foreach($data as $dt){
            if(strpos(strtolower($dt->province), strtolower($q)) !== false){
                $dataSearch[] = $dt->province;
            }
        }

        $result = [
            'keyword' => $q,
            'kategori' => 'provinsi',
            'data' => $dataSearch
        ];

        return response()->json($result);
    }

    public function kotaSearch(Request $request)
    {
        $q = $request->q;
        $data = $this->ambilData('https://api.rajaongkir.com/starter/city');
        $dataSearch = [];

        foreach($data as $dt){
            if(strpos(strtolower($dt->city_name), strtolower($q)) !== false){
                $dataSearch[] = [
                    'province' => $dt->province,
                    'city' => $dt->city_name,
                    'type' => $dt->type,
                    'postal_code' => $dt->postal_code
                ];
            }
        }

        $result = [
            'keyword' => $q,
            'kategori' => 'kota',
            'data' => $dataSearch
        ];

        return response()->json($result);
    }

    public function ambilData($url)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: 0df6d5bf733214af6c6644eb8717c92c"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return "cURL Error #:" . $err;
        } else {
            $response = json_decode($response);
            return $response->rajaongkir->results;
        }
    }
}
