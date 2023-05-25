document.getElementById("formulario-busqueda").addEventListener("submit", async function(event) {
    event.preventDefault(); // Evita que se envíe el formulario por defecto
  
    const terminoBusqueda = document.getElementById("termino_busqueda").value;
  
    await buscarResultados(terminoBusqueda);
  });
  
  async function buscarResultados(termino) {
    const url = "busqueda.php?termino_busqueda=" + termino;
  
    const response = await fetch(url);
    const data = await response.json();
  
    // Actualiza la tabla con los resultados
    const tabla = document.getElementById("tabla-datos");
    const tbody = tabla.querySelector("tbody");
    tbody.innerHTML = ""; // Limpia el contenido actual de la tabla
  
    data.forEach((fila) => {
      const tr = document.createElement("tr");
  
      Object.values(fila).forEach((valor) => {
        const td = document.createElement("td");
        td.textContent = valor;
        tr.appendChild(td);
      });
  
      tbody.appendChild(tr);
    });
  }