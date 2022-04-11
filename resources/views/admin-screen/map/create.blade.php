@extends('admin-screen.layout.layout')

@section("content")
<div class="card card-outline-secondary w-50">
    <div class="card-header">
        <h3 class="mb-0">Memo</h3>
    </div>
    <div class="card-body">

        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ session('success') }}</p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <form class="form" role="form" autocomplete="off" action="{{ route("map.store") }}" method="POST">@csrf
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Date</label>
                <div class="col-lg-9">
                    <input placeholder="Select date" type="text" id="date" class="form-control" name="date">
                    <script>
                        jQuery(function($){ 
                            $('#date').datepicker({
                                uiLibrary: 'bootstrap4',
                                format: 'yyyy-dd-mm'
                            })
                        });
                    </script>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Lat</label>
                <div class="col-lg-9">
                    <input class="form-control" type="text" value="" name="lat" id="lat">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Lang</label>
                <div class="col-lg-9">
                    <input class="form-control" type="text" value="" name="lang" id="lang">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">How many</label>
                <div class="col-lg-9">
                    <input class="form-control" type="text" value="" name="total" id="total">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <div class="col-lg-9">
                    <input type="reset" class="btn btn-secondary" value="Cancel">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </div>
            {{-- <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Time Zone</label>
                <div class="col-lg-9">
                    <select id="user_time_zone" class="form-control" size="0">
                        <option value="Hawaii">(GMT-10:00) Hawaii</option>
                        <option value="Alaska">(GMT-09:00) Alaska</option>
                        <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                        <option value="Arizona">(GMT-07:00) Arizona</option>
                        <option value="Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                        <option value="Central Time (US &amp; Canada)" selected="selected">(GMT-06:00) Central Time (US &amp; Canada)</option>
                        <option value="Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                        <option value="Indiana (East)">(GMT-05:00) Indiana (East)</option>
                    </select>
                </div>
            </div> --}}
        </form>
    </div>
</div>
@endsection