<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Bootstrap</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card shadow-lg border-0 rounded-4">
                    
                    <div class="card-header bg-primary text-white text-center rounded-top-4">
                        <h3>Operaciones Matemáticas</h3>
                    </div>

                    <div class="card-body p-4">

                        <form id="formCalculadora">

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Número 1</label>
                                <input type="number" class="form-control" id="num1" placeholder="Ingrese el primer número" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Número 2</label>
                                <input type="number" class="form-control" id="num2" placeholder="Ingrese el segundo número" required>
                            </div>

                            <!-- Botones de Operaciones -->
                            <div class="d-flex gap-2 mb-3">
                                <button type="button" class="btn btn-success flex-fill" onclick="calcular('suma')">
                                    Sumar
                                </button>
                                <button type="button" class="btn btn-danger flex-fill" onclick="calcular('resta')">
                                    Restar
                                </button>
                                <button type="button" class="btn btn-warning flex-fill" onclick="calcular('multi')">
                                    Multiplicar
                                </button>
                            </div>

                        </form>

                        <div class="alert alert-info mt-2 text-center fw-bold" id="resultado">
                            Resultado: 0
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <script>
        function calcular(operacion) {
            // Obtenemos los valores de los inputs
            let n1 = parseFloat(document.getElementById("num1").value) || 0;
            let n2 = parseFloat(document.getElementById("num2").value) || 0;
            let total = 0;
            let simbolo = "";

            // Lógica según el botón presionado
            if (operacion === 'suma') {
                total = n1 + n2;
                simbolo = "+";
            } else if (operacion === 'resta') {
                total = n1 - n2;
                simbolo = "-";
            } else if (operacion === 'multi') {
                total = n1 * n2;
                simbolo = "×";
            }

            // Mostramos el resultado de forma elegante
            document.getElementById("resultado").innerHTML = 
                `Resultado (${simbolo}): ${total}`;
        }
    </script>

</body>
</html>