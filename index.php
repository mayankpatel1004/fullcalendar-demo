<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8' />
        <link href='fullcalendar.min.css' rel='stylesheet' />
        <link href='fullcalendar.print.min.css' rel='stylesheet' media='print' />
        <script src='moment.min.js'></script>
        <script src='jquery.min.js'></script>
        <script src='fullcalendar.min.js'></script>
        <style>
            .fc-day-grid-event .fc-content {
                white-space: normal !important;
            }    
        </style>

        <script>
            $(document).ready(function () {
                $('#calendar').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'listYear,month,listMonth,agendaWeek,listWeek,agendaDay,agendaFourDay,listDay'
                    },
                    buttonText: {
                        today: 'Today',
                        month: 'Month',
                        agendaWeek: 'Week',
                        agendaDay: 'Day',
                        listYear: 'List Year',
                        listMonth: 'List Mnth',
                        listWeek: 'List Week',
                        agendaFourDay: 'List Four Days',
                        listDay: 'List Day'
                    },
                    views: {
                        agendaFourDay: {
                            type: 'agenda',
                            duration: {days: 4},
                            buttonText: '4 day'
                        }
                    },
                    defaultDate: '2017-03-12',
                    timeFormat: 'H(:mm)',
                    axisFormat: 'H:mm',
                    navLinks: true, // can click day/week names to navigate views
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    allDaySlot: true,
                    allDayText: 'LaborLinc All Day',
                    defaultTimedEventDuration: '00:30:00',
                    handleWindowResize: true,
                    eventLimit: false,
                    contentHeight: 'auto',
                    height: 'auto',
                    displayEventEnd: true,
                    lazyFetching: false,
                    nowIndicator: true,
                    events: [
                        {
                            title: '<b>Title</b> : All Day Event <a href="http://www.google.com" class="" target="_blank"><img src="task_notes.png" /></a> <a href="http://www.yahoo.com" class="" target="_blank"><img src="caution.png" /></a> <span class=""><img src="star.png" /></span>',
                            start: '2017-03-01',
                            description: 'This is a cool event',
                            textEscape: false,
                            color: "green", // an option!
                            textColor: "black",
                        },
                        {
                            title: '<b>Title</b> : Long Event <a href="http://www.google.com" class="" target="_blank"><img src="task_notes.png" /></a> <a href="http://www.yahoo.com" class="" target="_blank"><img src="caution.png" /></a> <span class=""><img src="star.png" /></span>',
                            start: '2017-03-07',
                            end: '2017-03-10',
                            description: '',
                            textEscape: false,
                            color: "yellow", // an option!
                            textColor: "black"

                        },
                        {
                            id: 999,
                            title: 'Repeating Event',
                            start: '2017-03-09T16:00:00',
                            description: 'This is a cool event'
                        },
                        {
                            id: 999,
                            title: '<i>Repeating Event</i>',
                            start: '2017-03-16T16:00:00',
                            description: '',
                            textEscape: false,
                            color: "red", // an option!
                            textColor: "yellow"
                        },
                        {
                            title: '<b><strike>Conference</strike></b>',
                            start: '2017-03-11',
                            end: '2017-03-13',
                            description: '',
                            color: "orange", // an option!
                            textColor: "black"
                        },
                        {
                            title: 'Title : Meeting',
                            start: '2017-03-12T10:30:00',
                            end: '2017-03-12T12:30:00',
                            description: '',
                            color: "pink", // an option!
                            textColor: "black",
                        },
                        {
                            title: '<i><strike>Title : Lunch</strike></i>',
                            start: '2017-03-12T12:00:00',
                            description: 'This is a cool event',
                            color: "red", // an option!
                            textColor: "yellow",
                        },
                        {
                            title: 'Meeting',
                            description: '',
                            start: '2017-03-12T14:30:00'
                        },
                        {
                            title: 'Happy Hour',
                            description: '',
                            start: '2017-03-12T17:30:00',
                        },
                        {
                            title: 'Title : Dinner',
                            description: 'This is a cool event',
                            start: '2017-03-12T20:00:00'
                        },
                        {
                            title: 'Birthday Party',
                            description: '',
                            start: '2017-03-13T07:00:00'
                        },
                        {
                            title: 'Birthday Party',
                            description: '',
                            start: '2017-03-23T07:00:00',
                            end: '2017-03-23T09:00:00',
                            rendering: 'background',
                            backgroundColor: 'green'
                        },
                        {
                            title: '<i><span style="color:red">Hurrah!!!</span> <span style="color:blue">Holiday</span></i>',
                            description: '',
                            start: '2017-03-26',
                            backgroundColor: 'white',
                            //textColor: "purple",
                            borderColor: 'white',
                        },
                        {
                            title: '<img src="images2.jpg" width="40px" height="25px" />',
                            description: '',
                            start: '2017-03-29',
                            backgroundColor: 'white',
                            textColor: "purple",
                            borderColor: 'white',
                        },
                        {
                            title: '<div style="text-align:center"><img src="birthday.jpg" width="80px" height="60px" /> <b>Himanshu</b></div>',
                            description: '',
                            start: '2017-03-23',
                            backgroundColor: 'white',
                            textColor: "black",
                            borderColor: 'white',
                        },
                        {
                            title: '<img src="holiday.png" width="40px" height="25px" />Holiday',
                            description: '',
                            start: '2017-04-02',
                            backgroundColor: 'white',
                            textColor: "purple",
                            borderColor: 'white',
                        },
                        {
                            title: '<img src="chat.jpg" width="70px" height="50px" />',
                            description: '',
                            start: '2017-03-02',
                            backgroundColor: 'white',
                            textColor: "purple",
                            borderColor: 'white',
                        },
                        {
                            title: '<b>Title : Click for Google<b>',
                            description: 'This is a cool event',
                            url: 'http://google.com/',
                            start: '2017-03-28',
                            borderColor: 'green',
                            textColor: "white",
                            color: "red"
                        }
                    ],
                    eventRender: function (event, element, view) {
                        if (view.name === "month" || view.name === 'agendaWeek' || view.name === 'agendaDay') {
                            var $title = element.find('.fc-title');
                            $title.html($title.text() + '<br />' + event.description);
                        }
                        else if (view.name === 'listYear' || view.name === 'listMonth' || view.name === 'listWeek' || view.name === 'listDay') {
                            var $title = element.find('td.fc-list-item-title');
                            $title.html($title.text());
                        }
                        else {

                            var $title = element.find('.fc-title');
                            $title.html($title.text() + '<br />' + event.description);
                            //$title.html( event.description );
                        }
                    }
                });

            });

        </script>
        <style>

            body {
                margin: 40px 10px;
                padding: 0;
                font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
                font-size: 14px;
            }

            #calendar {
                max-width: 900px;
                margin: 0 auto;
            }

        </style>
    </head>
    <body>
        <div id='calendar'></div>
    </body>
</html>
