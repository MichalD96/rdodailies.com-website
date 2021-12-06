$(document).ready(function () {
    // Check if user saw the modal
    var key = 'hadDonateModal_Nov21',
        hadDonateModal_Nov21 = localStorage.getItem(key);

    // Show the modal only if new user
    if (!hadDonateModal_Nov21) {
        $('#donateModal').modal('show');
    }

    // If modal is displayed, store that in localStorage
    $('#donateModal').on('shown.bs.modal', function () {
        localStorage.setItem(key, true);
    })
});

$(document).ready(function () {
    // Check if user saw the modal
    var key = 'hadDonateModalFME_Nov21',
        hadDonateModalFME_Nov21 = localStorage.getItem(key);

    // Show the modal only if new user
    if (!hadDonateModalFME_Nov21) {
        $('#donateModalFME').modal('show');
    }

    // If modal is displayed, store that in localStorage
    $('#donateModalFME').on('shown.bs.modal', function () {
        localStorage.setItem(key, true);
    })
});
