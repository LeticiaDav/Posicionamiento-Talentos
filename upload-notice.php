<!--
#upload-notice.php - 0.1.1

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

<section class="publicacion">
  <div class="card">
    <div class="card-header" id="cabecera-card">
      <table>
        <tr>
          <td><a href="#"><img src="img/no-profile.png" class="imagen-inicial-perfil" alt=""></a></td>
          <td><a href="#" class="nombre-usuario">Usuario 1</a></td>
        </tr>
      </table>
    </div>
    <div class="card-body">
      <form action="<?php echo $_SERVER[PHP_SELF]; ?>" enctype="multipart/form-data" method="post">
        <textarea class="text-comentario" rows="2" name="comentario" id="comentario" placeholder="Agregar una noticia"></textarea>
      </form>
    </div>
    <div class="card-footer" id="pie-card">
      <label for="archivo" class="fa fa-file-image-o fa-lg" style="cursor:pointer; margin-top:10px;"></label>
      <input type="file" name="archivo" id="archivo" style="display:none;">
      <button class="btn btn-success pull-right" name="publicar">Publicar</button>
    </div>
  </div>
</section>
