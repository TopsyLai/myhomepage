$(function() {
    $("input,textarea").jqBootstrapValidation({
        preventSubmit: true,
        submitError: function($form, event, errors) {
            // additional error messages or events
        },
        filter: function() {
            return $(this).is(":visible");
        },
    });
    $("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});
/*When clicking on Full hide fail/success boxes */
$('#name').focus(function() {
    $('#success').html('');
});
$(function(){
    $(".footer-above ul.list-inline").append('<li><a href="https://segmentfault.com/u/codedemon" class="btn-social btn-outline" style="border-radius: 0;width: 150px;">segmentfault</a></li>');
    $("#downPdf").click(function(event){
        event.preventDefault();
    })
});
