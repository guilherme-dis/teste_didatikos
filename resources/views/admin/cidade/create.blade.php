
<h1>Cadastro de Cidade</h1>
<form action="{{ route('cidade.save') }}" method="post">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome"  >

    <label for="estado">Estado:</label>
    <input type="text" name="estado" id="estado"  >

    <label for="pais">Pais:</label>
    <input type="text" name="pais" id="pais"   >

    <button type="submit">Enviar</button>


</form>




