<?php
namespace App\Http\Model:
use Illuminate\Database\Elaquent\Model;
use Illuminate\Database\Elaquent\SoftDeletes;

	class Books extends Model
	{
		use SoftDeletes;

		protected $table = 'books';
		protected $fillable = 
		[
			'nama',
			'judul',
			'penerbit',
			'pengarang',
			'thnterbit',
			'harga',
		];

		protected $guarded = ['id'];
	}
?>