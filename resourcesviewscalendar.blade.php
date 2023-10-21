<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel × FullCalendar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Script -->
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body>
        <div id="app">
            <div class="m-auto w-50 m-5 p-5">
                <div id='calendar'></div>
            </div>
        </div>

        <link href='{{ asset('fullcalendar-5.9.0/lib/main.css') }}' rel='stylesheet' />
        <script src='{{ asset('fullcalendar-5.9.0/lib/main.js') }}'></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth'
                });
                calendar.render();
            });
        </script>
    </body>
</html>