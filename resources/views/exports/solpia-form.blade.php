@php
	// dd(now()->parse($crew->birthday)->age);
	// dd($crew->background_check, $crew->document, $crew->educational_background, $crew->family_data, $crew->recent_vessel, $crew->sea_service);
@endphp

<table>
	<tr>
		<td colspan="26"></td>
	</tr>

	<tr>
		<td rowspan="36"></td>
		<td>Control No.:</td>
		<td></td>
		<td rowspan="4" colspan="19"></td>
		<td rowspan="7"></td>
		<td rowspan="7" colspan="2">Photo</td>
		<td rowspan="36"></td>
	</tr>

	<tr>
		<td>Date Received:</td>
		<td></td>
	</tr>

	<tr>
		<td>Received By:</td>
		<td></td>
	</tr>

	<tr>
		<td colspan="2"></td>
	</tr>

	<tr>
		<td colspan="2"></td>
		<td colspan="19">INFORMATION SHEET</td>
	</tr>

	<tr>
		<td colspan="2"></td>
		<td colspan="19">(PLEASE WRITE LEGIBLY IN CAPITAL BLOCK LETTERS)</td>
	</tr>

	<tr>
		<td colspan="21"></td>
	</tr>

	<tr>
		<td colspan="2">DATE: {{ now()->format('M j, Y') }}</td>
		<td></td>
		<td colspan="8">POSITION APPLIED: {{ $crew->rank->abbr ?? "-" }}</td>
		<td></td>
		<td colspan="3">HIGHER LICENSE:</td>
		<td colspan="9"></td>
	</tr>

	<tr>
		<td colspan="17"></td>
		<td>DOCUMENTS</td>
		<td colspan="2">NUMBER</td>
		<td colspan="2">ISSUED DATE</td>
		<td>EXPIRY DATE</td>
		<td>REMARKS</td>
	</tr>

	<tr>
		<td colspan="5" style="color: #FF0000;">FOR CREWING STAFF ONLY</td>
		<td></td>
		<td colspan="7">
			LAST NAME: {{ $crew->lname }}
		</td>
		<td colspan="3">
			AGE: {{ isset($crew->birthday) ? now()->parse($crew->birthday)->age : "-" }}
		</td>
		<td></td>
		<td>PASSPORT:</td>
		<td colspan="2">{{ $crew->document[0]->number ?? "" }}</td>
		<td colspan="2">{{ isset($crew->document[0]->issue_date) ? now()->parse($crew->document[0]->issue_date)->format('M j, Y') : "" }}</td>
		<td>{{ isset($crew->document[0]->expiry_date) ? now()->parse($crew->document[0]->expiry_date)->format('M j, Y') : "" }}</td>
		<td></td>
	</tr>

	<tr>
		<td colspan="5">ASSIGNED VESSEL:</td>
		<td></td>
		<td colspan="7">
			FIRST NAME: {{ $crew->fname }}
		</td>
		<td colspan="3">
			HEIGHT (cm): {{ $crew->height }}
		</td>
		<td></td>
		<td>SEAMAN'S BOOK:</td>
		<td colspan="2"></td>
		<td colspan="2"></td>
		<td></td>
		<td></td>
	</tr>

	<tr>
		<td colspan="5">VESSEL ROUTE:</td>
		<td></td>
		<td colspan="7">
			MIDDLE NAME: {{ $crew->mname }}
		</td>
		<td colspan="3">
			WEIGHT (kg): {{ $crew->weight }}
		</td>
		<td></td>
		<td>Philippines</td>
		<td colspan="2">{{ $crew->document[1]->number ?? "" }}</td>
		<td colspan="2">{{ isset($crew->document[1]->issue_date) ? now()->parse($crew->document[1]->issue_date)->format('M j, Y') : "" }}</td>
		<td>{{ isset($crew->document[1]->expiry_date) ? now()->parse($crew->document[1]->expiry_date)->format('M j, Y') : "" }}</td>
		<td></td>
	</tr>

	<tr>
		<td colspan="5">VESSEL TYPE:</td>
		<td></td>
		<td colspan="7">
			DATE OF BIRTH: {{ isset($crew->birthday) ? now()->parse($crew->birthday)->format('M j, Y') : "" }}
		</td>
		<td colspan="3">
			@php
				$weight = $crew->weight ? $crew->weight : null;
				$height = $crew->height ? $crew->height / 100 : null;
				$bmi = null;

				if($weight && $height){
					$bmi = round($weight / ($height * $height), 2);
				}
			@endphp
			BMI: {{ $bmi }}
		</td>
		<td></td>
		<td>Panama</td>
		<td colspan="2"></td>
		<td colspan="2"></td>
		<td></td>
		<td></td>
	</tr>

	<tr>
		<td colspan="5">CREW ONBOARD:</td>
		<td></td>
		<td colspan="7">
			PLACE OF BIRTH: {{ $crew->birth_place }}
		</td>
		<td colspan="3">
			BLOOD TYPE: {{ $crew->blood_type }}
		</td>
		<td></td>
		<td>Others</td>
		<td colspan="2"></td>
		<td colspan="2"></td>
		<td></td>
		<td></td>
	</tr>

	<tr>
		<td colspan="5">WAGE SCALE:</td>
		<td></td>
		<td colspan="7">
			RELIGION: {{ $crew->religion }}
		</td>
		<td colspan="3">
			CIVIL STATUS: {{ $crew->civil_status }}
		</td>
		<td></td>
		<td>LICENSE:</td>
		<td colspan="2"></td>
		<td colspan="2"></td>
		<td></td>
		<td></td>
	</tr>

	<tr>
		<td colspan="5">CONTRACT DURATION:</td>
		<td></td>
		<td colspan="10">
			METRO MANILA ADDRESS: {{ $crew->address }}
		</td>
		<td></td>
		<td>Philippines:</td>
		<td colspan="2"></td>
		<td colspan="2"></td>
		<td></td>
		<td></td>
	</tr>

	<tr>
		<td colspan="5">ALLOTMENT:</td>
		<td></td>
		<td colspan="7">
			
		</td>
		<td colspan="3">
			EMAIL-ADDRESS:
		</td>
		<td></td>
		<td>Panama:</td>
		<td colspan="2">{{ $crew->document[2]->number ?? "" }}</td>
		<td colspan="2">{{ isset($crew->document[2]->issue_date) ? now()->parse($crew->document[2]->issue_date)->format('M j, Y') : "" }}</td>
		<td>{{ isset($crew->document[2]->expiry_date) ? now()->parse($crew->document[2]->expiry_date)->format('M j, Y') : "" }}</td>
		<td></td>
	</tr>

	<tr>
		<td colspan="5">AMOSUP MEMBER:</td>
		<td></td>
		<td colspan="10">
			CONTACT NO(S): {{ $crew->contact }}
		</td>
		<td></td>
		<td>Others:</td>
		<td colspan="2"></td>
		<td colspan="2"></td>
		<td></td>
		<td></td>
	</tr>

	<tr>
		<td colspan="5">PROMOTION:</td>
		<td></td>
		<td colspan="10">
			PROVINCIAL ADDRESS: {{ $crew->provincial_address }}
		</td>
		<td></td>
		<td>GOC:</td>
		<td colspan="2">{{ $crew->document[3]->number ?? "" }}</td>
		<td colspan="2">{{ isset($crew->document[3]->issue_date) ? now()->parse($crew->document[3]->issue_date)->format('M j, Y') : "" }}</td>
		<td>{{ isset($crew->document[3]->expiry_date) ? now()->parse($crew->document[3]->expiry_date)->format('M j, Y') : "" }}</td>
		<td></td>
	</tr>

	<tr>
		<td colspan="5">SPECIAL REMARKS:</td>
		<td></td>
		<td colspan="10">
			
		</td>
		<td></td>
		<td>RATINGS COP:</td>
		<td colspan="2">{{ $crew->document[4]->number ?? "" }}</td>
		<td colspan="2">{{ isset($crew->document[4]->issue_date) ? now()->parse($crew->document[4]->issue_date)->format('M j, Y') : "" }}</td>
		<td>{{ isset($crew->document[4]->expiry_date) ? now()->parse($crew->document[4]->expiry_date)->format('M j, Y') : "" }}</td>
		<td></td>
	</tr>

	<tr>
		<td colspan="5"></td>
		<td></td>
		<td colspan="10">
			CONTACT NO(S): {{ $crew->provincial_contact }}
		</td>
		<td></td>
		<td>US VISA:</td>
		<td colspan="2">{{ $crew->document[5]->number ?? "" }}</td>
		<td colspan="2">{{ isset($crew->document[5]->issue_date) ? now()->parse($crew->document[5]->issue_date)->format('M j, Y') : "" }}</td>
		<td>{{ isset($crew->document[5]->expiry_date) ? now()->parse($crew->document[5]->expiry_date)->format('M j, Y') : "" }}</td>
		<td></td>
	</tr>

	<tr>
		<td colspan="24" style="color: #0070C0; font-style: italic;">SHIPBOARD EXPERIENCE: LAST TEN (10) YEARS STARTING FORM THE MOST RECENT VESSEL</td>
	</tr>

	{{-- SEA SERVICE / VESSEL --}}
	<tr>
		<td rowspan="2" colspan="2">VESSEL NAME</td>
		<td rowspan="2" colspan="2">RANK</td>
		<td rowspan="2" colspan="3">VESSEL TYPE</td>
		<td rowspan="2" colspan="1">GRT</td>
		<td rowspan="2" colspan="1">HP / KW</td>
		<td rowspan="2" colspan="1">FLAG REGISTRY</td>
		<td rowspan="2" colspan="2">TRADE ROUTE</td>
		<td rowspan="2" colspan="1">PREVIOUS SALARY</td>
		<td rowspan="2" colspan="1">MANNING AGENT</td>
		<td rowspan="2" colspan="3">PRINCIPAL</td>
		<td rowspan="2" colspan="1">NATIONALITY OF COMBINED CREW</td>
		<td rowspan="1" colspan="2">SIGN-ON</td>
		<td rowspan="1" colspan="2">SIGN-OFF</td>
		<td rowspan="2" colspan="1">TOTAL MONTHS</td>
		<td rowspan="2" colspan="1">REMARKS</td>
	</tr>

	<tr>
		<td colspan="4">(Day/Month/Year)</td>
	</tr>

	{{-- loop seaservice --}}
	@for($i = 0; $i < 10; $i++)
		<tr>
			<td colspan="2">{{ isset($crew->sea_service[$i]) ? $crew->sea_service[$i]->vessel_name : "" }}</td>
			<td colspan="2">{{ isset($crew->sea_service[$i]) ? $crew->sea_service[$i]->rank : "" }}</td>
			<td colspan="3">{{ isset($crew->sea_service[$i]) ? $crew->sea_service[$i]->vessel_type : "" }}</td>
			<td colspan="1">{{ isset($crew->sea_service[$i]) ? $crew->sea_service[$i]->gross_tonnage : "" }}</td>
			<td colspan="1">{{ isset($crew->sea_service[$i]) ? $crew->sea_service[$i]->bhp_kw : "" }}</td>
			<td colspan="1">{{ isset($crew->sea_service[$i]) ? $crew->sea_service[$i]->flag : "" }}</td>
			<td colspan="2">{{ isset($crew->sea_service[$i]) ? $crew->sea_service[$i]->trade : "" }}</td>
			<td colspan="1">{{ isset($crew->sea_service[$i]) ? $crew->sea_service[$i]->previous_salary : "" }}</td>
			<td colspan="1">{{ isset($crew->sea_service[$i]) ? $crew->sea_service[$i]->manning_agent : "" }}</td>
			<td colspan="3">{{ isset($crew->sea_service[$i]) ? $crew->sea_service[$i]->principal : "" }}</td>
			<td colspan="1">{{ isset($crew->sea_service[$i]) ? $crew->sea_service[$i]->crew_nationality : "" }}</td>
			<td colspan="2">{{ isset($crew->sea_service[$i]) ? isset($crew->sea_service[$i]->sign_on) ? now()->parse($crew->sea_service[$i]->sign_on)->format('M j, Y') : "" : "" }}</td>
			<td colspan="2">{{ isset($crew->sea_service[$i]) ? isset($crew->sea_service[$i]->sign_off) ? now()->parse($crew->sea_service[$i]->sign_off)->format('M j, Y') : "" : "" }}</td>

			<td colspan="1">
				@if(isset($crew->sea_service[$i]->sign_on) && isset($crew->sea_service[$i]->sign_off))
					{{ now()->parse($crew->sea_service[$i]->sign_off)->diffInMonths(now()->parse($crew->sea_service[$i]->sign_on)) }}
				@endif
			</td>

			<td colspan="1">{{ isset($crew->sea_service[$i]) ? $crew->sea_service[$i]->remarks : "" }}</td>
		</tr>
	@endfor

	<tr>
		<td rowspan="2" colspan="19" style="color: #0070C0;">
			By signing here, I warrant that I have read, understood the content of the attached notice and hereby agree with all the terms and conditions stated thereat. Submitting my information signifies that I have read and understood the attached policy and expressly consent to the processing of my personal and/or sensitive personal information in the manner and for the purpose provided in this notice. I understand and accept that this will include access to my personal data and records submitted, which may be regarded as personal and/or sensitive personal data as provided under the Data Privacy Act of 2012.
		</td>
		<td></td>
		<td colspan="4"></td>
	</tr>

	<tr>
		<td></td>
		<td colspan="4">Signature</td>
	</tr>
</table>