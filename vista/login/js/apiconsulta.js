
let boton=document.getElementById("boton");

boton.addEventListener("click", traerDatos)

function traerDatos(){
    let dni=document.getElementById("dni").value;
    fetch("https://apiperu.dev/api/dni/"+dni+"?api_token=c9fbc0d5352432a5723bb0d51f4022f97f6b205cf50b7d1512e5d110a9763b1d")
    .then((datos)=>datos.json())
    .then((datos)=>{
        console.log(datos.data)
        document.getElementById("doc").value=datos.data.numero
        document.getElementById("nombre").value=datos.data.nombres
        document.getElementById("apellido").value=datos.data.apellido_paterno + " " + datos.data.apellido_materno
    })
}