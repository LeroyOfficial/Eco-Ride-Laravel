function checkBookingAvailability() {
    var parkingSpotId = document.getElementById('park_spot').value;
    var startTime = document.getElementById('entry').value;
    var endTime = document.getElementById('exit').value;
    var date = document.getElementById('date').value;

    // Send AJAX request to Laravel backend
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/check-booking-availability',
        type: 'POST',
        data: {
            parking_spot_id: parkingSpotId,
            date: date,
            start_time: startTime,
            end_time: endTime
        },
        success: function(response) {
            if (response.available) {
                // The parking spot is available for booking
            } else {
                // The parking spot is already booked for the selected time period
                document.getElementById('booking-status').innerHTML = 'This parking spot is already booked for the selected time period';
            }
        },
        error: function(xhr) {
            // Handle errors
            console.log(xhr.responseText);
        }
    });
}
