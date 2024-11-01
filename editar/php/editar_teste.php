<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="./editar_teste.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/logo/W_favicon.png" type="image/x-icon">

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- teste -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="./editar_teste.js"></script>

    <title>Editar perfil</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
    margin: 0;
    padding: 0;
    font-family: 'Poppins';
}
    
  body {
    background-color: #fff;
  }

/* _____________________________________________________________________________________ */
/* HEADER */  


/* __________________________________________________________________________ */
/* PRINCIPAL */
/* foto */
.profile-picture {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1rem;
}

.picture-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.profile-img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  border: 3px solid #FFDE59;
  object-fit: cover;
}

.change-photo {
  background-color: #FFDE59;
  border: none;
  padding: 0.5rem 1rem;
  border-radius: 25px;
  cursor: pointer;
  margin-top: 30px;
  transition: background-color 0.3s ease;
}

.change-photo:hover {
  background-color: #f0c83c;
}

/* container 1 */
.labels {
    font-size: 13px;
}

/* CONTAINER 2 */
.card {
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-bottom: 20px;
  padding: 15px;
}

.card-expe {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 10px;
}

.edit-icon {
  cursor: pointer;
}

.edit-icon i {
  color: #000;
}

/* curriculo */
.form-cv {
  display: flex;
  flex-direction: column;
}

.form-cv label {
  font-weight: 500;
  margin-bottom: 0.5rem;
}

.form-cv input,
.form-cv select {
  padding: 0.75rem;
  border: 1px solid #ccc;
  border-radius: 10px;
  outline: none;
  transition: border-color 0.3s ease;
}

.form-cv input:focus,
.form-cv select:focus {
  border-color: #FFDE59;
}

.upload-curriculo {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.upload-curriculo input[type="file"] {
  display: none;
}

.upload-curriculo label {
  background-color: #ffde59;
  padding: 3.5rem;
  width: 300px;
  display: flex;
  justify-content: center;
  border-radius: 10px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.upload-curriculo label:hover {
  background-color: #e1b235;
}

/* Botão Salvamento */
.btn-primary{
  background-color: #ffde59 !important;
  border-color: #ffde59 !important;
  color: #000 !important;
}

.btn-primary:hover {
 background-color: #f0c83c !important;
}

/* ___________________________________________________________ */
/* FOOTER */
.footer {
  background-color: #f5f5f5;
  color: #000;
  padding-top: 15px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
  width: 100%;
}

.footer-container {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-wrap: wrap;
  margin: 35px;
}

.footer-links ul {
  list-style-type: none;
  padding: 0;
}

.footer-links ul li a {
  color: #000;
  text-decoration: none;
  font-weight: 600;
  font-size: 16px; 
}

.footer-logo img {
  width: 150px; 
}

.footer-social {
  text-align: center;
}

.footer-social p {
  font-weight: 600;
  font-size: 16px;
}

.social-icons {
  list-style-type: none;
  padding: 0;
  display: flex;
  justify-content: center;
}

.social-icons li {
  margin: 8px 8px;
}

.social-icons a {
  text-decoration: none;
}

.social-icons i {
  font-size: 22px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: #000;
}

.social-icons i:hover {
  color: #82712D;
}

.footer-bottom {
  padding: 0;
  padding-bottom: 20px;
}

.footer-bottom p {
  font-size: 12px;
  color: #000;
  text-align: center;
}
</style>
<body>

    <!-- HEADER -->
    <header>
        <iframe src="../html/header.html" style="border: none; width: 100%; height: 90px;"></iframe>
    </header>

<!-- ____________________________________________________________________________________________________________________________________ -->
    <!-- TESTE -->
    <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
            <!-- FOTO -->
            <div class="profile-pic">
  <section class="profile-picture">
    <div class="picture-container">
      <img src="#" alt="" class="profile-img" id="profile-image"> 
      <input type="file" id="image-upload" accept="image/jpeg, image/png" style="display: none;">
      <button class="change-photo" onclick="document.getElementById('image-upload').click()">Alterar foto</button>
    </div>
  </section>
</div>
                <!-- <span class="font-weight-bold">Edogaru</span>
                <span class="text-black-50">edogaru@mail.com.my</span> -->
            </div>
        </div>

        <!-- CONTAINER 1 -->
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Editar perfil</h4>
                </div>

                <!-- COLUNA 1 -->
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Nome</label>
                        <input type="text" class="form-control" placeholder="Primeiro nome">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Sobrenome</label>
                        <input type="text" class="form-control" placeholder="Sobrenome">
                    </div>
                </div>

                <!-- COLUNA 2 -->
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">E-mail</label>
                        <input type="text" class="form-control" placeholder=" ">
                    </div>

                <!-- COLUNA 3 -->
                    <div class="col-md-12">
                        <label class="labels">Telefone</label>
                        <input type="text" class="form-control" placeholder=" ">
                    </div>
        
                <!-- COLUNA 4 -->
                    <div class="col-md-12">
                        <label class="labels">Endreço</label>
                        <input type="text" class="form-control" placeholder="Rua/Logradouro">
                    </div>
                    
                <!-- COLUNA 5 -->
                    <div class="col-md-6">
                        <label class="labels">Número</label>
                        <input type="text" class="form-control" placeholder=" ">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">CEP</label>
                        <input type="text" class="form-control" placeholder=" ">
                    </div>

                <!-- COLUNA 6 -->
                    <div class="col-md-12">
                        <label class="labels">Complemento</label>
                        <input type="text" class="form-control" placeholder="Ex: apto, bloco, casa">
                    </div>

                <!-- COLUNA 7 -->
                <div class="col-md-6">
                    <label class="labels" for="estado">Estado</label>
                    <select class="form-control" id="estado" name="estado">
                        <option value="">Selecione o Estado</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="labels" for="cidade">Cidade</label>
                    <select class="form-control" id="cidade" name="cidade">
                        <option value="">Selecione primeiro um estado</option>
                    </select>
                </div>

                <!-- COLUNA 8 -->
                    <div class="col-md-6">
                        <label class="labels">Data de nascimento</label>
                        <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="sexo" class="labels">Gênero</label>
                            <select id="sexo" name="sexo" class="form-control" required>
                                <option value="" disabled selected>Selecione</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Feminino">Feminino</option>
                                <option value="Transgenero">Transgênero</option>
                                <option value="Agenero"> Agênero</option>
                                <option value="Fluido"> Gênero-fluido</option>
                                <option value="Neutro"> Gênero neutro</option>
                                <option value="Nao-Binario">Não-Binário</option>
                                <option value="Outro">Outro</option>
                                <option value="PrefiroNãoInformar">Prefiro não informar</option>
                            </select>
                    </div>

                <!-- COLUNA 9 -->
                    <div class="col-md-6">
                        <label for="civil" class="labels">Estado civil</label>
                            <select id="civil" name="civil" class="form-control" required>
                                <option value="" disabled selected>Selecione</option>
                                <option value="Solteiro">Solteiro(a)</option>
                                <option value="Divorciado">Divorciado(a)</option>
                                <option value="Separado">Separado(a)</option>
                                <option value="Viuvo">Viúvo(a)</option>
                                <option value="Casado">Casado(a)</option>
                            </select>
                    </div>
                    <div class="col-md-6">
                        <label for="sexo" class="labels">Orientação Sexual</label>
                            <select id="sexo" name="sexo" class="form-control" required>
                                <option value="" disabled selected>Selecione</option>
                                <option value="Hetero">Heterossexual</option>
                                <option value="Homo">Homossexual</option>
                                <option value="Bissexual">Bissexual</option>
                                <option value="Assexual">Assexual</option>
                                <option value="Pansexual">Pansexual</option>
                                <option value="Outro">Outro</option>
                            </select>
                    </div>

                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button">Salvar</button>
                </div>
            </div>
        </div>
    </div>

        <!-- CONTAINER 2 -->
        <div class="col-md-4">
            <div class="p-3 py-5">

            <!-- BOTÃO -->
            <div class="row mt-2">
                <!-- COLUNA 1 -->
                <div class="col-md-6">
                    <label for="deficiencias" class="labels">Necessidades Especiais</label>
                        <select id="deficiencias" name="deficiencias" class="form-control" required>
                            <option value="" disabled selected>Selecione</option>
                            <option value="Fisico">Deficiência física</option>
                            <option value="Visual">Deficiência visual</option>
                            <option value="auditivo">Deficiência auditiva</option>
                            <option value="Intelectual">Deficiência intelectual</option>
                            <option value="Psicossocial">Deficiência psicossocial</option>
                            <option value="Nao">Não</option>
                            <option value="Outro">Outro</option>
                        </select>
                </div>

                <!-- COLUNA 2 -->
                <div class="col-md-12">
                    <label class="labels">Área de atuação</label>
                    <input type="text" class="form-control" placeholder="Ex: padeiro, secretaria, desenvolvedor">
                </div>
            </div>
        </div>

        <!-- CARDS -->
                <div class="card">
                    <div class="card-expe">
                    <i class="fas fa-graduation-cap fa-xl" style="color: #e1b235;"></i> Escolaridade <span class="edit-icon" onclick="editarCampo(this)"><i class="fa-solid fa-pen-clip fa-lg"></i></span>
                    </div>
                    <div class="card-content" data-campo="escolaridade">
                    
                    </div>
                </div>

                <div class="card">
                    <div class="card-expe">
                    <i class="fas fa-star fa-xl" style="color: #e1b235;"></i> Competências <span class="edit-icon" onclick="editarCampo(this)"><i class="fa-solid fa-pen-clip fa-lg"></i></span>
                    </div>
                    <div class="card-content" data-campo="competencias">
                    
                    </div>
                </div>

                <div class="card">
                    <div class="card-expe">
                    <i class="fas fa-certificate fa-xl" style="color: #e1b235;"></i> Certificações <span class="edit-icon" onclick="editarCampo(this)"><i class="fa-solid fa-pen-clip fa-lg"></i></span>
                    </div>
                    <div class="card-content" data-campo="certificacoes"></div>
                </div>

                <div class="card">
                    <div class="card-expe">
                    <i class="fas fa-globe-americas fa-xl" style="color: #e1b235;"></i> Idiomas <span class="edit-icon" onclick="editarCampo(this)"><i class="fa-solid fa-pen-clip fa-lg"></i></span>
                    </div>
                    <div class="card-content" data-campo="idiomas">
                    
                    </div>
                </div>


                <div class="form-cv">
                    <label for="curriculo">Currículo:</label>
                        <div class="upload-curriculo">
                            <input type="file" id="curriculo" name="curriculo" accept="application/pdf">
                            <label for="curriculo"><i class="fa-solid fa-image fa-3x"></i></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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

    <script>
        // FOTO
// Função para carregar a pré-visualização da imagem
const inputImagem = document.getElementById('image-upload');
const previewImagem = document.getElementById('profile-image');

inputImagem.addEventListener('change', function(e) {
  if (e.target.files && e.target.files[0]) {
    const reader = new FileReader();

    reader.onload = function(e) {
      previewImagem.src = e.target.result;
    }
    reader.readAsDataURL(e.target.files[0]);
  }
});

// _______________________________________________________________
// CIDADE E ESTADOS
const estadoSelect = document.getElementById('estado');
const cidadeSelect = document.getElementById('cidade');

// Carrega estados do arquivo JSON
fetch('estados.json')
  .then(response => response.json())
  .then(estados => {
    estados.forEach(estado => {
      const option = document.createElement('option');
      option.value = estado.id;
      option.text = estado.nome;
      estadosSelect.add(option);
    });
  });

// Evento de mudança no select de estados
estadoSelect.addEventListener('change', () => {
  const estadoId = parseInt(estadoSelect.value, 10); // Converte para número
  cidadeSelect.innerHTML = '<option value="">Selecione</option>';
  cidadeSelect.disabled = true;

  if (estadoId) {
    // Carrega cidades do arquivo JSON
    fetch('cidades.json')
      .then(response => response.json())
      .then(cidades => {
        // Filtra cidades do estado selecionado
        const cidadesDoEstado = cidades.filter(cidade => cidade.estado_id === estadoId);

        cidadesSelect.disabled = false;
        cidadesDoEstado.forEach(cidade => {
          const option = document.createElement('option');
          option.value = cidade.id;
          option.text = cidade.nome;
          cidadesSelect.add(option);
        });
      });
  }
});

// ______________________________________________________________________
// CARDS
function editarCampo(elemento) {
    const cardContent = elemento.parentElement.nextElementSibling;
    const campo = cardContent.dataset.campo;
    const conteudoOriginal = cardContent.innerHTML;
  
    // Substitui o conteúdo por um campo de input para edição
    cardContent.innerHTML = `
      <textarea>${conteudoOriginal}</textarea>
      <button onclick="salvarEdicao(this, '${campo}')">Salvar</button>
      <button onclick="cancelarEdicao(this, '${conteudoOriginal}')">Cancelar</button>
    `;
  }
  
  function salvarEdicao(elemento, campo) {
    const novoConteudo = elemento.previousElementSibling.value;
    const cardContent = elemento.parentElement;
  
    // Lógica para enviar os dados para o servidor (AJAX)
    console.log("Salvando:", campo, "-", novoConteudo);
  
    // Atualiza o conteúdo do card
    cardContent.innerHTML = novoConteudo;
  }
  
  function cancelarEdicao(elemento, conteudoOriginal) {
    const cardContent = elemento.parentElement;
    cardContent.innerHTML = conteudoOriginal;
  }

    </script>
</body>
</html>