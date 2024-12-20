<?php 
   session_start();

   include("php/config.php");
   if(!isset($_SESSION['valid'])){
    header("Location: index.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="home.css">
    <title>Home</title>

    <!-- ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- teste -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php">Logo</a> </p>
        </div>

        <div class="right-links">

            <?php 
            
            $id = $_SESSION['id'];
            $query = mysqli_query($con,"SELECT*FROM dados WHERE Id=$id");

            while($result = mysqli_fetch_assoc($query)){
                $res_Uname = $result['Username'];
                $res_Senha = $result['Senha'];
                $res_Email = $result['Email'];
                $res_Age = $result['age'];
                $res_id = $result['Id'];
                $res_Telefone = $result['Telefone'];
                $res_Endereço = $result['Endereço'];
                $res_Numero = $result['Numero'];
                $res_CEP = $result['CEP'];
                $res_Complemento = $result['Complemento'];
                $res_Cidade = $result['Cidade'];
                $res_Genero = $result['Genero'];
                $res_Estado_civil = $result['Estado_civil'];
                $res_Orientacao_sexual = $result['Orientacao_sexual'];
                $res_PCD = $result['PCD'];
                $res_Atuacao = $result['Atuacao'];
                $res_Escolaridade = $result['Escolaridade'];
                $res_Competencia = $result['Competencia'];
                $res_Certificacao = $result['Certificacao'];
                $res_Idioma = $result['Idioma'];
            }
            
            echo "<a class='btn btn-primary profile-button' href='edit.php?Id=$res_id'>Editar Perfil</a>";
            ?>

            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>

        </div>
    </div>

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
                        <p class="form-control"><?php echo $res_Uname ?></p>
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Senha</label>
                        <p class="form-control"><?php echo $res_Senha ?></p>
                    </div>
                </div>

                <!-- COLUNA 2 -->
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">E-mail</label>
                        <p class="form-control"><?php echo $res_Email ?></p>
                    </div>

                <!-- COLUNA 3 -->
                    <div class="col-md-12">
                        <label class="labels">Telefone</label>
                        <p class="form-control"><?php echo $res_Telefone ?></p>
                    </div>
        
                <!-- COLUNA 4 -->
                    <div class="col-md-12">
                        <label class="labels">Endreço</label>
                        <p class="form-control"><?php echo $res_Endereço ?></p>
                    </div>
                    
                <!-- COLUNA 5 -->
                    <div class="col-md-6">
                        <label class="labels">Número</label>
                        <p class="form-control"><?php echo $res_Numero ?></p>
                    </div>
                    <div class="col-md-6">
                        <label class="labels">CEP</label>
                        <p class="form-control"><?php echo $res_CEP ?></p>
                    </div>

                <!-- COLUNA 6 -->
                    <div class="col-md-12">
                        <label class="labels">Complemento</label>
                        <p class="form-control"><?php echo $res_Complemento ?></p>
                    </div>

                <!-- COLUNA 7 -->
                <div class="col-md-6">
                    <label class="labels" for="estado">Estado</label>
                    <select class="form-control" id="estado" name="estado">
                    <p class="form-control"><?php echo $res_Estado ?></p>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="labels" for="cidade">Cidade</label>
                    <p class="form-control"><?php echo $res_Cidade ?></p>
                </div>

                <!-- COLUNA 8 -->
                    <div class="col-md-6">
                        <label class="labels">Data de nascimento</label>
                        <p class="form-control"><?php echo $res_Age ?></p>
                    </div>
                    <div class="col-md-6">
                        <label for="sexo" class="labels">Gênero</label>
                        <p class="form-control"><?php echo $res_Genero ?></p>
                    </div>

                <!-- COLUNA 9 -->
                    <div class="col-md-6">
                        <label for="civil" class="labels">Estado civil</label>
                        <p class="form-control"><?php echo $res_Estado_civil ?></p>
                            </select>
                    </div>
                    <div class="col-md-6">
                        <label for="sexo" class="labels">Orientação Sexual</label>
                        <p class="form-control"><?php echo $res_Orientacao_sexual ?></p>
                    </div>

                <div class="mt-5 text-center">
                    <!-- <button class="btn btn-primary profile-button">Salvar</button> -->
                    <a class='btn btn-primary profile-button' href='edit.php?Id=$res_id'>Editar Perfil</a>
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
                    <p class="form-control"><?php echo $res_PCD ?></p>
                </div>

                <!-- COLUNA 2 -->
                <div class="col-md-12">
                    <label class="labels">Área de atuação</label>
                    <p class="form-control"><?php echo $res_Atuacao ?></p>
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

</body>
</html>