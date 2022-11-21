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
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id', 255)->unsigned();
            $table->string('client_id', 255)->unsigned();
            $table->string('job_id', 255)->unsigned();
            $table->string('Backupset', 255)->unsigned();
            $table->string('errors', 255)->unsigned();
            $table->string('warnings', 255)->unsigned();
            $table->string('debug', 255)->unsigned();
            $table->string('block_inc', 255)->unsigned();
            $table->string('currentfile', 255)->unsigned();
            $table->string('NumberOfFilesLeft', 255)->unsigned();
            $table->string('SizeOfUpLoadedData', 255)->unsigned();
            $table->string('SizeOfDataToUpload', 255)->unsigned();
            $table->string('PercentComplete', 255)->unsigned();
            $table->string('Compression', 255)->unsigned();
            $table->string('ETC', 255)->unsigned();
            $table->string('JobComplete', 255)->unsigned();
            $table->string('TotalBlocksUploaded', 255)->unsigned();
            $table->string('NewFiles', 255)->unsigned();
            $table->string('UpdatedFiles', 255)->unsigned();
            $table->string('DeletedFiles', 255)->unsigned();
            $table->string('PermissionUpdatedFiles', 255)->unsigned();
            $table->string('MovedFiles', 255)->unsigned();
            $table->string('CopiedFiles', 255)->unsigned();
            $table->string('TotalDataForThisJob', 255)->unsigned();
            $table->string('TotalNonRetentionData', 255)->unsigned();
            $table->string('TotalRetentionData', 255)->unsigned();
            $table->string('JsonBlob', 255)->unsigned();
            $table->timestamps('time_stamp');
            $table->string('command', 255)->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statistics');
    }
};
