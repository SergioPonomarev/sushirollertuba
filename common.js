/**
 * Created by russovskiy on 29.05.17.
 */

$(document).ready(function() {

    $("#form").submit(function() {
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: $(this).serialize()
        }).done(function() {
            alert("Спасибо за заявку. Скоро мы с Вами свяжемся.");
            $("#form").trigger("reset");
        });
        return false;
    });

});