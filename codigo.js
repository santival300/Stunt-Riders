$('#formLogin').submit(function (e) {
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#password").val());

    if (usuario.length == "" || password == "") {
        Swal.fire({
            type: 'warning',
            title: 'Debe ingresar un usuario y/o password',
        });
        return false;
    } else {
        $.ajax({
            url: "db/login.php",
            type: "POST",
            datatype: "json",
            data: { usuario: usuario, password: password },
            success: function (data) {
                if (data == "null") {
                    Swal.fire({
                        type: 'error',
                        title: 'usuario y/o password incorrecta',
                    });
                } else {
                    Swal.fire({
                        type: 'success',
                        title: '¡conexion exitosa¡',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'ingresar'

                    }).then((result) => {
                        if (result.value) {
                            window.location.href = "index.html";
                        }
                    })
                }
            }
        })
    }

}
);
