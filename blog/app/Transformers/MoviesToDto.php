<?php 

namespace App\Transformers;
use App\Models\Movies;

class MoviesToDto 
{
    public static function provideTransformer(Movies $movie) {

        if ($movie->type == "Comedy")
            $movieCategory = "Comedy / Drama";
        elseif ($movie->type == "Mystery/Crime")
            $movieCategory = "Mystery / Crime";
        else
            $movieCategory = $movie->type;

        return [
            "id" => $movie->id,
            "name" => $movie->name,
            "type" => $movieCategory,
        ];
    }
}