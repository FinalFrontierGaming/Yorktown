// AJAX function to display results under discord code field //
    $(document).ready(function() {
        console.log('Step 1 Started');
        $("#discordnewcode").submit(function (event) {
            event.preventDefault();
            var discordCode = new FormData(this);
            $("#invite-input").prop('readonly', true);
            $("#discord-submit").prop('disabled', true);
                $.ajax({
                    url: 'discordresult.php',
                    type: 'POST',
                    //dataType: 'json',
                    data: discordCode,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        //alert(data);
                        $("#discord-last-5").load(" #discord-last-5 > *");
                            $("#discord-notification-success").css('display', 'block');


                }
            });
        });
    });