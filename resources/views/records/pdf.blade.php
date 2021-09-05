@extends('layouts.app')

@section('content')
    <div class="container">
                        <div>
                            <p class="text-center pt-3"><img src="{{ asset('frontend/assets/logo.png') }}" style="height: 100px;" alt=""></p>
                            <h5 class="font-weight-bold text-center" style="margin-top: -30px;">Deparment of Psychiatry</h5>
                            <p class="font-weight-bold text-center">Shahbag, Dhaka-1000, Bangladesh | <span class="text-danger"><span class="text-dark">Token No :</span>{{ $record->token_no }}</span></p>
                        </div>
                        <div class="card border border-primary">
                        <div id="primary" class="card">
                            <div class="card card-success">
                                <div class="card-header border-bottom text-center font-weight-bold text-uppercase text-white  bg-primary">
                                    patient's clinical record
                                </div>
                                <div class="row m-5">
                                    <div class="col-sm-6">
                                        <div class="card bg-light mb-3  border border-dark rounded" >
                                                          
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
                                    <div class="col-sm-6">
                                        <div class="card bg-light mb-3   border border-dark rounded" >
                                            <div class="card-body ">
                                                                    <div class="form-group row mt-5 mb-5">
                                                                        <label class="col-sm-6 col-form-label font-weight-bold">Name of Informant:</label>
                                                                        <div class="col-sm-6">
                                                                        <label for="">{{$record->informant_name}}</label>  
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-5">
                                                                        <label class="col-sm-6 col-form-label font-weight-bold">Relation with Patient:</label>
                                                                        <div class="col-sm-6">
                                                                            <label for="">{{$record->relation_with_patient}}</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mt-5 mb-4">
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
                                
                               
                                <div class="card-body ml-3 mr-3 mb-5 border border-dark rounded">

                                    <div class="row">
                                        <div class="col-sm-5">
                                    <div class="form-group row m-2">
                                        <label class="col-sm-8 col-form-label font-weight-bold">Name of the
                                            Patient:</label>
                                        <div class="col-sm-4">
                                            <label for="">{{$record->patient_name}}</label>
                                        </div>
                                    </div>
                                        </div>
                                        <div class="col-sm-3">
                                    <div class="form-group row">
                                        <label class="col-sm-5 col-form-label font-weight-bold">Age:</label>
                                        <div class="col-sm-7">
                                            {{$record->age}}
                                        </div>
                                    </div>
                                            
                                        </div>
                                        <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label font-weight-bold">Sex:</label>
                                        <div class="col-sm-8">
                                            <label for="">{{$record->sex}}</label>
                                        </div>
                                    </div>
                                            
                                        </div>
                                    </div>

                                        <div class="row m-2">
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
                                        <label class="col-sm-4 col-form-label font-weight-bold">Habitant:</label>
                                        <div class="col-sm-8">
                                            <label for="">{{$record->inhabitant}}</label>
                                        </div>
                                    </div>   
                                            </div>
                                        </div>

                                        <div class="row m-2">
                                            <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-7 col-form-label font-weight-bold">Marital Status:</label>
                                        <div class="col-sm-5">
                                            <label for="">{{$record->marital_status}}</label>
                                        </div>
                                    </div>   
                                            </div>
                                            <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Occupation:</label>
                                        <div class="col-sm-6">
                                           <label for="">{{$record->marital_status}}</label>
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
                    <div class="card card-info border border-primary" style="margin-top: 20px;">
                        <div class="card-header">
                            <h5>History:</h5>
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
                                <div class="card-body mb-5">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div style="padding-bottom: 5px">
                                                <p  class="text-muted">
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
                                <div class="card-header font-weight-bold mt-5">
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
                                        <div class="row ml-5 mr-5 mt-5 mb-3">
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
                                                <p  class="text-muted">
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
                                                <p  class="text-muted">
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
                                    8. Pre-morbid Personality:
                                </div>
                                <div class="card-body mb-5">
                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Relationship:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($record->relationship)?'N/A':$record->relationship}}</label>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Character:</label>
                                        <div class="col-sm-9">
                                        <label for="">{{empty($record->character)?'N/A':$record->character}}</label>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Leisure Activity / Hobbies:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($record->hobbies)?'N/A':$record->hobbies}}</label>
                                        </div> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Predominant Mood:</label>
                                        <div class="col-sm-9">
                                        <label for="">{{empty($record->predominant_mood)?'N/A':$record->predominant_mood}}</label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Attitude and Standards:</label>
                                        <div class="col-sm-9">
                                            <label for="">{{empty($record->attitude_and_standards)?'N/A':$record->attitude_and_standards}}</label>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Ultimate Concern:</label>
                                        <div class="col-sm-9">
                                        <label for="">{{empty($record->ultimate_concern)?'N/A':$record->ultimate_concern}}</label>
                                        </div> 
                                        </div>
                                    </div>
                                </div>
{{-- Rimon start --}}
                                
                                <div style="margin-top: 200px;">
                                <div class="card-header font-weight-bold mt-5">
                                    9. Drug History:
                                </div>
                                <div class="card-body m-5">
                                    {{-- 1st table --}}
                                    <label>Current meditation</label>
                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                          <th scope="col">Drugs</th>
                                          <th scope="col">Date Started/duration</th>
                                          <th scope="col">Dose</th>
                                          <th scope="col">Drug response <br> (not response/partial/complete)</th>
                                          <th scope="col">Side effects</th>
                                          <th scope="col">ADR <br> (if any)</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">Napa</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>mdo</td>
                                          <td>mdo</td>
                                          <td>mdo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Fenadin</th>
                                          <td>Jacob</td>
                                          <td>Thornton</td>
                                          <td>fat</td>
                                          <td>fat</td>
                                          <td>fat</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Sinamin</th>
                                          <td>Larry the Bird</td>
                                          <td>twitter</td>
                                          <td>twitter</td>
                                          <td>twitter</td>
                                          <td>twitter</td>
                                        </tr>
                                      </tbody>
                                    </table>

                                    {{-- 2nd table --}}
                                    <label class="mt-4">Past meditation</label>
                                    <table class="table table-bordered">
                                      <thead>
                                        <tr>
                                          <th scope="col">Drugs</th>
                                          <th scope="col">Date Started/duration</th>
                                          <th scope="col">Dose</th>
                                          <th scope="col">Drug response <br> (not response/partial/complete)</th>
                                          <th scope="col">Side effects</th>
                                          <th scope="col">ADR <br> (if any)</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">Napa</th>
                                          <td>Mark</td>
                                          <td>Otto</td>
                                          <td>mdo</td>
                                          <td>mdo</td>
                                          <td>mdo</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Fenadin</th>
                                          <td>Jacob</td>
                                          <td>Thornton</td>
                                          <td>fat</td>
                                          <td>fat</td>
                                          <td>fat</td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Sinamin</th>
                                          <td>Larry the Bird</td>
                                          <td>twitter</td>
                                          <td>twitter</td>
                                          <td>twitter</td>
                                          <td>twitter</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div> 
                                </div>
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
                                <input type="checkbox" class="form-check-input" id="weight_changes">
                                <label class="form-check-label" for="weight_changes">Weight Changes:</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="appetite">
                                <label class="form-check-label" for="appetite">Appetite:</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="fever">
                                <label class="form-check-label" for="fever">Fever:</label>
                          </td>
                          <td></td><td></td><td></td>
                        </tr>

                        <tr>
                          <th scope="row" class="font-italic">Cardiovascular:</th>
                          <td>
                                <input type="checkbox" class="form-check-input" id="chestpain">
                                <label class="form-check-label" for="chestpain">Chest pain</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="palpitation">
                                <label class="form-check-label" for="palpitation">Palpitation</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="sob">
                                <label class="form-check-label" for="sob">SOB</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="pnd">
                                <label class="form-check-label" for="pnd">PND</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="ankle_swelling">
                                <label class="form-check-label" for="ankle_swelling">Ankle Swelling</label>
                          </td><td></td>
                        </tr>

                        <tr>
                          <th scope="row" class="font-italic">Gastrointestinal:</th>
                          <td>
                                <input type="checkbox" class="form-check-input" id="nausea_vomiting">
                                <label class="form-check-label" for="nausea_vomiting">Nausea/ Vomiting</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="abdominal_swelling">
                                <label class="form-check-label" for="abdominal_swelling">Abdominal swelling</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="excessive_salivation">
                                <label class="form-check-label" for="excessive_salivation">Excessive salivation</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="constipation">
                                <label class="form-check-label" for="constipation">Constipation</label>
                          </td><td></td><td></td>
                        </tr>

                        <tr>
                          <th scope="row" class="font-italic">Genitourinary:</th>
                          <td>
                                <input type="checkbox" class="form-check-input" id="dysuria">
                                <label class="form-check-label" for="dysuria">Dysuria</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="haematuria">
                                <label class="form-check-label" for="haematuria">Haematuria</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="frequency">
                                <label class="form-check-label" for="frequency">Frequency</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="vaginal_disease">
                                <label class="form-check-label" for="vaginal_disease">Vaginal disease</label>
                          </td><td></td><td></td>
                        </tr>

                        <tr>
                          <th scope="row" class="font-italic">Neurological:</th>
                          <td>
                                <input type="checkbox" class="form-check-input" id="fits">
                                <label class="form-check-label" for="fits">Fits</label>
                                <br>
                                <input type="checkbox" class="form-check-input" id="numbness">
                                <label class="form-check-label" for="numbness">Numbness</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="blurring_vision">
                                <label class="form-check-label" for="blurring_vision">Blurring of vision</label>
                                <br>
                                <input type="checkbox" class="form-check-input" id="tremors">
                                <label class="form-check-label" for="tremors">Tremors</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="slurred_speech">
                                <label class="form-check-label" for="slurred_speech">Slurred speech</label>
                                <br>
                                <input type="checkbox" class="form-check-input" id="tingling">
                                <label class="form-check-label" for="tingling">Tingling</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="headache">
                                <label class="form-check-label" for="headache">Headache</label>
                                <br>
                                <input type="checkbox" class="form-check-input" id="gait_disturbance">
                                <label class="form-check-label" for="gait_disturbance">Gait disturbance</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="paraesthesia">
                                <label class="form-check-label" for="paraesthesia">Paraesthesia</label>
                                <br>
                                <input type="checkbox" class="form-check-input" id="poor_balance">
                                <label class="form-check-label" for="poor_balance">Poor balance</label>
                          </td>
                        </tr>

                        <tr>
                          <th scope="row" class="font-italic">Musculoskeletal:</th>
                          <td>
                                <input type="checkbox" class="form-check-input" id="painful_joint">
                                <label class="form-check-label" for="painful_joint">Painful joint</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="joint_sweling">
                                <label class="form-check-label" for="joint_sweling">Joint sweling</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="morning_stiffness">
                                <label class="form-check-label" for="morning_stiffness">Morning Stiffness</label>
                          </td>
                          <td></td><td></td><td></td>
                        </tr>

                        <tr>
                          <th scope="row" class="font-italic">Endocrine:</th>
                          <td>
                                <input type="checkbox" class="form-check-input" id="heatcold_intolerance">
                                <label class="form-check-label" for="heatcold_intolerance">Heat/ Cold intolerance</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="diabetes">
                                <label class="form-check-label" for="diabetes">Diabetes</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="polyuria">
                                <label class="form-check-label" for="polyuria">Polyuria</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="excessivethirst_hunger">
                                <label class="form-check-label" for="excessivethirst_hunger">Excessive thirst/ hunger</label>
                          </td><td></td><td></td>
                        </tr>
                        
                      </tbody>
                    </table>
            <!-- Table end -->
                                </div>
                    
                                <div class="mt-5">
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
                                            <label class="col-sm-4 control-label font-italic">BP:</label>
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
                                                <label class="col-sm-4 control-label font-italic">Temp:</label>
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

                                    <div class="row m-3">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="row">
                                        <label class="col-sm-6 control-label font-italic">Height:</label>
                                        <div class="col-sm-6">
                                            <label for="">{{empty($record->height)?'N/A':$record->height}}</label>
                                        </div>
                                    </div>
                                        </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="row">
                                        <label class="col-sm-6 control-label font-italic">Weight:</label>
                                        <div class="col-sm-6">
                                            <label for="">{{empty($record->weight)?'N/A':$record->weight}}</label>
                                        </div>
                                    </div>
                                        </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="row">
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


                                </div>
                                </div>  {{-- card body end --}}


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
                                            <label></label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Facial appearance:</label>
                                        <div class="col-sm-8">
                                            <label></label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">c) Rapport:</label>
                                        <div class="col-sm-8">
                                            <label for=""></label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group\">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">d) Posture and movement:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">e) Social behaviour:</label>
                                        <div class="col-sm-8">
                                        <label for=""></label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">f) Motor behaviour:</label>
                                        <div class="col-sm-8">
                                        <label for=""></label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">g) Oddity of behaviour:</label>
                                        <div class="col-sm-8">
                                        <label for=""></label>
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
                                <input type="checkbox" class="form-check-input" id="depressed">
                                <label class="form-check-label" for="depressed">Depressed</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="anxious">
                                <label class="form-check-label" for="anxious">Anxious</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="euthymic">
                                <label class="form-check-label" for="euthymic">Euthymic</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="blunt">
                                <label class="form-check-label" for="blunt">Blunt</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="apathy">
                                <label class="form-check-label" for="apathy">Apathy</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="elated">
                                <label class="form-check-label" for="elated">Elated</label>
                          </td>
                        </tr>
                        <tr>
                          
                          <td>
                                <input type="checkbox" class="form-check-input" id="congruent">
                                <label class="form-check-label" for="congruent">Congruent</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="incongrument">
                                <label class="form-check-label" for="incongrument">Incongrument</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="lability">
                                <label class="form-check-label" for="lability">Lability</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="depersonalization">
                                <label class="form-check-label" for="depersonalization">Depersonalization</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="derealization">
                                <label class="form-check-label" for="derealization">Derealization</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="m_others">
                                <label class="form-check-label" for="m_others">Others</label>
                          </td>
                        </tr>
                    </tbody>
                </table>


                        <label class="ml-5 mt-5"><u>III. Speech:</u></label>

                        <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">a) Rate quantity:</label>
                                        <div class="col-sm-8">
                                            <label></label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Volume and tone:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">c) Flow and rhythm:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">d) Oddity of speech:</label>
                                        <div class="col-sm-8">
                                        <label></label>
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
                                <input type="checkbox" class="form-check-input" id="poverty">
                                <label class="form-check-label" for="poverty">Poverty</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="pressure">
                                <label class="form-check-label" for="pressure">Pressure</label>
                          </td>
                          <td></td>
                          <td></td><td></td><td></td>
                        </tr>
                        <tr>
                          <th scope="row" class="font-italic" >b) Possession:</th>
                          <td>
                                <input type="checkbox" class="form-check-input" id="insertion">
                                <label class="form-check-label" for="insertion">Insertion</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="withdrawl">
                                <label class="form-check-label" for="withdrawl">Withdrawl</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="broadcasting">
                                <label class="form-check-label" for="broadcasting">Broadcasting</label>
                          </td>
                          <td></td><td></td><td></td>
                        </tr>
                        <tr>
                          <th scope="row" class="font-italic" >c) Form:</th>
                          <td>
                                <input type="checkbox" class="form-check-input" id="flight_ideas">
                                <label class="form-check-label" for="flight_ideas">Flight od ideas</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="perseveration">
                                <label class="form-check-label" for="perseveration">Perseveration</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="loosening">
                                <label class="form-check-label" for="loosening">Loosening</label>
                          </td>
                          <td></td><td></td><td></td>
                        </tr>
                        <tr>
                          <th scope="row" class="font-italic" >d) Content:</th>
                          <td>
                                <input type="checkbox" class="form-check-input" id="obsession">
                                <label class="form-check-label" for="obsession">Obsession</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="delusion">
                                <label class="form-check-label" for="delusion">Delusion</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="suicidal_thought">
                                <label class="form-check-label" for="suicidal_thought">Suicidal thought</label>
                          </td>
                          <td>
                                <input type="checkbox" class="form-check-input" id="homicidal_thought">
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
                                        <label for=""></label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Illusion:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div>
                                    </div>

                                <label class="ml-5"><u>VI. Cognition:</u></label>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">a) Consciousness:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Orientation:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div></div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">c) Attention Concentration:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div>
                                    </div>

                                    <label class="ml-5 mt-5"><u>d) Memory:</u></label>
                                    <div class="row m-5">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="row m-2">
                                        <label class="col-sm-5 control-label font-italic">Immediate:</label>
                                        <div class="col-sm-7">
                                        <label></label>
                                        </div>
                                    </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="row m-2">
                                        <label class="col-sm-4 control-label font-italic">Recent:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <div class="row m-2">
                                        <label class="col-sm-4 control-label font-italic">Remote:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div>
                                        </div>
                                    </div></div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">e) Intelligence:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">VII. Judgement:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">VIII. Insight:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div></div>

                                    </div> {{-- card body end --}}


                                    <div class="card-header mt-5">
                                    Formulation:
                                    </div>
                                <div class="card-body">

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">1. Statement of the problem:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">2. Differential diagnosis:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div></div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">3. Diagnosis:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div>
                                    </div>

                                    <label class="ml-5"><u>4. Etiology:</u></label>

                                        <div class="form-group">
                                            <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">a) Predisposing factor:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Precipitating factor:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">c) Prepetuating factor:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div>
                                    </div>

                                    <label class="ml-5"><u>5. Investigation:</u></label>

                                        <div class="form-group">
                                            <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">a) Psychological test:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Laboratory test:</label>
                                        <div class="col-sm-8">
                                        <label></label>
                                        </div>
                                    </div>
                                    </div>

                                </div> {{-- card body end --}}


                                {{-- Rimon End --}}

                                </div>
                            </div>
                        </div>

        


@endsection