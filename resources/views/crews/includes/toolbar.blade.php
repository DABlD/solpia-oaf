<div class="row" style="margin-top: 3px;">
    <div class="col-md-3">
        <div class="row" style="display: flex;">
            <div class="col-md-4 iLabel" style="margin: auto;">
                Filter by Rank
            </div>
            <div class="col-md-8 iInput">
                <select id="fRank" class="form-control">
                    <option value="%%">All</option>
                    @foreach($categories as $category => $ranks)
                        <optgroup label="{{ $category }}"></optgroup>
                        @foreach($ranks as $rank)
                            <option value="{{ $rank->id }}">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                {{ $rank->name }} ({{ $rank->abbr }})
                            </option>
                        @endforeach
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>

{{-- <h3 class="float-right">
    <a class="btn btn-success btn-sm" data-toggle="tooltip" title="Add Admin" onclick="create()">
        <i class="fas fa-plus"></i>
    </a>
</h3> --}}