<?php

namespace App\Models;

use CodeIgniter\Model;

class ResultModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'results';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'date';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // function getAll()
    // {
    //     $builder = $this->db->table('results');
    //     $builder->select('results.id as idr, results.name as result, algoritma, users.username as user, predicts.name as data');
    //     $builder->join('predicts', 'predicts.id = results.id_predict');
    //     $builder->join('users', 'users.id = predicts.id_user');
    //     $query   = $builder->get();
    //     return $query->getResult();
    // }
}
