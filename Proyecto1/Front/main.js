const usuario = document.getElementById('dni')
const password = document.getElementById('password')
const boton = document.getElementById('boton')

boton.addEventListener('click',(e) => {
    e.preventDefault()
    const data = {
        usuario: usuario.value,
        password:password.value
    }
    console.log(data)
})