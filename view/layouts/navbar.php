<nav>
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<button type="submit" class="search-btn"><i class='bx bx-arrow-back' ></i></button>
				</div>
			</form>
			<!-- <input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label> -->
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">0</span>
			</a>
			<?php if($_SESSION['status']=='I'){?>
				<a href="profile.page.php" class="profile" title="<?= $getInformation['name'] ?>">
					<img src="../assets/img/enqueteur.png">
				</a>
			<?php }?>
			<?php if($_SESSION['status']=='A'){?>
				<a href="profile.page.php" class="profile" title="<?= $getInformation['name'] ?>">
					<img src="../assets/img/admin.png">
				</a>
			<?php }?>
		
			<style>
				.username{
					font-size: 15px;
					font-weight: bold;
					text-align: center;
				}
			</style>
		</nav>