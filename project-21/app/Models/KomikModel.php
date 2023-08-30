<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    protected $table          = 'komik';
    protected $primaryKey     = 'id';
    protected $returnType     = 'array';
    // protected $useSoftDeletes = false;
    protected $allowedFields  = [
        'sampul',
        'judul',
        'slug',
        'karangan',
        'penerbit'
    ];
    protected $useTimestamps      = true;
    // protected $validationRules    = [];
    // protected $validationMessages = [];
    protected $skipValidation     = false;
}
