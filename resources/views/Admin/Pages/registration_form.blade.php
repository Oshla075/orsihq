@extends('Admin.Layout.main')

@section('title')
<title>Registration Form to enroll membership</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
@endsection
<style>
    .heading {
        font-family: 'Roboto Slab', serif !important;
        font-weight: 600;
    }
</style>
@section('main_section')
<div class="container">
    <h1 class="text-center heading">Registration Form to enroll membership</h1>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            {{-- md= medium device, sm= small device, xs= extra small, xl= extra large --}}
            <div class="card p-4 mb-3">
                <form class="row" method="post" action="#" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Aadhaar No.</label>
                        <input type="number" name="adh_no" class="form-control" id="adh_no"
                            placeholder="Enter Aadhaar No." aria-describedby="emailHelp"
                            onkeypress="limitKeypress(event,this.value,12)">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label" for="mem_type">Member Type</label>
                        <select class="js-select2 form-select" id="mem_type" name="mem_type" style="width: 100%;"
                            data-placeholder="Choose one.." onchange="mem_change(this);">
                            <option></option>
                            <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                            <option value="Individual">Individual</option>
                            <option value="Institution">Institution</option>
                        </select>
                    </div>
                    <div id="part_1">
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="mem_cat">Category</label>
                            <select class="js-select2 form-select" id="mem_cat" name="mem_cat" style="width: 100%;"
                                data-placeholder="Choose one..">
                                <option></option>
                                <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="Annual">Annual</option>
                                <option value="Life Time">Life Time</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="mem_country">Country</label>
                            <select class="js-select2 form-select" id="mem_country" name="mem_country"
                                style="width: 100%;" data-placeholder="Choose one..">
                                <option></option>
                                <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                <option value="Indian">Indian</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div id="part_2">
                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="p_membership">Price Membership</label>
                                <select class="js-select2 form-select" id="p_membership" name="p_membership"
                                    style="width: 100%;" data-placeholder="Choose one..">
                                    <option></option>
                                    <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                    <option value="Members ₹ 600 only">Members ₹ 600 only</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-info btn-lg" style="margin-right:10px;">Submit</button>
                        <button type="reset" class="btn btn-danger btn-lg">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('custom_js')
<script src="{{ url('/') }}/assets/js/lib/jquery2.min.js"></script>
<script>
    $(document).ready(function () {
        $("#part_1").hide();
        $("#part_2").hide();
    });

    function mem_change(e) {
        e.prevenDefault;
        var m_type = $('#mem_type').val();
        if(m_type == 'Individual')
        {
            $("#part_1").show();
        }
        else
        {
            $('#part_1').hide();
        }

        var cntry = $('#mem_country').val();
        if(cntry == 'Indian')
        {
            $('#part_2').show();
        }

    }

</script>
@endsection
