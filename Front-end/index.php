<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <title>Pagina Principal</title>

    <!-- Css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Vurify -->
    <link rel="stylesheet" href="assets/css/css">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/vuetify.min.css">

</head>
<body>

    <!-- Contenedor -->
    <div id="app">

      <v-app>

      <div class="contenedor active" id="contenedor">
          <header class="header">

            <div class="contenedor-logo">
                 <v-btn class="mx-2 bt-menu elevation-5" fab small color="#064a76" id="boton-menu">
                    <v-icon small class="" color="" dark>fas fa-bars</v-icon>
                 </v-btn>
             </div>

              <div class="barra-busqueda">
                  <input type="text" name="" id="" placeholder="Buscar">
                  <button  type="submit"><i class="fas fa-search"></i></button>
              </div>

              <div class="botones-header">
                <v-btn class="mx-2 bt elevation-5" fab x-small color="#064a76" id="boton-menu">
                    <v-icon small class="" color="" dark>fas fa-user</v-icon>
                </v-btn>

                <v-btn class="mx-2 bt elevation-5" fab x-small color="#064a76" id="boton-menu">
                    <v-icon small class="" color="" dark>fas fa-cog</v-icon>
                </v-btn>

                <!-- <a href="" class="avatar"><img src="" alt=""></a> -->

                <v-btn class="mx-2 bt elevation-5" fab x-small color="#064a76" id="boton-menu">
                    <v-icon small class="" color="" dark>fas fa-cog</v-icon>
                </v-btn>
              </div>
          </header>

          <nav class="menu-lateral">

              <div class="conten-logo my-2">

                    <div class="logo-c">
                        <img src="assets/images/logo2.png" alt="">
                    </div>

                    <span class="mt-11 ml-2">Fast-Flexible Inventory</span>
              </div>

              <hr class="div">

              <!-- Link of menu -->
              <div class="contenedor-menu">


                <div class="my-2">
                    <v-btn  color="#e5520f" width="250" class="px-auto btn">
                        <v-icon small class="ml-0 mx-auto">fas fa-home</v-icon>
                        <span class="mr-auto text-capitalize">Inicio</span>
                    </v-btn>
                </div>

              <v-expansion-panels class="mb-4">

                <v-expansion-panel>
                    <v-expansion-panel-header>
                        <v-icon small class="ml-auto" color="#064a76">fas fa-cog</v-icon>
                        <span class="mr-auto text">Opciones</span>

                    <template v-slot:actions small>
                        <v-icon color="#064a76">$expand</v-icon>
                    </template>
                    </v-expansion-panel-header>
                    <v-expansion-panel-content>

                        <v-btn
                            class="ml-5"
                            :loading="loading2"
                            :disabled="loading2"
                            color="#f8a01c"
                            @click="loader = 'loading2'"
                            x-small
                            >
                                Usuarios
                            <template v-slot:loader>
                                <span>Loading...</span>
                            </template>
                        </v-btn>

                        <v-btn
                            class="ml-5"
                            :loading="loading2"
                            :disabled="loading2"
                            color="#f8a01c"
                            @click="loader = 'loading2'"
                            x-small
                            >
                            Custom Loader
                            <template v-slot:loader>
                                <span>Loading...</span>
                            </template>
                        </v-btn>

                    </v-expansion-panel-content>
                </v-expansion-panel>

            </v-expansion-panels>
                <!-- Fin del Primer panel -->

            <v-expansion-panels>
                <v-expansion-panel>
                    <v-expansion-panel-header>
                        <v-icon small class="ml-auto" color="#064a76">fas fa-file</v-icon>
                        <span class="mr-auto text">Reportes</span>

                    <template v-slot:actions small>
                        <v-icon color="#064a76">$expand</v-icon>
                    </template>
                    </v-expansion-panel-header>
                    <v-expansion-panel-content>

                    <v-btn
                            class="ml-5"
                            color="#f8a01c"
                            width="150"
                            x-small
                            dark
                            href="Report/entry.php"
                            >
                            <v-icon x-small class="ml-0" color="">fas fa-door-open</v-icon>

                            <span class="ml-auto mr-auto">Entrada</span>

                    </v-btn>

                    <v-btn
                            class="ml-5"
                            color="#f8a01c"
                            width="150"
                            x-small
                            dark
                            href="Report/exit.php"
                            >
                            <v-icon x-small class="ml-0" color="">fas fa-door-closed</v-icon>

                            <span class="ml-auto mr-auto">Salida</span>

                    </v-btn>

                    </v-expansion-panel-content>
                </v-expansion-panel>

                <v-expansion-panel>
                    <v-expansion-panel-header>
                        <v-icon small class="ml-auto" color="#064a76">fas fa-boxes</v-icon>
                        <span class="mr-auto text">Invetario</span>

                    <template v-slot:actions small>
                        <v-icon color="#064a76">$expand</v-icon>
                    </template>
                    </v-expansion-panel-header>
                    <v-expansion-panel-content>

                    <v-btn
                            class="ml-5"
                            color="#f8a01c"
                            width="150"
                            x-small
                            dark
                            href="Inventory/Inventory.php"
                            >
                            <v-icon x-small class="ml-0" color="">fas fa-box</v-icon>

                            <span class="ml-auto mr-auto">Categoria 1</span>

                    </v-btn>

                    <v-btn
                            class="ml-5"
                            color="#f8a01c"
                            width="150"
                            x-small
                            dark
                            href="Inventory/Inventory.php"
                            >
                            <v-icon x-small class="ml-0" color="">fas fa-box</v-icon>

                            <span class="ml-auto mr-auto">Categoria 2</span>

                    </v-btn>

                    <v-btn
                            class="ml-5"
                            color="#f8a01c"
                            width="150"
                            x-small
                            dark
                            href="Inventory/Inventory.php"
                            >
                            <v-icon x-small class="ml-0" color="">fas fa-box</v-icon>

                            <span class="ml-auto mr-auto">Categoria 3</span>

                    </v-btn>
                    </v-expansion-panel-content>
                </v-expansion-panel>

                <v-expansion-panel>
                    <v-expansion-panel-header>
                        <v-icon small class="ml-auto" color="#064a76">fas fa-user-cog</v-icon>
                        <span class="mr-auto text">Administracion</span>

                    <template v-slot:actions small>
                        <v-icon color="#064a76">$expand</v-icon>
                    </template>
                    </v-expansion-panel-header>
                    <v-expansion-panel-content>

                    <v-btn
                            class="ml-5"
                            color="#f8a01c"
                            width="150"
                            x-small
                            dark
                            >
                            <v-icon x-small class="ml-0" color="">fas fa-user</v-icon>

                            <span class="ml-auto mr-auto">Usuarios</span>

                    </v-btn>

                    </v-expansion-panel-content>
                </v-expansion-panel>

              </div>

                <br>
                <br><br><br><br>
                <br><br><br><br>
                <br><br><br>

                <v-btn class="mx-2 ml-4 mt-2 elevation-5" fab dark small color="#064a76">
                    <v-icon dark size="20">fas fa-power-off</v-icon>
                </v-btn>



          </nav>

            <!-- Contenido -->
            <main class="main" id="main">
              <!-- <button onclick="sendRequest()">pepep</button> -->
              <?php include "Components/Estadisticas/index.php" ?>
            </main>

      </div>


      <!-- Js -->
    <script src="assets/js/vue.js"></script>
    <script src="assets/js/vuetify.js"></script>
    <script src="assets/js/99eb8c8193.js"></script>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/main.js"></script>

      </v-app>

    </div>

</body>
</html>
