<?php

namespace App\Service;
use Symfony\Component\Finder\Finder;


class FileManager
{


    const HISTORY_JSON = 'h.json';

    private $history_json;
    public function __construct($history_json)
    {
        //dd($history_json);
        $this->history_json = $history_json;
    }

    public function fromJsonFileToString()
    {
        $finder = new Finder();

        $files =  $finder->files()->in($this->history_json);;

        $finder->files()->name(self::HISTORY_JSON);


        if ($finder->hasResults()) {


            foreach ($finder as $file) {


                $absoluteFilePath = $file->getRealPath();

                $fileNameWithExtension = $file->getRelativePathname();
                //dd($file->getContents());
                $contents = $file->getContents();


            }

            return $contents;


        }

    }
}
