<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nis', 50)->unique();
            $table->string('nama', 50);
            $table->text('alamat');
            $table->enum('jenis_kelamin', [
                'laki-laki', 
                'perempuan',
            ]);
            $table->enum('agama', [
                'islam',
                'budha',
                'hindu',
                'kristen',
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
