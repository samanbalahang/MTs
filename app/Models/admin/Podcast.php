<?php
namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    use HasFactory;
    protected $fillable=[
        "uri",
        "title",
        "post_desc",
        "mainImg",
        "content",
        "sort",
    ];
}
