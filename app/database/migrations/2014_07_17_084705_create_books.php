<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooks extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {

    Schema::create('books', function($table) {

        // Increments method will make a Primary, Auto-Incrementing field. 
        // Most tables start off this way
        $table->increments('id');

        // This generates two columns: `created_at` and `updated_at` to 
        // keep track of changes to a row
        $table->timestamps();

        // The rest of our fields...
        $table->string('title');

    });
}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books');
	}

}
