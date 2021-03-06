<?php require_once "../templates/headerTemplate.php"; ?>

   <h1>Consultar professores</h1>
   
   <form id="consProfessor" method="post" action="">

      <!-- PESQUISAR POR -->
      <div class="form-input">
         <i class="fa fa-search" aria-hidden="true"></i>
         <!-- INPUT -->
         <input type="text" name="pesquisa" maxlength="255" placeholder="Pesquisar por..." size="50" />

         <select name="campo">
            <option value="cpf">CPF</option>
            <option value="nome">Nome</option>
            <option value="disciplina_nome">Disciplina</option>
            <option value="turma_nome">Turma</option>
         </select>

         <input type="button" value="Pesquisar" onclick="consultarCampo('Professor');"/>
      </div>

      <div id="query_validate_check"></div>
      <div id="resultado_query"></div>

   </form>

<?php require_once "../templates/footerTemplate.php" ?>
