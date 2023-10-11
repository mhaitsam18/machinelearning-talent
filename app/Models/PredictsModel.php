<?php

namespace App\Models;

use CodeIgniter\Model;

class PredictsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'predicts';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'algoritma', 'result', 'id_user', 'banding', 'banding2'];

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

    function getAll()
    {
        $builder = $this->db->table('predicts');
        $builder->select('predicts.id as idp, predicts.name as file, users.username as user, result as resu, algoritma, banding, banding2, predicts.created_at as create');
        $builder->join('users', 'users.id = predicts.id_user');
        $query   = $builder->get();
        return $query->getResult();
    }
}
