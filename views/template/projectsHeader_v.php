  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#beggin" ).datepicker();
  });
  </script>

  <div class="navbar-wrapper">
            <div class="container">
                <div class="navbar navbar-default">

                    <div class="navbar-inner">
                        <h1>Sistema Gerenciador de Projetos</h1>
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>

                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li><a href="?a=Home_c/Main">Principal </a></li>
                                <li><a href="?a=Projects_c/main">Projetos </a>
                                    <ul>
                                        <li><a href="?a=Projects_c/createProjects_v">Cadastrar Projetos </a></li>
                                        <li><a href="?a=Projects_c/employee_v">Cadastra Empregado</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!-- /.navbar-inner -->
                </div><!-- /.navbar -->
            </div> <!-- /.container -->            
            
     