<?php
require('../../controller/initSessionController.php');
require('../../controller/dashboardController.php');
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
				<a href="add_survey.page.php" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">nouveau sondage</span>
				</a>
			</div>
			<!-- TITLE -->

			<!-- BOX-INFOS -->
			<ul class="box-info">
    <li>
        <i class='bx bxs-calendar-check' ></i>
        <span class="text">
            <h3><?= $surveysNumber['numberSurvey'] ?></h3>
            <p>sondage</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-group' ></i>
        <span class="text">
            <h3>0</h3>
            <p>Visiteurs</p>
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
						<h3>Mes sondages récents</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>image</th>
								<th>titre</th>
								<th>code</th>
							</tr>
						</thead>
						<tbody>
							<?php if(isset($surveys)){
								foreach($surveys as $survey){ ?>
								<a href="survey.page.php?id=<?=$survey['idsurvey']?>">
									<tr>
										<td>
											<img src="../assets/img/survey/<?=$survey['img_path']?>">
											<!-- <p>John Doe</p> -->
										</td>
										<td><?=$survey['title']?></td>
										<td><span class="status completed"><?=$survey['token']?></span></td>
									</tr>
									</a>
								<?php } }else{
									echo '<p style="text-align: center;">Aucun Sondage...</p>';
								
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