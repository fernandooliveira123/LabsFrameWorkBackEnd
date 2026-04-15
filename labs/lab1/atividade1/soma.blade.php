<!doctype html>
<html>
<body>
    <h1>Calculadora</h1>

    <form method="GET" action="/soma">
        <input name="a" type="number" required placeholder="Número A">
        <input name="b" type="number" required placeholder="Número B">

        <select name="operacao">
            <option value="soma">Somar</option>
            <option value="multiplicar">Multiplicar</option>
        </select>

        <button>Calcular</button>
    </form>

    @if(isset($resultado))
        <h2>Resultado: {{ $resultado }}</h2>
    @endif
</body>
</html>