@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-6">
            <div class="card card-success">
                <div class="card-header">
                    Ward Information
                </div>
                <div class="card-body">
                    <label class="col-sm-4 text-right">Patient ID No :</label>
                    <label class="col-sm-8">{{$record->id }}</label>
                    <label class="col-sm-4 text-right">Unit :</label>
                    <label class="col-sm-8">{{$record->unit}}</label>
                    <label class="col-sm-4 text-right">Ward :</label>
                    <label class="col-sm-8">{{$record->ward}}</label>
                    <label class="col-sm-4 text-right">Bed :</label>
                    <label class="col-sm-8">{{$record->bed}}</label>
                    <label class="col-sm-4 text-right">Date of Admission :</label>
                    <label class="col-sm-8">{{$record->admission_date}}</label>
                    <label class="col-sm-4 text-right">Date of Examination :</label>
                    <label class="col-sm-8">{{$record->examination_date}}</label>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card card-success">
                <div class="card-header">
                    Informant Information
                </div>
                <div class="card-body">
                    <label class="col-sm-4 text-right">Name of Informant :</label>
                    <label class="col-sm-8">{{$record->informant_name}}</label>
                    <label class="col-sm-4 text-right">Relation with Patient :</label>
                    <label class="col-sm-8">{{$record->relation_with_patient}}</label>
                    <label class="col-sm-4 text-right">Referred from/by :</label>
                    <label class="col-sm-8">{{$record->referred_from}}</label>
                    <label class="col-sm-4 text-right">Reason of Referral :</label>
                    <label class="col-sm-8">{{$record->referred_reason}}</label>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card card-success">
                <div class="card-header">
                    Patient Information
                </div>
                <div class="card-body">
                    <label class="col-sm-2 text-right">Name of the Patient :</label>
                    <label class="col-sm-2">{{$record->patient_name}}</label>
                    <label class="col-sm-2 text-right">Age :</label>
                    <label class="col-sm-2">{{$record->age}}</label>
                    <label class="col-sm-2 text-right">Sex :</label>
                    <label class="col-sm-2">{{$record->sex}}</label>

                    <label class="col-sm-2 text-right">Religion :</label>
                    <label class="col-sm-2">{{$record->religion}}</label>
                    <label class="col-sm-2 text-right">Inhabitant :</label>
                    <label class="col-sm-2">{{$record->inhabitant}}</label>
                    <label class="col-sm-2 text-right">Marital Status :</label>
                    <label class="col-sm-2">{{$record->marital_status}}</label>

                    <label class="col-sm-2 text-right">Occupation :</label>
                    <label class="col-sm-2">{{$record->occupation}}</label>
                    <label class="col-sm-2 text-right">Education :</label>
                    <label class="col-sm-6">{{$record->education}}</label>
                </div>
            </div>

            <div class="card card-success">
                <div class="card-header">
                    1. Presenting Complaints
                </div>
                <div class="card-body">
                    <label class="col-sm-12">{{empty($record->complain)?'N/A':$record->complain}}</label>
                </div>
                <div class="card-header">
                    2. History of Present Illness
                </div>
                <div class="card-body">
                    <label class="col-sm-12">{{empty($record->present_illness)?'N/A':$record->present_illness}}</label>
                </div>
                <div class="card-header">
                    3. Family and Social History
                </div>
                <div class="card-body">
                    <label class="col-sm-3 text-right">Father :</label>
                    <label class="col-sm-9">{{empty($record->father)?'N/A':$record->father}}</label>
                    <label class="col-sm-3 text-right">Mother :</label>
                    <label class="col-sm-9">{{empty($record->mother)?'N/A':$record->mother}}</label>
                    <label class="col-sm-3 text-right">Siblings :</label>
                    <label class="col-sm-9">{{empty($record->siblings)?'N/A':$record->siblings}}</label>
                    <label class="col-sm-3 text-right">Consanguinity :</label>
                    <label class="col-sm-9">{{empty($record->consanguinity)?'N/A':$record->consanguinity}}</label>
                    <label class="col-sm-3 text-right">Social Position of Family :</label>
                    <label class="col-sm-9">{{empty($record->social_pos_family)?'N/A':$record->social_pos_family}}</label>
                    <label class="col-sm-3 text-right">Family History of Mental Illness :</label>
                    <label class="col-sm-9">{{empty($record->family_history_mental)?'N/A':$record->family_history_mental}}</label>
                    <label class="col-sm-3 text-right">Family Tree :</label>
                    <label class="col-sm-9">{{empty($record->family_tree)?'N/A':$record->family_tree}}</label>
                </div>
                <div class="card-header">
                    4. Personal History
                </div>
                <div class="card-body">
                    <label class="col-sm-3 text-right">Pregnancy and Birth :</label>
                    <label class="col-sm-9">{{empty($record->pregnancy_and_birth)?'N/A':$record->pregnancy_and_birth}}</label>
                    <label class="col-sm-3 text-right">Early Developmental Milestones :</label>
                    <label class="col-sm-9">{{empty($record->early_developmental_milestones)?'N/A':$record->early_developmental_milestones}}</label>
                    <label class="col-sm-3 text-right">Childhood :</label>
                    <label class="col-sm-9">{{empty($record->childhood)?'N/A':$record->childhood}}</label>
                    <label class="col-sm-3 text-right">Education :</label>
                    <label class="col-sm-9">{{empty($record->education_history)?'N/A':$record->education_history}}</label>
                    <label class="col-sm-3 text-right">Occupation :</label>
                    <label class="col-sm-9">{{empty($record->occupation_history)?'N/A':$record->occupation_history}}</label>
                    <label class="col-sm-3 text-right">Marriage and Sexual History :</label>
                    <label class="col-sm-9">{{empty($record->marriage_sex_history)?'N/A':$record->marriage_sex_history}}</label>
                    <label class="col-sm-3 text-right">Current Relationship :</label>
                    <label class="col-sm-9">{{empty($record->current_relationship)?'N/A':$record->current_relationship}}</label>
                    <label class="col-sm-3 text-right">Social Circumstances :</label>
                    <label class="col-sm-9">{{empty($record->social_circumstances)?'N/A':$record->social_circumstances}}</label>
                    <label class="col-sm-3 text-right">Substance Use :</label>
                    <label class="col-sm-9">{{empty($record->substance_use)?'N/A':$record->substance_use}}</label>
                    <label class="col-sm-3 text-right">Forensic History :</label>
                    <label class="col-sm-9">{{empty($record->forensic_history)?'N/A':$record->forensic_history}}</label>
                </div>
                <div class="card-header">
                    5. Past Psychiatry History
                </div>
                <div class="card-body">
                    <label class="col-sm-12">{{empty($record->past_psychiatry_history)?'N/A':$record->past_psychiatry_history}}</label>
                </div>
                <div class="card-header">
                    6. Past Medical Illness
                </div>
                <div class="card-body">
                    <label class="col-sm-12">{{empty($record->past_medical_illness)?'N/A':$record->past_medical_illness}}</label>
                </div>
                <div class="card-header">
                    7. Co-morbid Illness
                </div>
                <div class="card-body">
                    <label class="col-sm-12">{{empty($record->comorbid_illness)?'N/A':$record->comorbid_illness}}</label>
                </div>
                <div class="card-header">
                    8. Pre-morbid Personality
                </div>
                <div class="card-body">
                    <label class="col-sm-3 text-right">Relationship :</label>
                    <label class="col-sm-9">{{empty($record->relationship)?'N/A':$record->relationship}}</label>
                    <label class="col-sm-3 text-right">Character :</label>
                    <label class="col-sm-9">{{empty($record->character)?'N/A':$record->character}}</label>
                    <label class="col-sm-3 text-right">Leisure Activity / Hobbies :</label>
                    <label class="col-sm-9">{{empty($record->hobbies)?'N/A':$record->hobbies}}</label>
                    <label class="col-sm-3 text-right">Predominant Mood :</label>
                    <label class="col-sm-9">{{empty($record->predominant_mood)?'N/A':$record->predominant_mood}}</label>
                    <label class="col-sm-3 text-right">Attitude and Standards :</label>
                    <label class="col-sm-9">{{empty($record->attitude_and_standards)?'N/A':$record->attitude_and_standards}}</label>
                    <label class="col-sm-3 text-right">Ultimate Concern :</label>
                    <label class="col-sm-9">{{empty($record->ultimate_concern)?'N/A':$record->ultimate_concern}}</label>
                </div>
            

            {{-- rimon start --}}

                <div class="card-header">
                    11. Physical examination
                </div>
                <div class="card-body">
                    <label class="col-sm-3 text-right">1. Bodu Build :</label>
                    <label class="col-sm-9">{{empty($record->body_build)?'N/A':$record->body_build}}</label>
                    <label class="col-sm-3 text-right">2. Nutritional & Status :</label>
                    <label class="col-sm-9">{{empty($record->nutritional_status)?'N/A':$record->nutritional_status}}</label>
                    
                            <label class="col-sm-12 text-left">3. Vital Signs:</label>
                            <label class="col-sm-3 text-right">Pulse :</label>
                            <label class="col-sm-9">{{empty($record->pulse)?'N/A':$record->pulse}}</label>

                            <label class="col-sm-3 text-right">BP :</label>
                            <label class="col-sm-9">{{empty($record->bp)?'N/A':$record->bp}}</label>

                            <label class="col-sm-3 text-right">Temp :</label>
                            <label class="col-sm-9">{{empty($record->temp)?'N/A':$record->temp}}</label>

                            <label class="col-sm-3 text-right">Res. rate :</label>
                            <label class="col-sm-9">{{empty($record->res_rate)?'N/A':$record->res_rate}}</label>
                            <label class="col-sm-12 text-left">4. Body Size:</label>
                            <label class="col-sm-3 text-right">Height :</label>
                            <label class="col-sm-9">{{empty($record->height)?'N/A':$record->height}}</label>
                            <label class="col-sm-3 text-right">Weight :</label>
                            <label class="col-sm-9">{{empty($record->weight)?'N/A':$record->weight}}</label>
                            <label class="col-sm-3 text-right">BMI :</label>
                            <label class="col-sm-9">{{empty($record->bmi)?'N/A':$record->bmi}}</label>
                    <label class="col-sm-12 text-right"></label>
                    <label class="col-sm-3 text-right">5. Bowel :</label>
                    <label class="col-sm-9">{{empty($record->bowel)?'N/A':$record->bowel}}</label>
                    <label class="col-sm-3 text-right">6. Bladder :</label>
                    <label class="col-sm-9">{{empty($record->bladder)?'N/A':$record->bladder}}</label>
                    <label class="col-sm-3 text-right">7. Anaemia :</label>
                    <label class="col-sm-9">{{empty($record->anaemia)?'N/A':$record->anaemia}}</label>
                    <label class="col-sm-3 text-right">8. Jaundice :</label>
                    <label class="col-sm-9">{{empty($record->jaundice)?'N/A':$record->jaundice}}</label>
                    <label class="col-sm-3 text-right">9. Oedema :</label>
                    <label class="col-sm-9">{{empty($record->oedema)?'N/A':$record->oedema}}</label>
                </div>
                <div class="card-header">
                    12. Systemic examination:
                </div>
                <div class="card-body">
                    <label class="col-sm-12 text-left">A) Nervous system:</label>
                    <label class="col-sm-3 text-right">9. Oedema :</label>
                    <label class="col-sm-9">{{empty($record->oedema)?'N/A':$record->oedema}}</label>
                </div> {{-- end card body --}}
            </div>

            {{-- rimon end --}}
        </div>
        </div>
        


        <div class="flex-row">
            <div class="col-lg-9">
                <form action="{{url('doctors/records/'.$record->id)}}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button class="btn btn-danger">Delete</button>
            </form>
            </div>
            <div class="col-lg-3">
                
            </div>
        </div>
    </div>
@endsection
