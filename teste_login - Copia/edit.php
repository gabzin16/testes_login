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
    <!-- ICON -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- teste -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Change Profile</title>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="home.php"> Logo</a></p>
        </div>

        <div class="right-links">
            <a href="#">Editar Perfil</a>
            <a href="php/logout.php"> <button class="btn">Log Out</button> </a>
        </div>
    </div>
    
            <?php 
               if(isset($_POST['submit'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $age = $_POST['age'];
                $senha = $_POST['Senha'];
                $telefone = $_POST['Telefone'];
                $endereço = $_POST['Endereço'];
                $numero = $_POST['Numero'];
                $CEP = $_POST['CEP'];
                $complemento = $_POST['Complemento'];
                $cidade = $_POST['Cidade'];
                $genero = $_POST['Genero'];
                $estado_civil = $_POST['Estado_civil'];
                $orientacao_sexual = $_POST['Orientacao_sexual'];
                $PCD = $_POST['PCD'];
                $atuacao = $_POST['Atuacao'];
                $escolaridade = $_POST['Escolaridade'];
                $competencia = $_POST['Competencia'];
                $certificacao = $_POST['Certificacao'];
                $idioma = $_POST['Idioma'];

                $id = $_SESSION['id'];

                $edit_query = mysqli_query($con,"UPDATE dados SET Username='$username', Email='$email', age='$age', Senha='$senha', Telefone='$telefone', Endereço='$endereço', Numero='$numero', CEP='$CEP', Nascimento='$nascimento', Complemento='$complemento', Cidade='$cidade', Genero='$genero', Estado_civil='$aestado_civil', Orientacao_sexual='$orientacao_sexual', PCDe='$PCD', Atuacao='$atuacao', Escolaridade='$escolaridade', Competencia='$competencia', Certificacao='$certificacao', Idioma='$idioma' WHERE Id=$id ") or die("error occurred");

                if($edit_query){
                    echo "<div class='message'>
                    <p>Profile Updated!</p>
                </div> <br>";
              echo "<a href='home.php'><button class='btn'>Go Home</button>";
       
                }
               }else{

                $id = $_SESSION['id'];
                $query = mysqli_query($con,"SELECT*FROM dados WHERE Id=$id ");

                while($result = mysqli_fetch_assoc($query)){
                    $res_Uname = $result['Username'];
                    $res_Senha = $result['Senha'];
                    $res_Email = $result['Email'];
                    $res_Age = $result['age'];
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

            ?>
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
                        <input type="text" class="form-control" value="<?php echo $res_Uname; ?>" placeholder="Primeiro nome">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Senha</label>
                        <input type="text" class="form-control" value="<?php echo $res_Senha; ?>" placeholder="Sobrenome">
                    </div>
                </div>

                <!-- COLUNA 2 -->
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">E-mail</label>
                        <input type="text" class="form-control" value="<?php echo $res_Email; ?>" placeholder=" ">
                    </div>

                <!-- COLUNA 3 -->
                    <div class="col-md-12">
                        <label class="labels">Telefone</label>
                        <input type="text" class="form-control" value="<?php echo $res_Telefone; ?>" placeholder=" ">
                    </div>
        
                <!-- COLUNA 4 -->
                    <div class="col-md-12">
                        <label class="labels">Endreço</label>
                        <input type="text" class="form-control" value="<?php echo $res_Endereço; ?>" placeholder="Rua/Logradouro">
                    </div>
                    
                <!-- COLUNA 5 -->
                    <div class="col-md-6">
                        <label class="labels">Número</label>
                        <input type="text" class="form-control" value="<?php echo $res_Numero; ?>" placeholder=" ">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">CEP</label>
                        <input type="text" class="form-control" value="<?php echo $res_CEP; ?>" placeholder=" ">
                    </div>

                <!-- COLUNA 6 -->
                    <div class="col-md-12">
                        <label class="labels">Complemento</label>
                        <input type="text" class="form-control" value="<?php echo $res_Complemento; ?>" placeholder="Ex: apto, bloco, casa">
                    </div>

                <!-- COLUNA 7 -->
                <div class="col-md-6">
                    <label class="labels" for="estado">Estado</label>
                    <select class="form-control" value="<?php echo $res_Estado; ?>" id="estado" name="estado">
                        <option value="">Selecione o Estado</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="labels" for="cidade">Cidade</label>
                    <select class="form-control" value="<?php echo $res_Cidade; ?>" id="cidade" name="cidade">
                        <option value="">Selecione primeiro um estado</option>
                    </select>
                </div>

                <!-- COLUNA 8 -->
                    <div class="col-md-6">
                        <label class="labels">Data de nascimento</label>
                        <input type="date" class="form-control" value="<?php echo $res_Age; ?>" id="dataNascimento" name="dataNascimento" value="" required>
                    </div>
                    <div class="col-md-6">
                        <label for="sexo" class="labels">Gênero</label>
                            <select id="sexo" name="sexo" value="<?php echo $res_Genero; ?>" class="form-control" required>
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
                            <select id="civil" name="civil" value="<?php echo $res_Estado_civil; ?>" class="form-control" required>
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
                            <select id="sexo" name="sexo" value="<?php echo $res_Orientacao_sexual; ?>" class="form-control" required>
                                <option value="" disabled selected>Selecione</option>
                                <option value="Hetero">Heterossexual</option>
                                <option value="Homo">Homossexual</option>
                                <option value="Bissexual">Bissexual</option>
                                <option value="Assexual">Assexual</option>
                                <option value="Pansexual">Pansexual</option>
                                <option value="Outro">Outro</option>
                            </select>
                    </div>
                    
                    <div class="field">
                    
                    <input type="submit" class="btn btn-primary profile-button"  name="submit" value="Update" required>
                </div>
                <!-- <div class="mt-5 text-center">
                <input type="submit" class="btn" name="submit" value="Update" required>
                </div> -->
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
                        <select id="deficiencias" name="deficiencias" value="<?php echo $res_PCD; ?>" class="form-control" required>
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
                    <input type="text" class="form-control" value="<?php echo $res_Atuacao; ?>" placeholder="Ex: padeiro, secretaria, desenvolvedor">
                </div>
            </div>
        </div>

        <!-- CARDS -->
                <div class="card">
                    <div class="card-expe">
                    <i class="fas fa-graduation-cap fa-xl" style="color: #e1b235;"></i> Escolaridade <span class="edit-icon" onclick="editarCampo(this)"><i class="fa-solid fa-pen-clip fa-lg"></i></span>
                    </div>
                    <div class="card-content" value="<?php echo $res_Escolaridade; ?>"data-campo="escolaridade">
                    
                    </div>
                </div>

                <div class="card">
                    <div class="card-expe">
                    <i class="fas fa-star fa-xl" style="color: #e1b235;"></i> Competências <span class="edit-icon" onclick="editarCampo(this)"><i class="fa-solid fa-pen-clip fa-lg"></i></span>
                    </div>
                    <div class="card-content" value="<?php echo $res_Competencia; ?>" data-campo="competencias">
                    
                    </div>
                </div>

                <div class="card">
                    <div class="card-expe">
                    <i class="fas fa-certificate fa-xl" style="color: #e1b235;"></i> Certificações <span class="edit-icon" onclick="editarCampo(this)"><i class="fa-solid fa-pen-clip fa-lg"></i></span>
                    </div>
                    <div class="card-content" value="<?php echo $res_Certificacao; ?>" data-campo="certificacoes"></div>
                </div>

                <div class="card">
                    <div class="card-expe">
                    <i class="fas fa-globe-americas fa-xl" style="color: #e1b235;"></i> Idiomas <span class="edit-icon" onclick="editarCampo(this)"><i class="fa-solid fa-pen-clip fa-lg"></i></span>
                    </div>
                    <div class="card-content" value="<?php echo $res_Idioma; ?>" data-campo="idiomas">
                    
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
<?php } ?>
<!-- _________________________________ -->
        
        

</body>
</html>