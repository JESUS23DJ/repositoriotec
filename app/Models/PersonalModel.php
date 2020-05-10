<?php namespace App\Models;

use CodeIgniter\Model;

class PersonalModel extends Model
{
    protected $table      = 'Empleados';
    protected $primaryKey = 'id';

    protected $returnType     = 'array';
    

    protected $allowedFields = ['id', 'nombre','apellido_p','apellido_m','edad','sexo','f_nacimiento',
                                'email','telefono','direccion','ciudad','c_p','are_de_trabajo','salario'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}