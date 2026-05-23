<div class="input-field">
    <input type="text" name="titulo" id="titulo" value="{{ isset($linha) ? $linha->titulo : '' }}">
    <label for="titulo">Título</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" id="descricao" value="{{ isset($linha) ? $linha->descricao : '' }}">
    <label for="descricao">Descrição</label>
</div>

<div class="input-field">
    <input type="number" name="valor" id="valor" step="0.01" value="{{ isset($linha) ? $linha->valor : '' }}">
    <label for="valor">Valor</label>
</div>

<div class="input-field">
    <select name="publicado" id="publicado">
        <option value="não" {{ isset($linha) && $linha->publicado == 'não' ? 'selected' : '' }}>Não</option>
        <option value="sim" {{ isset($linha) && $linha->publicado == 'sim' ? 'selected' : '' }}>Sim</option>
    </select>
    <label for="publicado">Publicado</label>
</div>

<div class="file-field input-field">
    <div class="btn deep-orange">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path" type="text" placeholder="Selecione uma imagem">
    </div>
</div>
