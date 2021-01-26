<?php

namespace App\Models;

use CodeIgniter\Model;

class VoterModel extends Model
{
    protected $table      = 'voters';
    protected $primaryKey = 'id';

    protected $returnType = 'array';
    //protected useSoftDeletes = true;

    protected $allowedFields = ['firstname','lastname','code','voted','vote_date','vote_time'];

    //protected useTimestamps = false;
    //protected createdField  = 'created_at';
    //protected updatedField  = 'updated_at';
    //protected deletedField  = 'deleted_at';

    //protected validationRules    = [];
    //protected validationMessages = [];
    //protected skipValidation     = false;
}


?>