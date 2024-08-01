<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Explicitly set the table name
    protected $table = 'user';

    // Set the primary key if it's different from the default 'id'
    protected $primaryKey = 'user_id';

    // Specify the columns that can be mass-assigned
    protected $fillable = [
        'profile_image', 'first_name', 'last_name', 'email', 'password', 'crtedte'
    ];

    // Specify any columns that should be hidden from arrays
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Specify the data type for timestamps
    public $timestamps = false;  // if 'crtedte' is used for created_at and there is no updated_at

    // Define the relationship with the Blog model
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'user_id', 'user_id');
    }
}
