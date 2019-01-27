$(function() {
    $(document).on("click", "#plugin_confirm", function(event) {
        event.preventDefault();
        console.log(event.target);
        console.log("confirmation url has been sent successfully");
    })
});
