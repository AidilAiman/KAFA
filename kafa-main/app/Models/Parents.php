<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;

    // Define the table name if it's not plural of the class name
    protected $table = 'parents';

    // Define the fillable attributes to allow mass assignment
    protected $fillable = ['user_id', 'parentIC', 'phoneNo', 'address', 'relation'];
    

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


