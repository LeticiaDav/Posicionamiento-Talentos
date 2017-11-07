<!--
#dashboard.php - 1.0.1

https://github.com/Genesisj96Dev/Posicionamiento-Talentos

Copyright 2017 WORkTECS

Desarrollado por Genesis Jesus Reyes Osnaya

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->

<?php
session_start();
require('funciones.php');
verificar_sesion(); //Verificar si hay una sesion iniciada o no
//echo $_SESSION['email'];
require('cabecera.php');
require('upload-notice.php');
require('noticias.php');
?>



<!-- Nucleo javascript de Boostrap -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
