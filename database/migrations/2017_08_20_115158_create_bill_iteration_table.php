<?php

use App\Models\BillIteration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillIterationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_iterations', function(Blueprint $table){
            $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('content');
            $table->enum('status',BillIteration::BILL_STATUSES);
            $table->timestamp('voting_closed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bill_iterations');
    }
}
