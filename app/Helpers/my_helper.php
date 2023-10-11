<?php
function userLogin()
{
    $db = \Config\Database::connect();
    return $db->table('users')->where('id', session('id'))->get()->getRow();
}

// menghitung data pada database
function countalgo($algo)
{
    $db = \Config\Database::connect();
    return $db->table('predicts')->where('algoritma', $algo)->countAllResults();
}

function countAll($table)
{
    $db = \Config\Database::connect();
    return $db->table($table)->countAllResults();
}

function history($his)
{

    $db = \Config\Database::connect();
    return $db->table('predicts')->where('algoritma', $his)->get()->getLastRow();
}

function models($nam)
{
    $db = \Config\Database::connect();
    return $db->table('models')->where('type', $nam)->get()->getLastRow();
}
// function upload($tgl)
// {
//     $db = \Config\Database::connect();
//     return $db->table('predicts')->where('algoritma', $tgl)->get()->getLastRow();
// }
