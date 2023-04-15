<?php

namespace App\Http\Controllers;

use App\ActivateProfile;
use App\ContactUs;
use App\Friend;
use App\Plan;
use App\Profiles;
use App\UserMaster;
use App\ViewContacts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

session_start();

class FrontendController extends Controller
{


    public function registration()
    {
        return view('web.registration');
    }

    public function a_registration()
    {
        return view('web.a_registration');
    }

    public function ajax_candidate_list()
    {
        $_SESSION['age1'] = null;
        $_SESSION['age2'] = null;
        $_SESSION['gender'] = null;
        $_SESSION['religion'] = null;
        $_SESSION['caste'] = null;
        $_SESSION['age1'] = request('age1');
        $_SESSION['age2'] = request('age2');
        $_SESSION['gender'] = request('gender');
        $_SESSION['religion'] = request('religion');
//        $_SESSION['caste'] = request('caste');
//        $search_users = DB::select("SELECT * FROM `profiles` WHERE gender = '$gender' or (age >= '$age1' or age <= '$age2') or religion = '$religion'");
        echo 'success';
    }

    public function candidate_list(Request $request)
    {
//        dd($_SESSION);
        if (!isset($_SESSION['user_master'])) {
            $age1 = $_SESSION['age1'];
            $age2 = $_SESSION['age2'];
            $gender = $_SESSION['gender'];
            $religion = $_SESSION['religion'];
            if ($religion == 'Any')
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where(['gender' => $gender, 'is_verified' => 1, 'is_active' => 1])->orderBy('age', 'DESC')->paginate(5);
            else
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where(['religion' => $religion, 'gender' => $gender, 'is_verified' => 1, 'is_active' => 1])->orderBy('age', 'DESC')->paginate(5);
//            if ($request['marital_status']) {
//                $users->whereIn('status', $request['marital_status']);
//            }
//            if ($request['brand_id']) {
//                $users->whereIn('status', $request['marital_status']);
//            }
//        if ($request['marital_status'])
//            return view('web.search.user_list')->with(['users' => $users, 'user_count' => 0, 'religion' => $religion]);
//        else
            return view('web.candidate_list')->with(['users' => $users, 'user_count' => 0, 'religion' => $religion]);
        } else {
            $urs = Profiles::find($_SESSION['user_master']->id);
            $_SESSION['age1'] = $urs->gender == 'male' ? $urs->age - 6 : $urs->age;
            $_SESSION['age2'] = $urs->gender == 'male' ? $urs->age : $urs->age + 6;
            $_SESSION['gender'] = $urs->gender == 'male' ? 'female' : 'male';
            $_SESSION['religion'] = $urs->religion;
            $age1 = $_SESSION['age1'];
            $age2 = $_SESSION['age2'];
            $gender = $_SESSION['gender'];
            $religion = $_SESSION['religion'];
//            dd($_SESSION);
            //->whereBetween('age', ["$age1", "$age2"])
            if ($religion == 'Any')
                $users = Profiles::whereBetween('age', ["$age1", "$age2"])->where(['gender' => $gender, 'caste' => $urs->caste, 'is_verified' => 1, 'is_active' => 1])->orderBy('id', 'desc')->paginate(5);
            else
                $users = Profiles::whereBetween('age', ["$age1", "$age2"])->where(['religion' => $religion, 'gender' => $urs->gender == 'male' ? 'female' : 'male', 'caste' => $urs->caste, 'status' => $urs->status, 'is_verified' => 1, 'is_active' => 1])->orderBy('id', 'desc')->paginate(5);
            // $sql = "SELECT * FROM profiles WHERE caste='$urs->caste' and gender != '$urs->gender' and status='$urs->status' and religion='$urs->religion'";
            // echo $sql."<br>";
            // echo json_encode(count($users));
//            if ($request['marital_status']) {
//                $users->whereIn('status', $request['marital_status']);
//            }
//            if ($request['brand_id']) {
//                $users->whereIn('status', $request['marital_status']);
//            }
            //dd($_SESSION);
            return view('web.candidate_list')->with(['users' => $users, 'user_count' => 0, 'religion' => $religion]);
        }
    }


    public function refine_candidate_list(Request $request)
    {
        return $this->getCandidates($request);
    }

    public function getCandidates($request)
    {
        if (isset($_SESSION['user_master'])) {

            $age1 = (request('age1') != null) ? request('age1') : '18';
            $age2 = (request('age2') != null) ? request('age2') : '70';
            $gender = $_SESSION['user_master']->gender;
            $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('gender', '!=', $gender)->paginate(5);
            if (request('age1') && request('age2')) {

//            $users->whereBetween('age', ["$age1", "$age2"]);
//            $users->where('age', '>=', $age1);
            }
            if (request('marital_status')) {
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('status', request('marital_status'))->where('gender', '!=', $gender)->paginate(5);
            }
            if (request('religion')) {
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('religion', request('religion'))->where('gender', '!=', $gender)->paginate(5);
            }
            if (request('caste')) {
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('caste', request('caste'))->where('gender', '!=', $gender)->paginate(5);
            }
            if (request('manglik')) {
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('manglik', request('manglik'))->where('gender', '!=', $gender)->paginate(5);
            }
            if (request('state')) {
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('state', request('state'))->where('gender', '!=', $gender)->paginate(5);
            }
            if (request('height')) {
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('height', request('height'))->where('gender', '!=', $gender)->paginate(5);
            }
            if (request('education')) {
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('education', request('education'))->where('gender', '!=', $gender)->paginate(5);
            }
            if (request('occupation')) {
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('occupation', request('occupation'))->where('gender', '!=', $gender)->paginate(5);
            }

//        if ($request['religion'] && isset($request['religion'])) {
//            $religion = $request['religion'];
//            $users = DB::select(DB::raw("SELECT * FROM `profiles` WHERE `status` = 'Never married' AND `religion` IN ('$religion') AND `age` BETWEEN 18 AND 50"));
////                ->whereBetween('age', ["$age1", "$age2"])->whereIn('religion', $request['religion'])->paginate(5);
//
//        }
//        if ($request['education']) {
//            $users->whereIn('status', $request['marital_status']);
//        }
//        if ($request['marital_status'])
//            return view('web.search.user_list')->with(['users' => $users, 'user_count' => 0, 'religion' => $religion]);
//        else
//        echo json_encode($users);
            return view('web.candidate_list')->with(['users' => $users, 'user_count' => 0]);
        } else {
            $age1 = (request('age1') != null) ? request('age1') : '18';
            $age2 = (request('age2') != null) ? request('age2') : '70';
            $gender = $_SESSION['gender'];
            $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->paginate(5);
            if (request('age1') && request('age2')) {

//            $users->whereBetween('age', ["$age1", "$age2"]);
//            $users->where('age', '>=', $age1);
            }
            if (request('marital_status')) {
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('status', request('marital_status'))->paginate(5);
            }
            if (request('religion')) {
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('religion', request('religion'))->paginate(5);
            }
            if (request('caste')) {
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('caste', request('caste'))->where('gender', '!=', $gender)->paginate(5);
            }
            if (request('manglik')) {
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('manglik', request('manglik'))->where('gender', '!=', $gender)->paginate(5);
            }
            if (request('state')) {
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('state', request('state'))->where('gender', '!=', $gender)->paginate(5);
            }
            if (request('height')) {
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('height', request('height'))->where('gender', '!=', $gender)->paginate(5);
            }
            if (request('education')) {
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('education', request('education'))->where('gender', '!=', $gender)->paginate(5);
            }
            if (request('occupation')) {
                $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where('occupation', request('occupation'))->where('gender', '!=', $gender)->paginate(5);
            }
            return view('web.candidate_list')->with(['users' => $users, 'user_count' => 0]);
        }

    }

    public function advance_search()
    {
        return view('web.search.advance_search');
    }

    public function home()
    {
        $today = Carbon::now('Asia/Kolkata');
        if (!isset($_SESSION['user_master'])) {
//            if ($today == '2018-12-23 13:00:00') {
//                return view('welcome');
//            } else {
            return view('web.home');
//            }
        } else {
//            if ($today == '2018-12-23 13:00:00') {
//                return view('welcome');
//            } else {
            return redirect('candidate_list');
//            }
        }
    }

    public function search_advance(Request $request)
    {
        $_SESSION['marital_status'] = request('marital_status') != null ? request('marital_status') : ['Never Married'];
        $_SESSION['manglik'] = request('manglik');
        $_SESSION['physical'] = request('physical') != null ? request('physical') : ['Any'];
        $_SESSION['language'] = request('language') != null ? request('language') : ['Any'];
        $_SESSION['religion'] = request('religion') != null ? request('religion') : ['Any'];
        $_SESSION['caste'] = request('caste') != null ? request('caste') : ['Any'];
        $_SESSION['education'] = request('education') != null ? request('education') : ['Any'];
        $_SESSION['occupation'] = request('occupation') != null ? request('occupation') : ['Any'];
        $_SESSION['family_income'] = request('family_income') != null ? request('family_income') : ['Any'];
        $_SESSION['anual_income'] = request('anual_income') != null ? request('anual_income') : ['Any'];
        $_SESSION['state'] = request('state') != null ? request('state') : ['Any'];
        $_SESSION['diet'] = request('diet') != null ? request('diet') : 'Any';
        $_SESSION['horoscope_match'] = request('horoscope_match');
        $_SESSION['f_status'] = request('f_status');
        $_SESSION['ad_age1'] = request('age1');
        $_SESSION['ad_age2'] = request('age2');
//        echo json_encode($_REQUEST);
        return redirect('get_search_advance');
//            return view('web.candidate_list')->with(['users' => $users, 'user_count' => 0]);

    }

    public function get_search_advance(Request $request)
    {

//        dd($_SESSION);
        if (isset($_SESSION['user_master'])) {
            $mstatus = $_SESSION['marital_status'];
            $status = "";
            if ($mstatus)
                foreach ($mstatus as $value) {
                    if ($value != "Any")
                        $status = $status . " status='" . $value . "' ||";
                    else
                        $status = " 0 ,0";

                }

            $manglik = $_SESSION['manglik'];
            $mang = "";
            if ($manglik == "yes")
                $mang = " manglik='yes'";
            else if ($manglik == "no")
                $mang = " manglik='no'";
            else
                $mang = " 0 = 0";

            $horoscope_match = $_SESSION['horoscope_match'];
            $horoscope = "";
            if ($horoscope_match == "1")
                $horoscope = " horoscope_match='1'";
            else if ($horoscope_match == "0")
                $horoscope = " horoscope_match='0'";
            else
                $horoscope = " 0 = 0";

            $family_status = $_SESSION['f_status'];
            $f_status = ""; //'Rich','Upper middle class','Middle class','Not mentioned'
            if ($family_status == "Rich")
                $f_status = " f_status='Rich'";
            else if ($family_status == "Upper middle class")
                $f_status = " f_status='Upper middle class'";
            else if ($family_status == "Middle class")
                $f_status = " f_status='Middle class'";
            else
                $f_status = " 0 = 0";

            $physical = $_SESSION['physical'];
            $phy = "";
            if ($physical != "Any")
                $phy = " physical='" . $physical . "'";
            else
                $phy = " 0 = 0";

            $mtongue = $_SESSION['language'];
            $lang = "";
            foreach ($mtongue as $value) {
                if ($value != "Any")
                    $lang = $lang . " language='" . $value . "' ||";
                else
                    $lang = " 0 =";

            }


            $lstreligion = is_array($_SESSION['religion']) ? $_SESSION['religion'] : [$_SESSION['religion']];
            $rel = "";
            if ($lstreligion)
                foreach ($lstreligion as $value) {
                    if ($value != "Any")
                        $rel = $rel . " religion='" . $value . "' ||";
                    else
                        $rel = " 0 =";

                }

            $caste = $_SESSION['caste'];
            $cast = "";
            if ($caste)
                foreach ($caste as $value) {
                    if ($value != "Any")
                        $cast = $cast . " caste='" . $value . "' ||";
                    else
                        $cast = " 0 =";

                }

            $cmbedu = $_SESSION['education'];
            $edu = "";
            if ($cmbedu)
                foreach ($cmbedu as $value) {
                    if ($value != "Any")
                        $edu = $edu . " education='" . $value . "' ||";
                    else
                        $edu = " 0 =";

                }

            $cmboccu = $_SESSION['occupation'];
            $occu = "";
            if ($cmboccu)
                foreach ($cmboccu as $value) {
                    if ($value != "Any")
                        $occu = $occu . " occupation='" . $value . "' ||";
                    else
                        $occu = " 0 =";

                }

            $lststate = $_SESSION['state'];
            $stt = "";
            foreach ($lststate as $value) {
                if ($value != "Any")
                    $stt = $stt . " state='" . $value . "' ||";
                else
                    $stt = " 0 =";

            }

            $family_income = $_SESSION['family_income'];
            $familyin = "";
            foreach ($family_income as $value) {
                if ($value != "Any")
                    $familyin = $familyin . " f_income='" . $value . "' ||";
                else
                    $familyin = " 0 =";

            }

            $anual_income = $_SESSION['anual_income'];
            $anual = "";
            if ($anual_income)
                foreach ($anual_income as $value) {
                    if ($value != "Any")
                        $anual = $anual . " salary='" . $value . "' ||";
                    else
                        $anual = " 0 =";

                }


            $diets = $_SESSION['diet'];
            $diet = "";
            if ($diets == "Vegetarian")
                $diet = " diet='Vegetarian'";
            else if ($diets == "Non vegetarian")
                $diet = " diet='Non vegetarian'";
            else
                $diet = " 0 = 0";


            $age1 = $_SESSION['ad_age1'];
            $age2 = $_SESSION['ad_age2'];

            $gender = $_SESSION['user_master']->gender == 'male' ? 'female' : 'male';

            $sql = "SELECT * FROM `profiles` WHERE is_verified = 1 and is_active = 1 and is_active = 1 and (gender='" . $gender . "') and (" . $status . " 0) and (" . $lang . " 0) and (" . $rel . " 0) and (" . $cast . " 0) and (" . $edu . " 0) and (" . $occu . " 0) and (" . $stt . " 0) and (" . $mang . ") and (" . $horoscope . ") and (" . $phy . ") and (" . $familyin . " 0) and (" . $anual . " 0) and (" . $diet . ") and (" . $f_status . ") and age between $age1 and $age2";


            $search_users = DB::select($sql);
            $numrows = count($search_users);
            $rowsperpage = 8;
            $totalpages = ceil($numrows / $rowsperpage);
            $limit = $request->input('limit');
            if ($request->input('page') != '' && is_numeric($request->input('page'))) {
                $currentpage = (int)$request->input('page');
            } else {
                $currentpage = 1;  // default page number
            }

            if ($currentpage < 1) {
                $currentpage = 1;
            }
            $offset = ($currentpage - 1) * $rowsperpage;

//            $s1 = "SELECT * FROM `profiles` WHERE age BETWEEN '$age1' and '$age2' and gender = '$gender' ORDER BY id DESC LIMIT $offset,$rowsperpage";
            $s2 = "SELECT * FROM `profiles` WHERE is_verified = 1 and is_active = 1 and (gender='" . $gender . "') and (" . $status . " 0) and (" . $lang . " 0) and (" . $rel . " 0) and (" . $cast . " 0) and (" . $edu . " 0) and (" . $occu . " 0) and (" . $stt . " 0) and (" . $mang . ") and (" . $horoscope . ") and (" . $phy . ") and (" . $familyin . " 0) and (" . $anual . " 0) and (" . $diet . ") and (" . $f_status . ") and age between $age1 and $age2 ORDER BY id DESC LIMIT $offset,$rowsperpage";

            $users = DB::select($s2);
            $u_paginat = Profiles::take(count($search_users))->paginate(8); //DB::table('profiles')->take($numrows)->paginate(5);
            return view('web.search.advance_search_list')->with(['users' => $users, 'u_paginat' => $u_paginat, 'user_count' => count($search_users)]);

        } else {
            return redirect('/')->withErrors('Please login first');
        }
//        else {
//            $mstatus = $_SESSION['marital_status'];
//            $status = "";
//            if ($mstatus)
//                foreach ($mstatus as $value) {
//                    if ($value != "Any")
//                        $status = $status . " status='" . $value . "' ||";
//                    else
//                        $status = " 0 ,0";
//
//                }
//
//            $manglik = $_SESSION['manglik'];
//            $mang = "";
//            if ($manglik == "yes")
//                $mang = " manglik='yes'";
//            else if ($manglik == "no")
//                $mang = " manglik='no'";
//            else
//                $mang = " 0 = 0";
//
//            $horoscope_match = $_SESSION['horoscope_match'];
//            $horoscope = "";
//            if ($horoscope_match == "1")
//                $horoscope = " horoscope_match='1'";
//            else if ($horoscope_match == "0")
//                $horoscope = " horoscope_match='0'";
//            else
//                $horoscope = " 0 = 0";
//
//            $physical = $_SESSION['physical'];
//            $phy = "";
//            if ($physical != "Any")
//                $phy = " physical='" . $physical . "'";
//            else
//                $phy = " 0 = 0";
//
//            $mtongue = $_SESSION['language'];
//            $lang = "";
//            foreach ($mtongue as $value) {
//                if ($value != "Any")
//                    $lang = $lang . " language='" . $value . "' ||";
//                else
//                    $lang = " 0 =";
//
//            }
//
//
//            $lstreligion = $_SESSION['religion'];
//            $rel = "";
//            if ($lstreligion)
//                foreach ($lstreligion as $value) {
//                    if ($value != "Any")
//                        $rel = $rel . " religion='" . $value . "' ||";
//                    else
//                        $rel = " 0 =";
//
//                }
//
//            $caste = $_SESSION['caste'];
//            $cast = "";
//            if ($caste)
//                foreach ($caste as $value) {
//                    if ($value != "Any")
//                        $cast = $cast . " caste='" . $value . "' ||";
//                    else
//                        $cast = " 0 =";
//
//                }
//
//            $cmbedu = $_SESSION['education'];
//            $edu = "";
//            if ($cmbedu)
//                foreach ($cmbedu as $value) {
//                    if ($value != "Any")
//                        $edu = $edu . " education='" . $value . "' ||";
//                    else
//                        $edu = " 0 =";
//
//                }
//
//            $cmboccu = $_SESSION['occupation'];
//            $occu = "";
//            if ($cmboccu)
//                foreach ($cmboccu as $value) {
//                    if ($value != "Any")
//                        $occu = $occu . " occupation='" . $value . "' ||";
//                    else
//                        $occu = " 0 =";
//
//                }
//
//            $lststate = $_SESSION['state'];
//            $stt = "";
//            foreach ($lststate as $value) {
//                if ($value != "Any")
//                    $stt = $stt . " state='" . $value . "' ||";
//                else
//                    $stt = " 0 =";
//
//            }
//
//            $family_income = $_SESSION['family_income'];
//            $familyin = "";
//            foreach ($family_income as $value) {
//                if ($value != "Any")
//                    $familyin = $familyin . " f_income='" . $value . "' ||";
//                else
//                    $familyin = " 0 =";
//
//            }
//
//            $anual_income = $_SESSION['anual_income'];
//            $anual = "";
//            if ($anual_income)
//                foreach ($anual_income as $value) {
//                    if ($value != "Any")
//                        $anual = $anual . " anual_income='" . $value . "' ||";
//                    else
//                        $anual = " 0 =";
//
//                }
//
//
//            $diets = $_SESSION['diet'];
//            $diet = "";
//            if ($diets != "Any")
//                $diet = " diet='" . $diets . "'";
//            else
//                $diet = " 0 = 0";
//
//            $age1 = $_SESSION['ad_age1'];
//            $age2 = $_SESSION['ad_age2'];
//
//            $sql = "SELECT * FROM profiles WHERE is_verified = 1 and is_active = 1 and (" . $status . " 0) and (" . $lang . " 0) and (" . $rel . " 0) and (" . $cast . " 0) and (" . $edu . " 0) and (" . $occu . " 0) and (" . $stt . " 0) and (" . $mang . ") and (" . $horoscope . ") and (" . $phy . ") and (" . $familyin . " 0) and (" . $anual . " 0) and (" . $diet . ") and (age between $age1 and $age2)";
//
//
//            $search_users = DB::select($sql);
//            $numrows = count($search_users);
//            $rowsperpage = 5;
//            $totalpages = ceil($numrows / $rowsperpage);
//            $limit = $request->input('limit');
//            if ($request->input('page') != '' && is_numeric($request->input('page'))) {
//                $currentpage = (int)$request->input('page');
//            } else {
//                $currentpage = 1;  // default page number
//            }
//
//            if ($currentpage < 1) {
//                $currentpage = 1;
//            }
//            $offset = ($currentpage - 1) * $rowsperpage;
//
////            $s1 = "SELECT * FROM `profiles` WHERE age BETWEEN '$age1' and '$age2' and gender = '$gender' ORDER BY id DESC LIMIT $offset,$rowsperpage";
//            $s2 = "SELECT * FROM profiles WHERE is_verified = 1 and is_active = 1 and (" . $status . " 0) and (" . $lang . " 0) and (" . $rel . " 0) and (" . $cast . " 0) and (" . $edu . " 0) and (" . $occu . " 0) and (" . $stt . " 0) and (" . $mang . ") and (" . $horoscope . ") and (" . $phy . ") and (" . $familyin . " 0) and (" . $anual . " 0) and (" . $diet . ") and (age between $age1 and $age2) ORDER BY ID DESC LIMIT $offset,$rowsperpage";
//
//            $users = DB::select($s2);
//            $u_paginat = DB::table('profiles')->paginate(5);
//            return view('web.search.advance_search_list')->with(['users' => $users, 'u_paginat' => $u_paginat, 'user_count' => count($search_users)]);
//
//        }
    }


    public function search_side(Request $request)
    {
        $_SESSION['marital_status'] = request('marital_status') != null ? request('marital_status') : ['Never Married'];
        $_SESSION['manglik'] = request('manglik');
        $_SESSION['physical'] = request('physical') != null ? request('physical') : ['Any'];
        $_SESSION['language'] = request('language') != null ? request('language') : ['Any'];
        $_SESSION['religion'] = request('religion') != null ? request('religion') : ['Any'];
        $_SESSION['caste'] = request('caste') != null ? request('caste') : ['Any'];
        $_SESSION['education'] = request('education') != null ? request('education') : ['Any'];
        $_SESSION['occupation'] = request('occupation') != null ? request('occupation') : ['Any'];
        $_SESSION['family_income'] = request('family_income') != null ? request('family_income') : ['Any'];
        $_SESSION['anual_income'] = request('anual_income') != null ? request('anual_income') : ['Any'];
        $_SESSION['state'] = request('state') != null ? request('state') : ['Any'];
        $_SESSION['diet'] = request('diet') != null ? request('diet') : '';
        $_SESSION['f_status'] = request('f_status');
        $_SESSION['ad_age1'] = request('age1');
        $_SESSION['ad_age2'] = request('age2');
        return redirect('get_search_side');
//            return view('web.candidate_list')->with(['users' => $users, 'user_count' => 0]);

    }

    public function get_search_side(Request $request)
    {
        //dd($_SESSION);
        if (isset($_SESSION['user_master'])) {
            $mstatus = $_SESSION['marital_status'];
            $status = "";
            if ($mstatus)
                foreach ($mstatus as $value) {
                    if ($value != "Any")
                        $status = $status . " status='" . $value . "' ||";
                    else
                        $status = " 0 ,0";

                }

            $manglik = $_SESSION['manglik'];
            $mang = "";
            if ($manglik == "yes")
                $mang = " manglik='yes'";
            else if ($manglik == "no")
                $mang = " manglik='no'";
            else
                $mang = " 0 = 0";


            $physical = $_SESSION['physical'];
            $phy = "";
            if ($physical != "Any")
                $phy = " physical='" . $physical . "'";
            else
                $phy = " 0 = 0";

            $mtongue = $_SESSION['language'];
            $lang = "";
            foreach ($mtongue as $value) {
                if ($value != "Any")
                    $lang = $lang . " language='" . $value . "' ||";
                else
                    $lang = " 0 =";

            }


            $lstreligion = is_array($_SESSION['religion']) ? $_SESSION['religion'] : [$_SESSION['religion']];
            $rel = "";
            if ($lstreligion)
                foreach ($lstreligion as $value) {
                    if ($value != "Any")
                        $rel = $rel . " religion='" . $value . "' ||";
                    else
                        $rel = " 0 =";

                }

            $caste = $_SESSION['caste'];
            $cast = "";
            if ($caste)
                foreach ($caste as $value) {
                    if ($value != "Any")
                        $cast = $cast . " caste='" . $value . "' ||";
                    else
                        $cast = " 0 =";

                }

            $cmbedu = $_SESSION['education'];
            $edu = "";
            if ($cmbedu)
                foreach ($cmbedu as $value) {
                    if ($value != "Any")
                        $edu = $edu . " education='" . $value . "' ||";
                    else
                        $edu = " 0 =";

                }

            $cmboccu = $_SESSION['occupation'];
            $occu = "";
            if ($cmboccu)
                foreach ($cmboccu as $value) {
                    if ($value != "Any")
                        $occu = $occu . " occupation='" . $value . "' ||";
                    else
                        $occu = " 0 =";

                }

            $lststate = $_SESSION['state'];
            $stt = "";
            foreach ($lststate as $value) {
                if ($value != "Any")
                    $stt = $stt . " state='" . $value . "' ||";
                else
                    $stt = " 0 =";

            }

            $family_income = $_SESSION['family_income'];
            $familyin = "";
            foreach ($family_income as $value) {
                if ($value != "Any")
                    $familyin = $familyin . " f_income='" . $value . "' ||";
                else
                    $familyin = " 0 =";

            }

            $anual_income = $_SESSION['anual_income'];
            $anual = "";
            if ($anual_income)
                foreach ($anual_income as $value) {
                    if ($value != "Any")
                        $anual = $anual . " salary='" . $value . "' ||";
                    else
                        $anual = " 0 =";

                }


            $diets = $_SESSION['diet'];
            $diet = "";
            if ($diets == "Vegetarian")
                $diet = " diet='Vegetarian'";
            else if ($diets == "Non vegetarian")
                $diet = " diet='Non vegetarian'";
            else
                $diet = " 0 = 0";

            $family_status = $_SESSION['f_status'];
            $f_status = "";
            if ($family_status == "Rich")
                $f_status = " f_status='Rich'";
            else if ($family_status == "Upper middle class")
                $f_status = " f_status='Upper middle class'";
            else if ($family_status == "Middle class")
                $f_status = " f_status='Middle class'";
            else
                $f_status = " 0 = 0";


            $age1 = $_SESSION['ad_age1'];
            $age2 = $_SESSION['ad_age2'];

            $gender = $_SESSION['user_master']->gender == 'male' ? 'female' : 'male';

            $sql = "SELECT * FROM `profiles` WHERE is_verified = 1 and is_active = 1 and (gender='" . $gender . "') and (" . $status . " 0) and (" . $lang . " 0) and (" . $rel . " 0) and (" . $cast . " 0) and (" . $edu . " 0) and (" . $occu . " 0) and (" . $stt . " 0) and (" . $mang . ") and (" . $phy . ") and (" . $familyin . " 0) and (" . $anual . " 0) and (" . $diet . ") and (" . $f_status . ") and age between $age1 and $age2";


            $search_users = DB::select($sql);
            $numrows = count($search_users);
            $rowsperpage = 8;
            $totalpages = ceil($numrows / $rowsperpage);
            $limit = $request->input('limit');
            if ($request->input('page') != '' && is_numeric($request->input('page'))) {
                $currentpage = (int)$request->input('page');
            } else {
                $currentpage = 1;  // default page number
            }

            if ($currentpage < 1) {
                $currentpage = 1;
            }
            $offset = ($currentpage - 1) * $rowsperpage;

//            $s1 = "SELECT * FROM `profiles` WHERE age BETWEEN '$age1' and '$age2' and gender = '$gender' ORDER BY id DESC LIMIT $offset,$rowsperpage";
            $s2 = "SELECT * FROM `profiles` WHERE is_verified = 1 and is_active = 1 and (gender='" . $gender . "') and (" . $status . " 0) and (" . $lang . " 0) and (" . $rel . " 0) and (" . $cast . " 0) and (" . $edu . " 0) and (" . $occu . " 0) and (" . $stt . " 0) and (" . $mang . ") and (" . $phy . ") and (" . $familyin . " 0) and (" . $anual . " 0) and (" . $diet . ") and (" . $f_status . ") and age between $age1 and $age2 ORDER BY id DESC LIMIT $offset,$rowsperpage";

            $users = DB::select($s2);
            $u_paginat = Profiles::take($numrows)->paginate(8); //DB::table('profiles')->take($numrows)->paginate(5);
            return view('web.candidate_list')->with(['users' => $users, 'u_paginat' => $u_paginat, 'user_count' => count($search_users)]);

        }
//        else {
//            $mstatus = $_SESSION['marital_status'];
//            $status = "";
//            if ($mstatus)
//                foreach ($mstatus as $value) {
//                    if ($value != "Any")
//                        $status = $status . " status='" . $value . "' ||";
//                    else
//                        $status = " 0 ,0";
//
//                }
//
//            $manglik = $_SESSION['manglik'];
//            $mang = "";
//            if ($manglik == "yes")
//                $mang = " manglik='yes'";
//            else if ($manglik == "no")
//                $mang = " manglik='no'";
//            else
//                $mang = " 0 = 0";
//
//            $physical = $_SESSION['physical'];
//            $phy = "";
//            if ($physical != "Any")
//                $phy = " physical='" . $physical . "'";
//            else
//                $phy = " 0 = 0";
//
//            $mtongue = $_SESSION['language'];
//            $lang = "";
//            foreach ($mtongue as $value) {
//                if ($value != "Any")
//                    $lang = $lang . " language='" . $value . "' ||";
//                else
//                    $lang = " 0 =";
//
//            }
//
//
//            $lstreligion = $_SESSION['religion'];
//            $rel = "";
//            if ($lstreligion)
//                foreach ($lstreligion as $value) {
//                    if ($value != "Any")
//                        $rel = $rel . " religion='" . $value . "' ||";
//                    else
//                        $rel = " 0 =";
//
//                }
//
//            $caste = $_SESSION['caste'];
//            $cast = "";
//            if ($caste)
//                foreach ($caste as $value) {
//                    if ($value != "Any")
//                        $cast = $cast . " caste='" . $value . "' ||";
//                    else
//                        $cast = " 0 =";
//
//                }
//
//            $cmbedu = $_SESSION['education'];
//            $edu = "";
//            if ($cmbedu)
//                foreach ($cmbedu as $value) {
//                    if ($value != "Any")
//                        $edu = $edu . " education='" . $value . "' ||";
//                    else
//                        $edu = " 0 =";
//
//                }
//
//            $cmboccu = $_SESSION['occupation'];
//            $occu = "";
//            if ($cmboccu)
//                foreach ($cmboccu as $value) {
//                    if ($value != "Any")
//                        $occu = $occu . " occupation='" . $value . "' ||";
//                    else
//                        $occu = " 0 =";
//
//                }
//
//            $lststate = $_SESSION['state'];
//            $stt = "";
//            foreach ($lststate as $value) {
//                if ($value != "Any")
//                    $stt = $stt . " state='" . $value . "' ||";
//                else
//                    $stt = " 0 =";
//
//            }
//
//            $family_income = $_SESSION['family_income'];
//            $familyin = "";
//            foreach ($family_income as $value) {
//                if ($value != "Any")
//                    $familyin = $familyin . " f_income='" . $value . "' ||";
//                else
//                    $familyin = " 0 =";
//
//            }
//
//            $anual_income = $_SESSION['anual_income'];
//            $anual = "";
//            if ($anual_income)
//                foreach ($anual_income as $value) {
//                    if ($value != "Any")
//                        $anual = $anual . " salary='" . $value . "' ||";
//                    else
//                        $anual = " 0 =";
//
//                }
//
//
//            $diets = $_SESSION['diet'];
//            $diet = "";
//            if ($diets != "Any")
//                $diet = " diet='" . $diets . "'";
//            else
//                $diet = " 0 = 0";
//
//            $age1 = $_SESSION['s_age1'];
//            $age2 = $_SESSION['s_age2'];
//
//            $sql = "SELECT * FROM `profiles` WHERE is_verified = 1 and is_active = 1 and (" . $status . " 0) and (" . $lang . " 0) and (" . $rel . " 0) and (" . $cast . " 0) and (" . $edu . " 0) and (" . $occu . " 0) and (" . $stt . " 0) and (" . $mang . ") and (" . $phy . ") and (" . $familyin . " 0) and (" . $anual . " 0) and (" . $diet . ") and (age between $age1 and $age2)";
//
//
//            $search_users = DB::select($sql);
//            $numrows = count($search_users);
//            $rowsperpage = 5;
//            $totalpages = ceil($numrows / $rowsperpage);
//            $limit = $request->input('limit');
//            if ($request->input('page') != '' && is_numeric($request->input('page'))) {
//                $currentpage = (int)$request->input('page');
//            } else {
//                $currentpage = 1;  // default page number
//            }
//
//            if ($currentpage < 1) {
//                $currentpage = 1;
//            }
//            $offset = ($currentpage - 1) * $rowsperpage;
//
////            $s1 = "SELECT * FROM `profiles` WHERE age BETWEEN '$age1' and '$age2' and gender = '$gender' ORDER BY id DESC LIMIT $offset,$rowsperpage";
//            $s2 = "SELECT * FROM `profiles` WHERE is_verified = 1 and is_active = 1 and (" . $status . " 0) and (" . $lang . " 0) and (" . $rel . " 0) and (" . $cast . " 0) and (" . $edu . " 0) and (" . $occu . " 0) and (" . $stt . " 0) and (" . $mang . ") and (" . $phy . ") and (" . $familyin . " 0) and (" . $anual . " 0) and (" . $diet . ") and (age between $age1 and $age2) ORDER BY ID DESC LIMIT $offset,$rowsperpage";
//
//            $users = DB::select($s2);
//            $u_paginat = DB::table('profiles')->paginate(5);
//            return view('web.candidate_list')->with(['users' => $users, 'u_paginat' => $u_paginat, 'user_count' => count($search_users)]);
//
//        }
    }


    public function desire_candidates(Request $request)
    {
        if (isset($_SESSION['user_master'])) {
            $user_ses = $_SESSION['user_master'];
            $user = Profiles::find($user_ses->id);
            $age1 = isset($user->p_agefrom) ? $user->p_agefrom : '18';
            $age2 = isset($user->p_ageto) ? $user->p_ageto : '70';
            $gender = $user->gender == 'male' ? 'female' : 'male';
            $religion = isset($user->p_religion) ? $user->p_religion : 'Any';
            $caste = $user->caste;
            $users = DB::table('profiles')->select(DB::raw('*'))->where(['gender' => $gender, 'religion' => $religion, 'caste' => $caste, 'is_verified' => 1, 'is_active' => 1])->whereBetween('age', ["$age1", "$age2"])->orderBy('id', 'desc')->paginate(5);
            return view('web.search.desire_candidate_list')->with(['users' => $users, 'user_count' => 0, 'religion' => $religion]);
        } else {
            return redirect('/')->withErrors('Please login first');
        }
    }


    public
    function candidates($no, Request $request)
    {
        $age1 = $_SESSION['age1'];
        $age2 = $_SESSION['age2'];
        $gender = $_SESSION['gender'];
        $religion = $_SESSION['religion'];
//        $caste = $_SESSION['caste'];
        $s1 = "SELECT * FROM `profiles` WHERE is_verified = 1 and is_active = 1 and age BETWEEN '$age1' and '$age2' and gender = '$gender' ORDER BY `id` DESC";
        $s2 = "SELECT * FROM `profiles` WHERE is_verified = 1 and is_active = 1 and religion = '$religion' and age BETWEEN '$age1' and '$age2' and gender = '$gender' ORDER BY `id` DESC";
        $q = ($religion == 'Any' || $religion == 'Other') ? $s1 : $s2;
        $search_users = DB::select($q);
        $numrows = count($search_users);
        $rowsperpage = 5;
        $totalpages = ceil($numrows / $rowsperpage);
        $limit = $request->input('limit');
        if ($no != '' && is_numeric($no)) {
            $currentpage = $no;
        } else {
            $currentpage = 1;  // default page number
        }

        if ($currentpage < 1) {
            $currentpage = 1;
        }
        $offset = ($currentpage - 1) * $rowsperpage;

        $s1 = "SELECT * FROM `profiles` WHERE is_verified = 1 and is_active = 1 and age BETWEEN '$age1' and '$age2' and gender = '$gender' ORDER BY id DESC LIMIT $offset,$rowsperpage";
        $s2 = "SELECT * FROM `profiles` WHERE is_verified = 1 and is_active = 1 and religion = '$religion' and age BETWEEN '$age1' and '$age2' and gender = '$gender' ORDER BY id DESC LIMIT $offset,$rowsperpage";

        $s = ($religion == 'Any' || $religion == 'Other') ? $s1 : $s2;
//        $users = DB::table('profiles')->select(DB::raw("name,surname,(CASE WHEN (gender = 1) THEN 'M' ELSE 'F' END) as gender_text"));
//        $users = DB::table('profiles')->select(DB::raw('count(*) as user_count, status'))->where('status', '<>', 1)->groupBy('status')->get();
//        $users = DB::table('profiles')->select(DB::raw('*'))->where('status', '<>', 1)->groupBy('status')->get();
        $users = DB::table('profiles')->select(DB::raw('*'))->whereBetween('age', ["$age1", "$age2"])->where(['religion' => $religion, 'gender' => $gender, 'is_verified' => 1, 'is_active' => 1])->paginate(5);
//        $users = DB::select($s);
        return view('web.search.user_list')->with(['users' => $users, 'user_count' => count($search_users), 'religion' => $religion]);
    }

    /*$ages = DB::select("SELECT id, YEAR(CURDATE()) - YEAR(dob) AS age FROM profiles");
        foreach ($ages as $age){
            DB::select("UPDATE `profiles` SET age = $age->age WHERE age = 35 and id = $age->id");
        }
        echo 'done';*/
    public function refine_candidates(Request $request)
    {
        $age1 = $_SESSION['age1'];
        $age2 = $_SESSION['age2'];
        $gender = $_SESSION['gender'];
        $religion = $_SESSION['religion'];
//        $caste = $_SESSION['caste'];
        $s1 = "SELECT * FROM `profiles` WHERE is_verified = 1 and is_active = 1 and age BETWEEN '$age1' and '$age2' and gender = '$gender' ORDER BY `id` DESC";
        $s2 = "SELECT * FROM `profiles` WHERE is_verified = 1 and is_active = 1 and religion = '$religion' and age BETWEEN '$age1' and '$age2' and gender = '$gender' ORDER BY `id` DESC";
        $q = ($religion == 'Any' || $religion == 'Other') ? $s1 : $s2;
        $search_users = DB::select($q);
        $numrows = count($search_users);
        $rowsperpage = 5;
        $totalpages = ceil($numrows / $rowsperpage);
        $limit = $request->input('limit');
        if ($request->input('currentpage') != '' && is_numeric($request->input('currentpage'))) {
            $currentpage = (int)$request->input('currentpage');
        } else {
            $currentpage = 1;  // default page number
        }

        if ($currentpage < 1) {
            $currentpage = 1;
        }
        $offset = ($currentpage - 1) * $rowsperpage;

        $s1 = "SELECT * FROM `profiles` WHERE is_verified = 1 and is_active = 1 and age BETWEEN '$age1' and '$age2' and gender = '$gender' ORDER BY id DESC LIMIT $offset,$rowsperpage";
        $s2 = "SELECT * FROM `profiles` WHERE is_verified = 1 and is_active = 1 and religion = '$religion' and age BETWEEN '$age1' and '$age2' and gender = '$gender' ORDER BY id DESC LIMIT $offset,$rowsperpage";

        $s = ($religion == 'Any' || $religion == 'Other') ? $s1 : $s2;
        $users = DB::select($s);
        return view('web.search.user_list')->with(['users' => $users, 'user_count' => count($search_users), 'religion' => $religion]);
    }

    /*************************Payment*********************************/
    public function payment(Request $request)   //////////////////Final
    {
        if (!isset($_SESSION['user_master'])) {
            return 'Please login first';
        } else {
            $user_ses = $_SESSION['user_master'];
            $user = Profiles::find($user_ses->id);
            $plan_id = request('plan_id');
            $plan = Plan::find($plan_id);
//        define('PAYU_BASE_URL', 'https://test.payu.in');    //Testing url
//define('PAYU_BASE_URL', 'https://secure.payu.in');  //actual URL
            define('SUCCESS_URL', 'http://18.222.69.192/success');  //have complete url
            define('FAIL_URL', 'http://18.222.69.192/failed');    //add complete url
//            $MERCHANT_KEY = "wyMjdvT3";
//            $SALT = "zBehL9tdjJ";

            $MERCHANT_KEY = "ppDEFBJE";
            $SALT = "VAi9i9WCuk";

            $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
            $email = $user->email;
            $firstName = str_replace(' ', '', $user->name);
//        if (request('cod') != 1)
            $amt = $plan->amount;
            $amt_pum = $plan->amount * 3 / 100;
            $totalCost = $amt + $amt_pum;
            $mobile = $user->contact;
            $hash = '';
//Below is the required format need to hash it and send it across payumoney page. UDF means User Define Fields.
//$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
            $hash_string = $MERCHANT_KEY . "|" . $txnid . "|" . $totalCost . "|" . "product|" . $firstName . "|" . $email . "|1|2|3|4|" . $plan_id . "||||||" . $SALT;
            $hash = strtolower(hash('sha512', $hash_string));
//        echo json_encode($hash);
            $_SESSION['total_amt'] = $totalCost;
            return view('web.pay_umoney_form')->with(['hash1' => $hash, 'amt' => $amt, 'amt_pum' => $amt_pum, 'txnid' => $txnid, 'totalCost' => $totalCost, 'firstName' => $firstName, 'MERCHANT_KEY' => $MERCHANT_KEY, 'SALT' => $SALT, 'email' => $email, 'mobile' => $mobile, 'plan_id' => $plan_id, 'plan' => $plan, 'hash_string' => $hash_string, 'user' => $user]);
        }
    }


    public function payment_success()
    {
        if (isset($_SESSION['user_master'])) {
            $user_ses = $_SESSION['user_master'];
            $user = Profiles::find($user_ses->id);
            $activate = ActivateProfile::find($user->id);
            $plan_id = request('udf5');
            $plan = Plan::find($plan_id);
            $activate->active = 'yes';
            $activate->plan = $plan->plan_name;
            $activate->plan_id = $plan_id;
            $activate->activated_at = Carbon::now();
            $activate->deactivated_at = Carbon::now()->addMonth($plan->valid)->format('Y-m-d');
            $activate->save();

            $contact = ViewContacts::where(['user_id' => $user->id])->first();
            if (isset($contact)) {
                $contact->contact_left += $plan->contact_view;
                $contact->save();
            } else {
                $new_c = new ViewContacts();
                $new_c->user_id = $user->id;
                $new_c->contact_left = $plan->contact_view;
                $new_c->save();
            }
            return redirect('candidate_list')->with('message', 'Congratulation...You are now paid member');
        }
        return redirect('/');
    }

    public function payment_failed()
    {
//        echo json_encode($_REQUEST);
        return redirect('candidate_list')->withErrors(array('message' => 'Payment has been failed please try again...'));
    }

    /*************************Payment*********************************/

    public function view_candidate($id)
    {
        if (isset($_SESSION['user_master'])) {
            $user_ses = $_SESSION['user_master'];
            $suser = Profiles::find($user_ses->id);
            $user = Profiles::find($id);
            if (isset($user) && $user->is_active == 1) {
                $similar_user = $suser->gender == 'female' ? Profiles::where('age', '>=', $suser->age)->where('gender', '=', 'male')->where('id', '!=', $user->id)->orderBy('id', 'desc')->take(10)->get() : Profiles::where('age', '<=', $suser->age)->where('gender', '=', 'female')->where('id', '!=', $user->id)->where('is_active', '=', 1)->orderBy('id', 'desc')->take(10)->get();
                return view('web.view_candidate_new')->with(['user' => $user, 'similar_user' => $similar_user]);
            } else {
                return redirect('candidate_list')->withErrors(array('message' => 'Profile that you are looking is not exist in mangal mandap'));
            }
        } else {
            $user = Profiles::find($id);
            if (isset($user)) {
                $similar_user = Profiles::where('age', '>=', $user->age)->orderBy('id', 'desc')->take(10)->get();
                return view('web.view_candidate_new')->with(['user' => $user, 'similar_user' => $similar_user]);
            } else {
                return redirect('/')->withErrors(array('message' => 'Profile that you are looking is not exist in mangal mandap'));
            }
        }
    }

    public function view_candidate_admin($id)
    {
        if (isset($_SESSION['user_master'])) {
            $user_ses = $_SESSION['user_master'];
            $suser = Profiles::find($user_ses->id);
            $user = Profiles::find($id);
            if (isset($user)) {
                $similar_user = $user->age == 'female' ? Profiles::where('age', '>=', $user->age)->where('gender', '=', 'male')->where('id', '!=', $user->id)->take(10)->get() : Profiles::where('age', '<=', $user->age)->where('gender', '=', 'female')->where('id', '!=', $user->id)->take(10)->get();
                return view('web.view_candidate_new')->with(['user' => $user, 'similar_user' => $similar_user]);
            } else {
                return redirect('candidate_list')->withErrors(array('message' => 'Profile that you are looking is not exist in mangal mandap'));
            }
        } else {
            $user = Profiles::find($id);
            if (isset($user)) {
                $similar_user = $user->age == 'female' ? Profiles::where('age', '>=', $user->age)->where('gender', '=', 'female')->where('id', '!=', $user->id)->orderBy('id', 'desc')->take(10)->get() : Profiles::where('age', '<=', $user->age)->where('gender', '=', 'male')->where('id', '!=', $user->id)->orderBy('id', 'desc')->take(10)->get();
                return view('web.view_candidate_admin')->with(['user' => $user, 'similar_user' => $similar_user]);
            } else {
                return redirect('/')->withErrors(array('message' => 'Profile that you are looking is not exist in mangal mandap'));
            }
        }
    }

    public function membership()
    {
        return view('web.membership');
    }

    public function userProfiles()
    {
//        $s = "SELECT * FROM `profiles` ORDER BY `id` DESC";
        $users = Profiles::paginate(10);
        $user = Profiles::find($_SESSION['user_master']->id);
//        $friends =DB::table('profiles')->select("SELECT * FROM `profiles`")->paginate(20);
        $request_lists = Friend::where(['friend_id' => $user->id, 'status' => 'pending'])->get();
        $send_requests = Friend::where(['user_id' => $user->id, 'status' => 'pending'])->get();
//        echo json_encode($request_list);
        //$friends = DB::select("select p.id, p.name, p.age, p.height, p.city, p.religion, p.caste, p.language, p.status, p.education, p.gender, p.is_active from profiles p where p.id in (select f.friend_id from friends f where f.user_id=$user->id and status = 'friends') or p.id in (select f.user_id from friends f where f.friend_id=$user->id and status = 'friends')");
        $friends = DB::select("select p.id, p.name, p.age, p.height, p.city, p.religion, p.caste, p.language, p.status, p.education, p.gender, p.is_active from profiles p where p.id in (select f.friend_id from friends f where (f.user_id='$user->id' or f.friend_id='$user->id') and f.status = 'friends')");
        return view('web.user_interest')->with(['users' => $users, 'friends' => $friends, 'request_lists' => $request_lists, 'send_requests' => $send_requests]);
    }

    public function register()
    {
        return view('web.membership');
    }

    public function policy()
    {
        return view('web.policy');
    }

    public function getprivacy_control()
    {
        if (isset($_SESSION['user_master'])) {
            $user_ses = $_SESSION['user_master'];
            $user = Profiles::find($user_ses->id);
            return view('web.privacy_control')->with(['user' => $user]);
        } else {
            return redirect('/')->withErrors('Please login first');
        }
    }

    public function search_by_id()
    {
        return view('web.search.search_by_id');
    }

    public function privacy_update()
    {
        if (isset($_SESSION['user_master'])) {
            $user_ses = $_SESSION['user_master'];
            $user = Profiles::find($user_ses->id);
            $user->is_show_contact = request('is_show_contact');
            $user->is_show_dob = request('is_show_dob');
            $user->is_show_pic = request('is_show_pic');
            $user->save();
            return redirect('candidate_list')->with('message', 'Privacy setting has been updated');
        } else {
            return redirect('/')->withErrors('Please login first');
        }
    }

    public function contact_us()
    {
        $contact_us = new ContactUs();
        $contact_us->name = request('c_name');
        $contact_us->looking_for = request('c_looking_for');
        $contact_us->email = request('c_email');
        $contact_us->contact = request('c_contact');
        $contact_us->save();
        echo 'success';
//        return redirect('/')->with('message', 'Your request has been send');
    }
}
