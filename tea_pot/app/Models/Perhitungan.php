<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perhitungan extends Model
{
    use HasFactory;
    function get_bobot1()
	{
		# code...
		$query = $this->db->get('bobot');
		return $query->row();
	}
}
