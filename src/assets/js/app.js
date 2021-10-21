

    function loadData(id) {
            $.ajax({
                url: "details.php",
                method: "POST",
                data: {'id': id},
                success: function (res) {
                    $('.modal-body').html(res);
                }
            });
    }   