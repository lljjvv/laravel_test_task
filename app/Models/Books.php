<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'author',
        'release_date',
        'added_by_user_id',
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'added_by_user_id');
    }
}
