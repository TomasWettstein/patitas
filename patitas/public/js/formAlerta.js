//Capturo inputs
let inAnimal = document.getElementById('animal');
let inNombre = document.getElementById('nombre');
let inColor = document.getElementById('color');
let inRaza = document.getElementById('raza');
let inDetalle = document.getElementById('detalle');
let inCategoria = document.getElementById('categoria');
//Creo los elementos <p> y les agrego texto
let obligatorio = document.createElement('p');
obligatorio.innerText = "Este campo es obligatorio";
let opcional = document.createElement('p');
opcional.innerText = "Este campo es opcional";
//Capturo el div padre de cada input
let divAnimal = inAnimal.parentElement;
let divNombre = inNombre.parentElement;
let divColor = inColor.parentElement;
let divRaza = inRaza.parentElement;
let divDetalle = inDetalle.parentElement;
let divCategoria = inCategoria.parentElement;
//Funciones de mensajes de aviso
inAnimal.addEventListener('click', function(event){
    event.preventDefault();
    obligatorio.classList.add('_error');
    divAnimal.append(obligatorio);
});
inAnimal.addEventListener('blur', function(event){
    if(this.value == ""){
        divAnimal.append(obligatorio);
    }else{
        divAnimal.removeChild(obligatorio);
    }
});
inNombre.addEventListener('click', function(event){
    event.preventDefault();
    opcional.classList.add('text-warning');
    divNombre.append(opcional);
});
inNombre.addEventListener('blur', function(event){
    event.preventDefault();
    divNombre.removeChild(opcional);
});
inColor.addEventListener('click', function(event){
    event.preventDefault();
    opcional.classList.add('text-warning');
    divColor.append(opcional);
});
inColor.addEventListener('blur', function(event){
    event.preventDefault();
    divColor.removeChild(opcional);
});
inRaza.addEventListener('click', function(event){
    event.preventDefault();
    opcional.classList.add('text-warning');
    divRaza.append(opcional);
});
inRaza.addEventListener('blur', function(event){
    event.preventDefault();
    divRaza.removeChild(opcional);
});
inDetalle.addEventListener('click', function(event){
    event.preventDefault();
    obligatorio.classList.add('_error');
    divDetalle.append(obligatorio);
});
inDetalle.addEventListener('blur', function(event){
    if(this.value == ""){
        divDetalle.append(obligatorio);
    }else{
        divDetalle.removeChild(obligatorio);
    }
});
inCategoria.addEventListener('click', function(event){
    event.preventDefault();
    obligatorio.classList.add('_error');
    divCategoria.append(obligatorio);
});
inCategoria.addEventListener('blur', function(event){
    if(this.value == "#"){
        divCategoria.append(obligatorio);
    }else{
        divCategoria.removeChild(obligatorio);
    }
});
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

