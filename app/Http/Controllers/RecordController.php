<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RecordRepository;
use App\Models\Record;
use App\Models\User;
use App\Models\History;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;




class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $records;
    private $sex_list = Array('Male', 'Female', 'Other');
    private $inhabitant_list = Array('Urban', 'Semi-urban', 'Rural');
    private $marital_status_list = Array('Unmarried', 'Married');

     public function __construct(RecordRepository $records)
    {
        $this->middleware('auth');

        $this->records = $records;
    }

    public function index(Request $request)
    {
        $records=Record::all();
        return view('admin.dashboard.records',compact('records'), [
            'records' => $this->records->forUser($request->user())
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('records.create', [
            'sex_list' => $this->sex_list,
            'inhabitant_list' => $this->inhabitant_list,
            'marital_status_list' => $this->marital_status_list
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'unit' => 'required|string',
            'ward' => 'required|string',
            'bed' => 'required|string',
            'admission_date' => 'required|date',
            'examination_date' => 'required|date',
            'informant_name' => 'required|string',
            'relation_with_patient' => 'required|string',
            'referred_from' => 'required|string',
            'referred_reason' => 'required|string',
            'patient_name' => 'required|string',
            'age' => 'required|string',
            'sex' => 'required|in:' . implode(",", $this->sex_list),
            'religion' => 'required|string',
            'inhabitant' => 'required|in:' . implode(",", $this->inhabitant_list),
            'marital_status' => 'required|in:' . implode(",", $this->marital_status_list),
            'occupation' => 'required|string',
            'education' => 'required|string',
            
            // 'drugs' => 'required|string',
            // 'date_started' => 'required|string',
            // 'dose' => 'required|string',
            // 'drug_response' => 'required|string',
            // 'side_effects' => 'required|string',
            // 'adr' => 'required|string',
        ]);


        $record = new Record();
        $record->user_id = Auth::id();

        $pin = mt_rand(1000000, 9999999) . mt_rand(1000000, 9999999);
        $string = str_shuffle($pin);

        $record->token_no = $string;

        $record->unit = $request->unit;
        $record->ward = $request->ward;
        $record->bed = $request->bed;
        $record->admission_date = $request->admission_date;
        $record->examination_date = $request->examination_date;
        $record->informant_name = $request->informant_name;
        $record->relation_with_patient = $request->relation_with_patient;
        $record->referred_from = $request->referred_from;
        $record->referred_reason = $request->referred_reason;
        $record->patient_name = $request->patient_name;
        $record->age = $request->age;
        $record->sex = $request->sex;
        $record->religion = $request->religion;
        $record->inhabitant = $request->inhabitant;
        $record->marital_status = $request->marital_status;
        $record->occupation = $request->occupation;
        $record->education = $request->education;
        $record->complain = $request->complain;

        $record->present_illness = $request->present_illness;
        $record->father = $request->father;
        $record->mother = $request->mother;
        $record->siblings = $request->siblings;
        $record->consanguinity = $request->consanguinity;
        $record->social_pos_family = $request->social_pos_family;
        $record->family_history_mental = $request->family_history_mental;
        $record->family_tree = $request->family_tree;
        $record->pregnancy_and_birth = $request->pregnancy_and_birth;
        $record->early_developmental_milestones = $request->early_developmental_milestones;
        $record->childhood = $request->childhood;
        $record->education_history = $request->education_history;
        $record->occupation_history = $request->occupation_history;
        $record->marriage_sex_history = $request->marriage_sex_history;
        $record->current_relationship = $request->current_relationship;
        $record->social_circumstances = $request->social_circumstances;
        $record->substance_use = $request->substance_use;
        $record->forensic_history = $request->forensic_history;
        $record->past_psychiatry_history = $request->past_psychiatry_history;
        $record->past_medical_illness = $request->past_medical_illness;
        $record->comorbid_illness = $request->comorbid_illness;
        $record->relationship = $request->relationship;
        $record->character = $request->character;
        $record->hobbies = $request->hobbies;
        $record->predominant_mood = $request->predominant_mood;
        $record->attitude_and_standards = $request->attitude_and_standards;
        $record->ultimate_concern = $request->ultimate_concern;

        $record->drugs = $request->drugs;
        // $record->date_started = $request->date_started;
        // $record->dose = $request->dose;
        // $record->drug_response = $request->drug_response;
        // $record->side_effects = $request->side_effects;
        // $record->adr = $request->adr;

        // rimon start

        $record->body_build = $request->body_build;
        $record->nutritional_status = $request->nutritional_status;
        $record->pulse = $request->pulse;
        $record->bp = $request->bp;
        $record->temp = $request->temp;
        $record->res_rate = $request->res_rate;
        $record->height = $request->height;
        $record->weight = $request->weight;
        $record->bmi = $request->bmi;
        $record->bowel = $request->bowel;
        $record->bladder = $request->bladder;
        $record->anaemia = $request->anaemia;
        $record->jaundice = $request->jaundice;
        $record->oedema = $request->oedema;

        $record->higher_psychic_function = $request->higher_psychic_function;
        $record->motor_function = $request->motor_function;
        $record->cranial_nerves = $request->cranial_nerves;
        $record->sensory = $request->sensory;
        $record->endocrine_system = $request->endocrine_system;
        $record->musculoskeletal_system = $request->musculoskeletal_system;
        $record->d_others = $request->d_others;
        $record->general_appearance = $request->general_appearance;
        $record->facial_appearance = $request->facial_appearance;
        $record->rapport = $request->rapport;
        $record->posture_movement = $request->posture_movement;
        $record->social_behaviour = $request->social_behaviour;
        $record->motor_behaviour = $request->motor_behaviour;
        $record->oddity_behaviour = $request->oddity_behaviour;
        $record->rate_quantity = $request->rate_quantity;
        $record->volume_tone = $request->volume_tone;
        $record->flow_rhythm = $request->flow_rhythm;
        $record->oddity_speech = $request->oddity_speech;
        $record->hallucination = $request->hallucination;
        $record->illusion = $request->illusion;
        $record->consciousness = $request->consciousness;
        $record->orientation = $request->orientation;
        $record->attention_concentration = $request->attention_concentration;
        $record->immediate = $request->immediate;
        $record->recent = $request->recent;
        $record->remote = $request->remote;
        $record->intelligence = $request->intelligence;
        $record->judgement = $request->judgement;
        $record->insight = $request->insight;
        $record->statement_problem = $request->statement_problem;
        $record->differential_diagnosis = $request->differential_diagnosis;
        $record->diagnosis = $request->diagnosis;
        $record->predisposing_factor = $request->predisposing_factor;
        $record->precipitating_factor = $request->precipitating_factor;
        $record->prepetuating_factor = $request->prepetuating_factor;
        $record->psychological_test = $request->psychological_test;
        $record->laboratory_test = $request->laboratory_test;





        //weight_changes start
        if (!empty($request->input('weight_changes'))) { $record->weight_changes = true; }
        else{
            $record->weight_changes = false;
        }

        //appetite start
        if (!empty($request->input('appetite'))) { $record->appetite = true; }
        else{
            $record->appetite = false;
        }

        //fever start
        if (!empty($request->input('fever'))) { $record->fever = true; }
        else{
            $record->fever = false;
        }

        //chestpain start
        if (!empty($request->input('chestpain'))) { $record->chestpain = true; }
        else{
            $record->chestpain = false;
        }

        //palpitation start
        if (!empty($request->input('palpitation'))) { $record->palpitation = true; }
        else{
            $record->palpitation = false;
        }

        //sob start
        if (!empty($request->input('sob'))) { $record->sob = true; }
        else{
            $record->sob = false;
        }

        //pnd start
        if (!empty($request->input('pnd'))) { $record->pnd = true; }
        else{
            $record->pnd = false;
        }

        //ankle_swelling start
        if (!empty($request->input('ankle_swelling'))) { $record->ankle_swelling = true; }
        else{
            $record->ankle_swelling = false;
        }

        //nausea_vomiting start
        if (!empty($request->input('nausea_vomiting'))) { $record->nausea_vomiting = true; }
        else{
            $record->nausea_vomiting = false;
        }

        //abdominal_swelling start
        if (!empty($request->input('abdominal_swelling'))) { $record->abdominal_swelling = true; }
        else{
            $record->abdominal_swelling = false;
        }

        //excessive_salivation start
        if (!empty($request->input('excessive_salivation'))) { $record->excessive_salivation = true; }
        else{
            $record->excessive_salivation = false;
        }

        //constipation start
        if (!empty($request->input('constipation'))) { $record->constipation = true; }
        else{
            $record->constipation = false;
        }

        //dysuria start
        if (!empty($request->input('dysuria'))) { $record->dysuria = true; }
        else{
            $record->dysuria = false;
        }

        //haematuria start
        if (!empty($request->input('haematuria'))) { $record->haematuria = true; }
        else{
            $record->haematuria = false;
        }

        //frequency start
        if (!empty($request->input('frequency'))) { $record->frequency = true; }
        else{
            $record->frequency = false;
        }

        //vaginal_disease start
        if (!empty($request->input('vaginal_disease'))) { $record->vaginal_disease = true; }
        else{
            $record->vaginal_disease = false;
        }

        //fits start
        if (!empty($request->input('fits'))) { $record->fits = true; }
        else{
            $record->fits = false;
        }

        //numbness start
        if (!empty($request->input('numbness'))) { $record->numbness = true; }
        else{
            $record->numbness = false;
        }

        //blurring_vision start
        if (!empty($request->input('blurring_vision'))) { $record->blurring_vision = true; }
        else{
            $record->blurring_vision = false;
        }

        //tremors start
        if (!empty($request->input('tremors'))) { $record->tremors = true; }
        else{
            $record->tremors = false;
        }

        //slurred_speech start
        if (!empty($request->input('slurred_speech'))) { $record->slurred_speech = true; }
        else{
            $record->slurred_speech = false;
        }

        //tingling start
        if (!empty($request->input('tingling'))) { $record->tingling = true; }
        else{
            $record->tingling = false;
        }

        //headache start
        if (!empty($request->input('headache'))) { $record->headache = true; }
        else{
            $record->headache = false;
        }

        //gait_disturbance start
        if (!empty($request->input('gait_disturbance'))) { $record->gait_disturbance = true; }
        else{
            $record->gait_disturbance = false;
        }

        //paraesthesia start
        if (!empty($request->input('paraesthesia'))) { $record->paraesthesia = true; }
        else{
            $record->paraesthesia = false;
        }

        //poor_balance start
        if (!empty($request->input('poor_balance'))) { $record->poor_balance = true; }
        else{
            $record->poor_balance = false;
        }

        //painful_joint start
        if (!empty($request->input('painful_joint'))) { $record->painful_joint = true; }
        else{
            $record->painful_joint = false;
        }

        //joint_sweling start
        if (!empty($request->input('joint_sweling'))) { $record->joint_sweling = true; }
        else{
            $record->joint_sweling = false;
        }

        //morning_stiffness start
        if (!empty($request->input('morning_stiffness'))) { $record->morning_stiffness = true; }
        else{
            $record->morning_stiffness = false;
        }

        //heatcold_intolerance start
        if (!empty($request->input('heatcold_intolerance'))) { $record->heatcold_intolerance = true; }
        else{
            $record->heatcold_intolerance = false;
        }

        //diabetes start
        if (!empty($request->input('diabetes'))) { $record->diabetes = true; }
        else{
            $record->diabetes = false;
        }

        //polyuria start
        if (!empty($request->input('polyuria'))) { $record->polyuria = true; }
        else{
            $record->polyuria = false;
        }

        //excessivethirst_hunger start
        if (!empty($request->input('excessivethirst_hunger'))) { $record->excessivethirst_hunger = true; }
        else{
            $record->excessivethirst_hunger = false;
        }

        //depressed start
        if (!empty($request->input('depressed'))) { $record->depressed = true; }
        else{
            $record->depressed = false;
        }

        //anxious start
        if (!empty($request->input('anxious'))) { $record->anxious = true; }
        else{
            $record->anxious = false;
        }

        //euthymic start
        if (!empty($request->input('euthymic'))) { $record->euthymic = true; }
        else{
            $record->euthymic = false;
        }

        //blunt start
        if (!empty($request->input('blunt'))) { $record->blunt = true; }
        else{
            $record->blunt = false;
        }

        //apathy start
        if (!empty($request->input('apathy'))) { $record->apathy = true; }
        else{
            $record->apathy = false;
        }

        //elated start
        if (!empty($request->input('elated'))) { $record->elated = true; }
        else{
            $record->elated = false;
        }

        //congruent start
        if (!empty($request->input('congruent'))) { $record->congruent = true; }
        else{
            $record->congruent = false;
        }

        //incongrument start
        if (!empty($request->input('incongrument'))) { $record->incongrument = true; }
        else{
            $record->incongrument = false;
        }

        //lability start
        if (!empty($request->input('lability'))) { $record->lability = true; }
        else{
            $record->lability = false;
        }

        //depersonalization start
        if (!empty($request->input('depersonalization'))) { $record->depersonalization = true; }
        else{
            $record->depersonalization = false;
        }

        //derealization start
        if (!empty($request->input('derealization'))) { $record->derealization = true; }
        else{
            $record->derealization = false;
        }

        //m_others start
        if (!empty($request->input('m_others'))) { $record->m_others = true; }
        else{
            $record->m_others = false;
        }

        //poverty start
        if (!empty($request->input('poverty'))) { $record->poverty = true; }
        else{
            $record->poverty = false;
        }

        //pressure start
        if (!empty($request->input('pressure'))) { $record->pressure = true; }
        else{
            $record->pressure = false;
        }

        //insertion start
        if (!empty($request->input('insertion'))) { $record->insertion = true; }
        else{
            $record->insertion = false;
        }

        //withdrawl start
        if (!empty($request->input('withdrawl'))) { $record->withdrawl = true; }
        else{
            $record->withdrawl = false;
        }

        //broadcasting start
        if (!empty($request->input('broadcasting'))) { $record->broadcasting = true; }
        else{
            $record->broadcasting = false;
        }

        //flight_ideas start
        if (!empty($request->input('flight_ideas'))) { $record->flight_ideas = true; }
        else{
            $record->flight_ideas = false;
        }

        //perseveration start
        if (!empty($request->input('perseveration'))) { $record->perseveration = true; }
        else{
            $record->perseveration = false;
        }

        //loosening start
        if (!empty($request->input('loosening'))) { $record->loosening = true; }
        else{
            $record->loosening = false;
        }

        //obsession start
        if (!empty($request->input('obsession'))) { $record->obsession = true; }
        else{
            $record->obsession = false;
        }

        //delusion start
        if (!empty($request->input('delusion'))) { $record->delusion = true; }
        else{
            $record->delusion = false;
        }

        //suicidal_thought start
        if (!empty($request->input('suicidal_thought'))) { $record->suicidal_thought = true; }
        else{
            $record->suicidal_thought = false;
        }

        //homicidal_thought start
        if (!empty($request->input('homicidal_thought'))) { $record->homicidal_thought = true; }
        else{
            $record->homicidal_thought = false;
        }

        // rimon end

        $record->save();

        return redirect()->route('admin.dashboard.records');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $record = $this->records->showRecord($id)[0];
        $this->authorize('view', $record);

        return view('records.show', [
            'record' => $record,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = $this->records->showRecord($id)[0];
        $this->authorize('view', $record);

        return view('records.edit', [
            'record' => $record,
            'sex_list' => $this->sex_list,
            'inhabitant_list' => $this->inhabitant_list,
            'marital_status_list' => $this->marital_status_list
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $record = Record::find($id);
       $this->authorize('view', $record);

        $this->validate($request, [
            'unit' => 'required|string',
            'ward' => 'required|string',
            'bed' => 'required|string',
            'admission_date' => 'required|date',
            'examination_date' => 'required|date',
            'informant_name' => 'required|string',
            'relation_with_patient' => 'required|string',
            'referred_from' => 'required|string',
            'referred_reason' => 'required|string',
            'patient_name' => 'required|string',
            'age' => 'required|string',
            'sex' => 'required|in:' . implode(",", $this->sex_list),
            'religion' => 'required|string',
            'inhabitant' => 'required|in:' . implode(",", $this->inhabitant_list),
            'marital_status' => 'required|in:' . implode(",", $this->marital_status_list),
            'occupation' => 'required|string',
            'education' => 'required|string',
        ]);
// ----------------------------------------------------------------------------
        $history = new History();
        $history->id = $record->id;
        $history->user_id = $record->user_id;
        $history->unit = $request->unit;
        $history->ward = $request->ward;
        $history->bed = $request->bed;
        $history->admission_date = $request->admission_date;
        $history->examination_date = $request->examination_date;
        $history->informant_name = $request->informant_name;
        $history->relation_with_patient = $request->relation_with_patient;
        $history->referred_from = $request->referred_from;
        $history->referred_reason = $request->referred_reason;
        $history->patient_name = $request->patient_name;
        $history->age = $request->age;
        $history->sex = $request->sex;
        $history->religion = $request->religion;
        $history->inhabitant = $request->inhabitant;
        $history->marital_status = $request->marital_status;
        $history->occupation = $request->occupation;
        $history->education = $request->education;
        $history->complain = $request->complain;
        $history->present_illness = $request->present_illness;
        $history->father = $request->father;
        $history->mother = $request->mother;
        $history->siblings = $request->siblings;
        $history->consanguinity = $request->consanguinity;
        $history->social_pos_family = $request->social_pos_family;
        $history->family_history_mental = $request->family_history_mental;
        $history->family_tree = $request->family_tree;
        $history->pregnancy_and_birth = $request->pregnancy_and_birth;
        $history->early_developmental_milestones = $request->early_developmental_milestones;
        $history->childhood = $request->childhood;
        $history->education_history = $request->education_history;
        $history->occupation_history = $request->occupation_history;
        $history->marriage_sex_history = $request->marriage_sex_history;
        $history->current_relationship = $request->current_relationship;
        $history->social_circumstances = $request->social_circumstances;
        $history->substance_use = $request->substance_use;
        $history->forensic_history = $request->forensic_history;
        $history->past_psychiatry_history = $request->past_psychiatry_history;
        $history->past_medical_illness = $request->past_medical_illness;
        $history->comorbid_illness = $request->comorbid_illness;
        $history->relationship = $request->relationship;
        $history->character = $request->character;
        $history->hobbies = $request->hobbies;
        $history->predominant_mood = $request->predominant_mood;
        $history->attitude_and_standards = $request->attitude_and_standards;
        $history->ultimate_concern = $request->ultimate_concern;

        // rimon start

        $history->body_build = $request->body_build;
        $history->nutritional_status = $request->nutritional_status;
        $history->pulse = $request->pulse;
        $history->bp = $request->bp;
        $history->temp = $request->temp;
        $history->res_rate = $request->res_rate;
        $history->height = $request->height;
        $history->weight = $request->weight;
        $history->bmi = $request->bmi;
        $history->bowel = $request->bowel;
        $history->bladder = $request->bladder;
        $history->anaemia = $request->anaemia;
        $history->jaundice = $request->jaundice;
        $history->oedema = $request->oedema;

        $history->higher_psychic_function = $request->higher_psychic_function;
        $history->motor_function = $request->motor_function;
        $history->cranial_nerves = $request->cranial_nerves;
        $history->sensory = $request->sensory;
        $history->endocrine_system = $request->endocrine_system;
        $history->musculoskeletal_system = $request->musculoskeletal_system;
        $history->d_others = $request->d_others;


        $history->general_appearance = $request->general_appearance;

        $history->facial_appearance = $request->facial_appearance;

        $history->rapport = $request->rapport;

        $history->posture_movement = $request->posture_movement;

        $history->social_behaviour = $request->social_behaviour;

        $history->motor_behaviour = $request->motor_behaviour;

        $history->oddity_behaviour = $request->oddity_behaviour;

        $history->rate_quantity = $request->rate_quantity;

        $history->volume_tone = $request->volume_tone;

        $history->flow_rhythm = $request->flow_rhythm;

        $history->oddity_speech = $request->oddity_speech;

        $history->hallucination = $request->hallucination;

        $history->illusion = $request->illusion;

        $history->consciousness = $request->consciousness;

        $history->orientation = $request->orientation;

        $history->attention_concentration = $request->attention_concentration;

        $history->immediate = $request->immediate;

        $history->recent = $request->recent;

        $history->remote = $request->remote;

        $history->intelligence = $request->intelligence;

        $history->judgement = $request->judgement;

        $history->insight = $request->insight;

        $history->statement_problem = $request->statement_problem;

        $history->differential_diagnosis = $request->differential_diagnosis;

        $history->diagnosis = $request->diagnosis;

        $history->predisposing_factor = $request->predisposing_factor;

        $history->precipitating_factor = $request->precipitating_factor;

        $history->prepetuating_factor = $request->prepetuating_factor;

        $history->psychological_test = $request->psychological_test;

        $history->laboratory_test = $request->laboratory_test;


        if (!empty($request->input('weight_changes'))) { $history->weight_changes = true; }elseif (empty($request->input('weight_changes'))) {
            $history->weight_changes = false;
        }
        else{
            $history->weight_changes = false;
        }

        if (!empty($request->input('appetite'))) { $history->appetite = true; }elseif (empty($request->input('appetite'))) {
            $history->appetite = false;
        }
        else{
            $history->appetite = false;
        }

        if (!empty($request->input('fever'))) { $history->fever = true; }elseif (empty($request->input('fever'))) {
            $history->fever = false;
        }
        else{
            $history->fever = false;
        }

        if (!empty($request->input('chestpain'))) { $history->chestpain = true; }elseif (empty($request->input('chestpain'))) {
            $history->chestpain = false;
        }
        else{
            $history->chestpain = false;
        }

        if (!empty($request->input('palpitation'))) { $history->palpitation = true; }elseif (empty($request->input('palpitation'))) {
            $history->palpitation = false;
        }
        else{
            $history->palpitation = false;
        }

        if (!empty($request->input('sob'))) { $history->sob = true; }elseif (empty($request->input('sob'))) {
            $history->sob = false;
        }
        else{
            $history->sob = false;
        }

        if (!empty($request->input('pnd'))) { $history->pnd = true; }elseif (empty($request->input('pnd'))) {
            $history->pnd = false;
        }
        else{
            $history->pnd = false;
        }

        if (!empty($request->input('ankle_swelling'))) { $history->ankle_swelling = true; }elseif (empty($request->input('ankle_swelling'))) {
            $history->ankle_swelling = false;
        }
        else{
            $history->ankle_swelling = false;
        }

        if (!empty($request->input('nausea_vomiting'))) { $history->nausea_vomiting = true; }elseif (empty($request->input('nausea_vomiting'))) {
            $history->nausea_vomiting = false;
        }
        else{
            $history->nausea_vomiting = false;
        }

        if (!empty($request->input('abdominal_swelling'))) { $history->abdominal_swelling = true; }elseif (empty($request->input('abdominal_swelling'))) {
            $history->abdominal_swelling = false;
        }
        else{
            $history->abdominal_swelling = false;
        }

        if (!empty($request->input('excessive_salivation'))) { $history->excessive_salivation = true; }elseif (empty($request->input('excessive_salivation'))) {
            $history->excessive_salivation = false;
        }
        else{
            $history->excessive_salivation = false;
        }

        if (!empty($request->input('constipation'))) { $history->constipation = true; }elseif (empty($request->input('constipation'))) {
            $history->constipation = false;
        }
        else{
            $history->constipation = false;
        }

        if (!empty($request->input('dysuria'))) { $history->dysuria = true; }elseif (empty($request->input('dysuria'))) {
            $history->dysuria = false;
        }
        else{
            $history->dysuria = false;
        }

        if (!empty($request->input('haematuria'))) { $history->haematuria = true; }elseif (empty($request->input('haematuria'))) {
            $history->haematuria = false;
        }
        else{
            $history->haematuria = false;
        }

        if (!empty($request->input('frequency'))) { $history->frequency = true; }elseif (empty($request->input('frequency'))) {
            $history->frequency = false;
        }
        else{
            $history->frequency = false;
        }

        if (!empty($request->input('vaginal_disease'))) { $history->vaginal_disease = true; }elseif (empty($request->input('vaginal_disease'))) {
            $history->vaginal_disease = false;
        }
        else{
            $history->vaginal_disease = false;
        }

        if (!empty($request->input('fits'))) { $history->fits = true; }elseif (empty($request->input('fits'))) {
            $history->fits = false;
        }
        else{
            $history->fits = false;
        }

        if (!empty($request->input('numbness'))) { $history->numbness = true; }elseif (empty($request->input('numbness'))) {
            $history->numbness = false;
        }
        else{
            $history->numbness = false;
        }

        if (!empty($request->input('blurring_vision'))) { $history->blurring_vision = true; }elseif (empty($request->input('blurring_vision'))) {
            $history->blurring_vision = false;
        }
        else{
            $history->blurring_vision = false;
        }

        if (!empty($request->input('tremors'))) { $history->tremors = true; }elseif (empty($request->input('tremors'))) {
            $history->tremors = false;
        }
        else{
            $history->tremors = false;
        }

        if (!empty($request->input('slurred_speech'))) { $history->slurred_speech = true; }elseif (empty($request->input('slurred_speech'))) {
            $history->slurred_speech = false;
        }
        else{
            $history->slurred_speech = false;
        }

        if (!empty($request->input('tingling'))) { $history->tingling = true; }elseif (empty($request->input('tingling'))) {
            $history->tingling = false;
        }
        else{
            $history->tingling = false;
        }

        if (!empty($request->input('headache'))) { $history->headache = true; }elseif (empty($request->input('headache'))) {
            $history->headache = false;
        }
        else{
            $history->headache = false;
        }

        if (!empty($request->input('gait_disturbance'))) { $history->gait_disturbance = true; }elseif (empty($request->input('gait_disturbance'))) {
            $history->gait_disturbance = false;
        }
        else{
            $history->gait_disturbance = false;
        }

        if (!empty($request->input('paraesthesia'))) { $history->paraesthesia = true; }elseif (empty($request->input('paraesthesia'))) {
            $history->paraesthesia = false;
        }
        else{
            $history->paraesthesia = false;
        }

        if (!empty($request->input('poor_balance'))) { $history->poor_balance = true; }elseif (empty($request->input('poor_balance'))) {
            $history->poor_balance = false;
        }
        else{
            $history->poor_balance = false;
        }

        if (!empty($request->input('painful_joint'))) { $history->painful_joint = true; }elseif (empty($request->input('painful_joint'))) {
            $history->painful_joint = false;
        }
        else{
            $history->painful_joint = false;
        }

        if (!empty($request->input('joint_sweling'))) { $history->joint_sweling = true; }elseif (empty($request->input('joint_sweling'))) {
            $history->joint_sweling = false;
        }
        else{
            $history->joint_sweling = false;
        }

        if (!empty($request->input('morning_stiffness'))) { $history->morning_stiffness = true; }elseif (empty($request->input('morning_stiffness'))) {
            $history->morning_stiffness = false;
        }
        else{
            $history->morning_stiffness = false;
        }

        if (!empty($request->input('heatcold_intolerance'))) { $history->heatcold_intolerance = true; }elseif (empty($request->input('heatcold_intolerance'))) {
            $history->heatcold_intolerance = false;
        }
        else{
            $history->heatcold_intolerance = false;
        }

        if (!empty($request->input('diabetes'))) { $history->diabetes = true; }elseif (empty($request->input('diabetes'))) {
            $history->diabetes = false;
        }
        else{
            $history->diabetes = false;
        }

        if (!empty($request->input('polyuria'))) { $history->polyuria = true; }elseif (empty($request->input('polyuria'))) {
            $history->polyuria = false;
        }
        else{
            $history->polyuria = false;
        }

        if (!empty($request->input('excessivethirst_hunger'))) { $history->excessivethirst_hunger = true; }elseif (empty($request->input('excessivethirst_hunger'))) {
            $history->excessivethirst_hunger = false;
        }
        else{
            $history->excessivethirst_hunger = false;
        }

        if (!empty($request->input('depressed'))) { $history->depressed = true; }elseif (empty($request->input('depressed'))) {
            $history->depressed = false;
        }
        else{
            $history->depressed = false;
        }

        if (!empty($request->input('anxious'))) { $history->anxious = true; }elseif (empty($request->input('anxious'))) {
            $history->anxious = false;
        }
        else{
            $history->anxious = false;
        }

        if (!empty($request->input('euthymic'))) { $history->euthymic = true; }elseif (empty($request->input('euthymic'))) {
            $history->euthymic = false;
        }
        else{
            $history->euthymic = false;
        }

        if (!empty($request->input('blunt'))) { $history->blunt = true; }elseif (empty($request->input('blunt'))) {
            $history->blunt = false;
        }
        else{
            $history->blunt = false;
        }

        if (!empty($request->input('apathy'))) { $history->apathy = true; }elseif (empty($request->input('apathy'))) {
            $history->apathy = false;
        }
        else{
            $history->apathy = false;
        }

        if (!empty($request->input('elated'))) { $history->elated = true; }elseif (empty($request->input('elated'))) {
            $history->elated = false;
        }
        else{
            $history->elated = false;
        }

        if (!empty($request->input('congruent'))) { $history->congruent = true; }elseif (empty($request->input('congruent'))) {
            $history->congruent = false;
        }
        else{
            $history->congruent = false;
        }

        if (!empty($request->input('incongrument'))) { $history->incongrument = true; }elseif (empty($request->input('incongrument'))) {
            $history->incongrument = false;
        }
        else{
            $history->incongrument = false;
        }

        if (!empty($request->input('lability'))) { $history->lability = true; }elseif (empty($request->input('lability'))) {
            $history->lability = false;
        }
        else{
            $history->lability = false;
        }

        if (!empty($request->input('depersonalization'))) { $history->depersonalization = true; }elseif (empty($request->input('depersonalization'))) {
            $history->depersonalization = false;
        }
        else{
            $history->depersonalization = false;
        }

        if (!empty($request->input('derealization'))) { $history->derealization = true; }elseif (empty($request->input('derealization'))) {
            $history->derealization = false;
        }
        else{
            $history->derealization = false;
        }

        if (!empty($request->input('m_others'))) { $history->m_others = true; }elseif (empty($request->input('m_others'))) {
            $history->m_others = false;
        }
        else{
            $history->m_others = false;
        }

        if (!empty($request->input('poverty'))) { $history->poverty = true; }elseif (empty($request->input('poverty'))) {
            $history->poverty = false;
        }
        else{
            $history->poverty = false;
        }

        if (!empty($request->input('pressure'))) { $history->pressure = true; }elseif (empty($request->input('pressure'))) {
            $history->pressure = false;
        }
        else{
            $history->pressure = false;
        }

        if (!empty($request->input('insertion'))) { $history->insertion = true; }elseif (empty($request->input('insertion'))) {
            $history->insertion = false;
        }
        else{
            $history->insertion = false;
        }

        if (!empty($request->input('withdrawl'))) { $history->withdrawl = true; }elseif (empty($request->input('withdrawl'))) {
            $history->withdrawl = false;
        }
        else{
            $history->withdrawl = false;
        }

        if (!empty($request->input('broadcasting'))) { $history->broadcasting = true; }elseif (empty($request->input('broadcasting'))) {
            $history->broadcasting = false;
        }
        else{
            $history->broadcasting = false;
        }

        if (!empty($request->input('flight_ideas'))) { $history->flight_ideas = true; }elseif (empty($request->input('flight_ideas'))) {
            $history->flight_ideas = false;
        }
        else{
            $history->flight_ideas = false;
        }

        if (!empty($request->input('perseveration'))) { $history->perseveration = true; }elseif (empty($request->input('perseveration'))) {
            $history->perseveration = false;
        }
        else{
            $history->perseveration = false;
        }

        if (!empty($request->input('loosening'))) { $history->loosening = true; }elseif (empty($request->input('loosening'))) {
            $history->loosening = false;
        }
        else{
            $history->loosening = false;
        }

        if (!empty($request->input('obsession'))) { $history->obsession = true; }elseif (empty($request->input('obsession'))) {
            $history->obsession = false;
        }
        else{
            $history->obsession = false;
        }

        if (!empty($request->input('delusion'))) { $history->delusion = true; }elseif (empty($request->input('delusion'))) {
            $history->delusion = false;
        }
        else{
            $history->delusion = false;
        }

        if (!empty($request->input('suicidal_thought'))) { $history->suicidal_thought = true; }elseif (empty($request->input('suicidal_thought'))) {
            $history->suicidal_thought = false;
        }
        else{
            $history->suicidal_thought = false;
        }

        if (!empty($request->input('homicidal_thought'))) { $history->homicidal_thought = true; }elseif (empty($request->input('homicidal_thought'))) {
            $history->homicidal_thought = false;
        }
        else{
            $history->homicidal_thought = false;
        }
        
        

        $history->save();
// ----------------------------------------------------------------------------
        $record->unit = $request->unit;
        $record->ward = $request->ward;
        $record->bed = $request->bed;
        $record->admission_date = $request->admission_date;
        $record->examination_date = $request->examination_date;
        $record->informant_name = $request->informant_name;
        $record->relation_with_patient = $request->relation_with_patient;
        $record->referred_from = $request->referred_from;
        $record->referred_reason = $request->referred_reason;
        $record->patient_name = $request->patient_name;
        $record->age = $request->age;
        $record->sex = $request->sex;
        $record->religion = $request->religion;
        $record->inhabitant = $request->inhabitant;
        $record->marital_status = $request->marital_status;
        $record->occupation = $request->occupation;
        $record->education = $request->education;
        $record->complain = $request->complain;
        $record->present_illness = $request->present_illness;
        $record->father = $request->father;
        $record->mother = $request->mother;
        $record->siblings = $request->siblings;
        $record->consanguinity = $request->consanguinity;
        $record->social_pos_family = $request->social_pos_family;
        $record->family_history_mental = $request->family_history_mental;
        $record->family_tree = $request->family_tree;
        $record->pregnancy_and_birth = $request->pregnancy_and_birth;
        $record->early_developmental_milestones = $request->early_developmental_milestones;
        $record->childhood = $request->childhood;
        $record->education_history = $request->education_history;
        $record->occupation_history = $request->occupation_history;
        $record->marriage_sex_history = $request->marriage_sex_history;
        $record->current_relationship = $request->current_relationship;
        $record->social_circumstances = $request->social_circumstances;
        $record->substance_use = $request->substance_use;
        $record->forensic_history = $request->forensic_history;
        $record->past_psychiatry_history = $request->past_psychiatry_history;
        $record->past_medical_illness = $request->past_medical_illness;
        $record->comorbid_illness = $request->comorbid_illness;
        $record->relationship = $request->relationship;
        $record->character = $request->character;
        $record->hobbies = $request->hobbies;
        $record->predominant_mood = $request->predominant_mood;
        $record->attitude_and_standards = $request->attitude_and_standards;
        $record->ultimate_concern = $request->ultimate_concern;

        // rimon start

        $record->body_build = $request->body_build;
        $record->nutritional_status = $request->nutritional_status;
        $record->pulse = $request->pulse;
        $record->bp = $request->bp;
        $record->temp = $request->temp;
        $record->res_rate = $request->res_rate;
        $record->height = $request->height;
        $record->weight = $request->weight;
        $record->bmi = $request->bmi;
        $record->bowel = $request->bowel;
        $record->bladder = $request->bladder;
        $record->anaemia = $request->anaemia;
        $record->jaundice = $request->jaundice;
        $record->oedema = $request->oedema;

        $record->higher_psychic_function = $request->higher_psychic_function;
        $record->motor_function = $request->motor_function;
        $record->cranial_nerves = $request->cranial_nerves;
        $record->sensory = $request->sensory;
        $record->endocrine_system = $request->endocrine_system;
        $record->musculoskeletal_system = $request->musculoskeletal_system;
        $record->d_others = $request->d_others;


        $record->general_appearance = $request->general_appearance;

        $record->facial_appearance = $request->facial_appearance;

        $record->rapport = $request->rapport;

        $record->posture_movement = $request->posture_movement;

        $record->social_behaviour = $request->social_behaviour;

        $record->motor_behaviour = $request->motor_behaviour;

        $record->oddity_behaviour = $request->oddity_behaviour;

        $record->rate_quantity = $request->rate_quantity;

        $record->volume_tone = $request->volume_tone;

        $record->flow_rhythm = $request->flow_rhythm;

        $record->oddity_speech = $request->oddity_speech;

        $record->hallucination = $request->hallucination;

        $record->illusion = $request->illusion;

        $record->consciousness = $request->consciousness;

        $record->orientation = $request->orientation;

        $record->attention_concentration = $request->attention_concentration;

        $record->immediate = $request->immediate;

        $record->recent = $request->recent;

        $record->remote = $request->remote;

        $record->intelligence = $request->intelligence;

        $record->judgement = $request->judgement;

        $record->insight = $request->insight;

        $record->statement_problem = $request->statement_problem;

        $record->differential_diagnosis = $request->differential_diagnosis;

        $record->diagnosis = $request->diagnosis;

        $record->predisposing_factor = $request->predisposing_factor;

        $record->precipitating_factor = $request->precipitating_factor;

        $record->prepetuating_factor = $request->prepetuating_factor;

        $record->psychological_test = $request->psychological_test;

        $record->laboratory_test = $request->laboratory_test;


        if (!empty($request->input('weight_changes'))) { $record->weight_changes = true; }elseif (empty($request->input('weight_changes'))) {
            $record->weight_changes = false;
        }
        else{
            $record->weight_changes = false;
        }

        if (!empty($request->input('appetite'))) { $record->appetite = true; }elseif (empty($request->input('appetite'))) {
            $record->appetite = false;
        }
        else{
            $record->appetite = false;
        }

        if (!empty($request->input('fever'))) { $record->fever = true; }elseif (empty($request->input('fever'))) {
            $record->fever = false;
        }
        else{
            $record->fever = false;
        }

        if (!empty($request->input('chestpain'))) { $record->chestpain = true; }elseif (empty($request->input('chestpain'))) {
            $record->chestpain = false;
        }
        else{
            $record->chestpain = false;
        }

        if (!empty($request->input('palpitation'))) { $record->palpitation = true; }elseif (empty($request->input('palpitation'))) {
            $record->palpitation = false;
        }
        else{
            $record->palpitation = false;
        }

        if (!empty($request->input('sob'))) { $record->sob = true; }elseif (empty($request->input('sob'))) {
            $record->sob = false;
        }
        else{
            $record->sob = false;
        }

        if (!empty($request->input('pnd'))) { $record->pnd = true; }elseif (empty($request->input('pnd'))) {
            $record->pnd = false;
        }
        else{
            $record->pnd = false;
        }

        if (!empty($request->input('ankle_swelling'))) { $record->ankle_swelling = true; }elseif (empty($request->input('ankle_swelling'))) {
            $record->ankle_swelling = false;
        }
        else{
            $record->ankle_swelling = false;
        }

        if (!empty($request->input('nausea_vomiting'))) { $record->nausea_vomiting = true; }elseif (empty($request->input('nausea_vomiting'))) {
            $record->nausea_vomiting = false;
        }
        else{
            $record->nausea_vomiting = false;
        }

        if (!empty($request->input('abdominal_swelling'))) { $record->abdominal_swelling = true; }elseif (empty($request->input('abdominal_swelling'))) {
            $record->abdominal_swelling = false;
        }
        else{
            $record->abdominal_swelling = false;
        }

        if (!empty($request->input('excessive_salivation'))) { $record->excessive_salivation = true; }elseif (empty($request->input('excessive_salivation'))) {
            $record->excessive_salivation = false;
        }
        else{
            $record->excessive_salivation = false;
        }

        if (!empty($request->input('constipation'))) { $record->constipation = true; }elseif (empty($request->input('constipation'))) {
            $record->constipation = false;
        }
        else{
            $record->constipation = false;
        }

        if (!empty($request->input('dysuria'))) { $record->dysuria = true; }elseif (empty($request->input('dysuria'))) {
            $record->dysuria = false;
        }
        else{
            $record->dysuria = false;
        }

        if (!empty($request->input('haematuria'))) { $record->haematuria = true; }elseif (empty($request->input('haematuria'))) {
            $record->haematuria = false;
        }
        else{
            $record->haematuria = false;
        }

        if (!empty($request->input('frequency'))) { $record->frequency = true; }elseif (empty($request->input('frequency'))) {
            $record->frequency = false;
        }
        else{
            $record->frequency = false;
        }

        if (!empty($request->input('vaginal_disease'))) { $record->vaginal_disease = true; }elseif (empty($request->input('vaginal_disease'))) {
            $record->vaginal_disease = false;
        }
        else{
            $record->vaginal_disease = false;
        }

        if (!empty($request->input('fits'))) { $record->fits = true; }elseif (empty($request->input('fits'))) {
            $record->fits = false;
        }
        else{
            $record->fits = false;
        }

        if (!empty($request->input('numbness'))) { $record->numbness = true; }elseif (empty($request->input('numbness'))) {
            $record->numbness = false;
        }
        else{
            $record->numbness = false;
        }

        if (!empty($request->input('blurring_vision'))) { $record->blurring_vision = true; }elseif (empty($request->input('blurring_vision'))) {
            $record->blurring_vision = false;
        }
        else{
            $record->blurring_vision = false;
        }

        if (!empty($request->input('tremors'))) { $record->tremors = true; }elseif (empty($request->input('tremors'))) {
            $record->tremors = false;
        }
        else{
            $record->tremors = false;
        }

        if (!empty($request->input('slurred_speech'))) { $record->slurred_speech = true; }elseif (empty($request->input('slurred_speech'))) {
            $record->slurred_speech = false;
        }
        else{
            $record->slurred_speech = false;
        }

        if (!empty($request->input('tingling'))) { $record->tingling = true; }elseif (empty($request->input('tingling'))) {
            $record->tingling = false;
        }
        else{
            $record->tingling = false;
        }

        if (!empty($request->input('headache'))) { $record->headache = true; }elseif (empty($request->input('headache'))) {
            $record->headache = false;
        }
        else{
            $record->headache = false;
        }

        if (!empty($request->input('gait_disturbance'))) { $record->gait_disturbance = true; }elseif (empty($request->input('gait_disturbance'))) {
            $record->gait_disturbance = false;
        }
        else{
            $record->gait_disturbance = false;
        }

        if (!empty($request->input('paraesthesia'))) { $record->paraesthesia = true; }elseif (empty($request->input('paraesthesia'))) {
            $record->paraesthesia = false;
        }
        else{
            $record->paraesthesia = false;
        }

        if (!empty($request->input('poor_balance'))) { $record->poor_balance = true; }elseif (empty($request->input('poor_balance'))) {
            $record->poor_balance = false;
        }
        else{
            $record->poor_balance = false;
        }

        if (!empty($request->input('painful_joint'))) { $record->painful_joint = true; }elseif (empty($request->input('painful_joint'))) {
            $record->painful_joint = false;
        }
        else{
            $record->painful_joint = false;
        }

        if (!empty($request->input('joint_sweling'))) { $record->joint_sweling = true; }elseif (empty($request->input('joint_sweling'))) {
            $record->joint_sweling = false;
        }
        else{
            $record->joint_sweling = false;
        }

        if (!empty($request->input('morning_stiffness'))) { $record->morning_stiffness = true; }elseif (empty($request->input('morning_stiffness'))) {
            $record->morning_stiffness = false;
        }
        else{
            $record->morning_stiffness = false;
        }

        if (!empty($request->input('heatcold_intolerance'))) { $record->heatcold_intolerance = true; }elseif (empty($request->input('heatcold_intolerance'))) {
            $record->heatcold_intolerance = false;
        }
        else{
            $record->heatcold_intolerance = false;
        }

        if (!empty($request->input('diabetes'))) { $record->diabetes = true; }elseif (empty($request->input('diabetes'))) {
            $record->diabetes = false;
        }
        else{
            $record->diabetes = false;
        }

        if (!empty($request->input('polyuria'))) { $record->polyuria = true; }elseif (empty($request->input('polyuria'))) {
            $record->polyuria = false;
        }
        else{
            $record->polyuria = false;
        }

        if (!empty($request->input('excessivethirst_hunger'))) { $record->excessivethirst_hunger = true; }elseif (empty($request->input('excessivethirst_hunger'))) {
            $record->excessivethirst_hunger = false;
        }
        else{
            $record->excessivethirst_hunger = false;
        }

        if (!empty($request->input('depressed'))) { $record->depressed = true; }elseif (empty($request->input('depressed'))) {
            $record->depressed = false;
        }
        else{
            $record->depressed = false;
        }

        if (!empty($request->input('anxious'))) { $record->anxious = true; }elseif (empty($request->input('anxious'))) {
            $record->anxious = false;
        }
        else{
            $record->anxious = false;
        }

        if (!empty($request->input('euthymic'))) { $record->euthymic = true; }elseif (empty($request->input('euthymic'))) {
            $record->euthymic = false;
        }
        else{
            $record->euthymic = false;
        }

        if (!empty($request->input('blunt'))) { $record->blunt = true; }elseif (empty($request->input('blunt'))) {
            $record->blunt = false;
        }
        else{
            $record->blunt = false;
        }

        if (!empty($request->input('apathy'))) { $record->apathy = true; }elseif (empty($request->input('apathy'))) {
            $record->apathy = false;
        }
        else{
            $record->apathy = false;
        }

        if (!empty($request->input('elated'))) { $record->elated = true; }elseif (empty($request->input('elated'))) {
            $record->elated = false;
        }
        else{
            $record->elated = false;
        }

        if (!empty($request->input('congruent'))) { $record->congruent = true; }elseif (empty($request->input('congruent'))) {
            $record->congruent = false;
        }
        else{
            $record->congruent = false;
        }

        if (!empty($request->input('incongrument'))) { $record->incongrument = true; }elseif (empty($request->input('incongrument'))) {
            $record->incongrument = false;
        }
        else{
            $record->incongrument = false;
        }

        if (!empty($request->input('lability'))) { $record->lability = true; }elseif (empty($request->input('lability'))) {
            $record->lability = false;
        }
        else{
            $record->lability = false;
        }

        if (!empty($request->input('depersonalization'))) { $record->depersonalization = true; }elseif (empty($request->input('depersonalization'))) {
            $record->depersonalization = false;
        }
        else{
            $record->depersonalization = false;
        }

        if (!empty($request->input('derealization'))) { $record->derealization = true; }elseif (empty($request->input('derealization'))) {
            $record->derealization = false;
        }
        else{
            $record->derealization = false;
        }

        if (!empty($request->input('m_others'))) { $record->m_others = true; }elseif (empty($request->input('m_others'))) {
            $record->m_others = false;
        }
        else{
            $record->m_others = false;
        }

        if (!empty($request->input('poverty'))) { $record->poverty = true; }elseif (empty($request->input('poverty'))) {
            $record->poverty = false;
        }
        else{
            $record->poverty = false;
        }

        if (!empty($request->input('pressure'))) { $record->pressure = true; }elseif (empty($request->input('pressure'))) {
            $record->pressure = false;
        }
        else{
            $record->pressure = false;
        }

        if (!empty($request->input('insertion'))) { $record->insertion = true; }elseif (empty($request->input('insertion'))) {
            $record->insertion = false;
        }
        else{
            $record->insertion = false;
        }

        if (!empty($request->input('withdrawl'))) { $record->withdrawl = true; }elseif (empty($request->input('withdrawl'))) {
            $record->withdrawl = false;
        }
        else{
            $record->withdrawl = false;
        }

        if (!empty($request->input('broadcasting'))) { $record->broadcasting = true; }elseif (empty($request->input('broadcasting'))) {
            $record->broadcasting = false;
        }
        else{
            $record->broadcasting = false;
        }

        if (!empty($request->input('flight_ideas'))) { $record->flight_ideas = true; }elseif (empty($request->input('flight_ideas'))) {
            $record->flight_ideas = false;
        }
        else{
            $record->flight_ideas = false;
        }

        if (!empty($request->input('perseveration'))) { $record->perseveration = true; }elseif (empty($request->input('perseveration'))) {
            $record->perseveration = false;
        }
        else{
            $record->perseveration = false;
        }

        if (!empty($request->input('loosening'))) { $record->loosening = true; }elseif (empty($request->input('loosening'))) {
            $record->loosening = false;
        }
        else{
            $record->loosening = false;
        }

        if (!empty($request->input('obsession'))) { $record->obsession = true; }elseif (empty($request->input('obsession'))) {
            $record->obsession = false;
        }
        else{
            $record->obsession = false;
        }

        if (!empty($request->input('delusion'))) { $record->delusion = true; }elseif (empty($request->input('delusion'))) {
            $record->delusion = false;
        }
        else{
            $record->delusion = false;
        }

        if (!empty($request->input('suicidal_thought'))) { $record->suicidal_thought = true; }elseif (empty($request->input('suicidal_thought'))) {
            $record->suicidal_thought = false;
        }
        else{
            $record->suicidal_thought = false;
        }

        if (!empty($request->input('homicidal_thought'))) { $record->homicidal_thought = true; }elseif (empty($request->input('homicidal_thought'))) {
            $record->homicidal_thought = false;
        }
        else{
            $record->homicidal_thought = false;
        }
        
        

        $record->save();





        return redirect()->route('admin.dashboard.records');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $records = Record::find($id);
        $records->delete();
        return redirect()->route('admin.dashboard.records');
        
    }

    public function pdf($id)
    {
        $record = $this->records->showRecord($id)[0];
        $this->authorize('view', $record);

//        $pdf = PDF::loadView('records.pdf', [
//            'record' => $record,
//        ]);
//
//        return $pdf->download('record_' . Auth::id() . '.pdf');

        return view('records.pdf', [
            'record' => $record,
        ]);
    }
}
