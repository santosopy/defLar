@extends('admin-screen.layout.layout')

@section("content")
<div class="card card-outline-secondary w-50">
    <div class="card-header">
        <h3 class="mb-0">User Information</h3>
    </div>
    <div class="card-body">
        <form class="form" role="form" autocomplete="off">@csrf
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Date</label>
                <div class="col-lg-9">
                    <input placeholder="Select date" type="text" id="date" class="form-control">
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
                    <input type="button" class="btn btn-primary" value="Save Changes">
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