<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNoticiasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('noticias', function (Blueprint $table) {
			$table->increments('id');
			$table->string('titulo');
			$table->string('sub_texto', 250);
			$table->text('texto');
			$table->string('imag');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('noticias');
	}
}
