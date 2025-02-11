<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Rank};
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

    public function privacy(Request $req){
        return $this->_view('privacy', [
            'title'         => 'Privacy Policy'
        ]);
    }

    public function store(Request $req){
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
        $crew->height = $req->crew['height'];
        $crew->weight = $req->crew['weight'];
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

        $crew->save();

        // SAVE DOCUMENTS
        foreach($req->travelDocs as $docu){
            $temp = new Document();
            $temp->crew_id = $crew->id;
            $temp->type = $docu['type'];
            $temp->number = $docu['number'];
            $temp->issue_date = $docu['issue_date'];
            $temp->expiry_date = $docu['expiry_date'];
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
            $temp->birthday = $fd['birthday'];
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

    private function _view($view, $data = array()){
        return view('online.' . $view, $data);
    }
}
