/*Obtener provincias y municipios*/
let selectProv = document.getElementById('prov');
let selectMuni = document.getElementById('muni');
/*Funcion para cargar provincias*/
function cargarProvincias(){
    let url = `https://apis.datos.gob.ar/georef/api/provincias?campos=id,nombre`;
    fetch(url)
    .then(res => res.ok? res.json():Promise.reject(res))
    .then(datos=> {
        console.log(datos)
        let opciones = `<option value="" selected disabled>Seleccione provincia...</option>`;
        datos.provincias.forEach(el => opciones += `<option value="${el.id}"> ${el.nombre} </option>`);
        selectProv.innerHTML = opciones;
    })
    .catch(err => {
        console.log(err);
        let mensaje = err.statusText || "Ocurrio un error";
        selectProv.nextElementSibling.innerHTML = `Error${err.status}:
        ${mensaje}`;
    });
}
/*Funcion para cargar municipios */
function cargarMunicipios(prov){
    let urlDos = `https://apis.datos.gob.ar/georef/api/municipios?provincia=${prov}&campos=id,nombre&max=100`;
fetch(urlDos)
.then(res => res.ok? res.json():Promise.reject(res))
.then(datos => {
    console.log(datos);
    let opciones = `<option value="" selected disabled>Seleccione municipio...</option>`;
    datos.municipios.forEach(el => opciones += `<option value= "${el.nombre}"> ${el.nombre} </option>`);
    selectMuni.innerHTML = opciones;
})
.catch(err => {
    console.log(err);
    let mensaje = err.statusText || "Ocurrio un error";
        selectMuni.nextElementSibling.innerHTML = `Error${err.status}:
        ${mensaje}`;
})
}
document.addEventListener('DOMContentLoaded', cargarProvincias);
selectProv.addEventListener('change', e=> cargarMunicipios(e.target.value));
