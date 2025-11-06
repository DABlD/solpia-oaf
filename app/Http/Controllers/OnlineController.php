<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Rank, Backup};
use App\Models\{Crew, Document, SeaService, BackgroundCheck, EducationalBackground, FamilyData, RecentVessel};

class OnlineController extends Controller
{
    public function index(Request $req){
        $ranks = Rank::select('id', 'name', 'abbr', 'category')->get();

        return $this->_view('index', [
            'title'         => 'SOLPIA ONLINE APPLICATION',
            'categories'    => $ranks->groupBy('category'),
        ]);
    }

    public function update(Request $req){
        $ranks = Rank::select('id', 'name', 'abbr', 'category')->get();

        $crew;
        return $this->_view('update', [
            'title'         => 'SOLPIA ONLINE APPLICATION',
            'categories'    => $ranks->groupBy('category'),
            // 'crew'          => Crew::where('')
        ]);
    }

    public function privacy(Request $req){
        return $this->_view('privacy', [
            'title'         => 'Privacy Policy'
        ]);
    }

    public function store(Request $req){
        $temp = new Backup();
        $temp->string = json_encode($req->all());
        $temp->save();

        // SAVE CREW
        $crew = new Crew();
        $crew->fname = $req->crew['fname'];
        $crew->mname = $req->crew['mname'];
        $crew->lname = $req->crew['lname'];
        $crew->birthday = $req->crew['birthday'];
        $crew->address = $req->crew['address'];
        $crew->contact = $req->crew['contact'];
        $crew->birth_place = $req->crew['birth_place'];
        $crew->religion = $req->crew['religion'];
        $crew->height = preg_replace("/[^0-9.]/", '', $req->crew['height']);
        $crew->weight = preg_replace("/[^0-9.]/", '', $req->crew['weight']);

        $crew->blood_type = $req->crew['blood_type'];
        $crew->civil_status = $req->crew['civil_status'];
        $crew->provincial_address = $req->crew['provincial_address'];
        $crew->provincial_contact = $req->crew['provincial_contact'];
        $crew->rank_id = $req->crew['rank_id'];

        $crew->tin = $req->additionalInfo['tin'];
        $crew->sss = $req->additionalInfo['sss'];
        $crew->shoe_size = $req->additionalInfo['shoe_size'];
        $crew->clothes_size = $req->additionalInfo['clothes_size'];
        $crew->waistline = $req->additionalInfo['waistline'];
        $crew->sid = $req->additionalInfo['sid'];
        $crew->ereg = $req->additionalInfo['ereg'];
        $crew->parka = $req->additionalInfo['parka'];

        //CHECK FOR DUPLICATES BEFORE SAVING
        Crew::where('fname', $crew->fname)->where('mname', $crew->mname)->where('lname', $crew->lname)->where('birthday', $crew->birthday)->delete();

        $crew->save();

        // SAVE DOCUMENTS
        foreach($req->travelDocs as $docu){
            $temp = new Document();
            $temp->crew_id = $crew->id;
            $temp->type = $docu['type'];
            $temp->number = $docu['number'];
            $temp->issue_date = isset($docu->issue_date) ? now()->parse($docu->issue_date)->toDateString() : null;
            $temp->expiry_date = isset($docu->expiry_date) ? now()->parse($docu->expiry_date)->toDateString() : null;
            $temp->save();
        }

        // SAVE SEA SERVICE
        if($req->seaService){
            foreach($req->seaService as $ss){
                $temp = new SeaService();
                $temp->crew_id = $crew->id;
                $temp->vessel_name = $ss['vessel_name'];
                $temp->vessel_type = $ss['vessel_type'];
                $temp->rank = $ss['rank'];
                $temp->gross_tonnage = $ss['gross_tonnage'];
                $temp->flag = $ss['flag'];
                $temp->bhp_kw = $ss['bhp_kw'];
                $temp->trade = $ss['trade'];
                $temp->previous_salary = $ss['previous_salary'];
                $temp->manning_agent = $ss['manning_agent'];
                $temp->principal = $ss['principal'];
                $temp->crew_nationality = $ss['crew_nationality'];
                $temp->sign_on = $ss['sign_on'];
                $temp->sign_off = $ss['sign_off'];
                $temp->remarks = $ss['remarks'];
                $temp->save();
            }
        }

        // SAVE EDUC BG
        foreach($req->educBG as $ebg){
            $temp = new EducationalBackground();
            $temp->crew_id = $crew->id;
            $temp->type = $ebg['type'];
            $temp->course = $ebg['course'];
            $temp->year = $ebg['year'];
            $temp->school = $ebg['school'];
            $temp->address = $ebg['address'];
            $temp->save();
        }

        // SAVE FAMILY DATA
        foreach($req->familyData as $fd){
            $temp = new FamilyData();
            $temp->crew_id = $crew->id;
            $temp->type = $fd['type'];
            $temp->fname = $fd['fname'];
            $temp->mname = $fd['mname'];
            $temp->lname = $fd['lname'];
            $temp->birthday = isset($fd->birthday) ? now()->parse($fd->birthday)->toDateString() : null;
            $temp->contact = $fd['contact'];
            $temp->occupation = $fd['occupation'];
            $temp->address = $fd['address'];
            $temp->save();
        }

        // SAVE RECENT VESSEL
        if($req->recentVessel){
            foreach($req->recentVessel as $rv){
                $temp = new RecentVessel();
                $temp->crew_id = $crew->id;
                $temp->vessel_name = $rv['vessel_name'];
                $temp->ship_manager = $rv['ship_manager'];
                $temp->charterer = $rv['charterer'];

                $temp->type_of_cargo = $rv['type_of_cargo'] ?? null;
                $temp->loading_port = $rv['loading_port'] ?? null;
                $temp->discharging_port = $rv['discharging_port'] ?? null;
                
                $temp->main_engine = $rv['main_engine'] ?? null;
                $temp->aux_engine = $rv['aux_engine'] ?? null;
                $temp->ballast_system = $rv['ballast_system'] ?? null;

                $temp->save();
            }
        }

        // SAVE BACKGROUND CHECK
        foreach($req->bgCheck as $bg){
            $temp = new BackgroundCheck();
            $temp->crew_id = $crew->id;
            $temp->manning_agent = $bg['manning_agent'];
            $temp->name = $bg['name'];
            $temp->designation = $bg['designation'];
            $temp->contact = $bg['contact'];

            $temp->save();
        }

        echo 1;
    }

    public function backLog(){
        $list = Backup::where('created_at', '>=', '2025-04-24')->get();
        $list2 = collect();
        $ctr = 0;

        foreach($list as $crew){
            $crew = json_decode($crew->string);
            $list2->add($crew);
        }

        $list2 = $list2->unique();

        foreach($list2 as $temp){
            // SAVE CREW
            $crew = new Crew();
            $crew->fname = $temp->crew->fname;
            $crew->mname = $temp->crew->mname;
            $crew->lname = $temp->crew->lname;
            $crew->birthday = $temp->crew->birthday;
            $crew->address = $temp->crew->address;
            $crew->contact = $temp->crew->contact;
            $crew->birth_place = $temp->crew->birth_place;
            $crew->religion = $temp->crew->religion;
            $crew->height = floatval($temp->crew->height);
            $crew->weight = floatval($temp->crew->weight);

            $crew->blood_type = $temp->crew->blood_type;
            $crew->civil_status = $temp->crew->civil_status ?? null;
            $crew->provincial_address = $temp->crew->provincial_address;
            $crew->provincial_contact = $temp->crew->provincial_contact;
            $crew->rank_id = $temp->crew->rank_id;

            $crew->tin = $temp->additionalInfo->tin;
            $crew->sss = $temp->additionalInfo->sss;
            $crew->shoe_size = $temp->additionalInfo->shoe_size;
            $crew->clothes_size = $temp->additionalInfo->clothes_size;
            $crew->waistline = $temp->additionalInfo->waistline;
            $crew->sid = $temp->additionalInfo->sid;
            $crew->ereg = $temp->additionalInfo->ereg;
            $crew->parka = $temp->additionalInfo->parka;

            //CHECK FOR DUPLICATES BEFORE SAVING
            Crew::where('fname', $crew->fname)->where('mname', $crew->mname)->where('lname', $crew->lname)->where('birthday', $crew->birthday)->delete();

            $crew->save();

            // SAVE DOCUMENTS
            foreach($temp->travelDocs as $docu){
                $temp2 = new Document();
                $temp2->crew_id = $crew->id;
                $temp2->type = $docu->type;
                $temp2->number = $docu->number;
                $temp2->issue_date = (strtotime($docu->issue_date) > strtotime(0)) ? now()->parse($docu->issue_date)->toDateString() : null;
                $temp2->expiry_date = (strtotime($docu->expiry_date) > strtotime(0)) ? now()->parse($docu->expiry_date)->toDateString() : null;
                $temp2->save();
            }

            // SAVE SEA SERVICE
            if(isset($temp->seaService)){
                foreach($temp->seaService as $ss){
                    $temp2 = new SeaService();
                    $temp2->crew_id = $crew->id;
                    $temp2->vessel_name = $ss->vessel_name;
                    $temp2->vessel_type = $ss->vessel_type;
                    $temp2->rank = $ss->rank;
                    $temp2->gross_tonnage = $ss->gross_tonnage;
                    $temp2->flag = $ss->flag;
                    $temp2->bhp_kw = $ss->bhp_kw;
                    $temp2->trade = $ss->trade;
                    $temp2->previous_salary = $ss->previous_salary;
                    $temp2->manning_agent = $ss->manning_agent;
                    $temp2->principal = $ss->principal;
                    $temp2->crew_nationality = $ss->crew_nationality;
                    $temp2->sign_on = $ss->sign_on;
                    $temp2->sign_off = $ss->sign_off;
                    $temp2->remarks = $ss->remarks;
                    $temp2->save();
                }
            }

            // SAVE EDUC BG
            if($temp->recentVessel){
                foreach($temp->educBG as $ebg){
                    $temp2 = new EducationalBackground();
                    $temp2->crew_id = $crew->id;
                    $temp2->type = $ebg->type;
                    $temp2->course = $ebg->course;
                    $temp2->year = $ebg->year;
                    $temp2->school = $ebg->school;
                    $temp2->address = $ebg->address;
                    $temp2->save();
                }
            }

            // SAVE FAMILY DATA
            if($temp->familyData){
                foreach($temp->familyData as $fd){
                    $temp2 = new FamilyData();
                    $temp2->crew_id = $crew->id;
                    $temp2->type = $fd->type;
                    $temp2->fname = $fd->fname;
                    $temp2->mname = $fd->mname;
                    $temp2->lname = $fd->lname;
                    $temp2->birthday = (strtotime($fd->birthday) > strtotime(0)) ? now()->parse($fd->birthday)->toDateString() : null;
                    $temp2->contact = $fd->contact;
                    $temp2->occupation = $fd->occupation;
                    $temp2->address = $fd->address;
                    $temp2->save();
                }
            }

            // SAVE RECENT VESSEL
            if($temp->recentVessel){
                foreach($temp->recentVessel as $rv){
                    $temp2 = new RecentVessel();
                    $temp2->crew_id = $crew->id;
                    $temp2->vessel_name = $rv->vessel_name;
                    $temp2->ship_manager = $rv->ship_manager;
                    $temp2->charterer = $rv->charterer;

                    $temp2->type_of_cargo = $rv->type_of_cargo ?? null;
                    $temp2->loading_port = $rv->loading_port ?? null;
                    $temp2->discharging_port = $rv->discharging_port ?? null;
                    
                    $temp2->main_engine = $rv->main_engine ?? null;
                    $temp2->aux_engine = $rv->aux_engine ?? null;
                    $temp2->ballast_system = $rv->ballast_system ?? null;

                    $temp2->save();
                }
            }

            // SAVE BACKGROUND CHECK
            if($temp->bgCheck){
                foreach($temp->bgCheck as $bg){
                    $temp2 = new BackgroundCheck();
                    $temp2->crew_id = $crew->id;
                    $temp2->manning_agent = $bg->manning_agent;
                    $temp2->name = $bg->name;
                    $temp2->designation = $bg->designation;
                    $temp2->contact = $bg->contact;

                    $temp2->save();
                }
            }

            echo $crew->id . '<br>';
        }
    }

    private function _view($view, $data = array()){
        return view('online.' . $view, $data);
    }
}
