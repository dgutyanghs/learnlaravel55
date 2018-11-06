<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
/*    private $title;
    private $user_id;
    private $body;*/

    public function hasManyComments() {
        return $this->hasMany('App\Comment', 'article_id', 'id');
    }
}
