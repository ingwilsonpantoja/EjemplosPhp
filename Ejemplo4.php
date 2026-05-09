<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Visual PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen p-4">

<?php
$resultado = "0";
$operacion_realizada = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n1 = $_POST['n1'] ?? 0;
    $n2 = $_POST['n2'] ?? 0;
    $op = $_POST['operacion'] ?? '';

    if (is_numeric($n1) && is_numeric($n2)) {
        switch ($op) {
            case '+': $resultado = $n1 + $n2; $simbolo = "+"; break;
            case '-': $resultado = $n1 - $n2; $simbolo = "-"; break;
            case '*': $resultado = $n1 * $n2; $simbolo = "×"; break;
            case '/': 
                if ($n2 != 0) {
                    $resultado = $n1 / $n2;
                    $simbolo = "÷";
                } else {
                    $resultado = "Error";
                    $simbolo = "÷";
                }
                break;
        }
        $operacion_realizada = "$n1 $simbolo $n2 =";
    }
}
?>

<div class="bg-white p-6 rounded-[2rem] shadow-[0_20px_50px_rgba(0,0,0,0.05)] w-full max-w-sm border border-slate-100">
    <!-- Pantalla de Resultado -->
    <div class="bg-slate-900 rounded-2xl p-6 mb-6 text-right overflow-hidden border-b-4 border-indigo-500">
        <p class="text-slate-400 text-xs font-semibold uppercase tracking-widest mb-1 h-4">
            <?php echo $operacion_realizada; ?>
        </p>
        <h1 class="text-white text-4xl font-bold truncate">
            <?php echo $resultado; ?>
        </h1>
    </div>

    <form method="post" class="space-y-5">
        <div class="grid grid-cols-2 gap-4">
            <div class="space-y-1">
                <label class="text-[10px] font-bold text-slate-400 uppercase ml-2">Valor A</label>
                <input type="number" step="any" name="n1" value="<?php echo $_POST['n1'] ?? ''; ?>" required
                    class="w-full bg-slate-100 border-none rounded-xl px-4 py-3 focus:ring-2 focus:ring-indigo-500 outline-none transition-all font-semibold" placeholder="0">
            </div>
            <div class="space-y-1">
                <label class="text-[10px] font-bold text-slate-400 uppercase ml-2">Valor B</label>
                <input type="number" step="any" name="n2" value="<?php echo $_POST['n2'] ?? ''; ?>" required
                    class="w-full bg-slate-100 border-none rounded-xl px-4 py-3 focus:ring-2 focus:ring-indigo-500 outline-none transition-all font-semibold" placeholder="0">
            </div>
        </div>

        <!-- Botonera de Operaciones -->
        <div class="grid grid-cols-4 gap-3">
            <button type="submit" name="operacion" value="+" 
                class="h-14 bg-indigo-50 text-indigo-600 rounded-2xl font-bold text-xl hover:bg-indigo-600 hover:text-white transition-all active:scale-90 shadow-sm">
                +
            </button>
            <button type="submit" name="operacion" value="-" 
                class="h-14 bg-indigo-50 text-indigo-600 rounded-2xl font-bold text-xl hover:bg-indigo-600 hover:text-white transition-all active:scale-90 shadow-sm">
                -
            </button>
            <button type="submit" name="operacion" value="*" 
                class="h-14 bg-indigo-50 text-indigo-600 rounded-2xl font-bold text-xl hover:bg-indigo-600 hover:text-white transition-all active:scale-90 shadow-sm">
                ×
            </button>
            <button type="submit" name="operacion" value="/" 
                class="h-14 bg-indigo-50 text-indigo-600 rounded-2xl font-bold text-xl hover:bg-indigo-600 hover:text-white transition-all active:scale-90 shadow-sm">
                ÷
            </button>
        </div>

        <button type="button" onclick="window.location.href=window.location.href" 
            class="w-full py-3 text-slate-400 text-sm font-medium hover:text-rose-500 transition-colors">
            Limpiar pantalla
        </button>
    </form>
</div>

</body>
</html>