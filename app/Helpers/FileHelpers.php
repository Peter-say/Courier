<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileHelpers
{

    public static function saveImageRequest($file, $path)
    {
        $file_name = $file->getClientOriginalName();
        $file->move(public_path($path), $file_name);
        return $path . "/" . $file_name;
    }
}
