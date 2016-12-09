<?php
/**
 * Template Name: About
 */
?>

<?php get_header(); ?>	

        <div id="primary" class="content-area col-sm-12 col-md-8">
                <main id="main" class="site-main" role="main">

<a href="http://localhost/wordpress/connexion/" class="btn btn-info" role="button">Déja inscrit ?</a>


                <div class="container">
  <h2>Inscription</h2>
  <form>
    <div class="row">
        <div class="col-md-6">
    <div class="blok1">
    <div class="form-group row">
        <div class="col-md-6">
        <label for="text">Prénom:</label>
      <input type="text" class="form-control" id="prenom" placeholder="votre prenom">
      </div>
<div class="col-md-6">
      <label for="text">Nom:</label>
      <input type="text" class="form-control" id="nom" placeholder="votre nom">
      </div>

</div>
 <div class="form-group">
      <label for="text">Pseudo:</label>
      <input type="text" class="form-control" id="pseudo" placeholder="votre pseudo">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    </div>
</div>
<div class="col-md-4">
  <div class="steam"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="img-responsive" id="mae" ></div>
    <div class="blok2">

    <div class="form-group">
      <label for="text">Pseudo steam:</label>
      <input type="text" class="form-control" id="pseudost" placeholder="votre pseudo steam">
    </div>
    
    </div>
    </div>
</div>
  </form>
</div>

                </main><!-- #main -->
        </div><!-- #primary -->


<?php get_footer(); ?>