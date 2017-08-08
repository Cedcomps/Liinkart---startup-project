<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Gstt\Achievements\Achiever;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Cashier\Billable;
use Cmgmyr\Messenger\Traits\Messagable;

class User extends Authenticatable
{
    use Notifiable;
    use Achiever;
    use HasRoles;
    use Billable;
    use Messagable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'provider_id', 'provider', 'name', 'country', 'city', 'email', 'avatar', 'description', 'specialist', 'password', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
    
      
    public function posts() 
    {
        return $this->hasMany(\App\Post::class);
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    } 

    public function socialProviders()
    {
        return $this->hasMany(\App\SocialProvider::class);
    } 
}
