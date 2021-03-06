<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Reserve;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','is_admin','image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function search($keySearch, $totalPage = 10)
    {   

        return $this->where('name', 'LIKE', "%{$keySearch}%")
                    ->orWhere('email',$keySearch)
                    ->paginate($totalPage);
    }

    public function reserves()
    {
        return $this->hasMany(Reserve::class);
    }

    public function updateUser($request, $nameFile = '')
    {     
        
        
        if($nameFile != null)
        {
            $data['image'] = $nameFile;
        }
        
        $data['name'] = $request->name;

        if($request->is_admin == 0)
        {
            $data['is_admin'] = 0;
        }
        elseif($request->is_admin == 1)
        {
            $data['is_admin'] = 1;
        }
         

        if($request->password != null)
        {
            $data['password'] = bcrypt($request->password);
        }
        
        
        
        return $this->update($data);
    }
}
