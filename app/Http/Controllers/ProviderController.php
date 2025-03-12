<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function getProviderLogos()
    {
        $imagePath = public_path('provider.png'); // Path to the provider image
        $image = imagecreatefrompng($imagePath); // Load the image using GD library

        if (!$image) {
            return response()->json(['error' => 'Image not found.'], 404);
        }

        // Define grid dimensions (assumed values)
        $logoWidth = 128;
        $logoHeight = 48;

        $width = imagesx($image);
        $height = imagesy($image);

        $columns = floor($width / $logoWidth);
        $rows = floor($height / $logoHeight);

        $logos = [];

        // Extract logos from the image
        for ($y = 0; $y < $rows; $y++) {
            for ($x = 0; $x < $columns; $x++) {
                $cropped = imagecreatetruecolor($logoWidth, $logoHeight);
                imagecopy($cropped, $image, 0, 0, $x * $logoWidth, $y * $logoHeight, $logoWidth, $logoHeight);

                ob_start();
                imagepng($cropped);
                $imageData = ob_get_clean();
                $logos[] = 'data:image/png;base64,' . base64_encode($imageData);
                imagedestroy($cropped);
            }
        }

        imagedestroy($image);

        return response()->json($logos);
    }

}
