<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;


    const ID = 'id';
    const HASH_ID = 'hash_id';
    const LINK = 'link';
    const EXPIRED_AT = 'expired_at';
    const CLICK_COUNT = 'click_count';

    protected $fillable = [
        self::HASH_ID,
        self::LINK,
        self::EXPIRED_AT,
        self::CLICK_COUNT,
    ];
}
