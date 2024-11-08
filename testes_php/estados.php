<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estados.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <title>Filtro de Estado e Cidade</title>
</head>
<body>
    <div class="col-md-5 border-right">
        <div class="p-3 py-5">
            <h4 class="text-right">Editar perfil</h4>
            <div class="row mt-2">
                <!-- Campo de Estado -->
                <div class="col-md-6">
                    <label for="estado" class="labels">Estado</label>
                    <select class="form-control" id="estado" name="estado" onchange="carregarCidades()">
                        <option value="">Selecione o Estado</option>
                    </select>
                </div>

                <!-- Campo de Cidade -->
                <div class="col-md-6">
                    <label for="cidade" class="labels">Cidade</label>
                    <select class="form-control" id="cidade" name="cidade">
                        <option value="">Selecione o Estado primeiro</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript para AJAX -->
    <script>
        // Carrega os estados ao carregar a página
        document.addEventListener("DOMContentLoaded", function() {
            carregarEstados();
        });

        function carregarEstados() {
            const estadoSelect = document.getElementById("estado");

            fetch("carregar_estados.php")
                .then(response => response.json())
                .then(estados => {
                    estados.forEach(estado => {
                        const option = document.createElement("option");
                        option.value = estado.id;
                        option.textContent = estado.nome;
                        estadoSelect.appendChild(option);
                    });
                })
                .catch(error => console.error("Erro ao carregar estados:", error));
        }

        function carregarCidades() {
            const estadoId = document.getElementById("estado").value;
            const cidadeSelect = document.getElementById("cidade");

            // Limpa o campo de cidades
            cidadeSelect.innerHTML = '<option value="">Carregando...</option>';

            fetch("carregar_cidades.php?estado_id=" + estadoId)
                .then(response => response.json())
                .then(cidades => {
                    cidadeSelect.innerHTML = '<option value="">Selecione uma cidade</option>';
                    cidades.forEach(cidade => {
                        const option = document.createElement("option");
                        option.value = cidade.id;
                        option.textContent = cidade.nome;
                        cidadeSelect.appendChild(option);
                    });
                })
                .catch(error => console.error("Erro ao carregar cidades:", error));
        }
    </script>
</body>
</html>
