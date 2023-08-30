var alerts = document.querySelectorAll('.alert');
alerts.forEach(function(alert) {
    var closeButton = alert.querySelector('.btn-close');
    closeButton.addEventListener('click', function() {
        alert.classList.add('d-none');
    });
});
