<?php
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>';
echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>';
echo '<title>Starter Template - Materialize</title>';

// CSS
echo '<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">';
echo '<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>';
echo '<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>';
echo '</head>';
echo '<body>';

echo '<nav class="light-blue lighten-1" role="navigation">';
echo '<div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>';
echo '<ul class="right hide-on-med-and-down">';
echo '<li><a href="#">Navbar Link</a></li>';
echo '</ul>';
echo '<ul id="nav-mobile" class="sidenav">';
echo '<li><a href="#">Navbar Link</a></li>';
echo '</ul>';
echo '<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>';
echo '</div>';
echo '</nav>';


echo'<footer class="page-footer orange">';
echo '<div class="container">';
echo      '<div class="row">';
echo        '<div class="col l6 s12">';
echo          '<h5 class="white-text">Company Bio</h5>';
echo          '<p class="grey-text text-lighten-4">We are a team of college students working on this project like its our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>';
echo  '</div>';
echo        '<div class="col l3 s12">';
echo          '<h5 class="white-text">Settings</h5>';
echo          '<ul>';
echo            '<li><a class="white-text" href="#!">Link 1</a></li>';
echo            '<li><a class="white-text" href="#!">Link 2</a></li>';
echo            '<li><a class="white-text" href="#!">Link 3</a></li>';
echo            '<li><a class="white-text" href="#!">Link 4</a></li>';
echo          '</ul>';
echo        '</div>';
echo        '<div class="col l3 s12">';
echo          '<h5 class="white-text">Connect</h5>';
echo          '<ul>';
echo            '<li><a class="white-text" href="#!">Link 1</a></li>';
echo            '<li><a class="white-text" href="#!">Link 2</a></li>';
echo            '<li><a class="white-text" href="#!">Link 3</a></li>';
echo            '<li><a class="white-text" href="#!">Link 4</a></li>';
echo          '</ul>';
echo        '</div>';
echo      '</div>';
echo    '</div>';
echo    '<div class="footer-copyright">';
echo      '<div class="container">';
echo      'Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>';
echo      '</div>';
echo    '</div>';
echo  '</footer>';


 //scripts
echo  '<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>';
echo  '<script src="js/materialize.js"></script>';
echo  '<script src="js/init.js"></script>';


echo '</body>';

?>