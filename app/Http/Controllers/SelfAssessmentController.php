<?php

namespace App\Http\Controllers;

use App\Datepicker;
use App\KitmUsers;
use App\Mail\FormActivation;
use App\Qualification;
use App\Roles;
use App\SelfAssessment;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Survey;
use App\Guide;

class SelfAssessmentController extends Controller
{
    public function activateView()
    {
        $id = KitmUsers::where(['email' => session('userEmail')])->first()->id;
        Datepicker::where('end_date', '<=', Carbon::now()->toDateTimeString())->delete();
        $activated = Datepicker::exists();
        $data = '';
        if ($activated) {
            $data = Datepicker::first();
        }
        $viewData = $this->loadViewData();

        $check = SelfAssessment::where(['user_id' => $id])->first();
        if ($check == null or $check['pateikta'] < 1) {
            $pateikta = false;
        } else {
            $pateikta = true;
        }

        $qualiExists = Qualification::where(['user_id' => $id])->exists();

        $surveys = SelfAssessment::where(['pateikta' => 1])->get();


        return view('admin.pages.bandymasIvertinimas', compact(['data', 'activated', 'pateikta', 'surveys', 'qualiExists']), $viewData);
    }

    public function activateForm(Request $request)
    {
        $validateData = $request->validate([
            'data' => 'required',
            'laikas' => 'required'

        ]);

        if ($request->data . ' ' . $request->laikas > Carbon::now()) {
            if (!Datepicker::exists()) {
                $date = new Carbon($request->data . $request->laikas);
                Datepicker::create([
                    'end_date' => $date,
                ]);
                $viewData = $this->loadViewData();
                $data = array(
                    'date' => $date,
                    'email' => $viewData['userEmail']
                );
                $emailTo = KitmUsers::where('roles_id', 3)->orWhere('roles_id', 1)->pluck('email')->all();
                Mail::to($emailTo)->send(new FormActivation($data));
            } else {
                return back()->with('danger', 'Formą galite aktyvuoti tik vieną kartą. Jeigu norite atnaujinti, ištrinkite ir aktyvuokite dar kartą');
            }
        } else {
            return back()->with('danger', 'Pasirinkote praeities datą');
        }
        return back();
    }
    public function deleteActivate()
    {
        Datepicker::whereNotNull('id')->delete();
        return back();
    }

    public function storeAssessment(Request $request, SelfAssessment $selfAssessment)
    {
        $id = KitmUsers::where(['email' => session('userEmail')])->first()->id;

        if ($request->action == 'issaugoti') {
            SelfAssessment::where(['user_id' => $id])->update([
                'dateOne' => request('dateOne'),
                'dateTwo' => request('dateTwo'),
                'name' => request('name'),
                // 'surname' => request('surname'),
                'role' => request('role'),
                'category' => request('category'),
                'work_experience' => request('work_experience'),
                '1_1_first' => request('firstChallenge'),
                // '1_1_second' => request('secondChallenge'),
                // '1_1_third' => request('thirdChallenge'),
                '1_2' => request('training_organization_experience_achievements'),
                '1_3' => request('quality_of_teaching'),
                '1_4' => request('problems_and_solutions'),
                '1_5' => request('participated_acts'),
                '1_6' => request('number_of_plans'),
                '1_6_first' => request('firstPlan'),
                // '1_6_second' => request('secondPlan'),
                // '1_6_third' => request('thirdPlan'),
                '1_6_link' => request('link_to_plans'),
                '1_7' => request('tools_and_methods'),
                '1_7_first' => request('first_tool_or_method'),
                // '1_7_second' => request('second_tool_or_method'),
                // '1_7_third' => request('third_tool_or_method'),
                '1_8' => request('student_assistance'),
                '1_9_first' => request('first_method_for_self_directed_learning'),
                // '1_9_second' => request('second_method_for_self_directed_learning'),
                // '1_9_third' => request('third_method_for_self_directed_learning'),
                '1_9_success' => request('luck'),
                '1_9_failure' => request('difficulties'),
                '1_10' => implode(',', (array) $request->get('material')),
                '1_10_other' => request('other_material'),
                '1_11_first' => request('first_happiness_for_good_student'),
                // '1_11_second' => request('second_happiness_for_good_student'),
                // '1_11_third' => request('third_happiness_for_good_student'),
                '1_12' => request('competitions'),
                '1_13_islaike' => request('pass_an_exam'),
                '1_13_neislaike' => request('didnt_pass_an_exam'),
                '1_14_nr' => request('number_of_students'),
                '1_14_islaike' => request('pass_an_exam_technology'),
                '1_14_neislaike' => request('didnt_pass_an_exam_technology'),
                '1_15_nr' => request('guided_practice'),
                '1_15_1' => request('practise_in_companies'),
                '1_15_2' => request('practise_apprenticeships'),
                '1_15_3' => request('practise_in_school'),
                '1_15_4' => request('practise_with_project_works'),
                '1_16_1' => request('Continue_studying_at_a_college_or_university'),
                '1_16_2' => request('Employed'),
                '1_16_3' => request('not_working_not_studying'),
                '1_16_4' => request('Signed_up_for_UT'),
                '1_16_5' => request('Went_abroad'),
                '1_16_6' => request('other'),
                '1_16_7' => request('no_data'),
                '1_16_8' => request('data_not_provided'),
                '1_17' => request('employer_reviews'),
                '1_18' => request('graduate_reviews'),
                '2_1' => request('projects'),
                '2_2' => request('number_of_career_guidance_meetings'),
                '2_3' => request('number_of_distance_learning_lessons_for_students_in_grades_7_12'),
                '2_4_1' => request('first_activity'),
                // '2_4_2' => request('second_activity'),
                // '2_4_3' => request('third_activity'),
                '2_5_1' => request('first_group_leader_activities_luck'),
                // '2_5_2' => request('second_group_leader_activities_luck'),
                // '2_5_3' => request('third_group_leader_activities_luck'),
                '2_5_4' => request('first_problem'),
                '2_5_5' => request('second_problem'),
                '2_5_6' => request('third_problem'),
                '2_6_1' => request('students_in_first_year'),
                '2_6_2' => request('students_studying_or_graduated'),
                '2_7' => request('The_cause_of_the_fall'),
                '2_8_1' => request('first_provision_of_information'),
                // '2_8_2' => request('second_provision_of_information'),
                // '2_8_3' => request('third_provision_of_information'),
                '2_9_1' => request('first_student_motivation'),
                // '2_9_2' => request('second_student_motivation'),
                // '2_9_3' => request('third_student_motivation'),
                '2_10_1' => request('first_events_and_extracurricular_activities'),
                // '2_10_2' => request('second_events_and_extracurricular_activities'),
                // '2_10_3' => request('third_events_and_extracurricular_activities'),
                '3_hours' => request('training'),
                '3_I' => request('I_score'),
                '3_II' => request('II_score'),
                '3_III' => request('III_score'),
                '3_sum' => request('final_score'),
                '4_1_1' => request('teacher_participation'),
                '4_1_2' => request('no_insufficient_basic_material_resources'),
                '4_1_3' => request('modernity_of_material_resources'),
                '4_1_4' => request('availability_of_material_resources_for_students_and_teachers'),
                '4_1_5' => request('school_library_with_modern_material_resources'),
                '4_1_6' => request('the_most_significant_resources'),
                '4_2_1' => request('school_microclimate'),
                '4_2_2' => request('transparency_of_the_pay_system'),
                '4_2_3' => request('material_working_conditions'),
                '4_2_4' => request('work_relations'),
                '4_2_5' => request('psychological_climate'),
                '4_2_6' => request('implementation_of_direct_work_process'),
                '4_2_7' => request('effective_communication'),
                '4_3_2' => request('the_most_important_achievement'),
                '4_3_3' => request('most_unpleasant_event'),
                '4_3_4' => request('feature_waiver'),
                '4_3_5' => request('improvements_and_support'),
                '4_3_6' => request('problematic_areas'),
                '4_3_7' => request('what_should_manager_improve'),
                '4_3_8' => request('popularity_of_programs'),
                '4_3_9' => request('staff_evaluation'),
                '4_3_10' => request('happiness_with_communication'),
                '4_3_11' => request('how_can_I_benefit_the_school'),
            ]);

            return redirect('/self-assessment');
        }

        if ($request->action == 'pateikti') {
            SelfAssessment::where(['user_id' => $id])->update([
                'dateOne' => request('dateOne'),
                'dateTwo' => request('dateTwo'),
                'name' => request('name'),
                // 'surname' => request('surname'),
                'role' => request('role'),
                'category' => request('category'),
                'work_experience' => request('work_experience'),
                '1_1_first' => request('firstChallenge'),
                // '1_1_second' => request('secondChallenge'),
                // '1_1_third' => request('thirdChallenge'),
                '1_2' => request('training_organization_experience_achievements'),
                '1_3' => request('quality_of_teaching'),
                '1_4' => request('problems_and_solutions'),
                '1_5' => request('participated_acts'),
                '1_6' => request('number_of_plans'),
                '1_6_first' => request('firstPlan'),
                // '1_6_second' => request('secondPlan'),
                // '1_6_third' => request('thirdPlan'),
                '1_6_link' => request('link_to_plans'),
                '1_7' => request('tools_and_methods'),
                '1_7_first' => request('first_tool_or_method'),
                // '1_7_second' => request('second_tool_or_method'),
                // '1_7_third' => request('third_tool_or_method'),
                '1_8' => request('student_assistance'),
                '1_9_first' => request('first_method_for_self_directed_learning'),
                // '1_9_second' => request('second_method_for_self_directed_learning'),
                // '1_9_third' => request('third_method_for_self_directed_learning'),
                '1_9_success' => request('luck'),
                '1_9_failure' => request('difficulties'),
                '1_10' => implode(',', (array) $request->get('material')),
                '1_10_other' => request('other_material'),
                '1_11_first' => request('first_happiness_for_good_student'),
                // '1_11_second' => request('second_happiness_for_good_student'),
                // '1_11_third' => request('third_happiness_for_good_student'),
                '1_12' => request('competitions'),
                '1_13_islaike' => request('pass_an_exam'),
                '1_13_neislaike' => request('didnt_pass_an_exam'),
                '1_14_nr' => request('number_of_students'),
                '1_14_islaike' => request('pass_an_exam_technology'),
                '1_14_neislaike' => request('didnt_pass_an_exam_technology'),
                '1_15_nr' => request('guided_practice'),
                '1_15_1' => request('practise_in_companies'),
                '1_15_2' => request('practise_apprenticeships'),
                '1_15_3' => request('practise_in_school'),
                '1_15_4' => request('practise_with_project_works'),
                '1_16_1' => request('Continue_studying_at_a_college_or_university'),
                '1_16_2' => request('Employed'),
                '1_16_3' => request('not_working_not_studying'),
                '1_16_4' => request('Signed_up_for_UT'),
                '1_16_5' => request('Went_abroad'),
                '1_16_6' => request('other'),
                '1_16_7' => request('no_data'),
                '1_16_8' => request('data_not_provided'),
                '1_17' => request('employer_reviews'),
                '1_18' => request('graduate_reviews'),
                '2_1' => request('projects'),
                '2_2' => request('number_of_career_guidance_meetings'),
                '2_3' => request('number_of_distance_learning_lessons_for_students_in_grades_7_12'),
                '2_4_1' => request('first_activity'),
                // '2_4_2' => request('second_activity'),
                // '2_4_3' => request('third_activity'),
                '2_5_1' => request('first_group_leader_activities_luck'),
                // '2_5_2' => request('second_group_leader_activities_luck'),
                // '2_5_3' => request('third_group_leader_activities_luck'),
                '2_5_4' => request('first_problem'),
                '2_5_5' => request('second_problem'),
                '2_5_6' => request('third_problem'),
                '2_6_1' => request('students_in_first_year'),
                '2_6_2' => request('students_studying_or_graduated'),
                '2_7' => request('The_cause_of_the_fall'),
                '2_8_1' => request('first_provision_of_information'),
                // '2_8_2' => request('second_provision_of_information'),
                // '2_8_3' => request('third_provision_of_information'),
                '2_9_1' => request('first_student_motivation'),
                // '2_9_2' => request('second_student_motivation'),
                // '2_9_3' => request('third_student_motivation'),
                '2_10_1' => request('first_events_and_extracurricular_activities'),
                // '2_10_2' => request('second_events_and_extracurricular_activities'),
                // '2_10_3' => request('third_events_and_extracurricular_activities'),
                '3_hours' => request('training'),
                '3_I' => request('I_score'),
                '3_II' => request('II_score'),
                '3_III' => request('III_score'),
                '3_sum' => request('final_score'),
                '4_1_1' => request('teacher_participation'),
                '4_1_2' => request('no_insufficient_basic_material_resources'),
                '4_1_3' => request('modernity_of_material_resources'),
                '4_1_4' => request('availability_of_material_resources_for_students_and_teachers'),
                '4_1_5' => request('school_library_with_modern_material_resources'),
                '4_1_6' => request('the_most_significant_resources'),
                '4_2_1' => request('school_microclimate'),
                '4_2_2' => request('transparency_of_the_pay_system'),
                '4_2_3' => request('material_working_conditions'),
                '4_2_4' => request('work_relations'),
                '4_2_5' => request('psychological_climate'),
                '4_2_6' => request('implementation_of_direct_work_process'),
                '4_2_7' => request('effective_communication'),
                '4_3_2' => request('the_most_important_achievement'),
                '4_3_3' => request('most_unpleasant_event'),
                '4_3_4' => request('feature_waiver'),
                '4_3_5' => request('improvements_and_support'),
                '4_3_6' => request('problematic_areas'),
                '4_3_7' => request('what_should_manager_improve'),
                '4_3_8' => request('popularity_of_programs'),
                '4_3_9' => request('staff_evaluation'),
                '4_3_10' => request('happiness_with_communication'),
                '4_3_11' => request('how_can_I_benefit_the_school'),
                'pateikta' => 1,
            ]);

            return redirect('/self-assessment');
        }
    }

    public function assessment()
    {
        $name = session('userName');
        $id = KitmUsers::where(['email' => session('userEmail')])->first()->id;
        $hours = Qualification::where(['user_id' => $id])->sum('hours');
        $hourscore = intval(round($hours / 6));
        $qualifications = Qualification::where(['user_id' => $id])->get();

        if (!SelfAssessment::where(['user_id' => $id])->exists()) {
            SelfAssessment::create([
                'user_id' => $id,
            ]);
        }
        $update = SelfAssessment::where(['user_id' => $id])->first();
        $check = SelfAssessment::where(['user_id' => $id])->first();
        $projects = SelfAssessment::where(['user_id' => $id])->pluck('2_1');
        
        if ($check == null or $check['pateikta'] < 1) {
            $pateikta = false;
        } else {
            $pateikta = true;
        }

        return view('admin.pages.assessment', compact('qualifications', 'name', 'update', 'pateikta', 'hourscore', 'projects'));
    }

    //-------------------------------------------- ATASKAITA ------------------------------------------------------------

    public function report()
    {
        $teachers = KitmUsers::where(['roles_id' => 3])->orWhere(['roles_id' => 1])->get();
        $reports = array();
        $average = 0;
        $category = '';

        foreach ($teachers as $teacher) {
            $scores = array();
            $check = SelfAssessment::where(['user_id' => $teacher->id])->first();
            $assessmentcheck = SelfAssessment::where(['user_id' => $teacher->id])->exists() && $check['pateikta'] > 0;
            $surveycheck = Survey::where(['teacher_id' => $teacher->id])->exists();
            $guidecheck = Guide::where(['user_id' => $teacher->id])->exists();

            if ($assessmentcheck == true) {
                $category = SelfAssessment::where(['user_id' => $teacher->id])->first()['category'];
            } else {
                $category = '';
            }

            if (($assessmentcheck && $surveycheck && $guidecheck) == true) {
                $assScores = SelfAssessment::where(['user_id' => $teacher->id])->first();
                $surveyScores = Survey::where(['teacher_id' => $teacher->id])->get();
                $guideScores = Guide::where(['user_id' => $teacher->id])->first();
                foreach ($surveyScores as $score) {
                    array_push($scores, $score->quality);
                }
                array_push($scores, $assScores->{'3_hours'}, $assScores->{'3_I'}, $assScores->{'3_II'}, $assScores->{'3_III'}, $guideScores->guide_evaluation);
                $average = intval(round(array_sum($scores) / count($scores)));
            } else {
                $average = 0;
            }
            unset($scores);
            $scores = array();
            array_push($reports, [$teacher->surname, $teacher->name, $category, $assessmentcheck, $surveycheck, $average, $teacher->id, $guidecheck]);
        }

        return view('admin.pages.assessment-report', compact('reports'));
    }

    public function reportView($report)
    {
        $id = (int)$report;
        $check = SelfAssessment::where(['user_id' => $id])->first();
        $assessmentcheck = SelfAssessment::where(['user_id' => $id])->exists() && $check['pateikta'] > 0;
        $surveycheck = Survey::where(['teacher_id' => $id])->exists();
        $guidecheck = Guide::where(['user_id' => $id])->exists();
        $name = KitmUsers::where(['id' => $id])->first();
        $report = SelfAssessment::where(['user_id' => $id])->first();
        $projects = SelfAssessment::where(['user_id' => $id])->pluck('2_1');
        $guide = Guide::where(['user_id' => $id])->first();

        return view('admin.pages.report-view', compact('assessmentcheck', 'surveycheck', 'name', 'guidecheck', 'report', 'projects', 'guide'));
    }
}
