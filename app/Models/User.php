<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\MediasConversions;





class User extends Authenticatable implements HasMedia
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    use InteractsWithMedia;
    use MediasConversions;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'user_info',
        'user_image',
        'login',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
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
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
   
  //public $registerMediaConversionsUsingModelInstance = true;


    public function registerMediaCollections(): void
    {
    $this->addMediaCollection('avatars')
         ->singleFile();
    }


    public function reviews(){

        return $this->hasMany(Review::class);
    }

    public function reviewUserLike(){
        return $this->hasMany(ReviewUserLike::class);
    }

    public function reviewUserComment(){
        return $this->hasMany(ReviewUserComment::class);
    }

    public function commentUserLike(){
        return $this->hasMany(CommentUserLike::class);
    }

    
}
