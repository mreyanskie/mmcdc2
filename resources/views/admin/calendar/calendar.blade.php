@extends('layouts.admin')
@section('content')
<h3 class="page-title">{{ trans('global.systemCalendar') }}</h3>
<div class="card">
    <div class="card-header">
        {{ trans('global.systemCalendar') }}
    </div>

    <div class="card-body">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

        <div id='calendar'></div>


    </div>
</div>
@endsection

@section('scripts')
@parent
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
<script>
    $(document).ready(function () {
            events={!! json_encode($events) !!};
            $('#calendar').fullCalendar({
               
                events: events,
                defaultView: 'agendaDay',
                //hide weekends
                hiddenDays: [0, 6],
                //header buttons and arrangement
                header: { left: 'month, agendaWeek, agendaDay, list',
                          center:'title',
                          right: 'today, prevYear, prev, next, nextYear'
                        },
                //change button text for prev and next
                buttonText: {
                    prevYear: new moment().year() - 1,
                    nextYear: new moment().year() + 1
                },
                viewRender: function(view) {
                    var y = moment($('#calendar').fullCalendar('getDate')).year();
                    $('.fc-prevYear-button').text(y-1);
                    $('.fc-nextYear-button').text(y+1);
                },
                allDaySlot: false,
                minTime: '08:00',
                maxTime: '18:00',
                
            })
        });
</script>
@stop