$("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});


function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email").val();
    var message = $("#message").val();
    var cname = $("#cname").val();
    var number = $("#number").val();
 
    $.ajax({
        type: "POST",
        url: "assets/php/form-process.php", 
        data: "name=" + name + "&cname" + cname + "&email=" + email + "&number" + number + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
        }
    });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
}
