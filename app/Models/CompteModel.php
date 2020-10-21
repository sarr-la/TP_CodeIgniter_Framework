<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class CompteModel extends Model
{
    protected $table = 'Compte';
 
    protected $allowedFields = ['cleRip', 'Etat', 'typecompte', 'datedebut', 
    'datefin', 'numCmpte', 'Frouverture', 'Solde', 'numAgence', 'Agios'];
}