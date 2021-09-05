<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('records');

        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->string('unit');
            $table->string('ward');
            $table->string('bed');
            $table->date('admission_date');
            $table->date('examination_date');
            $table->string('informant_name');
            $table->string('relation_with_patient');
            $table->string('referred_from');
            $table->string('referred_reason');
            $table->string('patient_name');
            $table->string('age');
            $table->string('sex');
            $table->string('religion');
            $table->string('inhabitant');
            $table->string('marital_status');
            $table->string('occupation');
            $table->string('education');
            $table->string('complain');
            $table->string('present_illness');
            $table->string('father');
            $table->string('mother');
            $table->string('siblings');
            $table->string('consanguinity');
            $table->string('social_pos_family');
            $table->string('family_history_mental');
            $table->string('family_tree');
            $table->string('pregnancy_and_birth');
            $table->string('early_developmental_milestones');
            $table->string('childhood');
            $table->string('education_history');
            $table->string('occupation_history');
            $table->string('marriage_sex_history');
            $table->string('current_relationship');
            $table->string('social_circumstances');
            $table->string('substance_use');
            $table->string('forensic_history');
            $table->string('past_psychiatry_history');
            $table->string('past_medical_illness');
            $table->string('comorbid_illness');
            $table->string('relationship');
            $table->string('character');
            $table->string('hobbies');
            $table->string('predominant_mood');
            $table->string('attitude_and_standards');
            $table->string('ultimate_concern');

            // Rimon start 
            

            $table->string('body_build');
            $table->string('nutritional_status');
            $table->string('pulse');
            $table->string('bp');
            $table->string('temp');
            $table->string('res_rate');
            $table->string('height');
            $table->string('weight');
            $table->string('bmi');
            $table->string('bowel');
            $table->string('bladder');
            $table->string('anaemia');
            $table->string('jaundice');
            $table->string('oedema');

            $table->string('higher_psychic_function');
            $table->string('motor_function');
            $table->string('cranial_nerves');
            $table->string('sensory');
            $table->string('endocrine_system');
            $table->string('musculoskeletal_system');
            $table->string('d_others');

            
            


            // rimon end
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
        Schema::drop('records');
    }
}
