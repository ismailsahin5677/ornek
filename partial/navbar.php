<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <!-- Links -->
  <ul class="navbar-nav">
	<?php
		foreach($menuArray as $sayfaAdi => $link){ ?>
			<li class="nav-item">
				<a class="nav-link" href="<?= $link ?>"><?= $sayfaAdi ?></a>
			</li>
	<?php } ?>
  </ul>
  
</nav>