var form = document.getElementsByClassName('delete-form')
for (var i = 0; i < form.length; i++) {
    (function(index) {
        form[index].addEventListener("click", function(e) {
            setTimeout(function() {
                window.location.reload();
            }, (500));
        })
    })(i);
}