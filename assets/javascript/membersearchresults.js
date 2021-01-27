// AJAX function to display results under discord code field //
$(document).ready(function() {
    console.log('Step 1 Started');
    $("#member-search").submit(function (event) {
        event.preventDefault();
        $("#search-fieldset").prop('disabled', true);
            $("#submit-button").removeAttr('style');
        var searchText = $("#search-input").val();
        var dataCombined = "membersearch="+searchText;
                //$("member-search-tr").load("memberresults.php");
            $.ajax({
                type: 'GET',
                url: 'memberresults.php',
                data: dataCombined,
                dataType: 'text',
                success: function(data){
                    //alert(html);
                    if( $('#search-result-row').length) {
                            $('#search-result-row').remove();
                                $('#member-search-tr').append(data);
                    } else {
                        $('#member-search-tr').append(data);
                    }
                complete:
                    $("#search-fieldset").prop('disabled', false);
                        $("#submit-button").attr('style', "display:none;");
                }
            });
        });
    return false;
    });