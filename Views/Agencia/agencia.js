var app = new Vue({
    el: "#app",
    data: {
        errorMessage: "",
        successMessage: "",
        Mostrar_Guardar: true,
        Mostrar_Actualizar: false,
        MostrarModal: false,
        Datos: [],
        Nuevo: { Codigo: "", Direccion: "", Telefono: "" },
        ClickedAgencia: {}
    },
    mounted: function() {
        this.MostraDatos();
    },
    methods: {
        MostraDatos: function() {
            axios.get("http://localhost/Proyecto4/Controllers/Agencia_controller.php?opcion=read")
                .then(function(response) {
                    if (response.data.error) {
                        app.errorMessage = response.data.message;
                    } else {
                        app.Datos = response.data.Datos;

                    }
                });
        },
        Guardar: function() {
            var DatosFormulario = app.DatosForm(app.Nuevo);

            axios.post("http://localhost/Proyecto4/Controllers/Agencia_controller.php?opcion=create", DatosFormulario)
                .then(function(response) {

                    app.Nuevo = { Codigo: "", Direccion: "", Telefono: "" };
                    console.log(response);
                    if (response.data.error) {
                        app.errorMessage = response.data.message;
                    } else {
                        app.successMessage = response.data.message;
                        app.MostraDatos();
                    }
                });
        },
        Actualizar: function() {
            var DatosFormulario = app.DatosForm(app.ClickedAgencia);

            axios.post("http://localhost/Proyecto4/Controllers/Agencia_controller.php?opcion=update", DatosFormulario)
                .then(function(response) {

                    app.ClickedAgencia = {};
                    console.log(response);
                    if (response.data.error) {
                        app.errorMessage = response.data.message;
                    } else {
                        app.successMessage = response.data.message;
                        app.Mostrar_Guardar = true;
                        app.Mostrar_Actualizar = false;
                        app.MostraDatos();
                    }
                });
        },
        Eliminar: function() {
            var DatosFormulario = app.DatosForm(app.ClickedAgencia);

            axios.post("http://localhost/Proyecto4/Controllers/Agencia_controller.php?opcion=delete", DatosFormulario)
                .then(function(response) {

                    app.ClickedAgencia = {};
                    // console.log(response);
                    if (response.data.error) {
                        app.errorMessage = response.data.message;
                    } else {
                        app.successMessage = response.data.message;
                        app.Mostrar_Guardar = true;
                        app.Mostrar_Actualizar = false;
                        app.MostraDatos();
                    }
                });
        },
        selectAgencia: function(valor) {
            app.ClickedAgencia = valor;
            app.Mostrar_Guardar = false;
            app.Mostrar_Actualizar = true;

        },
        DatosForm: function(obj) {
            var DatosForm = new FormData();
            for (var key in obj) {
                DatosForm.append(key, obj[key]);
            }
            return DatosForm;
        },
    }
});