<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
 dev_basis04
    protected $fillable = [
        'title',
        'body',
    ];
    
    public function getPaginateByLimit(int $limit_count = 5)

    public function getPaginateByLimit(int $limit_count = 10)
 master
    {
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
