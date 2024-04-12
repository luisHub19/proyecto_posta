<form action="{{ route('update') }}" method="POST" class="formulario" id="formulario">
    @csrf
    <!-- Grupo: Título -->
    <div class="formulario_grupo" id="grupo_titulo">
        <label for="titulo" class="formulario__label">Título</label>
        <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="titulo" id="titulo" placeholder="Ingrese título de la noticia">
        </div>
    </div>

    <!-- Grupo: Imagen -->
    <div class="formulario_grupo" id="grupo_imagen">
        <label for="imagen" class="formulario__label">Imagen</label>
        <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="imagen" id="imagen" placeholder="Ingrese URL de la imagen">
        </div>
    </div>

    <!-- Grupo: Pie de imagen -->
    <div class="formulario_grupo" id="grupo_pie_de_imagen">
        <label for="pie_de_imagen" class="formulario__label">Pie de imagen</label>
        <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="pie_de_imagen" id="pie_de_imagen" placeholder="Ingrese pie de imagen de la noticia">
        </div>
    </div>

    <!-- Grupo: Descripción -->
    <div class="formulario_grupo" id="grupo_descripcion">
        <label for="descripcion" class="formulario__label">Descripción</label>
        <div class="formulario__grupo-input">
            <textarea class="formulario__input" name="descripcion" id="descripcion" placeholder="Escriba la descripción aquí..." style="line-height: 1.2;"></textarea>
        </div>
    </div>

    <!-- Grupo: Autor -->
    <div class="formulario_grupo" id="grupo_autor">
        <label for="autor" class="formulario__label">Autor</label>
        <div class="formulario__grupo-input">
            <input type="text" class="formulario__input" name="autor" id="autor" placeholder="Ingrese autor de la noticia">
        </div>
    </div>

<!-- Grupo: Categorías -->
<div class="formulario_grupo" id="grupo_categoria">
    <label for="categoria" class="formulario__label">Categorías</label>
    <div class="formulario__grupo-input">
        @foreach ($categorias as $categoria)
            <input type="checkbox" name="categorias[]" id="categoria_{{ $categoria->idcategoria }}" value="{{ $categoria->idcategoria }}" class="formulario__input">
            <label for="categoria_{{ $categoria->idcategoria }}">{{ $categoria->nombre }}</label><br>
        @endforeach
    </div>
</div>




    <!-- Botón de envío -->
    <div class="formulario_grupo formulario_grupo-btn-enviar">
        <button type="submit" class="formulario__btn">Subir</button>
    </div>
</form>
