<?php
include('header.php');


?>

<div class="container-fluid">
    <div class=" col-md-6 mx-auto my-auto rounded-3 bg-white bg-opacity-50 border border-3 border-dark p-2 mt-2">
        <h1 class="encabezado">COTIZACIONES</h1>
        <div class="info1">
            <p>Ingresa tus datos y una breve descripcion del proyecto que deseas realizar y con gusto nos pondremos en contacto contigo.</p>
        </div>
    </div>

    <!-- FORMULARIO -->
    <div class="col-md-9 mx-auto my-auto rounded-3 bg-secondary bg-opacity-75 border border-3 border-dark p-2 mt-2">
        <form>
            <!-- TITULO DEL FORMULARIO -->
            <div class="col-6 mx-auto my-auto bg-white bg-opacity-50 border border-dark border-3 rounded-3 text-center">
                <h3 class="info1">DATOS PERSONALES</h3>
            </div>
            <!-- PRIMERA LINEA DEL FORMULARIO -->
            <div class="row fw-bold">
                <div class="col">
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">PRIMER NOMBRE</label>
                        <input type="text" name="nombre1" class="form-control" placeholder="PRIMER NOMBRE">
                    </div>

                </div>

                <div class="col">
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">SEGUNDO NOMBRE</label>
                        <input type="text" id="disabledTextInput" name="nombre2" class="form-control" placeholder="SEGUNDO NOMBRE">
                    </div>

                </div>
            </div>
            <!-- SEGUNDA LINEA DEL FORMULARIO -->
            <div class="row fw-bold">
                <div class="col">
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">PRIMER APELLIDO</label>
                        <input type="text" id="disabledTextInput" name="apellido1" class="form-control" placeholder="PRIMER APELLIDO">
                    </div>
                </div>

                <div class="col">
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">SEGUNDO APELLIDO</label>
                        <input type="text" id="disabledTextInput" name="nombre2" class="form-control" placeholder="SEGUNDO APELLIDO">
                    </div>

                </div>
            </div>
            <div class="row fw-bold">
                <div class="col">
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">EDAD</label>
                        <input type="email" id="disabledTextInput" name="edad" class="form-control" placeholder="EDAD">
                    </div>

                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="disabledSelect" class="form-label">GENERO</label>
                        <select id="disabledSelect" name="genero" class="form-select">
                            <option>HOMBRE</option>
                            <option>MUJER</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">TELEFONO</label>
                        <input type="tel" id="disabledTextInput" name="telefono" class="form-control" placeholder="TELOFONO CELULAR">
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">EMAIL</label>
                        <input type="email" id="disabledTextInput" name="correo" class="form-control" placeholder="CORREO ELECTRONICO">
                    </div>
                </div>
            </div>

            <div class="col-12 mt-3">

                <div class="row fw-bold">
                    <div class="col">TIPO DE AMBITO DE LA ENTIDAD</div>

                </div>

                <div class="row fw-bold">
                    <div class="col">

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">ESTUDIANTIL</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">EMPRESARIAL</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">GUBERNAMENTAL</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">AREA DE SALUD</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">OTROS</label>
                        </div>

                    </div>

                </div>
            </div>
            <!-- CUARTA LINEA DEL FORMULARIO -->

            <div class="col-6 mt-1">
                <div class="row fw-bold">
                    <div class="col-6">
                        <button type="submit" class="btn btn-success">ENVIAR</button>

                    </div>

                </div>
            </div>
            <br><br>
            <div class="col-6 mx-auto my-auto bg-white bg-opacity-50 border border-dark border-3 rounded-3 text-center">
                <h3 class="info1">DESCRIPCION DEL PROYECTO A REALIZAR</h3>
            </div>
            <div class="row fw-bold">
                <div class="col-12 w-100 h-75">
                    <label for="disabledTextInput" class="form-label">¿COMO PODEMOS AYUDARTE?</label>
                    <input type="text" id="disabledTextInput" name="descripcion_proyeto" class="form-control" placeholder="ESCRIBE LO QUE DESEAS Y TENDRAS UNA RESPUESTA EFECCTIVA">


                </div>

            </div>
        </form>

    </div>
</div>
<!--TERMINA FORMULARIO -->