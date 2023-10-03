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
                <a href="#" id="texto"> ¿Olvidaste tu contraseña? </a>
            </div>            
            <!-- Fin Formulario -->

        </form>
    </div>
</template>

<style scoped>
    .contenedor-img-form{
        border: 5px solid black;
        background-color: #F4F4F4;
        
        
        width: 509px;
        height: 100vh;
    }   
    #texto_titulo{
        color: #0C1340;
        display: flex;
        justify-content: center;
    }
    #texto{
        color: #0C1340;
        margin-top: 10px;
        margin-left: 20px;
        margin-bottom: 20px;
    }
    #logo{
        width: 509px;
        height: 291px;
    }
    #l_input{
        
        display: flex;
        flex-direction: column;
    }
    #dni,#password{
        margin-left: 20px;
        width: 423px;
        height: 45px;
    }
    .contenedor-i-c{
        display: flex;
        flex-direction: column;
        align-items: center; /* Centra horizontalmente los elementos */
        justify-content: center; /* Centra verticalmente los elementos */
    }
    
</style>