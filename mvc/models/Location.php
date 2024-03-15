<?php
namespace App\Models;
use App\Models\CRUD;

class Location extends CRUD{

    protected $table = 'location';
    protected $primaryKey = 'id';
    protected $fillable = ['date_debut', 'date_fin', 'prix','cient_id'];

}
