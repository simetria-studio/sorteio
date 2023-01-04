<?php

namespace App\Http\Controllers;

use ZipArchive;

use App\Models\Number;
use BaconQrCode\Writer;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class GenerateController extends Controller
{

    public function index()
    {
        return view('painel.gerarqr');
    }
    public function generate(Request $request)
    {
        $url = 'http://192.168.18.2:8001/numero/';
        $numbers = [];
        while (count($numbers) < $request->qty) {
            $numbers[] = random_int(1000, 1999);
            $numbers = array_unique($numbers);
        }
        foreach ($numbers as $number) {
            $save = Number::create([
                'number' => $number,
            ]);

            QrCode::size(200)->generate($url . $number, public_path('images/qrcode.' . $number . '.svg'));
        }
        $folderPath = 'images';

        // Nome do arquivo zip
        $zipFileName = 'arquivo.zip';

        // Cria um novo objeto ZipArchive
        $zip = new ZipArchive;

        // Abre o arquivo zip
        if ($zip->open($zipFileName, ZipArchive::CREATE) === TRUE) {

            // Adiciona a pasta e todos os seus arquivos recursivamente
            $zip->addGlob($folderPath . '/*', GLOB_BRACE, ['add_path' => 'images/']);

            // Fecha o arquivo zip
            $zip->close();
        }
        return response()->download($zipFileName);
    }
}
