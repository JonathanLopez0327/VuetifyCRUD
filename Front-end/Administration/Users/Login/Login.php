<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <title>Inicio Sesion</title>

    <!-- Css -->
    <link rel="stylesheet" href="../../../assets/css/Administration/Users/Login/Login.css">

    <!-- Vurify -->
    <link rel="stylesheet" href="../../../assets/css/css">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../assets/css/vuetify.min.css">

</head>
<body>

    <!-- Contenedor -->
    <div id="app">

      <v-app>

            <!-- Contenido -->
            <div class="contenido">

                <header class="header"></header>

                <!-- *************************************** -->
                <div class="login-form">

                    
                    <div class="form">
                            
                            <div class="titles">
                                    <h5>Inicio Sesion</h5>
                                    <hr>
                            </div>

                            <div class="c-form">
                            <v-row align="center">
    
                                    <v-form
                                    ref="form"
                                    color="#fff"
                                    v-model="valid"
                                    :lazy-validation="lazy"
                                    >
                                    <v-text-field
                                        v-model="name"
                                        :counter="25"
                                        :rules="nameRules"
                                        label="Nombre de Usuario"
                                        prepend-inner-icon="mdi-account"
                                        dark
                                        color="#064a76"
                                        required
                                    ></v-text-field>

                                    <v-text-field
                                        v-model="password"
                                        :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                                        :rules="[rules.required, rules.min]"
                                        :type="show1 ? 'text' : 'password'"
                                        name="input-10-1"
                                        label="Contraseña"
                                        hint=""
                                        counter
                                        dark
                                        color="#064a76"
                                        prepend-inner-icon="mdi-lock"
                                        @click:append="show1 = !show1"
                                    ></v-text-field>

                                    <v-btn
                                        :disabled="!valid"
                                        color="success"
                                        class="mr-4 mt-4"
                                        @click="validate"
                                    >
                                        Iniciar
                                    </v-btn>

                                    <v-btn
                                        color="error"
                                        class="mr-4 mt-4"
                                        @click="reset"
                                    >
                                        Cancelar
                                    </v-btn>

                                    <v-btn
                                        color="warning mt-4"
                                        @click="resetValidation"
                                    >
                                        Reiniciar
                                    </v-btn>
                                    </v-form>
                            </v-row>

                            </div>

                    </div>

                        <div class="one"></div>
                        <div class="two">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f8a01c" fill-opacity="1" d="M0,128L1440,320L1440,0L0,0Z"></path></svg>
                        </div>
                        <div class="three">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#064a76" fill-opacity="1" d="M0,128L1440,320L1440,0L0,0Z"></path></svg>
                        </div>

                </div>

                <!-- ************************************** -->
                <div class="login-style">

                <section>
                    <div class="bgPulse">

                        <div>
                            <div class="o-two"></div>
                            <div class="o-one"></div>
                        </div>

                        <div class="ooo">
                            <div class="o-three"></div>
                            <div class="o-four"></div>
                        </div>

                       <div>
                           
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>

                       </div>

                        <center>
                        <div class="images-l">
                                <img src="../../../assets/images/logo2.png" alt="">
                        </div>
                        </center>
                    </div>
                </section>

                </div>

                </div>



      <!-- Js -->
        <script src="../../../assets/js/vue.js"></script>
        <script src="../../../assets/js/vuetify.js"></script>
        <script src="../../../assets/js/99eb8c8193.js"></script>

        <script src="../../../assets/js/jquery.js"></script>
        <script src="../../../assets/js/Administration/Users/Login/mainLogin.js"></script>

      </v-app>

    </div>

</body>
</html>
