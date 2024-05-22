$(document).ready(function() {
    // Set minimum date to today
    var today = new Date().toISOString().split('T')[0];
    $("#date").attr("min", today);
  
    // Disable the exit time input until entry time is set
    $("#exit").prop("disabled", true);
  
    // Set minimum value for exit time input to 15 minutes after entry time
    $("#entry").change(function() {
        $("#exit").prop("disabled", false);
        var entryTime = new Date($(this).val());
        entryTime.setMinutes(entryTime.getMinutes() + 15);
        var exitTime = entryTime.toISOString().slice(0,16);
        $("#exit").prop("min", exitTime);
    });
  
    // Set entry time to 5 minutes ahead of current time if date is today
    $("#date").change(function() {
      var selectedDate = new Date($(this).val());
      var today = new Date();
      if (selectedDate.getDate() == today.getDate() && selectedDate.getMonth() == today.getMonth() && selectedDate.getFullYear() == today.getFullYear()) {
        var entryTime = new Date();
        entryTime.setMinutes(entryTime.getMinutes() + 5);
        var entryTimeString = entryTime.toISOString().slice(0,16);
        $("#entry").val(entryTimeString);
      }
    });
  
    // Set maximum value for exit time input to 2 hours after entry time
    $("#entry").change(function() {
        var entryTime = new Date($(this).val());
        entryTime.setHours(entryTime.getHours() + 2);
        var exitTime = entryTime.toISOString().slice(0,16);
        $("#exit").prop("max", exitTime);
    });


    // Attach a click event handler to all buttons with class "btn"
    $('.car_btn').click(function() {
        $('.car_btn').text('Select').removeClass('selected_plan');
        // Get the car ID from the ".car_id" span within the clicked ".car" div
        var car_id = $(this).siblings('.car_id').text();
        
        // Set the value of the "#car_input" input to the car ID
        $('#car').val(car_id);
        
        // Set the clicked button to "active"
        $(this).text('Selected').removeClass('plan_btn').addClass('selected_plan');
    });
    
  });

  const availableElements = document.querySelectorAll('.available');
  availableElements.forEach(element => {
    element.addEventListener('click', () => {
      // Remove selected class from all available elements
      availableElements.forEach(el => el.classList.remove('selected'));
  
      // Add selected class to the clicked element
      element.classList.add('selected');
  
      // Get park ID from the clicked element
      const parkId = element.querySelector('.park_id').textContent;
  
      // Set park ID value to #park_spot input
      document.querySelector('#park_spot').value = parkId;
  
      // Call checkBookingAvailability function
      checkBookingAvailability();
    });
  });
  
  