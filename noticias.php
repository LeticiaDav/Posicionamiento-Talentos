<!--
#noticias.php - 0.1.1

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

<section>
  <article class="noticia">
    <div class="card">
      <div class="card-header" id="cabecera-card">
        <table>
          <tr>
            <td><a href="#"><img src="img/no-profile.png" class="imagen-inicial-perfil" alt=""></a></td>
            <td><a href="#" class="nombre-usuario">Usuario 1</a></td>
          </tr>
        </table>
      </div>
      <div class="card-body-noticia">
        <p class="card-text-noticia">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
        <div class="stats">
          <a href="#" class="stat-item"><i class="fa fa-thumbs-up icon"></i>1</a>
          <a href="#" class="stat-item"><i class="fa fa-comments-o icon"></i>1</a>
        </div>
      </div>
      <div class="card-footer" id="pie-card-comentarios">
        <form class="comentario" action="<?php echo $_SERVER[PHP_SELF]; ?>" method="post">
          <input class="form-control add-comment-input" name="comentario" placeholder="Agrega un comentario..." type="text">
          <input type="hidden" name="CodPost" value="">
        </form>
        <!-- <ul class="comments-list">
        <li class="comment">
        <a class="pull-left" href="#">
        <img class="avatar" src="img/no-profile.png" alt="avatar">
      </a>
      <div class="comment-body">
      <div class="comment-heading">
      <h4 class="comment-user-name"><a href="#">Usuario 2</a></h4>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  </div>
</li>
</ul> -->
</div>
</div>
</article>

</section>
