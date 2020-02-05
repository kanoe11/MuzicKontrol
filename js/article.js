$(document).ready(function () {
    $('#add').click(function (e) {
        // empeche le formulaire de s'envoyer en html
        e.preventDefault();
        var titre = $("#titre").val();
        var contenu = $("#contenu").val();
        var contenu = $("#visible").val();
        $.ajax({
            url: '/muzickontrol/process.php',
            type: 'POST',
            data: {
                titre: titre,
                contenu: contenu,
                visible:visible,
                save: ''
            },
            success: function (data) {
                document.location.href = "/muzickontrol/articleView.php";

            },
            error: function (resultat, statut) {
                alert('erreur non envoyer');
            }
        });
    });

    $('.delete').click(function (e) {
        e.preventDefault();
        var id = $(this).attr("data-id");

        $.ajax({
            url: '/musickontrol/template/article/supprimer.php',
            type: 'GET',
            data: {
                del: id
            },
            success: function (data) {
                console.log(data);
                $('tr[data-id=' + id + ']').remove();
                document.location.href = "/muzickontrol/articleView.php";

            },
            error: function (resultat, statut) {
                alert('erreur non envoyer');
            }
        });
    });

    $('#update').click(function (e) {
        e.preventDefault();
        var titre = $("#titre").val();
        var contenu = $("#contenu").val();
        var id = $('input[name="id"]').val();

        $.ajax({
            url: '/muzickontrol/process.php',
            type: 'POST',
            data: {
                titre: titre,
                contenu: contenu,
                id: id,
                update: ''
            },
            success: function (data) {
                $(location).attr('href', '/article/index.php');
            },
            error: function (resultat, statut) {
                alert('erreur non envoyer');
            }
        });
    });
});