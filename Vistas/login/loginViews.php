        <!-- Boton login -->
        <button type="button" class="btn btn-primary login" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Acceso
          </button>
          <!-- <i class="bi bi-box-arrow-in-right"></i> -->
          <!-- Pantallita para entrar -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Entrar</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- action = "../paginasLogg/perfilUser.php" -->
                <form method = "POST" >
                <div class="modal-body" >
                  <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name = "emailAddress" placeholder="name@example.com">
                    <label for="floatingInput">Correo electrónico</label>
                  </div>
                  <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name = "psswdUser">
                    <label for="floatingPassword">Contraseña</label>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary guardarLogin" >Guardar</button>
                </div>
                </form>
              </div>
            </div>
          </div>


