$(document).ready(function () {
    let counter = 1;

    $('.carousel').carousel({
        interval: false,
        wrap: false
    });

    $('.next').on('click', function () {
        if ($("input[name='question-" + counter + "']").is(':checked')) {
            counter++;
            if (counter == 5) {
                $('.send-button').removeClass('d-none');
                $('.next-button').addClass('d-none');
            }

            $('.carousel').carousel('next');
        }
    });

    $('.send').on('click', function () {
        $("form").submit(function (e) {

            let form = $(this);
            let url = form.attr('action');

            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                success: function (data) {
                    $('.modal-text').text(data);
                    $('.modal').modal('show');
                }
            });

            e.preventDefault();
        });
    });
});