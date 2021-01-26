<?php

namespace App\Models;

use CodeIgniter\Model;

class positionsModel extends Model
{
    protected $table      = 'positions';
    protected $primaryKey = 'id';

    // protected returnType = 'array';
    // protected useSoftDeletes = true;

     protected $allowedFields = ['position'];

    // protected useTimestamps = false;
    // protected createdField  = 'created_at';
    // protected updatedField  = 'updated_at';
    // protected deletedField  = 'deleted_at';

    // protected validationRules    = [];
    // protected validationMessages = [];
    // protected skipValidation     = false;
}



?>