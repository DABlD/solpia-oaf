<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Crew, Rank};
use DB;

// EXCEL
use Maatwebsite\Excel\Facades\Excel;

// PDF CLASSES
use App\Exports\PDFExport;
use PDF;
use File;

class CrewController extends Controller
{
    public function __construct(){
        $this->table = "crews";
    }

    public function get(Request $req){
        $array = DB::table($this->table)->select($req->select);

        // IF HAS SORT PARAMETER $ORDER
        if($req->order){
            $array = $array->orderBy($req->order[0], $req->order[1]);
        }

        // IF HAS WHERE
        if($req->where){
            $array = $array->where($req->where[0], isset($req->where[2]) ? $req->where[1] : "=", $req->where[2] ?? $req->where[1]);
        }

        // IF HAS WHERE2
        if($req->where2){
            $array = $array->where($req->where2[0], isset($req->where2[2]) ? $req->where2[1] : "=", $req->where2[2] ?? $req->where2[1]);
        }

        // IF HAS JOIN
        if($req->join){
            $alias = substr($req->join, 1);
            $array = $array->join("$req->join as $alias", "$alias.fid", '=', "$this->table.id");
        }

        $array = $array->get();

        // IF HAS LOAD
        if($array->count() && $req->load){
            foreach($req->load as $table){
                $array->load($table);
            }
        }

        // IF HAS GROUP
        if($req->group){
            $array = $array->groupBy($req->group);
        }

        echo json_encode($array);
    }

    public function exportForm(Request $req){
        $crew = Crew::find($req->id);

        $fn = "OAF-" . now()->format('Ymd') . Crew::where('created_at', 'like', now()->format('Y-m-d') . '%')->count() . '-' . $crew->lname . '_' . $crew->fname;
        $class = "App\\Exports\\Solpia";

        return Excel::download(new $class($crew), "$fn.xlsx");
    }

    // public function exportForm(Request $req){
    //     $data = Crew::find($req->id);

    //     // $fn = "OAF-" . str_pad($data->id, 9, '0', STR_PAD_LEFT) . '-' . $crew->lname . '_' . $crew->fname;
    //     $fn = "OAF-" . now()->format('Ymd') . Crew::where('created_at', 'like', now()->format('Y-m-d') . '%')->count() . '-' . $crew->lname . '_' . $crew->fname;

    //     $pdf = new PDFExport($data, $fn, "oaf-form");
    //     return $pdf->form();
    // }

    public function index(){
        $ranks = Rank::select('id', 'name', 'abbr', 'category')->get();

        return $this->_view('index', [
            'title' => ucfirst($this->table),
            'categories' => $ranks->groupBy('category')
        ]);
    }

    private function _view($view, $data = array()){
        return view("$this->table.$view", $data);
    }
}
