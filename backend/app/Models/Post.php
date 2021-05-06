<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'id';
    // 全て入力されていないとDBに保存されない
    protected $fillable = ['title', 'meaning', 'example', 'synonyms', 'antonyms', 'note'];
    // Json(array)形式でupdated_atを非表示にする
    protected $hidden = ['updated_at'];
    // Json(array)形式で指定したカラムを表示する
    protected $visible = ['title', 'meaning', 'example', 'synonyms', 'antonyms', 'note'];

    public function like()
    {
      return $this->hasMany(Like::class);
    }
}
