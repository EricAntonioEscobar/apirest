<script>

const eventosResultados = () => {

const tbodyID = document.getElementById('tbodyID');

axios.get('http://127.0.0.1:8000/api/articulo?id=4')
    .then(resp => resp.data)
    .then(data => {
        /* var arr = Object.entries(data); */

        /* const algo = data.data;
        console.log(Object.values(algo)); */
        console.log(data);

        while(tbodyID.firstChild){
            tbodyID.removeChild(tbodyID.firstChild);
        }
        data.data.map(resultados => {
            const fila = document.createElement('tr');

            const id = document.createElement('td');
            id.innerHTML = resultados.id;
            id.classList.add('text-center');
            fila.append(id);

            const descripcion = document.createElement('td');
            descripcion.innerHTML = resultados.descripcion;
            descripcion.classList.add('text-center');
            fila.append(descripcion);

            const precio = document.createElement('td');
            precio.innerHTML = resultados.precio;
            precio.classList.add('text-center');
            fila.append(precio);


            const stock = document.createElement('td');
            stock.innerHTML = resultados.stock;
            stock.classList.add('text-center');
            fila.append(stock);

            tbodyID.append(fila);
        })


    })
}
  </script>