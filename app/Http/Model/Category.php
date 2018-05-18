<?php
namespace App\Http\Model:
use Illuminate\Database\Elaquent\Model;
use Illuminate\Database\Elaquent\SoftDeletes;

	class Category extends Model
	{
		use SoftDeletes;

		protected $table = 'books';
		protected $fillable = 
		[
			'nmkt',
		];

		protected $guarded = ['id'];
	}
?>