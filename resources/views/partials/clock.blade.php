<div class="card">
    <div class="card-header">
        <h5 class="card-header-text">Waktu Server</h5>
        <div class="card-header-right">
            <i class="icofont icofont-clock-time"></i>
        </div>
    </div>
    <div class="card-block">
        <div class="counter">
            <div id="date-part"></div>
            <div id="time-part"></div>
        </div>
    </div>
</div>

@section('scripts')
@parent
<!-- moment js -->
<script type="text/javascript" src="{{ asset('ablepro/bower_components/moment/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('ablepro/bower_components/moment/js/moment-with-locales.js') }}"></script>
<script>
 var interval = setInterval(function() {
    var momentNow = moment.locale('id');
    $('#date-part').html(moment().format('dddd') + ', ' + moment().format('DD MMM YYYY'));
    $('#time-part').html(moment().format('LTS'));
}, 100);
</script>
@endsection