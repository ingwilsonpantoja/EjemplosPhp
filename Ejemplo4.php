<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Modern PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-slate-900 flex items-center justify-center min-h-screen">

<?php
$resultado = "";
if (isset($_POST['calcular'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $op = $_POST['operacion'];

    if (is_numeric($n1) && is_numeric($n2)) {
        switch ($op) {
            case '+': $resultado = $n1 + $n2; break;
            case '-': $resultado = $n1 - $n2; break;
            case '*': $resultado = $n1 * $n2; break;
            case '/': 
                $resultado = ($n2 != 0) ? $n1 / $n2 : "Error: Div 0";
                break;
        }
    } else {
        $resultado = "Ingresa números";
    }
}
?>

<div class="bg-white p-8 rounded-3xl shadow-2xl w-full max-w-md">
    <h2 class="text-2xl font-bold text-slate-800 mb-6 text-center">Calculadora Pro</h2>
    
    <form method="post" class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-slate-600 mb-1">Primer Número</label>
            <input type="number" step="any" name="n1" required
                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:outline-none transition-all"
                placeholder="0.00">
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-600 mb-1">Operación</label>
            <select name="operacion" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:outline-none appearance-none bg-white">
                <option value="+">Suma (+)</option>
                <option value="-">Resta (-)</option>
                <option value="*">Multiplicación (×)</option>
                <option value="/">División (÷)</option>
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-slate-600 mb-1">Segundo Número</label>
            <input type="number" step="any" name="n2" required
                class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-indigo-500 focus:outline-none transition-all"
                placeholder="0.00">
        </div>

        <button type="submit" name="calcular"
            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-xl shadow-lg shadow-indigo-200 transition-all transform active:scale-95">
            Calcular Resultado
        </button>
    </form>

    <?php if ($resultado !== ""): ?>
    <div class="mt-8 p-4 bg-indigo-50 rounded-2xl border border-indigo-100 text-center">
        <span class="block text-sm text-indigo-400 font-semibold uppercase tracking-wider">Resultado</span>
        <span class="text-3xl font-bold text-indigo-900 leading-tight">
            <?php echo $resultado; ?>
        </span>
    </div>
    <?php endif; ?>
</div>

</body>
</html>