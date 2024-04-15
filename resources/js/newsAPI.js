import axios from 'axios';

export default function mostrarNoticias(callback) {
  axios.get('/news')
    .then(response => {
      let noticias = response.data;
      let titulos = noticias.map(noticia => noticia.titulo); // Assuming the title key is 'titulo'
      callback(noticias, titulos);
    })
    .catch(error => {
      console.error(error);
    });
}
