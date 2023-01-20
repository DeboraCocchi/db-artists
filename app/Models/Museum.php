<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Museum extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'nation'];

    public static function generateSlug($string){
        $slug = Str::slug($string, '-');
        /*
            - salvare lo slug originale
            - controllare se esiste
            - generarne uno con in aggiunta un contataore
            -- se esiste generarne un'altro e così via fino a che se ne trova uno non esistente
        */
        $original_slug = $slug;
        $c = 1;
        $exists = Museum::where('slug',$slug)->first();
        while($exists){
            $slug = $original_slug . '-' . $c;
            $exists = Museum::where('slug',$slug)->first();
            $c++;
        }
        return $slug;
    }
}
