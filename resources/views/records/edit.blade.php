
@extends('layouts.app')

@section('content')
    <div class="container">
        @include('common.errors')
        <form action="{{ url('doctors/records/'.$record->id) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="card border border-primary">
                        <div class="card-header bg-primary">
                            <h4 class="card-title text-dark">
                                <a data-toggle="collapse" href="#primary" class="text-white">Primary Information</a>
                            </h4>
                        </div>
                        <div id="primary" class="card-collapse">
                            <div class="card card-success">
                                <div class="card-header border-bottom border-primary text-center text-primary font-weight-bold text-uppercase">
                                    patient's clinical record
                                </div>
                                <div class="row m-5">
                                    <div class="col-lg-6">
                                        <div class="card bg-light ml-5 mt-5 mb-3  border border-dark rounded" >
                                                          
                                            <div class="card-body ">
                                                <div class="card-body">
                                                                    <div class="form-group row{{ $errors->has('unit') ? ' has-error' : '' }}">
                                                                        <label class="col-sm-6 col-form-label font-weight-bold">Unit:</label>
                                                                        <div class="col-sm-6">
                                                                            <input type="text" name="unit" class="form-control"
                                                                            value="{{ !empty(old('unit'))? old('unit') : $record->unit }}"
                                                                                   required>
                                                                            @if ($errors->has('unit'))
                                                                                <span class="help-block">
                                                                        <strong>{{ $errors->first('unit') }}</strong>
                                                                    </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row{{ $errors->has('ward') ? ' has-error' : '' }}">
                                                                        <label class="col-sm-6 col-form-label font-weight-bold">Ward</label>
                                                                        <div class="col-sm-6">
                                                                            <input type="text" name="ward" class="form-control"
                                                                                   value="{{ !empty(old('ward'))? old('ward') : $record->ward }}"
                                                                                   required>
                                                                            @if ($errors->has('ward'))
                                                                                <span class="help-block">
                                                                        <strong>{{ $errors->first('ward') }}</strong>
                                                                    </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row{{ $errors->has('bed') ? ' has-error' : '' }}">
                                                                        <label class="col-sm-6 col-form-label font-weight-bold">Bed</label>
                                                                        <div class="col-sm-6">
                                                                            <input type="text" name="bed" class="form-control" 
                                                                            value="{{ !empty(old('bed'))? old('bed') : $record->bed  }}"
                                                                                   required>
                                                                            @if ($errors->has('bed'))
                                                                                <span class="help-block">
                                                                        <strong>{{ $errors->first('bed') }}</strong>
                                                                    </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row{{ $errors->has('admission_date') ? ' has-error' : '' }}">
                                                                        <label class="col-sm-6 col-form-label font-weight-bold">Date of Admission</label>
                                                                        <div class="col-sm-6">
                                                                            <input type="date" name="admission_date" class="form-control"
                                                                                   value="{{ !empty(old('admission_date'))? old('admission_date') : $record->admission_date  }}" required>
                                                                            @if ($errors->has('admission_date'))
                                                                                <span class="help-block">
                                                                        <strong>{{ $errors->first('admission_date') }}</strong>
                                                                    </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row{{ $errors->has('examination_date') ? ' has-error' : '' }}">
                                                                        <label class="col-sm-6 col-form-label font-weight-bold">Date of Examination</label>
                                                                        <div class="col-sm-6">
                                                                            <input type="date" name="examination_date" class="form-control"
                                                                                    value="{{ !empty(old('examination_date'))? old('examination_date') : $record->examination_date }}" required>
                                                                            @if ($errors->has('examination_date'))
                                                                                <span class="help-block">
                                                                        <strong>{{ $errors->first('examination_date') }}</strong>
                                                                    </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                </div>
                                                           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="card bg-light mr-5 mt-5 mb-3   border border-dark rounded" >
                                            <div class="card-body ">
                                                                    <div class="form-group row{{ $errors->has('informant_name') ? ' has-error' : '' }}">
                                                                        <label class="col-sm-6 col-form-label font-weight-bold">Name of Informant</label>
                                                                        <div class="col-sm-6">
                                                                        <textarea type="text" name="informant_name" class="form-control  mb-2" value="" required rows="3">{{ !empty(old('informant_name'))? old('informant_name') : $record->informant_name }}
                                                                        </textarea>  
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row{{ $errors->has('relation_with_patient') ? ' has-error' : '' }}">
                                                                        <label class="col-sm-6 col-form-label font-weight-bold">Relation with
                                                                            Patient</label>
                                                                        <div class="col-sm-6">
                                                                            <input type="text" name="relation_with_patient"
                                                                                   class="form-control" value="{{ !empty(old('relation_with_patient'))? old('relation_with_patient') : $record->relation_with_patient  }}"
                                                                                   required>
                                                                            @if ($errors->has('relation_with_patient'))
                                                                                <span class="help-block">
                                                                        <strong>{{ $errors->first('relation_with_patient') }}</strong>
                                                                    </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row{{ $errors->has('referred_from') ? ' has-error' : '' }}">
                                                                        <label class="col-sm-6 col-form-label font-weight-bold">Referred from/by</label>
                                                                        <div class="col-sm-6">
                                                                            <input type="text" name="referred_from" class="form-control"
                                                                                    value="{{ !empty(old('referred_from'))? old('referred_from') : $record->referred_from }}" required>
                                                                            @if ($errors->has('referred_from'))
                                                                                <span class="help-block">
                                                                        <strong>{{ $errors->first('referred_from') }}</strong>
                                                                    </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row{{ $errors->has('referred_reason') ? ' has-error' : '' }}">
                                                                        <label class="col-sm-6 col-form-label font-weight-bold">Reason of
                                                                            Referral</label>
                                                                        <div class="col-sm-6">
                                                                            <input type="text" name="referred_reason"
                                                                                   class="form-control" value="{{ !empty(old('referred_reason'))? old('referred_reason') : $record->referred_reason }}" required>
                                                                            @if ($errors->has('referred_reason'))
                                                                                <span class="help-block">
                                                                        <strong>{{ $errors->first('referred_reason') }}</strong>
                                                                    </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                            </div>
                                                          
                                            <div class="card-body">
                                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                               
                                <div class="card-body m-5 border border-dark rounded">

                                    <div class="row">
                                        <div class="col-sm-6">
                                    <div class="form-group row{{ $errors->has('patient_name') ? ' has-error' : '' }}">
                                        <label class="col-sm-5 col-form-label font-weight-bold">Name of the
                                            Patient:</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="patient_name" class="form-control"
                                                  value="{{ !empty(old('patient_name'))? old('patient_name') : $record->patient_name  }}" required>
                                            @if ($errors->has('patient_name'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('patient_name') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                            
                                        </div>
                                        <div class="col-sm-3">
                                    <div class="form-group row{{ $errors->has('age') ? ' has-error' : '' }}">
                                        <label class="col-sm-4 col-form-label font-weight-bold">Age:</label>
                                        <div class="col-sm-8">
                                            <input type="number" name="age" class="form-control"
                                                   value="{{ !empty(old('age'))? old('age') : $record->age }}" required>
                                            @if ($errors->has('age'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                            
                                        </div>
                                        <div class="col-sm-3">
                                    <div class="form-group row{{ $errors->has('sex') ? ' has-error' : '' }}">
                                        <label class="col-sm-4 col-form-label font-weight-bold">Sex</label>
                                        <div class="col-sm-8">
                                            <select name="sex" class="form-control" required>
                                                <?php $sex = !empty(old('sex')) ? old('sex') : $record->sex; ?>
                                                @foreach ($sex_list as $sex_entry)
                                                    @if (empty($sex) or strcmp($sex, $sex_entry))
                                                        {!! '<option value="'.$sex_entry.'">'.$sex_entry.'</option>' !!}
                                                    @else
                                                        {!! '<option value="'.$sex_entry.'" selected>'.$sex_entry.'</option>' !!}
                                                    @endif
                                                @endforeach
                                            </select>
                                            @if ($errors->has('sex'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                            
                                        </div>
                                    

                                        <div class="row m-3">
                                            <div class="col-sm-6">
                                    <div class="form-group row{{ $errors->has('religion') ? ' has-error' : '' }}">


                                        <label class="col-sm-3 col-form-label font-weight-bold">Religion:</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="religion" class="form-control"
                                                   value="{{ !empty(old('religion'))? old('religion') : $record->religion }}" required>
                                            @if ($errors->has('religion'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('religion') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                                
                                            </div>
                                            <div class="col-sm-6">
                                            <div class="form-group row{{ $errors->has('inhabitant') ? ' has-error' : '' }}">
                                        <label class="col-sm-4 control-label font-weight-bold">Inhabitant:</label>
                                        <div class="col-sm-8">
                                            <select name="inhabitant" class="form-control" required>
                                                <?php $inhabitant = !empty(old('inhabitant')) ? old('inhabitant') : $record->inhabitant; ?>
                                                @foreach ($inhabitant_list as $inhabitant_entry)
                                                    @if (empty($inhabitant) or strcmp($inhabitant, $inhabitant_entry))
                                                        {!! '<option value="'.$inhabitant_entry.'">'.$inhabitant_entry.'</option>' !!}
                                                    @else
                                                        {!! '<option value="'.$inhabitant_entry.'" selected>'.$inhabitant_entry.'</option>' !!}
                                                    @endif
                                                @endforeach
                                            </select>
                                            @if ($errors->has('inhabitant'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('inhabitant') }}</strong>
                                    </span>
                                            @endif
                                        </div></div>
                                    </div>
                                        

                                        <div class="row">
                                            <div class="col-sm-4">
                                    <div class="form-group row{{ $errors->has('marital_status') ? ' has-error' : '' }}">
                                        <label class="col-sm-6 col-form-label font-weight-bold">Marital Status:</label>
                                        <div class="col-sm-6">
                                            <select name="marital_status" class="form-control" required>
                                                <?php $marital_status = old('marital_status'); ?>
                                                @foreach ($marital_status_list as $marital_status_entry)
                                                    @if (empty($marital_status) or strcmp($marital_status, $marital_status_entry))
                                                        {!! '<option value="'.$marital_status_entry.'">'.$marital_status_entry.'</option>' !!}
                                                    @else
                                                        {!! '<option value="'.$marital_status_entry.'" selected>'.$marital_status_entry.'</option>' !!}
                                                    @endif
                                                @endforeach
                                            </select>
                                            @if ($errors->has('marital_status'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('marital_status') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div></div>
                                                
                                           
                                            <div class="col-sm-4">
                                    <div class="form-group row{{ $errors->has('occupation') ? ' has-error' : '' }}">
                                        <label class="col-sm-5 col-form-label font-weight-bold">Occupation:</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="occupation" class="form-control"
                                                    value="{{ !empty(old('occupation'))? old('occupation') : $record->occupation }}" required>
                                            @if ($errors->has('occupation'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('occupation') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                                
                                            </div>
                                            <div class="col-sm-4">
                                    <div class="form-group row{{ $errors->has('education') ? ' has-error' : '' }}">
                                        <label class="col-sm-5 col-form-label font-weight-bold">Education:</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="education" class="form-control"
                                                   value="{{ !empty(old('education'))? old('education') : $record->education }}" required>
                                            @if ($errors->has('education'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('education') }}</strong>
                                    </span>
                                            @endif
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
                        <div id="history" class="card-collapse collapse"></div>
                            <div class="card card-success">
                                <div class="card-header font-weight-bold">
                                    1. Presenting Complaints:
                                </div>
                                <div class="card-body">
                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('complain') ? ' has-error' : '' }}">
                                    <textarea name="complain" class="form-control"
                                              rows="3">{{ !empty(old('complain'))?old('complain'):$record->complain }}</textarea>
                                            @if ($errors->has('complain'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('complain') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header font-weight-bold">
                                    2. History of Present Illness:
                                </div>
                                <div class="card-body">
                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('present_illness') ? ' has-error' : '' }}">
                                            <div style="padding-bottom: 5px">
                                                <p>
                                                    Mention: Onset, precipitating, aggravating and relieving factors,
                                                    duration,
                                                    course,
                                                    level of functioning, etc.
                                                </p>
                                            </div>
                                            <textarea name="present_illness" class="form-control"
                                                      rows="3">{{ !empty(old('present_illness'))?old('present_illness'):$record->present_illness }}</textarea>
                                            @if ($errors->has('present_illness'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('present_illness') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header font-weight-bold">
                                    3. Family and Social History:
                                </div>
                                <div class="card-body">
                                    <div class="form-group{{ $errors->has('father') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Father:</label>
                                        <div class="col-sm-9">
                                        <textarea name="father" class="form-control"
                                                  rows="3">{{ !empty(old('father'))?old('father'):$record->father }}</textarea>
                                            @if ($errors->has('father'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('father') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('mother') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Mother:</label>
                                        <div class="col-sm-9">
                                        <textarea name="mother" class="form-control"
                                                  rows="3">{{ !empty(old('mother'))?old('mother'):$record->mother }}</textarea>
                                            @if ($errors->has('mother'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('mother') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('siblings') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Siblings:</label>
                                        <div class="col-sm-9">
                                        <textarea name="siblings" class="form-control"
                                                  rows="3">{{ !empty(old('siblings'))?old('siblings'):$record->siblings }}</textarea>
                                            @if ($errors->has('siblings'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('siblings') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                            
                                        </div>

                                    <div class="form-group{{ $errors->has('consanguinity') ? ' has-error' : '' }}">

                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Consanguinity:</label>
                                        <div class="col-sm-9">
                                        <textarea name="consanguinity" class="form-control"
                                                  rows="3">{{ !empty(old('consanguinity'))?old('consanguinity'):$record->consanguinity }}</textarea>
                                            @if ($errors->has('consanguinity'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('consanguinity') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                            
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('social_pos_family') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Social Position of Family:</label>
                                        <div class="col-sm-9">
                                        <textarea name="social_pos_family" class="form-control"
                                                  rows="3">{{ !empty(old('social_pos_family'))?old('social_pos_family'):$record->social_pos_family }}</textarea>
                                            @if ($errors->has('social_pos_family'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('social_pos_family') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('family_history_mental') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Family History of Mental Illness:</label>
                                        <div class="col-sm-9">
                                        <textarea name="family_history_mental" class="form-control"
                                                  rows="3">{{ !empty(old('family_history_mental'))?old('family_history_mental'):$record->family_history_mental }}</textarea>
                                            @if ($errors->has('family_history_mental'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('family_history_mental') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('family_tree') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Family Tree:</label>
                                        <div class="col-sm-9">
                                        <textarea name="family_tree" class="form-control"
                                                  rows="3">{{ !empty(old('family_tree'))?old('family_tree'):$record->family_tree }}</textarea>
                                            @if ($errors->has('family_tree'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('family_tree') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header font-weight-bold">
                                    4. Personal History:
                                </div>
                                <div class="card-body">
                                    <div class="form-group{{ $errors->has('pregnancy_and_birth') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">a) Pregnancy and Birth:</label>
                                        <div class="col-sm-9">
                                        <textarea name="pregnancy_and_birth" class="form-control"
                                                  rows="3">{{ !empty(old('pregnancy_and_birth'))?old('pregnancy_and_birth'):$record->pregnancy_and_birth }}</textarea>
                                            @if ($errors->has('pregnancy_and_birth'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('pregnancy_and_birth') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('early_developmental_milestones') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">b) Early Developmental Milestones:</label>
                                        <div class="col-sm-9">
                                        <textarea name="early_developmental_milestones" class="form-control"
                                                  rows="3">{{ !empty(old('early_developmental_milestones'))?old('early_developmental_milestones'):$record->early_developmental_milestones }}</textarea>
                                            @if ($errors->has('early_developmental_milestones'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('early_developmental_milestones') }}</strong>
                                    </span>
                                            @endif
                                        </div> 
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('childhood') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">c) Childhood:</label>
                                        <div class="col-sm-9">
                                        <textarea name="childhood" class="form-control"
                                                  rows="3">{{ !empty(old('childhood'))?old('childhood'):$record->childhood }}</textarea>
                                            @if ($errors->has('childhood'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('childhood') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('education_history') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">d) Education:</label>
                                        <div class="col-sm-9">
                                        <textarea name="education_history" class="form-control"
                                                  rows="3">{{ !empty(old('education_history'))?old('education_history'):$record->education_history }}</textarea>
                                            @if ($errors->has('education_history'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('education_history') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('occupation_history') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">e) Occupation:</label>
                                        <div class="col-sm-9">
                                        <textarea name="occupation_history" class="form-control"
                                                  rows="3">{{ !empty(old('occupation_history'))?old('occupation_history'):$record->occupation_history }}</textarea>
                                            @if ($errors->has('occupation_history'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('occupation_history') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('marriage_sex_history') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">f) Marriage and Sexual History:</label>
                                        <div class="col-sm-9">
                                        <textarea name="marriage_sex_history" class="form-control"
                                                  rows="3">{{ !empty(old('marriage_sex_history'))?old('marriage_sex_history'):$record->marriage_sex_history }}</textarea>
                                            @if ($errors->has('marriage_sex_history'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('marriage_sex_history') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('current_relationship') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">g) Current Relationship:</label>
                                        <div class="col-sm-9">
                                        <textarea name="current_relationship" class="form-control"
                                                  rows="3">{{ !empty(old('current_relationship'))?old('current_relationship'):$record->current_relationship }}</textarea>
                                            @if ($errors->has('current_relationship'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('current_relationship') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('social_circumstances') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">h) Social Circumstances:</label>
                                        <div class="col-sm-9">
                                        <textarea name="social_circumstances" class="form-control"
                                                  rows="3">{{ !empty(old('social_circumstances'))?old('social_circumstances'):$record->social_circumstances }}</textarea>
                                            @if ($errors->has('social_circumstances'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('social_circumstances') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('substance_use') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">i) Substance Use:</label>
                                        <div class="col-sm-9">
                                        <textarea name="substance_use" class="form-control"
                                                  rows="3">{{ !empty(old('substance_use'))?old('substance_use'):$record->substance_use }}</textarea>
                                            @if ($errors->has('substance_use'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('substance_use') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('forensic_history') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">j) Forensic History:</label>
                                        <div class="col-sm-9">
                                        <textarea name="forensic_history" class="form-control"
                                                  rows="3">{{ !empty(old('forensic_history'))?old('forensic_history'):$record->forensic_history }}</textarea>
                                            @if ($errors->has('forensic_history'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('forensic_history') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                            
                                        </div>
                                    </div>
                                </div>


                                <div class="card-header font-weight-bold">
                                    5. Past Psychiatry History:
                                </div>
                                <div class="card-body">
                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('past_psychiatry_history') ? ' has-error' : '' }}">
                                            <div style="padding-bottom: 5px">
                                                <p>
                                                    Mention: Onset, duration, treatment, hospitalization and outcome.
                                                </p>
                                            </div>
                                            <textarea name="past_psychiatry_history" class="form-control"
                                                      rows="3">{{ !empty(old('past_psychiatry_history'))?old('past_psychiatry_history'):$record->past_psychiatry_history }}</textarea>
                                            @if ($errors->has('past_psychiatry_history'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('past_psychiatry_history') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header font-weight-bold">
                                    6. Past Medical Illness:
                                </div>
                                <div class="card-body">
                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('past_medical_illness') ? ' has-error' : '' }}">
                                            <div style="padding-bottom: 5px">
                                                <p>
                                                    Mention: Onset, duration, treatment, hospitalization and outcome.
                                                </p>
                                            </div>
                                            <textarea name="past_medical_illness" class="form-control"
                                                      rows="3">{{ !empty(old('past_medical_illness'))?old('past_medical_illness'):$record->past_medical_illness }}</textarea>
                                            @if ($errors->has('past_medical_illness'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('past_medical_illness') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header font-weight-bold">
                                    7. Co-morbid Illness:
                                </div>
                                <div class="card-body">
                                    <div class="col-sm-12">
                                        <div class="form-group{{ $errors->has('comorbid_illness') ? ' has-error' : '' }}">
                                        <textarea name="comorbid_illness" class="form-control"
                                                  rows="3">{{ !empty(old('comorbid_illness'))?old('comorbid_illness'):$record->comorbid_illness }}</textarea>
                                            @if ($errors->has('comorbid_illness'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('comorbid_illness') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card-header font-weight-bold">
                                    8. Drugs:
                                </div>
                                <div class="card-body">
                                    <div class="form-group{{ $errors->has('relationship') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Relationship:</label>
                                        <div class="col-sm-9">
                                        <textarea name="relationship" class="form-control"
                                                  rows="3">{{ !empty(old('relationship'))?old('relationship'):$record->relationship  }}</textarea>
                                            @if ($errors->has('relationship'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('relationship') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('character') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Character:</label>
                                        <div class="col-sm-9">
                                        <textarea name="character" class="form-control"
                                                  rows="3">{{ !empty(old('character'))?old('character'):$record->character }}</textarea>
                                            @if ($errors->has('character'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('character') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('hobbies') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Leisure Activity / Hobbies:</label>
                                        <div class="col-sm-9">
                                        <textarea name="hobbies" class="form-control"
                                                  rows="3">{{ !empty(old('hobbies'))?old('hobbies'):$record->hobbies }}</textarea>
                                            @if ($errors->has('hobbies'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('hobbies') }}</strong>
                                    </span>
                                            @endif
                                        </div> 
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('predominant_mood') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Predominant Mood:</label>
                                        <div class="col-sm-9">
                                        <textarea name="predominant_mood" class="form-control"
                                                  rows="3">{{ !empty(old('predominant_mood'))?old('predominant_mood'):$record->predominant_mood }}</textarea>
                                            @if ($errors->has('predominant_mood'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('predominant_mood') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('attitude_and_standards') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Attitude and Standards:</label>
                                        <div class="col-sm-9">
                                        <textarea name="attitude_and_standards" class="form-control"
                                                  rows="3">{{ !empty(old('attitude_and_standards'))?old('attitude_and_standards'):$record->attitude_and_standards }}</textarea>
                                            @if ($errors->has('attitude_and_standards'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('attitude_and_standards') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('ultimate_concern') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">Ultimate Concern:</label>
                                        <div class="col-sm-9">
                                        <textarea name="ultimate_concern" class="form-control"
                                                  rows="3">{{ !empty(old('ultimate_concern'))?old('ultimate_concern'):$record->ultimate_concern }}</textarea>
                                            @if ($errors->has('ultimate_concern'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('ultimate_concern') }}</strong>
                                    </span>
                                            @endif
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
                                <input type="checkbox" name="weight_changes" class="form-check-input" id="weight_changes"
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
                                    
                                    <div class="form-group{{ $errors->has('body_build') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">1. Body Build:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="body_build" class="form-control"
                                                   value="{{ !empty(old('body_build'))? old('body_build') : $record->body_build  }}">
                                            @if ($errors->has('body_build'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('body_build') }}</strong>
                                    </span>
                                            @endif
                                        </div>   
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('nutritional_status') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">2. Nutritional & Status:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nutritional_status" class="form-control"
                                                   value="{{ !empty(old('nutritional_status'))? old('nutritional_status') : $record->nutritional_status  }}">
                                            @if ($errors->has('nutritional_status'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('nutritional_status') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        </div>
                                    </div>

                                   
                                    <label class="ml-5"><u>3. Vital Signs:</u></label>

                                    <div class="row ml-5 mr-5">
                                        <div class="col-sm-6">
                                            <div class="form-group{{ $errors->has('pulse') ? ' has-error' : '' }}">
                                                <div class="row ml-5 mr-5">
                                        <label class="col-sm-4 control-label font-italic">Pulse:</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="pulse" class="form-control"
                                                   value="{{ !empty(old('pulse'))? old('pulse') : $record->pulse  }}">
                                            @if ($errors->has('pulse'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('pulse') }}</strong>
                                    </span>
                                            @endif
                                        </div>     
                                         </div>
                                        </div> 
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group{{ $errors->has('bp') ? ' has-error' : '' }}">
                                            <div class="row ml-5 mr-5">
                                            <label class="col-sm-3 control-label font-italic">BP:</label>
                                            <div class="col-sm-5">
                                                <input type="text" name="bp" class="form-control"
                                                       value="{{ !empty(old('bp'))? old('bp') : $record->bp  }}">
                                                @if ($errors->has('bp'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('bp') }}</strong>
                                            </span>
                                                @endif
                                            </div> 
                                            </div>
                                             </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row ml-5 mr-5">
                                        <div class="col-sm-6">
                                            <div class="form-group{{ $errors->has('temp') ? ' has-error' : '' }}">
                                                <div class="row ml-5 mr-5">
                                                <label class="col-sm-7 control-label font-italic">Temp:</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="temp" class="form-control"
                                                           value="{{ !empty(old('temp'))? old('temp') : $record->temp  }}">
                                                    @if ($errors->has('temp'))
                                                        <span class="help-block">
                                                <strong>{{ $errors->first('temp') }}</strong>
                                                </span>
                                                    @endif
                                                </div>
                                                </div>
                                                </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group{{ $errors->has('res_rate') ? ' has-error' : '' }}">
                                                <div class="row ml-5 mr-5">
                                                <label class="col-sm-4 control-label font-italic">Res. Rate:</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="res_rate" class="form-control"
                                                           value="{{ !empty(old('res_rate'))? old('res_rate') : $record->res_rate  }}">
                                                    @if ($errors->has('res_rate'))
                                                        <span class="help-block">
                                                <strong>{{ $errors->first('res_rate') }}</strong>
                                            </span>
                                                    @endif
                                                </div>
                                                </div>
                                                </div>
                                        </div>
                                    </div>
                                    



                                            
                                    

                                    <label class="ml-5"><u>4. Body Size</u></label>

                                    <div class="row ml-5 mr-5">
                                        <div class="col-lg-4">
                                            <div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                                                <div class="row ml-5 mr-5">
                                        <label class="col-sm-6 control-label font-italic">Height:</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="height" class="form-control"
                                                   value="{{ !empty(old('height'))? old('height') : $record->height  }}">
                                            @if ($errors->has('height'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                                                <div class="row ml-5 mr-5">
                                        <label class="col-sm-6 control-label font-italic">Weight:</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="weight" class="form-control"
                                                   value="{{ !empty(old('weight'))? old('weight') : $record->weight  }}">
                                            @if ($errors->has('weight'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group{{ $errors->has('bmi') ? ' has-error' : '' }}">
                                                <div class="row ml-5 mr-5">
                                        <label class="col-sm-6 control-label font-italic">BMI:</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="bmi" class="form-control"
                                                   value="{{ !empty(old('bmi'))? old('bmi') : $record->bmi  }}">
                                            @if ($errors->has('bmi'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('bmi') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                        </div>
                                        </div>
                                    </div>


                                    <div class="form-group{{ $errors->has('bowel') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">5. Bowel:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="bowel" class="form-control"
                                                   value="{{ !empty(old('bowel'))? old('bowel') : $record->bowel  }}">
                                            @if ($errors->has('bowel'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('bowel') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('bladder') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">6. Bladder:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="bladder" class="form-control"
                                                   value="{{ !empty(old('bowel'))? old('bowel') : $record->bowel  }}">
                                            @if ($errors->has('bladder'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('bladder') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('anaemia') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">7. Anaemia:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="anaemia" class="form-control"
                                                   value="{{ !empty(old('anaemia'))? old('anaemia') : $record->anaemia  }}">
                                            @if ($errors->has('anaemia'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('anaemia') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('jaundice') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">8. Jaundice:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="jaundice" class="form-control"
                                                   value="{{ !empty(old('jaundice'))? old('jaundice') : $record->jaundice  }}">
                                            @if ($errors->has('jaundice'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('jaundice') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('oedema') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">9. Oedema:</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="oedema" class="form-control"
                                                   value="{{ !empty(old('oedema'))? old('oedema') : $record->oedema  }}">
                                            @if ($errors->has('oedema'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('oedema') }}</strong>
                                    </span>
                                            @endif
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


                                    <div class="form-group{{ $errors->has('higher_psychic_function') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">i. Higher Psychic Function:</label>
                                        <div class="col-sm-8">
                                        <textarea name="higher_psychic_function" class="form-control"
                                                  rows="3">{{ !empty(old('higher_psychic_function'))?old('higher_psychic_function'):$record->higher_psychic_function }}</textarea>
                                            @if ($errors->has('higher_psychic_function'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('higher_psychic_function') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('motor_function') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">ii. Motor Function:</label>
                                        <div class="col-sm-8">
                                        <textarea name="motor_function" class="form-control"
                                                  rows="3">{{ !empty(old('motor_function'))?old('motor_function'):$record->motor_function }}</textarea>
                                            @if ($errors->has('motor_function'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('motor_function') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('cranial_nerves') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">iii. Cranial Nerves:</label>
                                        <div class="col-sm-8">
                                        <textarea name="cranial_nerves" class="form-control"
                                                  rows="3">{{ !empty(old('cranial_nerves'))?old('cranial_nerves'):$record->cranial_nerves }}</textarea>
                                            @if ($errors->has('cranial_nerves'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('cranial_nerves') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('sensory') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">iv. Sensory:</label>
                                        <div class="col-sm-8">
                                        <textarea name="sensory" class="form-control"
                                                  rows="3">{{ !empty(old('sensory'))?old('sensory'):$record->sensory }}</textarea>
                                            @if ($errors->has('sensory'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('sensory') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('endocrine_system') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">B) Endocrine System:</label>
                                        <div class="col-sm-8">
                                        <textarea name="endocrine_system" class="form-control"
                                                  rows="3">{{ !empty(old('endocrine_system'))?old('endocrine_system'):$record->endocrine_system }}</textarea>
                                            @if ($errors->has('endocrine_system'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('endocrine_system') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div></div>

                                    <div class="form-group{{ $errors->has('musculoskeletal_system') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">C) Musculoskeletal System:</label>
                                        <div class="col-sm-8">
                                        <textarea name="musculoskeletal_system" class="form-control"
                                                  rows="3">{{ !empty(old('musculoskeletal_system'))?old('musculoskeletal_system'):$record->musculoskeletal_system }}</textarea>
                                            @if ($errors->has('musculoskeletal_system'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('musculoskeletal_system') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('d_others') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">D) Others:</label>
                                        <div class="col-sm-8">
                                        <textarea name="d_others" class="form-control"
                                                  rows="3">{{ !empty(old('d_others'))?old('d_others'):$record->d_others }}</textarea>
                                            @if ($errors->has('d_others'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('d_others') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                </div> {{-- card body end --}}


                                <div class="card-header font-weight-bold">
                                    13. Mental state examination:
                                </div>

                                <div class="card-body">

                                    <label class="ml-5"><u>I. Appearance and behaviour:</u></label>

                                    <div class="form-group{{ $errors->has('general_appearance') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">a) General appearance:</label>
                                        <div class="col-sm-8">
                                        <textarea name="general_appearance" class="form-control"
                                                  rows="3">{{ !empty(old('general_appearance'))?old('general_appearance'):$record->general_appearance }}</textarea>
                                            @if ($errors->has('general_appearance'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('general_appearance') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('facial_appearance') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Facial appearance:</label>
                                        <div class="col-sm-8">
                                        <textarea name="facial_appearance" class="form-control"
                                                  rows="3">{{ !empty(old('facial_appearance'))?old('facial_appearance'):$record->facial_appearance }}</textarea>
                                            @if ($errors->has('facial_appearance'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('facial_appearance') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('rapport') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">c) Rapport:</label>
                                        <div class="col-sm-8">
                                        <textarea name="rapport" class="form-control"
                                                  rows="3">{{ !empty(old('rapport'))?old('rapport'):$record->rapport }}</textarea>
                                            @if ($errors->has('rapport'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('rapport') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('posture_movement') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">d) Posture and movement:</label>
                                        <div class="col-sm-8">
                                        <textarea name="posture_movement" class="form-control"
                                                  rows="3">{{ !empty(old('posture_movement'))?old('posture_movement'):$record->posture_movement }}</textarea>
                                            @if ($errors->has('posture_movement'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('posture_movement') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('social_behaviour') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">e) Social behaviour:</label>
                                        <div class="col-sm-8">
                                        <textarea name="social_behaviour" class="form-control"
                                                  rows="3">{{ !empty(old('social_behaviour'))?old('social_behaviour'):$record->social_behaviour }}</textarea>
                                            @if ($errors->has('social_behaviour'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('social_behaviour') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('motor_behaviour') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">f) Motor behaviour:</label>
                                        <div class="col-sm-8">
                                        <textarea name="motor_behaviour" class="form-control"
                                                  rows="3">{{ !empty(old('motor_behaviour'))?old('motor_behaviour'):$record->motor_behaviour }}</textarea>
                                            @if ($errors->has('motor_behaviour'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('motor_behaviour') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('oddity_behaviour') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">g) Oddity of behaviour:</label>
                                        <div class="col-sm-8">
                                        <textarea name="oddity_behaviour" class="form-control"
                                                  rows="3">{{ !empty(old('oddity_behaviour'))?old('oddity_behaviour'):$record->oddity_behaviour }}</textarea>
                                            @if ($errors->has('oddity_behaviour'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('oddity_behaviour') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div></div>

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

                        <div class="form-group{{ $errors->has('rate_quantity') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">a) Rate quantity:</label>
                                        <div class="col-sm-8">
                                        <textarea name="rate_quantity" class="form-control"
                                                  rows="3">{{ !empty(old('rate_quantity'))?old('rate_quantity'):$record->rate_quantity }}</textarea>
                                            @if ($errors->has('rate_quantity'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('rate_quantity') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('volume_tone') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Volume and tone:</label>
                                        <div class="col-sm-8">
                                        <textarea name="volume_tone" class="form-control"
                                                  rows="3">{{ !empty(old('volume_tone'))?old('volume_tone'):$record->volume_tone }}</textarea>
                                            @if ($errors->has('volume_tone'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('volume_tone') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('flow_rhythm') ? ' has-error' : '' }}"><div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">c) Flow and rhythm:</label>
                                        <div class="col-sm-8">
                                        <textarea name="flow_rhythm" class="form-control"
                                                  rows="3">{{ !empty(old('flow_rhythm'))?old('flow_rhythm'):$record->flow_rhythm }}</textarea>
                                            @if ($errors->has('flow_rhythm'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('flow_rhythm') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('oddity_speech') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">d) Oddity of speech:</label>
                                        <div class="col-sm-8">
                                        <textarea name="oddity_speech" class="form-control"
                                                  rows="3">{{ !empty(old('oddity_speech'))?old('oddity_speech'):$record->oddity_speech }}</textarea>
                                            @if ($errors->has('oddity_speech'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('oddity_speech') }}</strong>
                                    </span>
                                            @endif
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

                                <div class="form-group{{ $errors->has('hallucination') ? ' has-error' : '' }}">
                                    <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">a) Hallucination:</label>
                                        <div class="col-sm-8">
                                        <textarea name="hallucination" class="form-control"
                                                  rows="3">{{ !empty(old('hallucination'))?old('hallucination'):$record->hallucination }}</textarea>
                                            @if ($errors->has('hallucination'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('hallucination') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('illusion') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Illusion:</label>
                                        <div class="col-sm-8">
                                        <textarea name="illusion" class="form-control"
                                                  rows="3">{{ !empty(old('illusion'))?old('illusion'):$record->illusion }}</textarea>
                                            @if ($errors->has('illusion'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('illusion') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                <label class="ml-5"><u>VI. Cognition:</u></label>

                                    <div class="form-group{{ $errors->has('consciousness') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">a) Consciousness:</label>
                                        <div class="col-sm-8">
                                        <textarea name="consciousness" class="form-control"
                                                  rows="3">{{ !empty(old('consciousness'))?old('consciousness'):$record->consciousness }}</textarea>
                                            @if ($errors->has('consciousness'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('consciousness') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('orientation') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Orientation:</label>
                                        <div class="col-sm-8">
                                        <textarea name="orientation" class="form-control"
                                                  rows="3">{{ !empty(old('orientation'))?old('orientation'):$record->orientation }}</textarea>
                                            @if ($errors->has('orientation'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('orientation') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div></div>

                                    <div class="form-group{{ $errors->has('attention_concentration') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">c) Attention Concentration:</label>
                                        <div class="col-sm-8">
                                        <textarea name="attention_concentration" class="form-control"
                                                  rows="3">{{ !empty(old('attention_concentration'))?old('attention_concentration'):$record->attention_concentration }}</textarea>
                                            @if ($errors->has('attention_concentration'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('attention_concentration') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <label class="ml-5"><u>d) Memory:</u></label>
                                    <div class="row m-5">
                                        <div class="col-lg-4">
                                            <div class="form-group{{ $errors->has('immediate') ? ' has-error' : '' }}">
                                                <div class="row m-2">
                                        <label class="col-sm-5 control-label font-italic">Immediate:</label>
                                        <div class="col-sm-7">
                                        <textarea name="immediate" class="form-control"
                                                  rows="3">{{ !empty(old('immediate'))?old('immediate'):$record->immediate }}</textarea>
                                            @if ($errors->has('immediate'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('immediate') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group{{ $errors->has('recent') ? ' has-error' : '' }}">
                                                <div class="row m-2">
                                        <label class="col-sm-4 control-label font-italic">Recent:</label>
                                        <div class="col-sm-8">
                                        <textarea name="recent" class="form-control"
                                                  rows="3">{{ !empty(old('recent'))?old('recent'):$record->recent }}</textarea>
                                            @if ($errors->has('recent'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('recent') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group{{ $errors->has('remote') ? ' has-error' : '' }}">
                                                <div class="row m-2">
                                        <label class="col-sm-4 control-label font-italic">Remote:</label>
                                        <div class="col-sm-8">
                                        <textarea name="remote" class="form-control"
                                                  rows="3">{{ !empty(old('remote'))?old('remote'):$record->remote }}</textarea>
                                            @if ($errors->has('remote'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('remote') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                        </div>
                                    </div></div>

                                    <div class="form-group{{ $errors->has('intelligence') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">e) Intelligence:</label>
                                        <div class="col-sm-8">
                                        <textarea name="intelligence" class="form-control"
                                                  rows="3">{{ !empty(old('intelligence'))?old('intelligence'):$record->intelligence }}</textarea>
                                            @if ($errors->has('intelligence'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('intelligence') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('judgement') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">VII. Judgement:</label>
                                        <div class="col-sm-8">
                                        <textarea name="judgement" class="form-control"
                                                  rows="3">{{ !empty(old('judgement'))?old('judgement'):$record->judgement }}</textarea>
                                            @if ($errors->has('judgement'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('judgement') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('insight') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">VIII. Insight:</label>
                                        <div class="col-sm-8">
                                        <textarea name="insight" class="form-control"
                                                  rows="3">{{ !empty(old('insight'))?old('insight'):$record->insight }}</textarea>
                                            @if ($errors->has('insight'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('insight') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div></div>

                                    </div> {{-- card body end --}}


                                    <div class="card-header">
                                    Formulation:
                                    </div>
                                <div class="card-body">

                                    <div class="form-group{{ $errors->has('statement_problem') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">1. Statement of the problem:</label>
                                        <div class="col-sm-8">
                                        <textarea name="statement_problem" class="form-control"
                                                  rows="3">{{ !empty(old('statement_problem'))?old('statement_problem'):$record->statement_problem }}</textarea>
                                            @if ($errors->has('statement_problem'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('statement_problem') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('differential_diagnosis') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">2. Differential diagnosis:</label>
                                        <div class="col-sm-8">
                                        <textarea name="differential_diagnosis" class="form-control"
                                                  rows="3">{{ !empty(old('differential_diagnosis'))?old('differential_diagnosis'):$record->differential_diagnosis }}</textarea>
                                            @if ($errors->has('differential_diagnosis'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('differential_diagnosis') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div></div>

                                    <div class="form-group{{ $errors->has('diagnosis') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label">3. Diagnosis:</label>
                                        <div class="col-sm-8">
                                        <textarea name="diagnosis" class="form-control"
                                                  rows="3">{{ !empty(old('diagnosis'))?old('diagnosis'):$record->diagnosis }}</textarea>
                                            @if ($errors->has('diagnosis'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('diagnosis') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <label class="ml-5"><u>4. Etiology:</u></label>

                                        <div class="form-group{{ $errors->has('predisposing_factor') ? ' has-error' : '' }}">
                                            <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">a) Predisposing factor:</label>
                                        <div class="col-sm-8">
                                        <textarea name="predisposing_factor" class="form-control"
                                                  rows="3">{{ !empty(old('predisposing_factor'))?old('predisposing_factor'):$record->predisposing_factor }}</textarea>
                                            @if ($errors->has('predisposing_factor'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('predisposing_factor') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('precipitating_factor') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Precipitating factor:</label>
                                        <div class="col-sm-8">
                                        <textarea name="precipitating_factor" class="form-control"
                                                  rows="3">{{ !empty(old('precipitating_factor'))?old('precipitating_factor'):$record->precipitating_factor }}</textarea>
                                            @if ($errors->has('precipitating_factor'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('precipitating_factor') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('prepetuating_factor') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">c) Prepetuating factor:</label>
                                        <div class="col-sm-8">
                                        <textarea name="prepetuating_factor" class="form-control"
                                                  rows="3">{{ !empty(old('prepetuating_factor'))?old('prepetuating_factor'):$record->prepetuating_factor }}</textarea>
                                            @if ($errors->has('prepetuating_factor'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('prepetuating_factor') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <label class="ml-5"><u>5. Investigation:</u></label>

                                        <div class="form-group{{ $errors->has('psychological_test') ? ' has-error' : '' }}">
                                            <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">a) Psychological test:</label>
                                        <div class="col-sm-8">
                                        <textarea name="psychological_test" class="form-control"
                                                  rows="3">{{ !empty(old('psychological_test'))?old('psychological_test'):$record->psychological_test }}</textarea>
                                            @if ($errors->has('psychological_test'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('psychological_test') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('laboratory_test') ? ' has-error' : '' }}">
                                        <div class="row m-5">
                                        <label class="col-sm-3 control-label font-italic">b) Laboratory test:</label>
                                        <div class="col-sm-8">
                                        <textarea name="laboratory_test" class="form-control"
                                                  rows="3">{{ !empty(old('laboratory_test'))?old('laboratory_test'):$record->laboratory_test }}</textarea>
                                            @if ($errors->has('laboratory_test'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('laboratory_test') }}</strong>
                                    </span>
                                            @endif
                                        </div>
                                    </div>
                                    </div>

                                </div> {{-- card body end --}}


                                {{-- Rimon End --}}
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                    <div class="form-group">
                    <div class="" align="">
                        <button type="submit" class="btn btn-block btn-success">
                            <i class="fa fa-btn fa-plus"></i>Update Record
                        </button>
                    </div>
                </div> </form>
    </div></div>
                       
@endsection
