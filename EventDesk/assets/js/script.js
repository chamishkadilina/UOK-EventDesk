$(document).ready(function() {
    // Initialize the FullCalendar
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today', // Navigation buttons on the left
            center: 'title', // Title in the center
            right: 'month,agendaWeek,agendaDay' // View options on the right
        },
        events: 'fetch_events.php', // URL to fetch events
        selectable: true, // Allow dates to be selectable
        selectHelper: true, // Show a placeholder when selecting
        select: function(start, end) {
            // Clear the form inputs
            $('#eventId').val('');
            $('#eventTitle').val('');
            $('#startTime').val(moment(start).format("YYYY-MM-DD HH:mm:ss"));
            $('#endTime').val(moment(end).format("YYYY-MM-DD HH:mm:ss"));
            // Show the modal for adding a new event
            $('#eventModal').modal('show');
        },
        editable: true, // Allow events to be editable
        eventDrop: function(event) {
            // Update the event's new start and end times
            var start = moment(event.start).format("YYYY-MM-DD HH:mm:ss");
            var end = moment(event.end).format("YYYY-MM-DD HH:mm:ss");
            $.ajax({
                url: 'edit_event.php', // URL to update event
                data: {
                    id: event.id, // Event ID
                    title: event.title, // Event title
                    start: start, // New start time
                    end: end // New end time
                },
                type: "POST",
                success: function(data) {
                    alert("Event updated successfully"); // Alert on success
                }
            });
        },
    });
});
