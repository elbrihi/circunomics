<?php

namespace App\Service;


use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use App\Service\FileManager;
use Symfony\Component\Finder\Finder;


class JsonManager
{
    private $encoders;
    const CSV_SOURCE = 'json';


    public function decode($str)
    {
        $jsonobj = '[{"Peter":35,"Ben":37,"Joe":43},{"Peter":35,"Ben":37,"Joe":43}]';

       return json_decode($str,true);
    }
}
