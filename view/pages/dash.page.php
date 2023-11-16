<?php
require('../../controller/initSessionController.php');
require('../../controller/dashController.php');
$page="dashboard";
?>
<!-- head -->
	<?php include('../layouts/head.php') ?>
<!-- head -->
	
	<!-- SIDEBAR -->
	<?php include('../layouts/sidebar.php') ?>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<?php include('../layouts/navbar.php') ?>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<!-- TITLE -->
			<div class="head-title">
				<div class="left">
					<h1>Tableau De bord</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Tableau De Bord</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Acceuil</a>
						</li>
					</ul>
				</div>
				
			</div>
			<!-- TITLE -->

			<!-- BOX-INFOS -->
			<ul class="box-info">
    <li>
        <i class='bx bxs-calendar-check' ></i>
        <span class="text">
            <h3><?= $surveysNumber['numberSurvey'] ?></h3>
            <p>Enqueteurs</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-group' ></i>
        <span class="text">
            <h3>0</h3>
            <p>Visiteurs</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-group' ></i>
        <span class="text">
            <h3>0</h3>
            <p>sondages</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-group' ></i>
        <span class="text">
            <h3>0</h3>
            <p>abonnements</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-group' ></i>
        <span class="text">
            <h3>0</h3>
            <p>frais</p>
        </span>
    </li>
    <!-- <li>
        <i class='bx bxs-dollar-circle' ></i>
        <span class="text">
            <h3>0</h3>
            <p>gdfsgd</p>
        </span>
    </li> -->
</ul>
			<!-- BOX-INFOS -->


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>abonnements récents</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>image</th>
								<th>enqueteur</th>
								<th>type abonnement</th>
								<th>statut</th>
								<th>Expiration</th>
								<th>operation</th>
							</tr>
						</thead>
						<tbody>
							<?php if($getSubscriptions!==NULL){
								foreach($getSubscriptions as $subscriptions){ ?>
								<a href="survey.page.php?id=<?=$survey['idsurvey']?>">
									<tr>
										<td>
											<img src="../assets/img/enqueteur.png">
											<!-- <p>John Doe</p> -->
										</td>
										<td><?=$subscriptions['nameI']?></td>
										<td><span class="status completed"><?=$subscriptions['label']?></span></td>
										<td><span class="status completed"><?=$subscriptions['status']?></span></td>
										<td><span class="status completed"><?=$subscriptions['enddate']?></span></td>
										<td><span class="status pending"><i class='bx bx-check-list'></i></span></td>
									</tr>
									</a>
								<?php } }else{
									echo '<p style="text-align: center font-size: 300px;">Aucun Sondage...</p>';
								
								} ?>
							
						</tbody>
					</table>
				</div>
				<!-- <div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div> -->
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<!-- FOOT -->
	<?php include('../layouts/foot.php') ?>
	<!-- FOOT -->