<?php

namespace App\Models;

use CodeIgniter\Model;

class TestingModel extends Model
{
    protected $table          = 'testing_db';
    protected $primaryKey     = 'id';
    protected $returnType     = 'array';
    // protected $useSoftDeletes = false;
    protected $allowedFields  = [
        'comment'
    ];
    protected $useTimestamps      = true;
    // protected $validationRules    = [];
    // protected $validationMessages = [];
    protected $skipValidation     = false;
}
