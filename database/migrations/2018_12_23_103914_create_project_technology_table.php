<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTechnologyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_technology', function  (Blueprint $table)
        {
            $table->unsignedInteger('project_id');
            $table->unsignedInteger('technology_id');

            // Jako, że project_id wskazuje na kolumnę "projects.id", jest to klucz obcy (przechowuje wartość z obcej tabeli)
            // Musimy więc nałożyć na ta kolumnę tzw. klucz obcy
            // W tym przypadku chcemy, by w momencie usunięcia projektu, usuwały "przypisania" kategorii do tego projektu (czyli rekordy z tej tabeli)
            // Robimy to za pomoca dyrektyw onDelete/onUpdate.
            // Możliwe wartości to jeszcze: 
            // restrict - jeżeli będa jakies przypisane technologie do projektu -> nie będzie mmożna go usunac,
            // cascade - gdy usuniemy projekt, usuniemy wszystkie przypisania kategorii (nie same kategorie),
            $table->foreign('project_id')
                  ->references('id')
                  ->on('projects')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('technology_id')
                  ->references('id')
                  ->on('technologies')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_technology');
    }
}
