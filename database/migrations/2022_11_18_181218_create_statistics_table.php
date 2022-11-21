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
            $table->string('customer_id', 255);
            $table->string('client_id', 255);
            $table->string('job_id', 255);
            $table->string('Backupset', 255);
            $table->string('errors', 255);
            $table->string('warnings', 255);
            $table->string('debug', 255);
            $table->string('block_inc', 255);
            $table->string('currentfile', 255);
            $table->string('NumberOfFilesLeft', 255);
            $table->string('SizeOfUpLoadedData', 255);
            $table->string('SizeOfDataToUpload', 255);
            $table->string('PercentComplete', 255);
            $table->string('Compression', 255);
            $table->string('ETC', 255);
            $table->string('JobComplete', 255);
            $table->string('TotalBlocksUploaded', 255);
            $table->string('NewFiles', 255);
            $table->string('UpdatedFiles', 255);
            $table->string('DeletedFiles', 255);
            $table->string('PermissionUpdatedFiles', 255);
            $table->string('MovedFiles', 255);
            $table->string('CopiedFiles', 255);
            $table->string('TotalDataForThisJob', 255);
            $table->string('TotalNonRetentionData', 255);
            $table->string('TotalRetentionData', 255);
            $table->string('JsonBlob', 255);
            $table->timestamp('time_stamp');
            $table->string('command', 255);
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
