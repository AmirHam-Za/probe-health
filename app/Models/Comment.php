<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;


class Comment extends Model
{
    protected $table = "picr_comments";
    protected $fillable = ['member_id','comment','ref_by','medicine','test','c_c','o_e','adv','source','created_by','h_o','pre_inv','pres_inv','flowup','pre_med'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function userc()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
