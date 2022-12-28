<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cattle', function (Blueprint $table) {
            $table->id();
            $table->integer('GalvijoNr');
            $table->integer('MotinosNr');
            $table->string('Tipas');
            $table->date('GimimoData');
            $table->integer('Amzius');
            $table->string('Veisl');
            $table->string('PM');
            $table->string('Versing');
            $table->date('VersData');
            $table->date('SeklData');
            $table->date('LastVers');
            $table->integer('AtsivestVers');
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
        Schema::dropIfExists('cattle');
    }
};
