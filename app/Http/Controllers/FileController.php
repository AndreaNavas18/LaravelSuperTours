<?php
//app/Http/Controllers/FileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function show($filename)
    {
        $filePath = storage_path('app/files/' . $filename);

        if (file_exists($filePath)) {
            $fileContents = file_get_contents($filePath);
            $fileMime = mime_content_type($filePath);

            // Emitir el archivo al navegador con los encabezados adecuados
            return Response::make($fileContents, 200, [
                'Content-Type' => $fileMime,
                'Content-Disposition' => 'inline; filename="' . $filename . '"',
            ]);
        }

        // Si no se encuentra el archivo, devolver 404
        abort(404);
    }
}