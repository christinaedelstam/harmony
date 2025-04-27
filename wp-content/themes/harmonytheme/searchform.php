<form action="/" method="get">

		<label for="search">Rechercher</label>

		<!-- <input type="hidden" name="cat" value="4"> search only in category "blog" -->
		<input type="text" name="s" id="search" value="<?php the_search_query();?>" required>

		<button type="submit">Valider</button>


</form>