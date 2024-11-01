<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../css php/perfil.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/logo/W_favicon.png" type="image/x-icon">

    
    <!-- ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="header-content">
          <div class="logo-header">
            <img src="../assets/logo/WorkUP_black.svg" alt="logo-header">
          </div>
  
          <!-- BARRA DE PESQUISA -->
          <div class="search">
            <button class="search-button" type="submit">
              <i class="fa-solid fa-search"></i>
            </button>
            <input type="text" placeholder="Buscar vagas...">
          </div>
        
        <!-- MENU -->
          <nav>
            <ul>
              <li><a href="#">Vagas</a></li>
              <li><a href="#">Central de atendimento</a></li>
              <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24"><g fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"><path d="M16 9a4 4 0 1 1-8 0a4 4 0 0 1 8 0m-2 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0"/><path d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11s11-4.925 11-11S18.075 1 12 1M3 12c0 2.09.713 4.014 1.908 5.542A8.99 8.99 0 0 1 12.065 14a8.98 8.98 0 0 1 7.092 3.458A9 9 0 1 0 3 12m9 9a8.96 8.96 0 0 1-5.672-2.012A6.99 6.99 0 0 1 12.065 16a6.99 6.99 0 0 1 5.689 2.92A8.96 8.96 0 0 1 12 21"/></g></svg></a></li>
            </ul>
          </nav>
        </div>
  </header>
<br>

<!-- ____________________________________________________________________________________________________________________________________ -->

    <div class="profile-pic"></div>
    <!-- <button class="alter-foto-btn">Alterar foto</button> -->
    <input class="alter-foto-btn" type="file" id="photo" name="photo" accept="image/*">
    
    <div class="info-card">
        <div class="info-item">
            <span class="info-label">Nome:</span>
            <span class="info-value">Afonso</span>
        </div>
        <div class="info-item">
            <span class="info-label">Sobrenome:</span>
            <span class="info-value">Budaigo</span>
        </div>
        <div class="info-item">
            <span class="info-label">Telefone:</span>
            <span class="info-value">(11) 9 4002-8922</span>
        </div>
        <div class="info-item">
            <span class="info-label">E-mail:</span>
            <span class="info-value">ABuds99@gmail.com</span>
        </div>
        <div class="info-item">
            <span class="info-label">Data de Nascimento:</span>
            <span class="info-value">11/11/1911</span>
        </div>
        <div class="info-item">
            <span class="info-label">Sexo:</span>
            <span class="info-value">Masculino</span>
        </div>
        <div class="info-item">
            <span class="info-label">Endereço:</span>
            <span class="info-value">Rua barros de Barr...</span>
        </div>

        <div class="curriculo">
        <div class="info-item">
            <span class="info-label">Currículo:</span>
            <div class="curriculum">🖼</div>
        </div>
        
        <div class="info-item">
            <span class="info-label">Área de atuação:</span>
            <span class="info-value">Padeiro</span>
        </div>

        <div class="info-item">
            <span class="info-label">Perfil:</span>
            <span class="info-value">Empregador++</span>
        </div>
    </div>
    </div>
    
    <a href="editar.php"><button  class="edit-btn">Editar</button></a>

    <br>

<!-- _______________________________________________________________________________ -->
 <!-- FOOTER -->
 <footer class="footer">
  <div class="footer-container">
    <div class="footer-links">
      <ul>
        <li><a href="#">Política de privacidade</a></li>
        <li><a href="#">Avisos legais</a></li>
        <li><a href="#">Mapa do site</a></li>
      </ul>
    </div>
    
    <div class="footer-logo">
      <img src="../assets/logo/w_transp.svg" alt="Logo W" />
    </div>
    
    <div class="footer-social">
      <p>Nossas redes sociais:</p>
      <ul class="social-icons">
        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
        <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
      </ul>
    </div>
  </div>
  
  <div class="footer-bottom">
    <p>Copyright © 2024 WorkUp Inc. Todos os direitos reservados. WorkUp Brasil Ltda</p>
  </div>
</footer>

</div>
</body>
</html>