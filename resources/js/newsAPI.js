import axios from 'axios';

export default function mostrarNoticias(callback) {
  axios.get('/news')
    .then(response => {
      const noticias = response.data;
      callback(noticias);
    })
    .catch(error => {
      console.error(error);
    });
}
