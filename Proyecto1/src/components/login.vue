<template>
    <div class="contenedor-img-form">
        <div >
            <!-- Agregar el logo aquí -->
            <img id="logo" src="@/assets/colegio_logo.png" alt="Logo del Colegio">
            <h2 id="texto_titulo"> 
                Institucion Educativa Mariano Melgar
            </h2>
        </div>
        <form action="" class="form_l">

            <!-- Formulario -->
            <div id="l_input">
                <label for="dni" id="texto"> 
                    Usuario:
                </label>
                <input type="text" name="" id="dni" required>
            </div>

            <div id="l_input">
                <label for="password" id="texto"> 
                    Contraseña:
                </label>
                <input type="password" id="password" required>
            </div>

            <div class="contenedor-i-c">
                <button id="boton" type="submit">
                    Ingresar
                </button>
                <a href="#" id="texto_olvido"> ¿Olvidaste tu contraseña? </a>
            </div>            
            <!-- Fin Formulario -->

        </form>
    </div>
</template>

<style scoped>
    @import url('https://fonts.googleapis.com/css2?family=Magra&display=swap');
    .contenedor-img-form{

        background-color: #F4F4F4;
        border-radius: 20px 20px 20px 20px;
        box-shadow: 10px 8px 12px #888888;
        margin: auto;
        width: 450px;
        height: 90vh;
    }   
    #texto_titulo{
        font-weight: bold;
        font-size: 25px;
        font-family: 'Magra', sans-serif;
        color: #0C1340;
        display: flex;
        justify-content: center;
        
        
    }
    #texto{
        font-family: 'Magra', sans-serif;
        font-weight: bold;
        color: #0C1340;
        margin-top: 10px;
        margin-left: 10px;
        margin-bottom: 20px;
    }
    #logo{
        border-radius: 20px 20px 20px 20px;
        width: 100%;
        height: 300px;
    }
    #l_input{
        
        display: flex;
        flex-direction: column;
    }
    #dni,#password{
        margin-left: 10px;
        border: none;
        background-color: #D9D9D9;
        width: 420px;
        height: 40px;
    }
    .contenedor-i-c{
        display: flex;
        flex-direction: column;
        align-items: center; /* Centra horizontalmente los elementos */
        justify-content: center; /* Centra verticalmente los elementos */
        margin-top: 20px;
    }
    #boton{
        background-color: #0C1340;
        border-radius: 10px;
        margin-bottom: 10px;
        color: #FFFFFF;
        width: 148px;
        height: 60px;
        
    }
    #texto_olvido{
        font-family: 'Magra', sans-serif;;
        color: #0C1340;
        font-weight: bold;
    }
    
</style>