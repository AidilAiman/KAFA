<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Timetable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'phone',
        'password',
        'profile_picture',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

/**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    public function timetables()
    {
        return $this->hasMany(Timetable::class, 'userID');
    }
    public function parent()
    {
        return $this->hasOne(Parents::class);
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function muipAdmin() // Corrected method name
    {
        return $this->hasOne(MuipAdmin::class);
    }

    public function scopeParents($query)
    {
        return $query->where('role', 'parent');
    }

}

