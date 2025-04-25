<?php

namespace App\Traits;

trait CrewAttribute{
	public function getActionsAttribute(){
		$id = $this->id;
		$action = "";

		$action = 	"<a class='btn btn-success btn-sm' data-toggle='tooltip' title='Export' onClick='exportForm($id)'>" .
					        "<i class='fas fa-file-pdf'></i>" .
					    "</a>&nbsp;";

		return $action;
	}
}