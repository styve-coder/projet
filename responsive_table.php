<?php

include "../../entities/livreur.php";
include "../../core/livreur_core.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  
  <title>Mes Livreurs</title>
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>
  <section id="container">
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <a href="index.html" class="logo"><b>NOMS<span>ENTREPRISE</span></b></a>
      <div class="nav notify-row" id="top_menu">
        <ul class="nav top-menu">
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages
                  </a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span> Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span> Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span> Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span> New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end -->
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
            <a class="logout" href="login.html">Logout</a>
          </li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered">
            <a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a>
          </p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a href="index.html">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>UI Elements</span>
              </a>
            <ul class="sub">
              <li>
                <a href="general.html">General</a>
              </li>
              <li>
                <a href="buttons.html">Buttons</a>
              </li>
              <li>
                <a href="panels.html">Panels</a>
              </li>
              <li>
                <a href="font_awesome.html">Font Awesome</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li>
                <a href="grids.html">Grids</a>
              </li>
              <li>
                <a href="calendar.html">Calendar</a>
              </li>
              <li>
                <a href="gallery.html">Gallery</a>
              </li>
              <li>
                <a href="todo_list.html">Todo List</a>
              </li>
              <li>
                <a href="dropzone.html">Dropzone File Upload</a>
              </li>
              <li>
                <a href="inline_editor.html">Inline Editor</a>
              </li>
              <li>
                <a href="file_upload.html">Multiple File Upload</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              <li>
                <a href="blank.html">Blank Page</a>
              </li>
              <li>
                <a href="login.html">Login</a>
              </li>
              <li>
                <a href="lock_screen.html">Lock Screen</a>
              </li>
              <li>
                <a href="profile.html">Profile</a>
              </li>
              <li>
                <a href="invoice.html">Invoice</a>
              </li>
              <li>
                <a href="pricing_table.html">Pricing Table</a>
              </li>
              <li>
                <a href="faq.html">FAQ</a>
              </li>
              <li>
                <a href="404.html">404 Error</a>
              </li>
              <li>
                <a href="500.html">500 Error</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li>
                <a href="form_component.html">Form Components</a>
              </li>
              <li>
                <a href="advanced_form_components.html">Advanced Components</a>
              </li>
              <li>
                <a href="form_validation.html">Form Validation</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-th"></i>
              <span>S.A.V</span>
              </a>
            <ul class="sub">
              <li class="active">
                <a href="basic_table.php">LIVRAISON</a>
              </li>
              <li>
                <a href="responsive_table.php">LIVREUR</a>
              </li>
              <li>
                <a href="advanced_table.php">Advanced Table</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="inbox.html">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li>
                <a href="morris.html">Morris</a>
              </li>
              <li>
                <a href="chartjs.html">Chartjs</a>
              </li>
              <li>
                <a href="flot_chart.html">Flot Charts</a>
              </li>
              <li>
                <a href="xchart.html">xChart</a>
              </li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li>
                <a href="lobby.html">Lobby</a>
              </li>
              <li>
                <a href="chat_room.html"> Chat Room</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
       <form name="myform" action="recuperation/ajouter_livreur.php" method="POST">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> LIVREUR </h4>
                <hr>
                <thead>
                  <tr>
                    <th>Identifiant(CIN) du livreur</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i>Nom</th>
                    <th><i class="fa fa-bookmark"></i>Prenom</th>
                    <th><i class=" fa fa-edit"></i>Image livreur</th>
                    <th><i class="fa fa-bullhorn"></i>email_livreur</th>
                    <th><i class="fa fa-bullhorn"></i>Adresse</th>
                    <th><i class="fa fa-bullhorn"></i>telephone</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input type="text" name="id_livreur" value=""></td>
                    <td><input type="text" name="nom_livreur" value=""></td>
                    <td><input type="text" name="prenom_livreur" value=""></td>
                    <td>
                    <input type="file" name="image_livreur">
                    </td>
                    <td><input type="text" name="email_livreur" value=""></td>
                    <td><input type="text" name="adresse" value=""></td>
                    <td><input type="text" name="telephone" value=""></td>
                    <td>
                      <input class="btn btn-success btn-xs" type="submit" name="ajouter" value="ajouter" onclick="commande();">
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </form>
      </section>
    </section>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> MES LIVREURS</h3>
        <a href="afficher_en_mode_croissant.php"><button class="btn btn-success btn-xs">Tri croissant</button></a>
        <a href="afficher_en_mode_decroissant.php"><button class="btn btn-success btn-xs">Tri decroissant</button></a>
        <a href="responsive_table.php"><button class="btn btn-success btn-xs">Tri normal</button></a>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Livreur des produits </h4>
              <section id="unseen">
                <form name="f" action="rechercher_livreur.php" method="POST">
        <input type="text" placeholder="rechercher" value="" maxlength="100" name="rechercher">
         <input class="btn btn-success btn-xs" type="submit" value="rechercher">
        </form>
                <center>
    <p class="mtext-105 cl2 txt-center p-b-30" > MES LIVREUR </p>
    <?php
$cnx = new PDO('mysql:host=localhost;dbname=livraison;charset=utf8', 'root', '');
$page = (!empty($_GET['page']) ? $_GET['page'] : 1);
$elementmite = 10;
$debut = ($page - 1) * $elementmite;
$query = 'SELECT SQL_CALC_FOUND_ROWS * FROM livraison.livreur LIMIT :limite OFFSET :debut';
$query = $cnx->prepare($query);
$query->bindValue(
    'limite',        
     $elementmite,        
     PDO::PARAM_INT   
);
$query->bindValue('debut', $debut, PDO::PARAM_INT);
$query->execute();
$resultFoundRows = $cnx->query('SELECT found_rows()');
$nombredElementsTotal = $resultFoundRows->fetchColumn();
?>
   <table class="table table-bordered table-striped table-condensed" style="text-align: center; width: 75%;" border="1" cellpadding="2" cellspacing="2">
                  <thead>
                    <tr>
                      <th>Identifiant(CIN) du livreur</th>
                      <th>Nom</th>
                      <th class="numeric">Prenom</th>
                      <th class="numeric">Image livreur</th>
                      <th class="numeric">email_livreur</th>
                      <th class="numeric">Adresse</th>
                      <th class="numeric">telephone</th>
                      <th></th>
                  </thead>
                  <tbody>
                    <?php
                    $a=0;
            while($element = $query->fetch()){
                    $a++;
              ?>
                          <td class="numeric"><?php echo $element['id_livreur']; ?></td>
                      <td class="numeric"><?php echo $element['nom_livreur']; ?></td>
                      <td class="numeric"><?php echo $element['prenom_livreur']; ?></td>
                      <td class="numeric"><a href="image/<?php echo $element['image_livreur']; ?>" src="<?php echo $element['image_livreur']; ?>"><?php echo $element['image_livreur']; ?></a></td>
                      <td class="numeric"><?php echo $element['email_livreur']; ?></td>
                      <td class="numeric"><?php echo $element['adresse']; ?></td>
                      <td class="numeric"><?php echo $element['telephone']; ?></td>
                      <td>
                      <a href="modifier_livreur.php?id_livreur=<?php echo $element['id_livreur']; ?>
                      "><button type="submit" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                      <a href="recuperation/supprimer_livreur.php?id_livreur=<?php echo $element['id_livreur']; ?>"><button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                      </td>
                    </tr>
                    <?php
              }
              ?>
              
                  </tbody>
                </table>
<?php
$nombreDePages = ceil($nombredElementsTotal / $elementmite);
if ($page > 1):
    ?><a href="?page=<?php echo $page - 1; ?>"><button>Page précédente</button></a> — <?php
endif;
for ($i = 1; $i <= $nombreDePages; $i++):
    ?><a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a> <?php
endfor;
if ($page < $nombreDePages):
    ?>— <a href="?page=<?php echo $page + 1; ?>"><button>Page suivante</button></a><?php
endif;
?>
                </center>
                <button><?php echo $nombredElementsTotal; ?></button>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="control2.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
  
</body>

</html>
