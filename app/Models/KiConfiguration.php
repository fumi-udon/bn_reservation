<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KiConfiguration extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'key',
        'page_id',
        'page_name',
        'name1',
        'name2',
        'name3',
        'name4',
        'status1',
        'status2',
        'opt1',
        'opt2',
        'text1',    // 追加
        'text2',    // 追加
        'json1',    // 追加
        'json2',    // 追加
        'flg1',
        'flg2',
        'flg3',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'status1' => 'integer',
        'status2' => 'integer',
        'flg1' => 'boolean',
        'flg2' => 'boolean',
        'flg3' => 'boolean',
        'json1' => 'array',    // 追加: JSONをPHPの配列として扱う
        'json2' => 'array',    // 追加: JSONをPHPの配列として扱う
    ];

    // 既存のメソッドはそのまま
}