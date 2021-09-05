@extends('layouts.app')

@section('content')
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
                                                            <label for="">{{$history->unit}}</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-6 col-form-label font-weight-bold">Ward:</label>
                                                        <div class="col-sm-6">
                                                            <label for="">{{$history->ward}}</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-6 col-form-label font-weight-bold">Bed:</label>
                                                        <div class="col-sm-6">
                                                           <label for="">{{$history->bed}}</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-6 col-form-label font-weight-bold">Date of Admission:</label>
                                                        <div class="col-sm-6">
                                                            {{$history->admission_date}}
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-6 col-form-label font-weight-bold">Date of Examination:</label>
                                                        <div class="col-sm-6">
                                                            {{$history->examination_date}}
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
                                                    <label for="">{{$history->informant_name}}</label>  
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label font-weight-bold">Relation with Patient:</label>
                                                    <div class="col-sm-6">
                                                        <label for="">{{$history->relation_with_patient}}</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label font-weight-bold">Referred from/by:</label>
                                                    <div class="col-sm-6">
                                                        <label for="">{{$history->referred_from}}</label>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-6 col-form-label font-weight-bold">Reason of
                                                        Referral</label>
                                                    <div class="col-sm-6">
                                                       <label for="">{{$history->referred_reason}}</label>
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
                                            <label for="">{{$history->patient_name}}</label>
                                        </div>
                                    </div>
                                            
                                        </div>
                                        <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label font-weight-bold">Age:</label>
                                        <div class="col-sm-8">
                                            {{$history->age}}
                                        </div>
                                    </div>
                                            
                                        </div>
                                        <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label font-weight-bold">Sex:</label>
                                        <div class="col-sm-8">
                                            <label for="">{{$history->sex}}</label>
                                        </div>
                                    </div>
                                            
                                        </div>
                                    </div>

                                        <div class="row m-5">
                                            <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bold">Religion:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{$history->religion}}</label>
                                        </div>
                                    </div>
                                                
                                            </div>
                                            <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label font-weight-bold">Habitant:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{$history->inhabitant}}</label>
                                        </div>
                                    </div>   
                                            </div>
                                        </div>

                                        <div class="row m-5">
                                            <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Marital Status:</label>
                                        <div class="col-sm-6">
                                            <label for="">{{$history->marital_status}}</label>
                                        </div>
                                    </div>   
                                            </div>
                                            <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label font-weight-bold">Occupation:</label>
                                        <div class="col-sm-7">
                                           <label for="">{{$history->occupation}}</label>
                                        </div>
                                    </div>  
                                            </div>
                                            <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label font-weight-bold">Education:</label>
                                        <div class="col-sm-7">
                                            <label for="">{{$history->education}}</label>
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
                                        <label for="">{{empty($history->complain)?'N/A':$history->complain}}</label>
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
                                            <label for="">{{empty($history->present_illness)?'N/A':$history->present_illness}}</label>
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
                                        <label for="">{{empty($history->father)?'N/A':$history->father}}</label>
                                        </div>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Mother:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->mother)?'N/A':$history->mother}}</label>
                                        </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Siblings:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->siblings)?'N/A':$history->siblings}}</label>
                                        </div>
                                    </div>
                                            
                                        </div>

                                    <div class="form-group">

                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Consanguinity:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->consanguinity)?'N/A':$history->consanguinity}}</label>
                                        </div>
                                            
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Social Position of Family:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->social_pos_family)?'N/A':$history->social_pos_family}}</label>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Family History of Mental Illness:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->family_history_mental)?'N/A':$history->family_history_mental}}</label>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Family Tree:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->family_tree)?'N/A':$history->family_tree}}</label>
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
                                         <label for="">{{empty($history->pregnancy_and_birth)?'N/A':$history->pregnancy_and_birth}}</label>
                                        </div>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">b) Early Developmental Milestones:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->early_developmental_milestones)?'N/A':$history->early_developmental_milestones}}</label>
                                        </div> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">c) Childhood:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->childhood)?'N/A':$history->childhood}}</label>
                                        </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">d) Education:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->education_history)?'N/A':$history->education_history}}</label>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">e) Occupation:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->occupation_history)?'N/A':$history->occupation_history}}</label>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">f) Marriage and Sexual History:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->marriage_sex_history)?'N/A':$history->marriage_sex_history}}</label>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">g) Current Relationship:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->current_relationship)?'N/A':$history->current_relationship}}</label>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">h) Social Circumstances:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->social_circumstances)?'N/A':$history->social_circumstances}}</label>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">i) Substance Use:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->substance_use)?'N/A':$history->substance_use}}</label>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">j) Forensic History:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->forensic_history)?'N/A':$history->forensic_history}}</label>
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
                                                <label for="">{{empty($history->past_psychiatry_history)?'N/A':$history->past_psychiatry_history}}</label>
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
                                                <label for="">{{empty($history->past_medical_illness)?'N/A':$history->past_medical_illness}}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header font-weight-bold">
                                    7. Co-morbid Illness:
                                </div>
                                <div class="card-body">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">{{empty($history->comorbid_illness)?'N/A':$history->comorbid_illness}}</label>
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
                                            <label for="">{{empty($history->relationship)?'N/A':$history->relationship}}</label>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Date Started/Duration:</label>
                                        <div class="col-sm-9">
                                        <label for="">{{empty($history->character)?'N/A':$history->character}}</label>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Dose:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->hobbies)?'N/A':$history->hobbies}}</label>
                                        </div> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Drug Response: <br> (not responded/partial/complete):</label>
                                        <div class="col-sm-9">
                                        <label for="">{{empty($history->predominant_mood)?'N/A':$history->predominant_mood}}</label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Side Effects:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($history->attitude_and_standards)?'N/A':$history->attitude_and_standards}}</label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">ADR (if any):</label>
                                        <div class="col-sm-9">
                                        <label for="">{{empty($history->ultimate_concern)?'N/A':$history->ultimate_concern}}</label>
                                        </div> 
                                        </div>
                                    </div>
                                </div>
{{-- Rimon start --}}               
        
                                <div class="card-header font-weight-bold">
                                    10. Reviews of systems:
                                </div>
                                
                                <div class="card-body">
                                
            <!-- Table -->
                        <table class="table table-borderless table-condensed table-hover">
<!--                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead> -->
                      <tbody>
                        <tr>
                          <th scope="row" class="font-italic">General:</th>
                          <td>
                                <input type="checkbox" name="weight_changes"
                                    @if($history->weight_changes == true)
                                        checked 
                                    @endif
                                > 
                                <label class="form-check-label" for="weight_changes">Weight Changes:</label>
                          </td>
                          <td>
                                <input type="checkbox" name="appetite" class="form-check-input" id="appetite"
                                    @if($history->appetite == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="appetite">Appetite:</label>
                          </td>
                          <td>
                                <input type="checkbox" name="fever" class="form-check-input" id="fever"
                                    @if($history->fever == true)
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
                                    @if($history->chestpain == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="chestpain">Chest pain</label>
                          </td>
                          <td>
                                <input type="checkbox" name="palpitation" class="form-check-input" id="palpitation"
                                    @if($history->palpitation == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="palpitation">Palpitation</label>
                          </td>
                          <td>
                                <input type="checkbox" name="sob" class="form-check-input" id="sob"
                                    @if($history->sob == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="sob">SOB</label>
                          </td>
                          <td>
                                <input type="checkbox" name="pnd" class="form-check-input" id="pnd"
                                    @if($history->pnd == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="pnd">PND</label>
                          </td>
                          <td>
                                <input type="checkbox" name="ankle_swelling" class="form-check-input" id="ankle_swelling"
                                    @if($history->ankle_swelling == true)
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
                                    @if($history->nausea_vomiting == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="nausea_vomiting">Nausea/ Vomiting</label>
                          </td>
                          <td>
                                <input type="checkbox" name="abdominal_swelling" class="form-check-input" id="abdominal_swelling"
                                    @if($history->abdominal_swelling == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="abdominal_swelling">Abdominal swelling</label>
                          </td>
                          <td>
                                <input type="checkbox" name="excessive_salivation" class="form-check-input" id="excessive_salivation"
                                    @if($history->excessive_salivation == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="excessive_salivation">Excessive salivation</label>
                          </td>
                          <td>
                                <input type="checkbox" name="constipation" class="form-check-input" id="constipation"
                                    @if($history->constipation == true)
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
                                    @if($history->dysuria == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="dysuria">Dysuria</label>
                          </td>
                          <td>
                                <input type="checkbox" name="haematuria" class="form-check-input" id="haematuria"
                                    @if($history->haematuria == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="haematuria">Haematuria</label>
                          </td>
                          <td>
                                <input type="checkbox" name="frequency" class="form-check-input" id="frequency"
                                    @if($history->frequency == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="frequency">Frequency</label>
                          </td>
                          <td>
                                <input type="checkbox" name="vaginal_disease" class="form-check-input" id="vaginal_disease"
                                    @if($history->vaginal_disease == true)
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
                                    @if($history->fits == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="fits">Fits</label>
                                <br>
                                <input type="checkbox" name="numbness" class="form-check-input" id="numbness"
                                    @if($history->numbness == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="numbness">Numbness</label>
                          </td>
                          <td>
                                <input type="checkbox" name="blurring_vision" class="form-check-input" id="blurring_vision"
                                    @if($history->blurring_vision == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="blurring_vision">Blurring of vision</label>
                                <br>
                                <input type="checkbox" name="tremors" class="form-check-input" id="tremors"
                                    @if($history->tremors == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="tremors">Tremors</label>
                          </td>
                          <td>
                                <input type="checkbox" name="slurred_speech" class="form-check-input" id="slurred_speech"
                                    @if($history->slurred_speech == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="slurred_speech">Slurred speech</label>
                                <br>
                                <input type="checkbox" name="tingling" class="form-check-input" id="tingling"
                                    @if($history->tingling == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="tingling">Tingling</label>
                          </td>
                          <td>
                                <input type="checkbox" name="headache" class="form-check-input" id="headache"
                                    @if($history->headache == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="headache">Headache</label>
                                <br>
                                <input type="checkbox" name="gait_disturbance" class="form-check-input" id="gait_disturbance"
                                    @if($history->gait_disturbance == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="gait_disturbance">Gait disturbance</label>
                          </td>
                          <td>
                                <input type="checkbox" name="paraesthesia" class="form-check-input" id="paraesthesia"
                                    @if($history->paraesthesia == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="paraesthesia">Paraesthesia</label>
                                <br>
                                <input type="checkbox" name="poor_balance" class="form-check-input" id="poor_balance"
                                    @if($history->poor_balance == true)
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
                                    @if($history->painful_joint == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="painful_joint">Painful joint</label>
                          </td>
                          <td>
                                <input type="checkbox" name="joint_sweling" class="form-check-input" id="joint_sweling"
                                    @if($history->joint_sweling == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="joint_sweling">Joint sweling</label>
                          </td>
                          <td>
                                <input type="checkbox" name="morning_stiffness" class="form-check-input" id="morning_stiffness"
                                    @if($history->morning_stiffness == true)
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
                                    @if($history->heatcold_intolerance == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="heatcold_intolerance">Heat/ Cold intolerance</label>
                          </td>
                          <td>
                                <input type="checkbox" name="diabetes" class="form-check-input" id="diabetes"
                                    @if($history->diabetes == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="diabetes">Diabetes</label>
                          </td>
                          <td>
                                <input type="checkbox" name="polyuria" class="form-check-input" id="polyuria"
                                    @if($history->polyuria == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="polyuria">Polyuria</label>
                          </td>
                          <td>
                                <input type="checkbox" name="excessivethirst_hunger" class="form-check-input" id="excessivethirst_hunger"
                                    @if($history->excessivethirst_hunger == true)
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
                                            <label for="">{{empty($history->body_build)?'N/A':$history->body_build}}</label>
                                        </div>   
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">2. Nutritional & Status:</label>
                                        <div class="col-sm-8">
                                            <label for="">{{empty($history->nutritional_status)?'N/A':$history->nutritional_status}}</label>
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
                                            <label for="">{{empty($history->pulse)?'N/A':$history->pulse}}</label>
                                        </div>     
                                         </div>
                                        </div> 
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                            <div class="row ml-5 mr-5">
                                            <label class="col-sm-3 control-label font-italic">BP:</label>
                                            <div class="col-sm-5">
                                                <label for="">{{empty($history->bp)?'N/A':$history->bp}}</label>
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
                                                    <label for="">{{empty($history->temp)?'N/A':$history->temp}}</label>
                                                </div>
                                                </div>
                                                </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="row ml-5 mr-5">
                                                <label class="col-sm-4 control-label font-italic">Res. Rate:</label>
                                                <div class="col-sm-5">
                                                    <label for="">{{empty($history->res_rate)?'N/A':$history->res_rate}}</label>
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
                                            <label for="">{{empty($history->height)?'N/A':$history->height}}</label>
                                        </div>
                                    </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="row ml-5 mr-5">
                                        <label class="col-sm-6 control-label font-italic">Weight:</label>
                                        <div class="col-sm-6">
                                            <label for="">{{empty($history->weight)?'N/A':$history->weight}}</label>
                                        </div>
                                    </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="row ml-5 mr-5">
                                        <label class="col-sm-6 control-label font-italic">BMI:</label>
                                        <div class="col-sm-6">
                                            <label for="">{{empty($history->bmi)?'N/A':$history->bmi}}</label>
                                        </div>
                                    </div>
                                        </div>
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('bowel') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">5. Bowel:</label>
                                        <div class="col-sm-8">
                                            <label for="">{{empty($history->bowel)?'N/A':$history->bowel}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">6. Bladder:</label>
                                        <div class="col-sm-8">
                                            <label for="">{{empty($history->bladder)?'N/A':$history->bladder}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">7. Anaemia:</label>
                                        <div class="col-sm-8">
                                            <label for="">{{empty($history->anaemia)?'N/A':$history->anaemia}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">8. Jaundice:</label>
                                        <div class="col-sm-8">
                                            <label for="">{{empty($history->jaundice)?'N/A':$history->jaundice}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">9. Oedema:</label>
                                        <div class="col-sm-8">
                                            <label for="">{{empty($history->oedema)?'N/A':$history->oedema}}</label>
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
                                        <label for="">{{empty($history->higher_psychic_function)?'N/A':$history->higher_psychic_function}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">ii. Motor Function:</label>
                                        <div class="col-sm-8">
                                        <label for="">{{empty($history->motor_function)?'N/A':$history->motor_function}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">iii. Cranial Nerves:</label>
                                        <div class="col-sm-8">
                                        <label for="">{{empty($history->cranial_nerves)?'N/A':$history->cranial_nerves}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">iv. Sensory:</label>
                                        <div class="col-sm-8">
                                        <label for="">{{empty($history->sensory)?'N/A':$history->sensory}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">B) Endocrine System:</label>
                                        <div class="col-sm-8">
                                        <label for="">{{empty($history->endocrine_system)?'N/A':$history->endocrine_system}}</label>
                                        </div>
                                    </div></div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">C) Musculoskeletal System:</label>
                                        <div class="col-sm-8">
                                            <label for="">{{empty($history->musculoskeletal_system)?'N/A':$history->musculoskeletal_system}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">D) Others:</label>
                                        <div class="col-sm-8">
                                            <label for="">{{empty($history->d_others)?'N/A':$history->d_others}}</label>
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
                                            <label>{{empty($history->general_appearance)?'N/A':$history->general_appearance}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Facial appearance:</label>
                                        <div class="col-sm-8">
                                            <label>{{empty($history->facial_appearance)?'N/A':$history->facial_appearance}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">c) Rapport:</label>
                                        <div class="col-sm-8">
                                            <label for="">{{empty($history->rapport)?'N/A':$history->rapport}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group\">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">d) Posture and movement:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->posture_movement)?'N/A':$history->posture_movement}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">e) Social behaviour:</label>
                                        <div class="col-sm-8">
                                        <label for="">{{empty($history->social_behaviour)?'N/A':$history->social_behaviour}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">f) Motor behaviour:</label>
                                        <div class="col-sm-8">
                                        <label for="">{{empty($history->motor_behaviour)?'N/A':$history->motor_behaviour}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">g) Oddity of behaviour:</label>
                                        <div class="col-sm-8">
                                        <label for="">{{empty($history->oddity_behaviour)?'N/A':$history->oddity_behaviour}}</label>
                                        </div>
                                        </div>
                                    </div>

                                    <label class="ml-5">II. Mood and affect:</label>
                    <table class="table table-borderless table-condensed table-hover">
<!--                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead> -->
                      <tbody>
                          
                        <tr>
                          <td>
                                <input type="checkbox" name="depressed" class="form-check-input" id="depressed"
                                    @if($history->depressed == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="depressed">Depressed</label>
                          </td>
                          <td>
                                <input type="checkbox" name="anxious" class="form-check-input" id="anxious"
                                    @if($history->anxious == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="anxious">Anxious</label>
                          </td>
                          <td>
                                <input type="checkbox" name="euthymic" class="form-check-input" id="euthymic"
                                    @if($history->euthymic == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="euthymic">Euthymic</label>
                          </td>
                          <td>
                                <input type="checkbox" name="blunt" class="form-check-input" id="blunt"
                                    @if($history->blunt == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="blunt">Blunt</label>
                          </td>
                          <td>
                                <input type="checkbox" name="apathy" class="form-check-input" id="apathy"
                                    @if($history->apathy == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="apathy">Apathy</label>
                          </td>
                          <td>
                                <input type="checkbox" name="elated" class="form-check-input" id="elated"
                                    @if($history->elated == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="elated">Elated</label>
                          </td>
                        </tr>
                        <tr>
                          
                          <td>
                                <input type="checkbox" name="congruent" class="form-check-input" id="congruent"
                                    @if($history->congruent == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="congruent">Congruent</label>
                          </td>
                          <td>
                                <input type="checkbox" name="incongrument" class="form-check-input" id="incongrument"
                                    @if($history->incongrument == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="incongrument">Incongrument</label>
                          </td>
                          <td>
                                <input type="checkbox" name="lability" class="form-check-input" id="lability"
                                    @if($history->lability == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="lability">Lability</label>
                          </td>
                          <td>
                                <input type="checkbox" name="depersonalization" class="form-check-input" id="depersonalization"
                                    @if($history->depersonalization == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="depersonalization">Depersonalization</label>
                          </td>
                          <td>
                                <input type="checkbox" name="derealization" class="form-check-input" id="derealization"
                                    @if($history->derealization == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="derealization">Derealization</label>
                          </td>
                          <td>
                                <input type="checkbox" name="m_others" class="form-check-input" id="m_others"
                                    @if($history->m_others == true)
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
                                            <label>{{empty($history->rate_quantity)?'N/A':$history->rate_quantity}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Volume and tone:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->volume_tone)?'N/A':$history->volume_tone}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">c) Flow and rhythm:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->flow_rhythm)?'N/A':$history->flow_rhythm}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">d) Oddity of speech:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->oddity_speech)?'N/A':$history->oddity_speech}}</label>
                                        </div>
                                    </div></div>

                                    <label class="ml-5"><u>IV. Thought:</u></label>

                <table class="table table-borderless table-condensed table-hover">
<!--                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead> -->
                      <tbody>
                        <tr>
                          <th scope="row" class="font-italic" >a) Stream:</th>
                          <td>
                                <input type="checkbox" name="poverty" class="form-check-input" id="poverty"
                                    @if($history->poverty == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="poverty">Poverty</label>
                          </td>
                          <td>
                                <input type="checkbox" name="pressure" class="form-check-input" id="pressure"
                                    @if($history->pressure == true)
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
                                    @if($history->insertion == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="insertion">Insertion</label>
                          </td>
                          <td>
                                <input type="checkbox" name="withdrawl" class="form-check-input" id="withdrawl"
                                    @if($history->withdrawl == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="withdrawl">Withdrawl</label>
                          </td>
                          <td>
                                <input type="checkbox" name="broadcasting" class="form-check-input" id="broadcasting"
                                    @if($history->broadcasting == true)
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
                                    @if($history->flight_ideas == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="flight_ideas">Flight od ideas</label>
                          </td>
                          <td>
                                <input type="checkbox" name="perseveration" class="form-check-input" id="perseveration"
                                    @if($history->perseveration == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="perseveration">Perseveration</label>
                          </td>
                          <td>
                                <input type="checkbox" name="loosening" class="form-check-input" id="loosening"
                                    @if($history->loosening == true)
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
                                    @if($history->obsession == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="obsession">Obsession</label>
                          </td>
                          <td>
                                <input type="checkbox" name="delusion" class="form-check-input" id="delusion"
                                    @if($history->delusion == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="delusion">Delusion</label>
                          </td>
                          <td>
                                <input type="checkbox" name="suicidal_thought" class="form-check-input" id="suicidal_thought"
                                    @if($history->suicidal_thought == true)
                                        checked 
                                    @endif
                                >
                                <label class="form-check-label" for="suicidal_thought">Suicidal thought</label>
                          </td>
                          <td>
                                <input type="checkbox" name="homicidal_thought" class="form-check-input" id="homicidal_thought"
                                    @if($history->homicidal_thought == true)
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
                                        <label for="">{{empty($history->hallucination)?'N/A':$history->hallucination}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Illusion:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->illusion)?'N/A':$history->illusion}}</label>
                                        </div>
                                    </div>
                                    </div>

                                <label class="ml-5"><u>VI. Cognition:</u></label>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">a) Consciousness:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->consciousness)?'N/A':$history->consciousness}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Orientation:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->orientation)?'N/A':$history->orientation}}</label>
                                        </div>
                                    </div></div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">c) Attention Concentration:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->attention_concentration)?'N/A':$history->attention_concentration}}</label>
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
                                        <label>{{empty($history->immediate)?'N/A':$history->immediate}}</label>
                                        </div>
                                    </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="row m-2">
                                        <label class="col-sm-4 control-label font-italic">Recent:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->recent)?'N/A':$history->recent}}</label>
                                        </div>
                                    </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="row m-2">
                                        <label class="col-sm-4 control-label font-italic">Remote:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->remote)?'N/A':$history->remote}}</label>
                                        </div>
                                    </div>
                                        </div>
                                    </div></div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">e) Intelligence:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->intelligence)?'N/A':$history->intelligence}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">VII. Judgement:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->judgement)?'N/A':$history->judgement}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">VIII. Insight:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->insight)?'N/A':$history->insight}}</label>
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
                                        <label>{{empty($history->statement_problem)?'N/A':$history->statement_problem}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">2. Differential diagnosis:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->differential_diagnosis)?'N/A':$history->differential_diagnosis}}</label>
                                        </div>
                                    </div></div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">3. Diagnosis:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->diagnosis)?'N/A':$history->diagnosis}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <label class="ml-5"><u>4. Etiology:</u></label>

                                        <div class="form-group">
                                            <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">a) Predisposing factor:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->predisposing_factor)?'N/A':$history->predisposing_factor}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Precipitating factor:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->precipitating_factor)?'N/A':$history->precipitating_factor}}</label>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">c) Prepetuating factor:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->prepetuating_factor)?'N/A':$history->prepetuating_factor}}</label>
                                        </div>
                                    </div>
                                    </div>

                                    <label class="ml-5"><u>5. Investigation:</u></label>

                                        <div class="form-group">
                                            <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">a) Psychological test:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>{{empty($history->psychological_test)?'N/A':$history->psychological_test}}
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Laboratory test:</label>
                                        <div class="col-sm-8">
                                        <label>{{empty($history->laboratory_test)?'N/A':$history->laboratory_test}}</label>
                                        </div>
                                    </div>
                                    </div>

                                </div> {{-- card body end --}}


                                {{-- Rimon End --}}

                                </div>
                            </div>
                        </div>
        <div class="row mt-5">
            <div class="col-sm-8">
                <form action="{{url('doctors/records/'.$history->id)}}" method="post">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button class="btn btn-danger">Delete</button>
            </form>
            </div>
            <div class="col-sm-4">
                <a class="btn btn-info" href="{{url('doctors/records/'.$history->id.'/edit')}}">Update Record</a>
            <a class="btn btn-success" href="{{url('/doctors/records/'.$history->id.'/pdf')}}">Export Record</a>
            </div>
        </div>
        


@endsection