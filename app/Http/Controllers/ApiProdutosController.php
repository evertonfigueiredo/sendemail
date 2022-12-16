<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

/**
 * Class ApiProdutoController
 * @package App\Http\Controllers
 */
class ApiProdutosController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $im = @imagecreatefromjpeg("2A.jpg"); /* Attempt to open */

        if (!$im) { /* See if it failed */
            $im  = imagecreate(150, 30); /* Create a black image */
            $bgc = imagecolorallocate($im, 255, 255, 255);
            $tc  = imagecolorallocate($im, 0, 0, 0);
            imagefilledrectangle($im, 0, 0, 150, 30, $bgc);
            /* Output an errmsg */
            imagestring($im, 1, 5, 5, "Error loading img.jpg", $tc);
        }

        header("Content-Type: image/jpeg");
        $produto = Produto::create(['nome' => $id]);
        return imagejpeg($im);

    }
}
