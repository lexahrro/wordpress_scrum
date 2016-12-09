<?php
/**
 * Template Name: log
 */
?>

<?php get_header(); ?>	

        <div id="primary" class="content-area col-sm-12 col-md-8">
                <main id="main" class="site-main" role="main">

<a href="http://localhost/wordpress/inscription/" class="btn btn-info" id="link" role="button">s'inscrire?</a>


                <div class="container">
                  <div class="blok3" style="width: 19%;
    margin: auto;">
  <h2>connexion</h2>
  <form>
  
 <div class="form-group">
      <label for="text">Pseudo:</label>
      <input type="text" class="form-control" id="pseudo" placeholder="votre pseudo">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
   
    

  </form>
</div>
</div>


                </main><!-- #main -->
        </div><!-- #primary -->


<?php get_footer(); ?>