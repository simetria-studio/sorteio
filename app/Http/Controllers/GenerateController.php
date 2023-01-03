<?php

namespace App\Http\Controllers;

use App\Models\Number;

use BaconQrCode\Writer;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;







class GenerateController extends Controller
{
    public function generate()
    {
        $url = 'http://192.168.18.2:8001/numero/';
        $numbers = [];
        while (count($numbers) < 20) {
            $numbers[] = random_int(1000, 1999);
            $numbers = array_unique($numbers);
        }
        foreach ($numbers as $number) {
            $save = Number::create([
                'number' => $number,
            ]);

            QrCode::generate($url.$number, public_path('images/qrcode.'.$number.'.svg'));
        }
        return $numbers;
    }
}
