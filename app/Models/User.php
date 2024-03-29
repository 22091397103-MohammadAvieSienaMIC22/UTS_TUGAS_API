<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Contact;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'username',
        'password',
        'confirm_password',
    ];

    protected $hidden = [
        'password',
        'confirm_password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
            'confirm_password' => 'hashed',
        ];
    }

    public function Contact()
    {
        return $this->hasMany(Contact::class, 'user_id', 'id');
    }
}
