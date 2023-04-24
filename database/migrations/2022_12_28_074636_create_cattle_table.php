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
            $table->string('GalvijoNr');
            $table->string('MotinosNr')->nullable();
            $table->string('Tipas');
            $table->date('GimimoData')->nullable();
            $table->decimal('Amzius',7,1)->nullable();;
            $table->string('Veisl')->nullable();;
            $table->string('PM')->nullable();;
            $table->string('Versing')->nullable();
            $table->date('VersData')->nullable();
            $table->date('SeklData')->nullable();
            $table->date('LastVers')->nullable();
            $table->integer('AtsivestVers')->nullable();
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
