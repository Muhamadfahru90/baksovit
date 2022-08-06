<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'task';
    //jika tabel product yang ingin memakai model ini
    // protected $fillable = [];
    //untuk menentukan field apa saja yang akan kita isikan datanya
    // bisa diisi kosong 
    // protected $guaranted = [];
    //untuk menentukan filed apa saja yang tidak boleh diisi sembarangan
    //tidak boleh disi dengan kosong
    protected $guarded = [];
}
