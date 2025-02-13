<table>
	<tr>
		<td colspan="9">EDUCATIONAL BACKGROUND</td>
		<td colspan="11">PERSONAL DATA INFORMATION</td>
	</tr>

	<tr>
		<td></td>
		<td>COURSE</td>
		<td colspan="2">YEAR</td>
		<td colspan="3">SCHOOL</td>
		<td colspan="2">LOCATION</td>
		<td>FAMILY</td>
		<td colspan="3">NAME</td>
		<td>AGE</td>
		<td>BIRTHDAY</td>
		<td colspan="2">OCCUPATION</td>
		<td colspan="3">ADDRESS</td>
	</tr>

	@php
		$i=0;
	@endphp
	<tr>
		<td>{{ strtoupper($crew->educational_background[$i]->type) }}:</td>
		<td>{{ $crew->educational_background[$i]->course }}</td>
		<td colspan="2">{{ $crew->educational_background[$i]->year }}</td>
		<td colspan="3">{{ $crew->educational_background[$i]->school }}</td>
		<td colspan="2">{{ $crew->educational_background[$i]->address }}</td>
		<td>{{ $crew->family_data[$i]->type }}:</td>
		<td colspan="3">{{ $crew->family_data[$i]->fname }} {{ $crew->family_data[$i]->mname }} {{ $crew->family_data[$i]->lname }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->age : "" }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->format('M j, Y') : "" }}</td>
		<td colspan="2">{{ $crew->family_data[$i]->occupation }}</td>
		<td colspan="3">{{ $crew->family_data[$i]->address }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td>{{ strtoupper($crew->educational_background[$i]->type) }}:</td>
		<td>{{ $crew->educational_background[$i]->course }}</td>
		<td colspan="2">{{ $crew->educational_background[$i]->year }}</td>
		<td colspan="3">{{ $crew->educational_background[$i]->school }}</td>
		<td colspan="2">{{ $crew->educational_background[$i]->address }}</td>
		<td>{{ $crew->family_data[$i]->type }}:</td>
		<td colspan="3">{{ $crew->family_data[$i]->fname }} {{ $crew->family_data[$i]->mname }} {{ $crew->family_data[$i]->lname }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->age : "" }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->format('M j, Y') : "" }}</td>
		<td colspan="2">{{ $crew->family_data[$i]->occupation }}</td>
		<td colspan="3">{{ $crew->family_data[$i]->address }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td>{{ strtoupper($crew->educational_background[$i]->type) }}:</td>
		<td>{{ $crew->educational_background[$i]->course }}</td>
		<td colspan="2">{{ $crew->educational_background[$i]->year }}</td>
		<td colspan="3">{{ $crew->educational_background[$i]->school }}</td>
		<td colspan="2">{{ $crew->educational_background[$i]->address }}</td>
		<td>{{ $crew->family_data[$i]->type }}:</td>
		<td colspan="3">{{ $crew->family_data[$i]->fname }} {{ $crew->family_data[$i]->mname }} {{ $crew->family_data[$i]->lname }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->age : "" }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->format('M j, Y') : "" }}</td>
		<td colspan="2">{{ $crew->family_data[$i]->occupation }}</td>
		<td colspan="3">{{ $crew->family_data[$i]->address }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td>ACHIEVEMENT RECEIVED:</td>
		<td></td>
		<td colspan="2"></td>
		<td colspan="3"></td>
		<td colspan="2"></td>
		<td>CHILDREN:</td>
		<td colspan="3">{{ $crew->family_data[$i]->fname }} {{ $crew->family_data[$i]->mname }} {{ $crew->family_data[$i]->lname }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->age : "" }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->format('M j, Y') : "" }}</td>
		<td colspan="2">{{ $crew->family_data[$i]->occupation }}</td>
		<td colspan="3">{{ $crew->family_data[$i]->address }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td colspan="9">COMPANY REQUIRED DATA:</td>
		<td></td>
		<td colspan="3">{{ $crew->family_data[$i]->fname }} {{ $crew->family_data[$i]->mname }} {{ $crew->family_data[$i]->lname }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->age : "" }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->format('M j, Y') : "" }}</td>
		<td colspan="2">{{ $crew->family_data[$i]->occupation }}</td>
		<td colspan="3">{{ $crew->family_data[$i]->address }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td colspan="5">TIN NO: {{ $crew->tin }}</td>
		<td colspan="4">SID: {{ $crew->sid }}</td>
		<td></td>
		<td colspan="3">{{ $crew->family_data[$i]->fname }} {{ $crew->family_data[$i]->mname }} {{ $crew->family_data[$i]->lname }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->age : "" }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->format('M j, Y') : "" }}</td>
		<td colspan="2">{{ $crew->family_data[$i]->occupation }}</td>
		<td colspan="3">{{ $crew->family_data[$i]->address }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td colspan="5">SSS NO: {{ $crew->sss }}</td>
		<td colspan="4">E-REG: {{ $crew->ereg }}</td>
		<td></td>
		<td colspan="3">{{ $crew->family_data[$i]->fname }} {{ $crew->family_data[$i]->mname }} {{ $crew->family_data[$i]->lname }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->age : "" }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->format('M j, Y') : "" }}</td>
		<td colspan="2">{{ $crew->family_data[$i]->occupation }}</td>
		<td colspan="3">{{ $crew->family_data[$i]->address }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td colspan="5">COVERALL: {{ $crew->clothes_size }}</td>
		<td colspan="4">PARKA: {{ $crew->parka }}</td>
		<td>BENEFICIARY:</td>
		<td colspan="3">{{ $crew->family_data[$i]->fname }} {{ $crew->family_data[$i]->mname }} {{ $crew->family_data[$i]->lname }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->age : "" }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->format('M j, Y') : "" }}</td>
		<td colspan="2">{{ $crew->family_data[$i]->occupation }}</td>
		<td colspan="3">{{ $crew->family_data[$i]->address }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td colspan="5">WAIST (inches): {{ $crew->waist }}</td>
		<td colspan="4">SAFETY SHOES: {{ $crew->shoe_size }}</td>
		<td></td>
		<td colspan="3">{{ $crew->family_data[$i]->fname }} {{ $crew->family_data[$i]->mname }} {{ $crew->family_data[$i]->lname }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->age : "" }}</td>
		<td>{{ isset($crew->family_data[$i]->birthday) ? now()->parse($crew->family_data[$i]->birthday)->format('M j, Y') : "" }}</td>
		<td colspan="2">{{ $crew->family_data[$i]->occupation }}</td>
		<td colspan="3">{{ $crew->family_data[$i]->address }}</td>
	</tr>

	<tr>
		<td colspan="20"></td>
	</tr>

	<tr>
		<td colspan="2" style="color: #0070C0;">FOR DECK CREW:</td>
		<td colspan="18">Kindly provide the following information starting from the most recent vessel.</td>
	</tr>

	<tr>
		<td colspan="3">NAME OF VESSEL</td>
		<td colspan="5">TYPES OF CARGO</td>
		<td colspan="4">LOADING PORT</td>
		<td colspan="5">DISCHARGING PORT</td>
		<td>SHIP MANAGER</td>
		<td colspan="2">CHARTERER</td>
	</tr>

	@php
		$i=0;

		$type = ($crew->recent_vessel[0]->type_of_cargo || $crew->recent_vessel[1]->type_of_cargo || $crew->recent_vessel[2]->type_of_cargo || $crew->recent_vessel[3]->type_of_cargo || $crew->recent_vessel[4]->type_of_cargo) ? "D" : "E";
	@endphp

	<tr>
		<td colspan="3">1. {{ $type == "D" ? $crew->recent_vessel[$i]->vessel_name : "" }}</td>
		<td colspan="5">{{ $type == "D" ? $crew->recent_vessel[$i]->type_of_cargo : "" }}</td>
		<td colspan="4">{{ $type == "D" ? $crew->recent_vessel[$i]->loading_port : "" }}</td>
		<td colspan="5">{{ $type == "D" ? $crew->recent_vessel[$i]->discharging_port : "" }}</td>
		<td>{{ $type == "D" ? $crew->recent_vessel[$i]->ship_manager : "" }}</td>
		<td colspan="2">{{ $type == "D" ? $crew->recent_vessel[$i]->charterer : "" }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td colspan="3">2. {{ $type == "D" ? $crew->recent_vessel[$i]->vessel_name : "" }}</td>
		<td colspan="5">{{ $type == "D" ? $crew->recent_vessel[$i]->type_of_cargo : "" }}</td>
		<td colspan="4">{{ $type == "D" ? $crew->recent_vessel[$i]->loading_port : "" }}</td>
		<td colspan="5">{{ $type == "D" ? $crew->recent_vessel[$i]->discharging_port : "" }}</td>
		<td>{{ $type == "D" ? $crew->recent_vessel[$i]->ship_manager : "" }}</td>
		<td colspan="2">{{ $type == "D" ? $crew->recent_vessel[$i]->charterer : "" }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td colspan="3">3. {{ $type == "D" ? $crew->recent_vessel[$i]->vessel_name : "" }}</td>
		<td colspan="5">{{ $type == "D" ? $crew->recent_vessel[$i]->type_of_cargo : "" }}</td>
		<td colspan="4">{{ $type == "D" ? $crew->recent_vessel[$i]->loading_port : "" }}</td>
		<td colspan="5">{{ $type == "D" ? $crew->recent_vessel[$i]->discharging_port : "" }}</td>
		<td>{{ $type == "D" ? $crew->recent_vessel[$i]->ship_manager : "" }}</td>
		<td colspan="2">{{ $type == "D" ? $crew->recent_vessel[$i]->charterer : "" }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td colspan="3">4. {{ $type == "D" ? $crew->recent_vessel[$i]->vessel_name : "" }}</td>
		<td colspan="5">{{ $type == "D" ? $crew->recent_vessel[$i]->type_of_cargo : "" }}</td>
		<td colspan="4">{{ $type == "D" ? $crew->recent_vessel[$i]->loading_port : "" }}</td>
		<td colspan="5">{{ $type == "D" ? $crew->recent_vessel[$i]->discharging_port : "" }}</td>
		<td>{{ $type == "D" ? $crew->recent_vessel[$i]->ship_manager : "" }}</td>
		<td colspan="2">{{ $type == "D" ? $crew->recent_vessel[$i]->charterer : "" }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td colspan="3">5. {{ $type == "D" ? $crew->recent_vessel[$i]->vessel_name : "" }}</td>
		<td colspan="5">{{ $type == "D" ? $crew->recent_vessel[$i]->type_of_cargo : "" }}</td>
		<td colspan="4">{{ $type == "D" ? $crew->recent_vessel[$i]->loading_port : "" }}</td>
		<td colspan="5">{{ $type == "D" ? $crew->recent_vessel[$i]->discharging_port : "" }}</td>
		<td>{{ $type == "D" ? $crew->recent_vessel[$i]->ship_manager : "" }}</td>
		<td colspan="2">{{ $type == "D" ? $crew->recent_vessel[$i]->charterer : "" }}</td>
	</tr>

	<tr>
		<td colspan="20"></td>
	</tr>

	<tr>
		<td colspan="2" style="color: #0070C0;">FOR ENGINE CREW:</td>
		<td colspan="18">Kindly provide the following information starting from the most recent vessel.</td>
	</tr>

	<tr>
		<td colspan="3">NAME OF VESSEL</td>
		<td colspan="5">MAIN ENGINE TYPE &#38; MAKER</td>
		<td colspan="4">AUXILIARY ENGINE / GENERATOR</td>
		<td colspan="5">BALLAST WATER MANAGEMENT SYSTEM</td>
		<td>SHIP MANAGER</td>
		<td colspan="2">CHARTERER</td>
	</tr>

	@php
		$i=0;
	@endphp

	<tr>
		<td colspan="3">1. {{ $type == "E" ? $crew->recent_vessel[$i]->vessel_name : "" }}</td>
		<td colspan="5">{{ $type == "E" ? $crew->recent_vessel[$i]->type_of_cargo : "" }}</td>
		<td colspan="4">{{ $type == "E" ? $crew->recent_vessel[$i]->loading_port : "" }}</td>
		<td colspan="5">{{ $type == "E" ? $crew->recent_vessel[$i]->discharging_port : "" }}</td>
		<td>{{ $type == "E" ? $crew->recent_vessel[$i]->ship_manager : "" }}</td>
		<td colspan="2">{{ $type == "E" ? $crew->recent_vessel[$i]->charterer : "" }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td colspan="3">2. {{ $type == "E" ? $crew->recent_vessel[$i]->vessel_name : "" }}</td>
		<td colspan="5">{{ $type == "E" ? $crew->recent_vessel[$i]->type_of_cargo : "" }}</td>
		<td colspan="4">{{ $type == "E" ? $crew->recent_vessel[$i]->loading_port : "" }}</td>
		<td colspan="5">{{ $type == "E" ? $crew->recent_vessel[$i]->discharging_port : "" }}</td>
		<td>{{ $type == "E" ? $crew->recent_vessel[$i]->ship_manager : "" }}</td>
		<td colspan="2">{{ $type == "E" ? $crew->recent_vessel[$i]->charterer : "" }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td colspan="3">3. {{ $type == "E" ? $crew->recent_vessel[$i]->vessel_name : "" }}</td>
		<td colspan="5">{{ $type == "E" ? $crew->recent_vessel[$i]->type_of_cargo : "" }}</td>
		<td colspan="4">{{ $type == "E" ? $crew->recent_vessel[$i]->loading_port : "" }}</td>
		<td colspan="5">{{ $type == "E" ? $crew->recent_vessel[$i]->discharging_port : "" }}</td>
		<td>{{ $type == "E" ? $crew->recent_vessel[$i]->ship_manager : "" }}</td>
		<td colspan="2">{{ $type == "E" ? $crew->recent_vessel[$i]->charterer : "" }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td colspan="3">4. {{ $type == "E" ? $crew->recent_vessel[$i]->vessel_name : "" }}</td>
		<td colspan="5">{{ $type == "E" ? $crew->recent_vessel[$i]->type_of_cargo : "" }}</td>
		<td colspan="4">{{ $type == "E" ? $crew->recent_vessel[$i]->loading_port : "" }}</td>
		<td colspan="5">{{ $type == "E" ? $crew->recent_vessel[$i]->discharging_port : "" }}</td>
		<td>{{ $type == "E" ? $crew->recent_vessel[$i]->ship_manager : "" }}</td>
		<td colspan="2">{{ $type == "E" ? $crew->recent_vessel[$i]->charterer : "" }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td colspan="3">5. {{ $type == "E" ? $crew->recent_vessel[$i]->vessel_name : "" }}</td>
		<td colspan="5">{{ $type == "E" ? $crew->recent_vessel[$i]->type_of_cargo : "" }}</td>
		<td colspan="4">{{ $type == "E" ? $crew->recent_vessel[$i]->loading_port : "" }}</td>
		<td colspan="5">{{ $type == "E" ? $crew->recent_vessel[$i]->discharging_port : "" }}</td>
		<td>{{ $type == "E" ? $crew->recent_vessel[$i]->ship_manager : "" }}</td>
		<td colspan="2">{{ $type == "E" ? $crew->recent_vessel[$i]->charterer : "" }}</td>
	</tr>

	<tr>
		<td colspan="20"></td>
	</tr>

	<tr>
		<td colspan="20">NAME OF CONTACT PERSON(S) FOR BACKGROUND CHECK: Starting from the most recent manning agent.</td>
	</tr>

	<tr>
		<td colspan="6">MANNING AGENT</td>
		<td colspan="5">CONTACT PERSON</td>
		<td colspan="4">DESIGNATION</td>
		<td colspan="5">CONTACT NUMBER</td>
	</tr>

	@php
		$i=0;
	@endphp
	<tr>
		<td colspan="6">1. {{ $crew->background_check[$i]->manning_agent }}</td>
		<td colspan="5">{{ $crew->background_check[$i]->contact }}</td>
		<td colspan="4">{{ $crew->background_check[$i]->designation }}</td>
		<td colspan="5">{{ $crew->background_check[$i]->contact }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td colspan="6">2. {{ $crew->background_check[$i]->manning_agent }}</td>
		<td colspan="5">{{ $crew->background_check[$i]->contact }}</td>
		<td colspan="4">{{ $crew->background_check[$i]->designation }}</td>
		<td colspan="5">{{ $crew->background_check[$i]->contact }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td colspan="6">3. {{ $crew->background_check[$i]->manning_agent }}</td>
		<td colspan="5">{{ $crew->background_check[$i]->contact }}</td>
		<td colspan="4">{{ $crew->background_check[$i]->designation }}</td>
		<td colspan="5">{{ $crew->background_check[$i]->contact }}</td>
	</tr>

	@php
		$i++;
	@endphp
	<tr>
		<td colspan="6">4. {{ $crew->background_check[$i]->manning_agent }}</td>
		<td colspan="5">{{ $crew->background_check[$i]->contact }}</td>
		<td colspan="4">{{ $crew->background_check[$i]->designation }}</td>
		<td colspan="5">{{ $crew->background_check[$i]->contact }}</td>
	</tr>

	<tr>
		<td rowspan="2" colspan="15" style="color: #0070C0;">
			I hereby attest and certify that all information that I have provided are true and correct to the best of my knowledge and that I am not suffering from any medical ailments that will cause my unfitness and repatriation. I am fully aware that misrepresentation herein shall be ground for disqualification of my application and/or repatriation at my own account and criminal prosecution under perjury in the court of law.
		</td>
		<td></td>
		<td colspan="3"></td>
		<td></td>
	</tr>

	<tr>
		<td></td>
		<td colspan="3">Signature</td>
		<td></td>
	</tr>
</table>