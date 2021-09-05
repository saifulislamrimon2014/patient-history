@extends('layouts.app')

@section('content')
@foreach ($search as $record)
    <div class="container">
        <div class="card border border-primary">
                    <div class="card-header bg-primary">
                        <h4 class="card-title text-dark">
                            <a data-toggle="" href="#primary" class="text-white">Primary Information</a>
                        </h4>
                    </div>
                    <div id="primary" class="card">
                        <div class="card card-success">
                            <div class="card-header border-bottom border-primary text-center text-primary font-weight-bold text-uppercase">
                                patient's clinical record
                            </div>
                            <div class="row m-5">
                                <div class="col-lg-6">
                                    <div class="card bg-light ml-5 mt-5 mb-3  border border-dark rounded" >
                                                      
                                        <div class="card-body ">
                                            <div class="card-body">
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label font-weight-bold">Unit:</label>
                                                    <div class="col-sm-6">
                                                        <label for="">{{$record->unit}}</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label font-weight-bold">Ward:</label>
                                                    <div class="col-sm-6">
                                                        <label for="">{{$record->ward}}</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label font-weight-bold">Bed:</label>
                                                    <div class="col-sm-6">
                                                       <label for="">{{$record->bed}}</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label font-weight-bold">Date of Admission:</label>
                                                    <div class="col-sm-6">
                                                        {{$record->admission_date}}
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label font-weight-bold">Date of Examination:</label>
                                                    <div class="col-sm-6">
                                                        {{$record->examination_date}}
                                                    </div>
                                                </div>
                                            </div>
                                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card bg-light mr-5 mt-5 mb-3   border border-dark rounded" >
                                        <div class="card-body ">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label font-weight-bold">Name of Informant:</label>
                                                <div class="col-sm-6">
                                                <label for="">{{$record->informant_name}}</label>  
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label font-weight-bold">Relation with Patient:</label>
                                                <div class="col-sm-6">
                                                    <label for="">{{$record->relation_with_patient}}</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label font-weight-bold">Referred from/by:</label>
                                                <div class="col-sm-6">
                                                    <label for="">{{$record->referred_from}}</label>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label font-weight-bold">Reason of
                                                    Referral</label>
                                                <div class="col-sm-6">
                                                   <label for="">{{$record->referred_reason}}</label>
                                                </div>
                                            </div>
                                        </div>
                                                      
                                        <div class="card-body">
                                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                           
                            <div class="card-body m-5 border border-dark rounded">

                                <div class="row m-5">
                                    <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label font-weight-bold">Name of the
                                        Patient:</label>
                                    <div class="col-sm-7">
                                        <label for="">{{$record->patient_name}}</label>
                                    </div>
                                </div>
                                        
                                    </div>
                                    <div class="col-sm-3">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label font-weight-bold">Age:</label>
                                    <div class="col-sm-8">
                                        {{$record->age}}
                                    </div>
                                </div>
                                        
                                    </div>
                                    <div class="col-sm-3">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label font-weight-bold">Sex:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{$record->sex}}</label>
                                    </div>
                                </div>
                                        
                                    </div>
                                </div>

                                    <div class="row m-5">
                                        <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label font-weight-bold">Religion:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{$record->religion}}</label>
                                    </div>
                                </div>
                                            
                                        </div>
                                        <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label font-weight-bold">Habitant:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{$record->inhabitant}}</label>
                                    </div>
                                </div>   
                                        </div>
                                    </div>

                                    <div class="row m-5">
                                        <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-6 col-form-label font-weight-bold">Marital Status:</label>
                                    <div class="col-sm-6">
                                        <label for="">{{$record->marital_status}}</label>
                                    </div>
                                </div>   
                                        </div>
                                        <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label font-weight-bold">Occupation:</label>
                                    <div class="col-sm-7">
                                       <label for="">{{$record->occupation}}</label>
                                    </div>
                                </div>  
                                        </div>
                                        <div class="col-sm-4">
                                <div class="form-group row">
                                    <label class="col-sm-5 col-form-label font-weight-bold">Education:</label>
                                    <div class="col-sm-7">
                                        <label for="">{{$record->education}}</label>
                                    </div>
                                </div>   
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="card card-info border border-primary">
                    <div class="card-header bg-primary">

                        <h4 class="card-title">
                            <a data-toggle="collapse" href="#history" class="text-white">Historical Information</a>
                        </h4>
                    </div>
                    <div id="history" class="card">
                        <div class="card card-success">
                            <div class="card-header font-weight-bold">
                                1. Presenting Complaints:
                            </div>
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <label for="">{{empty($record->complain)?'N/A':$record->complain}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header font-weight-bold">
                                2. History of Present Illness:
                            </div>
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div style="padding-bottom: 5px">
                                            <p class="text-muted">
                                                Mention: Onset, precipitating, aggravating and relieving factors,
                                                duration,
                                                course,
                                                level of functioning, etc.
                                            </p>
                                        </div>
                                        <label for="">{{empty($record->present_illness)?'N/A':$record->present_illness}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header font-weight-bold">
                                3. Family and Social History:
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">Father:</label>
                                    <div class="col-sm-9">
                                    <label for="">{{empty($record->father)?'N/A':$record->father}}</label>
                                    </div>
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">Mother:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->mother)?'N/A':$record->mother}}</label>
                                    </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">Siblings:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->siblings)?'N/A':$record->siblings}}</label>
                                    </div>
                                </div>
                                        
                                    </div>

                                <div class="form-group">

                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">Consanguinity:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->consanguinity)?'N/A':$record->consanguinity}}</label>
                                    </div>
                                        
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">Social Position of Family:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->social_pos_family)?'N/A':$record->social_pos_family}}</label>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">Family History of Mental Illness:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->family_history_mental)?'N/A':$record->family_history_mental}}</label>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">Family Tree:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->family_tree)?'N/A':$record->family_tree}}</label>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header font-weight-bold">
                                4. Personal History:
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">a) Pregnancy and Birth:</label>
                                    <div class="col-sm-9">
                                     <label for="">{{empty($record->pregnancy_and_birth)?'N/A':$record->pregnancy_and_birth}}</label>
                                    </div>
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">b) Early Developmental Milestones:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->early_developmental_milestones)?'N/A':$record->early_developmental_milestones}}</label>
                                    </div> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">c) Childhood:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->childhood)?'N/A':$record->childhood}}</label>
                                    </div>
                                        
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">d) Education:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->education_history)?'N/A':$record->education_history}}</label>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">e) Occupation:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->occupation_history)?'N/A':$record->occupation_history}}</label>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">f) Marriage and Sexual History:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->marriage_sex_history)?'N/A':$record->marriage_sex_history}}</label>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">g) Current Relationship:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->current_relationship)?'N/A':$record->current_relationship}}</label>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">h) Social Circumstances:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->social_circumstances)?'N/A':$record->social_circumstances}}</label>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">i) Substance Use:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->substance_use)?'N/A':$record->substance_use}}</label>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">j) Forensic History:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->forensic_history)?'N/A':$record->forensic_history}}</label>
                                    </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card-header font-weight-bold">
                                5. Past Psychiatry History:
                            </div>
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div style="padding-bottom: 5px">
                                            <p>
                                                Mention: Onset, duration, treatment, hospitalization and outcome.
                                            </p>
                                        </div>
                                            <label for="">{{empty($record->past_psychiatry_history)?'N/A':$record->past_psychiatry_history}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header font-weight-bold">
                                6. Past Medical Illness:
                            </div>
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div style="padding-bottom: 5px">
                                            <p>
                                                Mention: Onset, duration, treatment, hospitalization and outcome.
                                            </p>
                                        </div>
                                            <label for="">{{empty($record->past_medical_illness)?'N/A':$record->past_medical_illness}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header font-weight-bold">
                                7. Co-morbid Illness:
                            </div>
                            <div class="card-body">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">{{empty($record->comorbid_illness)?'N/A':$record->comorbid_illness}}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header font-weight-bold">
                                8. Drugs:
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">Drugs:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->relationship)?'N/A':$record->relationship}}</label>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">Date Started/Duration:</label>
                                    <div class="col-sm-9">
                                    <label for="">{{empty($record->character)?'N/A':$record->character}}</label>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">Dose:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->hobbies)?'N/A':$record->hobbies}}</label>
                                    </div> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">Drug Response: <br> (not responded/partial/complete):</label>
                                    <div class="col-sm-9">
                                    <label for="">{{empty($record->predominant_mood)?'N/A':$record->predominant_mood}}</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">Side Effects:</label>
                                    <div class="col-sm-9">
                                        <label for="">{{empty($record->attitude_and_standards)?'N/A':$record->attitude_and_standards}}</label>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">ADR (if any):</label>
                                    <div class="col-sm-9">
                                    <label for="">{{empty($record->ultimate_concern)?'N/A':$record->ultimate_concern}}</label>
                                    </div> 
                                    </div>
                                </div>
                            </div>           

                            <div class="card-header font-weight-bold">
                                10. Reviews of systems:
                            </div>
                            
                            <div class="card-body">
                            

                    <table class="table table-borderless table-condensed table-hover">

                  <tbody>
                    <tr>
                      <th scope="row" class="font-italic">General:</th>
                      <td>
                            <input type="checkbox" name="weight_changes"
                                @if($record->weight_changes == true)
                                    checked 
                                @endif
                            > 
                            <label class="form-check-label" for="weight_changes">Weight Changes:</label>
                      </td>
                      <td>
                            <input type="checkbox" name="appetite" class="form-check-input" id="appetite"
                                @if($record->appetite == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="appetite">Appetite:</label>
                      </td>
                      <td>
                            <input type="checkbox" name="fever" class="form-check-input" id="fever"
                                @if($record->fever == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="fever">Fever:</label>
                      </td>
                      <td></td><td></td><td></td>
                    </tr>

                    <tr>
                      <th scope="row" class="font-italic">Cardiovascular:</th>
                      <td>
                            <input type="checkbox" name="chestpain" class="form-check-input" id="chestpain"
                                @if($record->chestpain == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="chestpain">Chest pain</label>
                      </td>
                      <td>
                            <input type="checkbox" name="palpitation" class="form-check-input" id="palpitation"
                                @if($record->palpitation == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="palpitation">Palpitation</label>
                      </td>
                      <td>
                            <input type="checkbox" name="sob" class="form-check-input" id="sob"
                                @if($record->sob == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="sob">SOB</label>
                      </td>
                      <td>
                            <input type="checkbox" name="pnd" class="form-check-input" id="pnd"
                                @if($record->pnd == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="pnd">PND</label>
                      </td>
                      <td>
                            <input type="checkbox" name="ankle_swelling" class="form-check-input" id="ankle_swelling"
                                @if($record->ankle_swelling == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="ankle_swelling">Ankle Swelling</label>
                      </td><td></td>
                    </tr>

                    <tr>
                      <th scope="row" class="font-italic">Gastrointestinal:</th>
                      <td>
                            <input type="checkbox" name="nausea_vomiting" class="form-check-input" id="nausea_vomiting"
                                @if($record->nausea_vomiting == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="nausea_vomiting">Nausea/ Vomiting</label>
                      </td>
                      <td>
                            <input type="checkbox" name="abdominal_swelling" class="form-check-input" id="abdominal_swelling"
                                @if($record->abdominal_swelling == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="abdominal_swelling">Abdominal swelling</label>
                      </td>
                      <td>
                            <input type="checkbox" name="excessive_salivation" class="form-check-input" id="excessive_salivation"
                                @if($record->excessive_salivation == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="excessive_salivation">Excessive salivation</label>
                      </td>
                      <td>
                            <input type="checkbox" name="constipation" class="form-check-input" id="constipation"
                                @if($record->constipation == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="constipation">Constipation</label>
                      </td><td></td><td></td>
                    </tr>

                    <tr>
                      <th scope="row" class="font-italic">Genitourinary:</th>
                      <td>
                            <input type="checkbox" name="dysuria" class="form-check-input" id="dysuria"
                                @if($record->dysuria == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="dysuria">Dysuria</label>
                      </td>
                      <td>
                            <input type="checkbox" name="haematuria" class="form-check-input" id="haematuria"
                                @if($record->haematuria == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="haematuria">Haematuria</label>
                      </td>
                      <td>
                            <input type="checkbox" name="frequency" class="form-check-input" id="frequency"
                                @if($record->frequency == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="frequency">Frequency</label>
                      </td>
                      <td>
                            <input type="checkbox" name="vaginal_disease" class="form-check-input" id="vaginal_disease"
                                @if($record->vaginal_disease == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="vaginal_disease">Vaginal disease</label>
                      </td><td></td><td></td>
                    </tr>

                    <tr>
                      <th scope="row" class="font-italic">Neurological:</th>
                      <td>
                            <input type="checkbox" name="fits" class="form-check-input" id="fits"
                                @if($record->fits == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="fits">Fits</label>
                            <br>
                            <input type="checkbox" name="numbness" class="form-check-input" id="numbness"
                                @if($record->numbness == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="numbness">Numbness</label>
                      </td>
                      <td>
                            <input type="checkbox" name="blurring_vision" class="form-check-input" id="blurring_vision"
                                @if($record->blurring_vision == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="blurring_vision">Blurring of vision</label>
                            <br>
                            <input type="checkbox" name="tremors" class="form-check-input" id="tremors"
                                @if($record->tremors == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="tremors">Tremors</label>
                      </td>
                      <td>
                            <input type="checkbox" name="slurred_speech" class="form-check-input" id="slurred_speech"
                                @if($record->slurred_speech == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="slurred_speech">Slurred speech</label>
                            <br>
                            <input type="checkbox" name="tingling" class="form-check-input" id="tingling"
                                @if($record->tingling == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="tingling">Tingling</label>
                      </td>
                      <td>
                            <input type="checkbox" name="headache" class="form-check-input" id="headache"
                                @if($record->headache == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="headache">Headache</label>
                            <br>
                            <input type="checkbox" name="gait_disturbance" class="form-check-input" id="gait_disturbance"
                                @if($record->gait_disturbance == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="gait_disturbance">Gait disturbance</label>
                      </td>
                      <td>
                            <input type="checkbox" name="paraesthesia" class="form-check-input" id="paraesthesia"
                                @if($record->paraesthesia == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="paraesthesia">Paraesthesia</label>
                            <br>
                            <input type="checkbox" name="poor_balance" class="form-check-input" id="poor_balance"
                                @if($record->poor_balance == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="poor_balance">Poor balance</label>
                      </td>
                    </tr>

                    <tr>
                      <th scope="row" class="font-italic">Musculoskeletal:</th>
                      <td>
                            <input type="checkbox" name="painful_joint" class="form-check-input" id="painful_joint"
                                @if($record->painful_joint == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="painful_joint">Painful joint</label>
                      </td>
                      <td>
                            <input type="checkbox" name="joint_sweling" class="form-check-input" id="joint_sweling"
                                @if($record->joint_sweling == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="joint_sweling">Joint sweling</label>
                      </td>
                      <td>
                            <input type="checkbox" name="morning_stiffness" class="form-check-input" id="morning_stiffness"
                                @if($record->morning_stiffness == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="morning_stiffness">Morning Stiffness</label>
                      </td>
                      <td></td><td></td><td></td>
                    </tr>

                    <tr>
                      <th scope="row" class="font-italic">Endocrine:</th>
                      <td>
                            <input type="checkbox" name="heatcold_intolerance" class="form-check-input" id="heatcold_intolerance"
                                @if($record->heatcold_intolerance == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="heatcold_intolerance">Heat/ Cold intolerance</label>
                      </td>
                      <td>
                            <input type="checkbox" name="diabetes" class="form-check-input" id="diabetes"
                                @if($record->diabetes == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="diabetes">Diabetes</label>
                      </td>
                      <td>
                            <input type="checkbox" name="polyuria" class="form-check-input" id="polyuria"
                                @if($record->polyuria == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="polyuria">Polyuria</label>
                      </td>
                      <td>
                            <input type="checkbox" name="excessivethirst_hunger" class="form-check-input" id="excessivethirst_hunger"
                                @if($record->excessivethirst_hunger == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="excessivethirst_hunger">Excessive thirst/ hunger</label>
                      </td><td></td><td></td>
                    </tr>
                    
                  </tbody>
                </table>
        <!-- Table end -->
                            </div>
                

                            <div class="card-header font-weight-bold">
                                11. Physical examination:
                            </div>
                            <div class="card-body">
                                
                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">1. Body Build:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{empty($record->body_build)?'N/A':$record->body_build}}</label>
                                    </div>   
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">2. Nutritional & Status:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{empty($record->nutritional_status)?'N/A':$record->nutritional_status}}</label>
                                    </div>
                                    </div>
                                </div>

                               
                                <label class="ml-5"><u>3. Vital Signs:</u></label>

                                <div class="row ml-5 mr-5">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="row ml-5 mr-5">
                                    <label class="col-sm-4 control-label font-italic">Pulse:</label>
                                    <div class="col-sm-5">
                                        <label for="">{{empty($record->pulse)?'N/A':$record->pulse}}</label>
                                    </div>     
                                     </div>
                                    </div> 
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                        <div class="row ml-5 mr-5">
                                        <label class="col-sm-3 control-label font-italic">BP:</label>
                                        <div class="col-sm-5">
                                            <label for="">{{empty($record->bp)?'N/A':$record->bp}}</label>
                                        </div> 
                                        </div>
                                         </div>
                                    </div>
                                </div>
                                
                                <div class="row ml-5 mr-5">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="row ml-5 mr-5">
                                            <label class="col-sm-7 control-label font-italic">Temp:</label>
                                            <div class="col-sm-5">
                                                <label for="">{{empty($record->temp)?'N/A':$record->temp}}</label>
                                            </div>
                                            </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="row ml-5 mr-5">
                                            <label class="col-sm-4 control-label font-italic">Res. Rate:</label>
                                            <div class="col-sm-5">
                                                <label for="">{{empty($record->res_rate)?'N/A':$record->res_rate}}</label>
                                            </div>
                                            </div>
                                            </div>
                                    </div>
                                </div>
                                



                                        
                                

                                <label class="ml-5"><u>4. Body Size</u></label>

                                <div class="row ml-5 mr-5">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <div class="row ml-5 mr-5">
                                    <label class="col-sm-6 control-label font-italic">Height:</label>
                                    <div class="col-sm-6">
                                        <label for="">{{empty($record->height)?'N/A':$record->height}}</label>
                                    </div>
                                </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <div class="row ml-5 mr-5">
                                    <label class="col-sm-6 control-label font-italic">Weight:</label>
                                    <div class="col-sm-6">
                                        <label for="">{{empty($record->weight)?'N/A':$record->weight}}</label>
                                    </div>
                                </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <div class="row ml-5 mr-5">
                                    <label class="col-sm-6 control-label font-italic">BMI:</label>
                                    <div class="col-sm-6">
                                        <label for="">{{empty($record->bmi)?'N/A':$record->bmi}}</label>
                                    </div>
                                </div>
                                    </div>
                                    </div>
                                </div>


                                <div class="form-group{{ $errors->has('bowel') ? ' has-error' : '' }}">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">5. Bowel:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{empty($record->bowel)?'N/A':$record->bowel}}</label>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">6. Bladder:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{empty($record->bladder)?'N/A':$record->bladder}}</label>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">7. Anaemia:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{empty($record->anaemia)?'N/A':$record->anaemia}}</label>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">8. Jaundice:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{empty($record->jaundice)?'N/A':$record->jaundice}}</label>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">9. Oedema:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{empty($record->oedema)?'N/A':$record->oedema}}</label>
                                    </div>
                                </div>
                                </div>


                            </div> {{-- card body end --}}


                            {{-- 12 systemic examination --}}

                            <div class="card-header font-weight-bold">
                                12. Systemic Examination:
                            </div>
                            <div class="card-body">
                                <label class="ml-5"><u>A) Nervous system:</u></label>


                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label font-italic">i. Higher Psychic Function:</label>
                                    <div class="col-sm-8">
                                    <label for="">{{empty($record->higher_psychic_function)?'N/A':$record->higher_psychic_function}}</label>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label font-italic">ii. Motor Function:</label>
                                    <div class="col-sm-8">
                                    <label for="">{{empty($record->motor_function)?'N/A':$record->motor_function}}</label>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label font-italic">iii. Cranial Nerves:</label>
                                    <div class="col-sm-8">
                                    <label for="">{{empty($record->cranial_nerves)?'N/A':$record->cranial_nerves}}</label>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label font-italic">iv. Sensory:</label>
                                    <div class="col-sm-8">
                                    <label for="">{{empty($record->sensory)?'N/A':$record->sensory}}</label>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">B) Endocrine System:</label>
                                    <div class="col-sm-8">
                                    <label for="">{{empty($record->endocrine_system)?'N/A':$record->endocrine_system}}</label>
                                    </div>
                                </div></div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">C) Musculoskeletal System:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{empty($record->musculoskeletal_system)?'N/A':$record->musculoskeletal_system}}</label>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label">D) Others:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{empty($record->d_others)?'N/A':$record->d_others}}</label>
                                    </div>
                                </div>
                                </div>

                            </div> {{-- card body end --}}


                            <div class="card-header font-weight-bold">
                                13. Mental state examination:
                            </div>

                            <div class="card-body">

                                <label class="ml-5"><u>I. Appearance and behaviour:</u></label>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label font-italic">a) General appearance:</label>
                                    <div class="col-sm-8">
                                        <label>{{empty($record->general_appearance)?'N/A':$record->general_appearance}}</label>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label font-italic">b) Facial appearance:</label>
                                    <div class="col-sm-8">
                                        <label>{{empty($record->facial_appearance)?'N/A':$record->facial_appearance}}</label>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label font-italic">c) Rapport:</label>
                                    <div class="col-sm-8">
                                        <label for="">{{empty($record->rapport)?'N/A':$record->rapport}}</label>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group\">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label font-italic">d) Posture and movement:</label>
                                    <div class="col-sm-8">
                                    <label>{{empty($record->posture_movement)?'N/A':$record->posture_movement}}</label>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label font-italic">e) Social behaviour:</label>
                                    <div class="col-sm-8">
                                    <label for="">{{empty($record->social_behaviour)?'N/A':$record->social_behaviour}}</label>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label font-italic">f) Motor behaviour:</label>
                                    <div class="col-sm-8">
                                    <label for="">{{empty($record->motor_behaviour)?'N/A':$record->motor_behaviour}}</label>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group">
                                    <div class="row m-5">
                                    <label class="col-sm-3 control-label font-italic">g) Oddity of behaviour:</label>
                                    <div class="col-sm-8">
                                    <label for="">{{empty($record->oddity_behaviour)?'N/A':$record->oddity_behaviour}}</label>
                                    </div>
                                    </div>
                                </div>

                                <label class="ml-5">II. Mood and affect:</label>
                <table class="table table-borderless table-condensed table-hover">

                  <tbody>
                      
                    <tr>
                      <td>
                            <input type="checkbox" name="depressed" class="form-check-input" id="depressed"
                                @if($record->depressed == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="depressed">Depressed</label>
                      </td>
                      <td>
                            <input type="checkbox" name="anxious" class="form-check-input" id="anxious"
                                @if($record->anxious == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="anxious">Anxious</label>
                      </td>
                      <td>
                            <input type="checkbox" name="euthymic" class="form-check-input" id="euthymic"
                                @if($record->euthymic == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="euthymic">Euthymic</label>
                      </td>
                      <td>
                            <input type="checkbox" name="blunt" class="form-check-input" id="blunt"
                                @if($record->blunt == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="blunt">Blunt</label>
                      </td>
                      <td>
                            <input type="checkbox" name="apathy" class="form-check-input" id="apathy"
                                @if($record->apathy == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="apathy">Apathy</label>
                      </td>
                      <td>
                            <input type="checkbox" name="elated" class="form-check-input" id="elated"
                                @if($record->elated == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="elated">Elated</label>
                      </td>
                    </tr>
                    <tr>
                      
                      <td>
                            <input type="checkbox" name="congruent" class="form-check-input" id="congruent"
                                @if($record->congruent == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="congruent">Congruent</label>
                      </td>
                      <td>
                            <input type="checkbox" name="incongrument" class="form-check-input" id="incongrument"
                                @if($record->incongrument == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="incongrument">Incongrument</label>
                      </td>
                      <td>
                            <input type="checkbox" name="lability" class="form-check-input" id="lability"
                                @if($record->lability == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="lability">Lability</label>
                      </td>
                      <td>
                            <input type="checkbox" name="depersonalization" class="form-check-input" id="depersonalization"
                                @if($record->depersonalization == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="depersonalization">Depersonalization</label>
                      </td>
                      <td>
                            <input type="checkbox" name="derealization" class="form-check-input" id="derealization"
                                @if($record->derealization == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="derealization">Derealization</label>
                      </td>
                      <td>
                            <input type="checkbox" name="m_others" class="form-check-input" id="m_others"
                                @if($record->m_others == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="m_others">Others</label>
                      </td>
                    </tr>
                </tbody>
            </table>


                <label class="ml-5"><u>III. Speech:</u></label>

                <div class="form-group">
                    <div class="row m-5">
                        <label class="col-sm-3 control-label font-italic">a) Rate quantity:</label>
                        <div class="col-sm-8">
                            <label>{{empty($record->rate_quantity)?'N/A':$record->rate_quantity}}</label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row m-5">
                    <label class="col-sm-3 control-label font-italic">b) Volume and tone:</label>
                    <div class="col-sm-8">
                    <label>{{empty($record->volume_tone)?'N/A':$record->volume_tone}}</label>
                    </div>
                </div>
                </div>

                <div class="form-group">
                    <div class="row m-5">
                    <label class="col-sm-3 control-label font-italic">c) Flow and rhythm:</label>
                    <div class="col-sm-8">
                    <label>{{empty($record->flow_rhythm)?'N/A':$record->flow_rhythm}}</label>
                    </div>
                </div>
                </div>

                <div class="form-group">
                    <div class="row m-5">
                    <label class="col-sm-3 control-label font-italic">d) Oddity of speech:</label>
                    <div class="col-sm-8">
                    <label>{{empty($record->oddity_speech)?'N/A':$record->oddity_speech}}</label>
                    </div>
                </div></div>

                <label class="ml-5"><u>IV. Thought:</u></label>

            <table class="table table-borderless table-condensed table-hover">

                  <tbody>
                    <tr>
                      <th scope="row" class="font-italic" >a) Stream:</th>
                      <td>
                            <input type="checkbox" name="poverty" class="form-check-input" id="poverty"
                                @if($record->poverty == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="poverty">Poverty</label>
                      </td>
                      <td>
                            <input type="checkbox" name="pressure" class="form-check-input" id="pressure"
                                @if($record->pressure == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="pressure">Pressure</label>
                      </td>
                      <td></td>
                      <td></td><td></td><td></td>
                    </tr>
                    <tr>
                      <th scope="row" class="font-italic" >b) Possession:</th>
                      <td>
                            <input type="checkbox" name="insertion" class="form-check-input" id="insertion"
                                @if($record->insertion == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="insertion">Insertion</label>
                      </td>
                      <td>
                            <input type="checkbox" name="withdrawl" class="form-check-input" id="withdrawl"
                                @if($record->withdrawl == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="withdrawl">Withdrawl</label>
                      </td>
                      <td>
                            <input type="checkbox" name="broadcasting" class="form-check-input" id="broadcasting"
                                @if($record->broadcasting == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="broadcasting">Broadcasting</label>
                      </td>
                      <td></td><td></td><td></td>
                    </tr>
                    <tr>
                      <th scope="row" class="font-italic" >c) Form:</th>
                      <td>
                            <input type="checkbox" name="flight_ideas" class="form-check-input" id="flight_ideas"
                                @if($record->flight_ideas == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="flight_ideas">Flight od ideas</label>
                      </td>
                      <td>
                            <input type="checkbox" name="perseveration" class="form-check-input" id="perseveration"
                                @if($record->perseveration == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="perseveration">Perseveration</label>
                      </td>
                      <td>
                            <input type="checkbox" name="loosening" class="form-check-input" id="loosening"
                                @if($record->loosening == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="loosening">Loosening</label>
                      </td>
                      <td></td><td></td><td></td>
                    </tr>
                    <tr>
                      <th scope="row" class="font-italic" >d) Content:</th>
                      <td>
                            <input type="checkbox" name="obsession" class="form-check-input" id="obsession"
                                @if($record->obsession == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="obsession">Obsession</label>
                      </td>
                      <td>
                            <input type="checkbox" name="delusion" class="form-check-input" id="delusion"
                                @if($record->delusion == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="delusion">Delusion</label>
                      </td>
                      <td>
                            <input type="checkbox" name="suicidal_thought" class="form-check-input" id="suicidal_thought"
                                @if($record->suicidal_thought == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="suicidal_thought">Suicidal thought</label>
                      </td>
                      <td>
                            <input type="checkbox" name="homicidal_thought" class="form-check-input" id="homicidal_thought"
                                @if($record->homicidal_thought == true)
                                    checked 
                                @endif
                            >
                            <label class="form-check-label" for="homicidal_thought">Homicidal thought</label>
                      </td><td></td><td></td>
                    </tr>
                </tbody>
            </table>


            <label class="ml-5"><u>V. Perception:</u></label>

                <div class="form-group">
                    <div class="row m-5">
                        <label class="col-sm-3 control-label font-italic">a) Hallucination:</label>
                        <div class="col-sm-8">
                        <label for="">{{empty($record->hallucination)?'N/A':$record->hallucination}}</label>
                        </div>
                    </div>
                    </div>

                    <div class="form-group">
                        <div class="row m-5">
                        <label class="col-sm-3 control-label font-italic">b) Illusion:</label>
                        <div class="col-sm-8">
                        <label>{{empty($record->illusion)?'N/A':$record->illusion}}</label>
                        </div>
                    </div>
                    </div>

                <label class="ml-5"><u>VI. Cognition:</u></label>

                    <div class="form-group">
                        <div class="row m-5">
                        <label class="col-sm-3 control-label font-italic">a) Consciousness:</label>
                        <div class="col-sm-8">
                        <label>{{empty($record->consciousness)?'N/A':$record->consciousness}}</label>
                        </div>
                    </div>
                    </div>

                    <div class="form-group">
                        <div class="row m-5">
                        <label class="col-sm-3 control-label font-italic">b) Orientation:</label>
                        <div class="col-sm-8">
                        <label>{{empty($record->orientation)?'N/A':$record->orientation}}</label>
                        </div>
                    </div></div>

                    <div class="form-group">
                        <div class="row m-5">
                        <label class="col-sm-3 control-label font-italic">c) Attention Concentration:</label>
                        <div class="col-sm-8">
                        <label>{{empty($record->attention_concentration)?'N/A':$record->attention_concentration}}</label>
                        </div>
                    </div>
                    </div>

                    <label class="ml-5"><u>d) Memory:</u></label>
                    <div class="row m-5">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="row m-2">
                        <label class="col-sm-5 control-label font-italic">Immediate:</label>
                        <div class="col-sm-7">
                        <label>{{empty($record->immediate)?'N/A':$record->immediate}}</label>
                        </div>
                    </div>
                        </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="row m-2">
                        <label class="col-sm-4 control-label font-italic">Recent:</label>
                        <div class="col-sm-8">
                        <label>{{empty($record->recent)?'N/A':$record->recent}}</label>
                        </div>
                    </div>
                        </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="row m-2">
                        <label class="col-sm-4 control-label font-italic">Remote:</label>
                        <div class="col-sm-8">
                        <label>{{empty($record->remote)?'N/A':$record->remote}}</label>
                        </div>
                    </div>
                        </div>
                    </div></div>

                    <div class="form-group">
                        <div class="row m-5">
                        <label class="col-sm-3 control-label">e) Intelligence:</label>
                        <div class="col-sm-8">
                        <label>{{empty($record->intelligence)?'N/A':$record->intelligence}}</label>
                        </div>
                    </div>
                    </div>

                    <div class="form-group">
                        <div class="row m-5">
                        <label class="col-sm-3 control-label">VII. Judgement:</label>
                        <div class="col-sm-8">
                        <label>{{empty($record->judgement)?'N/A':$record->judgement}}</label>
                        </div>
                    </div>
                    </div>

                    <div class="form-group">
                        <div class="row m-5">
                        <label class="col-sm-3 control-label">VIII. Insight:</label>
                        <div class="col-sm-8">
                        <label>{{empty($record->insight)?'N/A':$record->insight}}</label>
                        </div>
                    </div></div>

                    </div> {{-- card body end --}}


                    <div class="card-header">
                    Formulation:
                    </div>
                <div class="card-body">

                    <div class="form-group">
                        <div class="row m-5">
                        <label class="col-sm-3 control-label">1. Statement of the problem:</label>
                        <div class="col-sm-8">
                        <label>{{empty($record->statement_problem)?'N/A':$record->statement_problem}}</label>
                        </div>
                    </div>
                    </div>

                    <div class="form-group">
                        <div class="row m-5">
                        <label class="col-sm-3 control-label">2. Differential diagnosis:</label>
                        <div class="col-sm-8">
                        <label>{{empty($record->differential_diagnosis)?'N/A':$record->differential_diagnosis}}</label>
                        </div>
                    </div></div>

                    <div class="form-group">
                        <div class="row m-5">
                        <label class="col-sm-3 control-label">3. Diagnosis:</label>
                        <div class="col-sm-8">
                        <label>{{empty($record->diagnosis)?'N/A':$record->diagnosis}}</label>
                        </div>
                    </div>
                    </div>

                    <label class="ml-5"><u>4. Etiology:</u></label>

                        <div class="form-group">
                            <div class="row m-5">
                        <label class="col-sm-3 control-label font-italic">a) Predisposing factor:</label>
                        <div class="col-sm-8">
                        <label>{{empty($record->predisposing_factor)?'N/A':$record->predisposing_factor}}</label>
                        </div>
                    </div>
                    </div>

                    <div class="form-group">
                        <div class="row m-5">
                        <label class="col-sm-3 control-label font-italic">b) Precipitating factor:</label>
                        <div class="col-sm-8">
                        <label>{{empty($record->precipitating_factor)?'N/A':$record->precipitating_factor}}</label>
                        </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row m-5">
                        <label class="col-sm-3 control-label font-italic">c) Prepetuating factor:</label>
                        <div class="col-sm-8">
                        <label>{{empty($record->prepetuating_factor)?'N/A':$record->prepetuating_factor}}</label>
                        </div>
                    </div>
                    </div>

                    <label class="ml-5"><u>5. Investigation:</u></label>

                        <div class="form-group">
                            <div class="row m-5">
                        <label class="col-sm-3 control-label font-italic">a) Psychological test:</label>
                        <div class="col-sm-8">
                        <label></label>
                        </div>{{empty($record->psychological_test)?'N/A':$record->psychological_test}}
                    </div>
                    </div>

                    <div class="form-group">
                        <div class="row m-5">
                        <label class="col-sm-3 control-label font-italic">b) Laboratory test:</label>
                        <div class="col-sm-8">
                        <label>{{empty($record->laboratory_test)?'N/A':$record->laboratory_test}}</label>
                        </div>
                    </div>
                    </div>

                </div> {{-- card body end --}}


                {{-- Rimon End --}}

                </div>
            </div>
    </div>
@endforeach

        


@endsection