<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    private $rules = [
        'title' => 'required',
        'content' => 'required'
    ];
    protected $fillable = ['title', 'content'];
	//

}
