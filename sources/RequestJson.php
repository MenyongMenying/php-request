<?php

namespace MenyongMenying\PHP\MenyongMenyingLibrary\Request;

use MenyongMenying\PHP\MenyongMenyingLibrary\Data\Data;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * 
 * @version 0.0.1
 * 
 * @since 2025-06-06
 * 
 * @property Data $data Menyimpan data hasil input request.
 * 
 * @method string getRawData(string $source) Mengambil data mentah input request berdasarkan sumber/source.
 */
final class RequestJson
{
    /**
     * Menyimpan data hasil input request.
     *
     * @var \MenyongMenying\PHP\MenyongMenyingLibrary\Data\Data 
     */
    private Data $data;

    /**
     * getRawData(string $source)
     * 
     * Mengambil data mentah input request berdasarkan sumber/source.
     *
     * @param  string $source 
     *
     * @return string         
     */
    public function getRawData(string $source) :string
    {
        return file_get_contents($source);
    }
}