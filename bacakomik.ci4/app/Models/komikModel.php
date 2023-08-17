<?php

namespace App\Models;

use CodeIgniter\Model;

class komikModel extends Model
{
    protected $table          = 'komik';
    protected $primaryKey     = 'id';
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields  = [
        'sampul',
        'judul',
        'slug_name',
        'writer',
        'pubisher',
    ];
    // protected $useTimestamps      = true;
    // protected $validationRules    = [];
    // protected $validationMessages = [];
    protected $skipValidation     = false;
}
