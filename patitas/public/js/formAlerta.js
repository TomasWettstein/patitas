//Capturo inputs
let inAnimal = document.getElementById('animal');
let inNombre = document.getElementById('nombre');
let inZona = document.getElementById('zona');
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
let divZona = inZona.parentElement;
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
inZona.addEventListener('click', function(event){
    event.preventDefault();
    obligatorio.classList.add('_error');
    divZona.append(obligatorio);
});
inZona.addEventListener('blur', function(event){
    if(this.value == ""){
        divZona.append(obligatorio);
    }else{
        divZona.removeChild(obligatorio);
    }
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

