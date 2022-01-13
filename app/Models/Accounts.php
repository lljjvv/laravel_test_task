<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'account_id');
    }

    public function carOwner()
    {
        return $this->hasOneThrough(
            Books::class,
            User::class,
            'account_id',
            'added_by_user_id',
            'id',
            'id'
        );
    }
}
