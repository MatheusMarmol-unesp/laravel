<div class="input-field">
    <input type="text" name="nome" id="nome" value="{{ isset($linha) ? $linha->nome : '' }}" required>
    <label for="nome">Nome</label>
</div>

<div class="input-field">
    <input type="text" name="celular" id="celular" value="{{ isset($linha) ? $linha->celular : '' }}" required>
    <label for="celular">Celular</label>
</div>

<div class="input-field">
    <select name="id_curso" id="id_curso" class="browser-default" required>
        <option value="" disabled {{ !isset($linha) ? 'selected' : '' }}>Escolha um curso</option>
        @foreach($cursos as $curso)
            <option value="{{ $curso->id }}" {{ isset($linha) && $linha->id_curso == $curso->id ? 'selected' : '' }}>{{ $curso->titulo }}</option>
        @endforeach
    </select>
</div>

<div class="file-field input-field">
    <div class="btn deep-orange">
        <span>Imagem</span>
        <input type="file" name="imagem" {{ !isset($linha) ? 'required' : '' }}>
    </div>
    <div class="file-path-wrapper">
        <input class="file-path" type="text" placeholder="Selecione uma imagem">
    </div>
    @if(isset($linha->imagem))
        <div class="input-field">
            <img width="150" src="{{ asset($linha->imagem) }}" />
        </div>
    @endif
</div>
