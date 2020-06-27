<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function setToken(){
        $this->token=bin2hex(random_bytes(3));
        $this->token_expiry=time()+360;
        $this->save();
        return $this->token;
    }

    public function validateToken($token){
        return ($this->token==$token) && ($this->token_expiry>(time()+60));
    }

    public function invalidateToken(){
        $this->token='invalid';
        $this->token_expiry=time()-60;
        return;
    }
}
