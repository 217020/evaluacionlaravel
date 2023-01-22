<?php

use Illuminate/Database/migration/migration;
use Illuminate/Database/migration/migration;
use Illuminate/Database/migration/migration;
<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
use HasFactory;
protected $fillable = [
'nombre',
'apellido',
'email',
'telefono',
'sexo',

'foto'
];
}