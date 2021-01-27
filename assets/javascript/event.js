// AJAX function to display results under discord code field //
    $(document).ready(function() {
        console.log('Step 1 Started');
        $("#createnewevent").submit(function (event) {
            event.preventDefault();
            var eventInfo = new FormData(this);
            $("#create-event-title").prop('readonly', true);
            $("#create-event-start-date").prop('readonly', true);
            $("#create-event-end-date").prop('readonly', true);
            $("#create-event-start-time").prop('readonly', true);
            $("#create-event-end-time").prop('readonly', true);
            $("#create-event-division").prop('readonly', true);
            $("#create-event-owner").prop('readonly', true);
            $("#create-event-submit").prop('disabled', true);
                $.ajax({
                    url: 'neweventresult.php',
                    type: 'POST',
                    dataType: 'json',
                    data: eventInfo,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        //alert(data);
                        //$("#discord-last-5").load(" #discord-last-5 > *");
                            $("#event-notification-success").css('display', 'block');


                }
            });
        });
    });