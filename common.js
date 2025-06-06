 $(document).ready(function() {
        $('#addcatagory').click(function() {
            $('#addcatagoryform').toggle();
        });
    });
    $(document).ready(function() {
        let error = $('.alert')
        setTimeout(() => {
            error.hide()
        }, 3000);
    })
    $(document).ready(function() {
        $('#deletecatagory').click(function() {
            $('#deletecatagoryform').toggle();
        });
    });

    