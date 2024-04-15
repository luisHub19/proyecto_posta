@vite(['resources/sass/_secdeldia.scss'])
<div class="secdeldia">
    <div class="Nota-principal">
        <div class="foto-principal">
        <img :src="noticia.imagen" alt="Noticia del día">
        </div>
        <h3 class="Titulo-principal">
            <a :href="'/noticia/' + noticia.idnoticia">{{ noticia.titulo }}</a>
        </h3>
    </div>
    <div class="par-principal">
        <div>
            <div class="foto-secundaria">

            </div>
            <div class="Titulo-secundario">
                <a :href="'/noticia/' + noticia.idnoticia">{{ noticia.titulo }}</a>
            </div>
        </div>
        <div>
            <div class="foto-secundaria">

            </div>
            <div class="Titulo-secundario">
                <a :href="'/noticia/' + noticia.idnoticia">{{ noticia.titulo }}</a>
            </div>
        </div>
    </div>
</div>





{{-- <div style="width: 600px; height: 350px; border: 1px solid black;">
    <div>
         <h1>imagen</h1>
        <img src="" alt="">
    </div>
    <div>
        <h3>
            titulo
        </h3>
    </div>
</div>   --}}

<script>
import mostrarNoticias from 'resources/js/newsAPI.js';

export default {
  data() {
    return {
      noticias: []
    };
  },
  mounted() {
    mostrarNoticias((data) => {
      this.noticias = data;
    });
  }
};
</script>
