<?php

namespace App;

use Illuminate\Support\Str; /* Per lo Slug */
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    static public function generateSlug($str){
        $slug = Str::of($str)->slug('-');
        $newSlug = $slug;
        $counter = 1;

        while(self::where('slug', $newSlug)->first()){
            $newSlug = "$slug - $counter";
            $counter++;
        }
        return $slug;
    }
}
