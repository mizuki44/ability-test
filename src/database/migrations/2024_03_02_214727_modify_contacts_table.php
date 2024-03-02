<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            //  $table->bigInteger('category_id')->unsigned();
            //  $table->foreign('category_id')->references('category_id')->on('categories')->nullable(false);
            $table->renameColumn('name', 'first_name')->nullable(false);
            //   $table->string('last_name',255)->nullable(false);
            //    $table->tinyInteger('gender')->unsigned()->comment('性別 1:男、2:女、3:その他')->nullable(false);
            //     $table->string('address', 255)->nullable(false);
            //      $table->string('building', 255);
            //       $table->text('detail')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            //
        });
    }
}
