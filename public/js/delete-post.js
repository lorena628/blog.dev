// add an event listener for the delete button
$('#delete-post-btn').on('click', function(e){
    console.log("we're in it to win it");

    // make sure the user wants to delete the post
    if (confirm('Are you sure you want to delete this post?')){
        // submit the hidden form
        $('#delete-post-form').submit();
    }
})