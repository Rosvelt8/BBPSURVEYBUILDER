<?php if($_SESSION['status']=='I'){?>
	<section id="sidebar">
			<a href="#" class="brand">
				<span class="bx"><img src="../assets/img/logo.png" height="40" alt=""></span>
				<span class="text">survey Builder</span>
			</a>
			<ul class="side-menu top">
				<li class="<?php if($page=="dashboard"){ echo 'active';} ?>">
					<a href="dashboard.page.php">
						<i class='bx bxs-dashboard' ></i>
						<span class="text">Tableau de Bord</span>
					</a>
				</li>
				<li class="<?php if($page=="sondage"){ echo 'active';} ?>">
					<a href="survey_list.page.php">
						<i class='bx bxs-shopping-bag-alt' ></i>
						<span class="text">Mes sondages</span>
					</a>
				</li>
				<li class="<?php if($page=="statistique"){ echo 'active';} ?>">
					<a href="stat.page.php">
						<i class='bx bxs-bar-chart-alt-2'></i>
						<span class="text">Statistiques</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class='bx bxs-message-dots' ></i>
						<span class="text">Message</span>
					</a>
				</li>
				<li class="<?php if($page=="profil"){ echo 'active';} ?>">
					<a href="profile.page.php">
						<i class='bx bxs-group' ></i>
						<span class="text">profil</span>
					</a>
				</li>
			</ul>
			<ul class="side-menu">
				<li>
					<a href="settings.page.php">
						<i class='bx bxs-cog' ></i>
						<span class="text">Parametres</span>
					</a>
				</li>
				<li>
					<a href="../../controller/logOutController.php" class="logout">
						<i class='bx bxs-log-out-circle' ></i>
						<span class="text">Deconnexion</span>
					</a>
				</li>
			</ul>
	</section>
<?php } else{?>
	<section id="sidebar">
			<a href="#" class="brand">
				<span class="bx"><img src="../assets/img/logo.png" height="40" alt=""></span>
				<span class="text">survey Builder</span>
			</a>
			<ul class="side-menu top">
				<li class="<?php if($page=="dashboard"){ echo 'active';} ?>">
					<a href="dash.page.php">
						<i class='bx bxs-dashboard' ></i>
						<span class="text">Tableau de Bord</span>
					</a>
				</li>
				<li class="<?php if($page=="sondage"){ echo 'active';} ?>">
					<a href="investigator.page.php">
						<i class='bx bxs-shopping-bag-alt' ></i>
						<span class="text">Enqueteurs</span>
					</a>
				</li>
				<li class="<?php if($page=="statistique"){ echo 'active';} ?>">
					<a href="">
						<i class='bx bxs-bar-chart-alt-2'></i>
						<span class="text">Statistiques</span>
					</a>
				</li>
				<li>
					<a href="#">
						<i class='bx bxs-message-dots' ></i>
						<span class="text">Message</span>
					</a>
				</li>
				<li class="<?php if($page=="profil"){ echo 'active';} ?>">
					<a href="profile.page.php">
						<i class='bx bxs-group' ></i>
						<span class="text">profil</span>
					</a>
				</li>
			</ul>
			<ul class="side-menu">
				<li>
					<a href="settings.page.php">
						<i class='bx bxs-cog' ></i>
						<span class="text">Parametres</span>
					</a>
				</li>
				<li>
					<a href="../../controller/logOutController.php" class="logout">
						<i class='bx bxs-log-out-circle' ></i>
						<span class="text">Deconnexion</span>
					</a>
				</li>
			</ul>
	</section>
<?php } ?>