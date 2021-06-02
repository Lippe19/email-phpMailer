<!DOCTYPE html>
<html lang="pt-br"><!-- class="translated-ltr nav_open"--> 
    <head>
        <meta charset="utf-8" />


        <title>E-mail</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <link rel="icon" href="./assets/img/logo-icone.png">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="./assets/libs/fonts/feather/feather.css" />
    <link href="https://cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet">
    <!-- Theme CSS  -->
    <link rel="stylesheet" href="./assets/libs/theme.min.css" id="stylesheetLight">
    <link rel="stylesheet" href="./assets/css/theme-dark.min.css" id="stylesheetDark">
 
    </head>
    <body>







      
      
      
      
      <div class="container-lg">
              <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
      


                  <!-- Form -->
                  <form class="tab-content py-6" id="wizardSteps" action="config-email.php" method="post" enctype="multipart/form-data">
      
                    <div class="tab-pane fade show active" id="wizardStepOne" role="tabpanel" aria-labelledby="wizardTabOne">
                      <!-- Header -->
                      <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                          <!-- Title -->
                          <h1 class="mb-3">
                              Etapa 1 de 2
                          </h1>
                        </div>
                      </div> <!-- / .row -->
      
                      <!-- Team name -->
                      <div class="form-group">
                        <!-- Label -->
                        <label>
                          Assunto 
                        </label>
                        <!-- Input -->
                        <input type="text" class="form-control" name="subject">
                      </div><div class="form-group">
                        <!-- Label -->
                        <label>
                          E-mail do cliente 
                        </label>
                        <!-- Input -->
                        <input type="text" class="form-control" name="email">
                        <!--<input type="text" class="form-control" name="mensagem">-->
                      </div>
      
                      <!-- Team description -->
                      <div class="form-group">
                        <!-- Label -->
                        <label class="mb-1">
                          Descrição 
                        </label>
                        <!-- Text -->
                        <small class="form-text text-muted">
                          Escreva o que contem nos arquivos enviados!
                        </small>

                        <div id="toolbar">
                          <button class="ql-bold">Bold</button>
                          <button class="ql-italic">Italic</button>
                          <button class="ql-link">Italic</button>
                          <button class="ql-blockquote"></button>
                          <button class="ql-image"></button>
                          <button class="ql-list" value="ordered">Italic</button>
                          <button class="ql-list" value="bullet">Italic</button>
                        </div>
                        <!-- Quill -->
                        <div id="quillEditor" style="height: 200px;"></div>
                        <textarea name="message" style="display:none" id="textArea"></textarea>

                      </div>
      
                      
                      <!-- Starting files -->
                      <div class="form-group">
                        <!-- Label -->
                        <label class="mb-1">
                          Anexe o(s) arquivo(s) 
                        </label>
                        <!-- Text -->
                        <small class="form-text text-muted">
                          Faça upload do arquivo que deseja enviar.
                        </small>
                        <!-- Card -->
                        <div class="card">
                          <div class="card-body">
  <div class="custom-file">
    <input type="file" class="pt-1" id="file" name="file[]" multiple="multiple">
  </div>
                          </div>
                        </div>
                      </div>
      
                      <!-- Divider -->
                      <hr class="my-5">
                      <!-- Footer -->
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <!-- Button -->
                          <button class="btn btn-lg btn-white" type="reset">Cancelar</button>
                        </div>
                        <div class="col text-center">
                          <!-- Step -->
                          <h6 class="text-uppercase text-muted mb-0">Etapa 1 de 2</h6>
                        </div>
                        <div class="col-auto">
                          <!-- Button -->
                          <a class="btn btn-lg btn-primary" data-toggle="wizard" href="#wizardStepTwo">Continuar</a>
                        </div>
                      </div>
                    </div>
      
                    
      
      
      
      
                    <div class="tab-pane fade" id="wizardStepTwo" role="tabpanel" aria-labelledby="wizardTabTwo">
                      <!-- Header -->
                      <div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">
                          <!-- Title -->
                          <h1 class="mb-3">
                              Etapa 2 de 2
                          </h1>
                        </div>
                      </div> 
      
                      <!-- Team members -->
                      <div class="form-group">
                        <!-- Label -->
                        <label>
                          Adicione o membro da equipe 
                        </label>
                        <!-- Select -->
                        <select class="form-control" data-toggle="select" multiple>
                          <option data-avatar-src="assets/img/avatars/profiles/avatar-1.jpg">Dianna Smiley</option>
                          <option data-avatar-src="assets/img/avatars/profiles/avatar-2.jpg">Ab Hadley</option>
                          <option data-avatar-src="assets/img/avatars/profiles/avatar-3.jpg">Adolfo Hess</option>
                          <option data-avatar-src="assets/img/avatars/profiles/avatar-4.jpg">Daniela Dewitt</option>
                        </select>
                      </div>
                      <!-- Divider -->
                      <hr class="my-3">
      
                      <!-- Project tags -->
                      <div class="form-group">
                        <!-- Label -->
                        <label>
                          Project tags
                        </label>
                        <!-- Select -->
                        <select class="form-control" data-toggle="select" multiple>
                          <option>CSS</option>
                          <option>HTML</option>
                          <option>JavaScript</option>
                          <option>Bootstrap</option>
                        </select>
                      </div>
      
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <!-- Start date -->
                          <div class="form-group">
                            <label>
                              Start date
                            </label>
                            <!-- Input -->
                            <input type="text" class="form-control" data-toggle="flatpickr">
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <!-- Start date -->
                          <div class="form-group">
                            <label>
                              Data da entrega
                            </label>
                            <!-- Input -->
                            <input type="text" class="form-control" data-toggle="flatpickr">
                          </div>
                        </div>
                      </div>
      
                      <!-- Divider -->
                      <hr class="mt-5 mb-5">
                      <div class="row">
                        <div class="col-12 col-md-6">
                          <!-- Private project -->
                          <div class="form-group">
                            <!-- Label -->
                            <label class="mb-1">
                              Private project
                            </label>
                            <!-- Text -->
                            <small class="form-text text-muted">
                              If you are available for hire outside of the current situation, you can encourage others to hire you.
                            </small>
                            <!-- Switch -->
                            <div class="custom-control custom-switch">
                              <input type="checkbox" class="custom-control-input" id="switchOne">
                              <label class="custom-control-label" for="switchOne"></label>
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <!-- Warning -->
                          <div class="card bg-light border">
                            <div class="card-body">
                              <!-- Heading -->
                              <h4 class="mb-2">
                                <i class="fe fe-alert-triangle"></i> Warning
                              </h4>
                              <!-- Text -->
                              <p class="small text-muted mb-0">
                                Once a project is made private, you cannot revert it to a public project.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <!-- Divider -->
                      <hr class="my-5">
      
                      <!-- Footer -->
                      <div class="row align-items-center">
                        <div class="col-auto">
                          <!-- Button -->
                          <a class="btn btn-lg btn-white" data-toggle="wizard" href="#wizardStepOne">Voltar</a>
                        </div>
                        <div class="col text-center">
                          <!-- Step -->
                          <h6 class="text-uppercase text-muted mb-0">Etapa 2 de 2</h6>
                        </div>
                        <div class="col-auto">
                          <!-- Button -->
                          <button class="btn btn-lg btn-primary" type="submit" name="sendmail" onclick ="logHtmlContent()">Enviar</button>
                        </div>
                      </div>
                    </div>
      
                  </form>
      
                </div>
              </div>
            </div>
      
          </div> <!-- / .main-content -->
      
      
      
      
      
      
      
      
      
      
      
      










  </body>



    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.0.0/quill.js"></script>
    <!-- Initialize Quill editor -->
    <script>
      var quill = new Quill('#quillEditor', {
        modules: { toolbar: '#toolbar' },
        theme: 'snow'
      });

      function logHtmlContent() {
        document.getElementById("textArea").value = quill.root.innerHTML;
        console.log(quill.root.innerHTML);
      }
    </script>



    <!-- Libs JS --><!---->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/dropzone/dist/min/dropzone.min.js"></script>

    <!-- Theme JS -->
    <script src="assets/libs/theme.min.js"></script>


  </html>