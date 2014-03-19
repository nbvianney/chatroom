<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		
		<title>Vertical Navigation Menu: CSS3 Coded</title>
		
		<link rel="stylesheet" href="styles.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		
	</head>
<body>
<div id="entete">
<div id="content">

	<ul class="menu">
		<li class="item1"><a href="#" class = "visiteur">Devenir Membre </a>
			<ul>
				<form method="post" action="traitement.php">
					<fieldset>
						<legend>formulaire</legend> <!-- Titre du fieldset -->
						     <p>
								sexe : <br />
								<input type="checkbox" name="masculin" id="masculin" /> <label for="masculin">masculin</label>
                                <input type="checkbox" name="feminin" id="feminin" /> <label for="feminin">feminin</label><br />
							
							   <label for="nom">nom et prenom </label>
                               <input type="text" name="nom" id="nom" required /><br/><br/>
							   
							  <label for="dateN">date de naissance </label>
                              <input type="date" name="datenN" id="dateN" required /><br/><br/>
							   
                              <label for="email">adressse e-mail </label>
                              <input type="email" name="email" id="email" required /><br/><br/>
							  
                             <label for="pass">Mot de passe  </label> 
							 <input type="password" name="pass" id="pass" required /> <br/><br/>
							 
							<input type="submit" value="connection" />
                           
                 </fieldset>
			  </form>
			</ul>
		</li>
		
		<li class="item2"><a href="afterlogin.html" class = "connection">Se Connecter  </a>
			<ul>
				<form method="post" action="traitement.php">
					<fieldset>
						<legend>Vos coordonnées</legend> <!-- Titre du fieldset -->
							<label for="email">adressse e-mail </label>
                              <input type="email" name="email" id="email" required /><br/><br/>
                            <label for="pass">Mot de passe  </label> <input type="password" name="pass" id="pass" required /> <br/> <br/>
							<input type="submit" value="connection" />
                           
                 </fieldset>
			  </form>
			</ul>
		</li>
	</ul>

</div>


</div>
<!--initiate accordion-->
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu > li > ul'),
	           menu_a  = $('.menu > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>


<footer>
		<p>Copyright Nbvs - Tous droits réservés<br />
		<a href="#">Me contacter !</a></p>
</footer>
</body>
</html>