<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateAssetsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assets', function (Blueprint $table) {
			$table->increments('id')->unique()->nullable(false);
			$table->string('name', 60)->nullable(false);
			$table->unsignedInteger('category_id')->nullable(false);
			$table->foreign('category_id')
						->references('id')
						->on('categories')
						->onUpdate('cascade')
						->onDelete('cascade');
			$table->decimal('amount', 15, 4)->nullable(false);
			$table->date('purchase_date')->nullable();
			$table->date('service_start_date')->nullable(false);
			$table->date('expiration_date')->nullable(false);
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable(false);
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))->nullable(false);
			$table->engine = 'InnoDB';
		});
	}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
