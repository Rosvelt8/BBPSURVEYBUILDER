<?php
require('../../controller/initSessionController.php');
require('../../controller/showInvestigatorStatController.php');
$page="statistique";
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
				<!-- <div class="left"> -->
					<!-- <h1>Creer Un Sondage</h1> -->
					<!-- <ul class="breadcrumb">
						<li>
							<a href="#">Creer Un Sondage</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Sondages</a>
						</li>
					</ul> -->
				<!-- </div> -->
				<!-- <a href="add_survey.page.php" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">nouveau sondage</span>
				</a> -->
			</div>
			<!-- TITLE -->

			<!-- BOX-INFOS -->
			<ul class="box-info">
    <li>
        <i class='bx bxs-calendar-check' ></i>
        <span class="text">
            <h3><?=$surveysNumber['numberSurvey']?></h3>
            <p>sondage</p>
        </span>
    </li>
    <li>
        <i class='bx bxs-group' ></i>
        <span class="text">
            <h3><?=$visitors['visitors']?></h3>
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
						<h3>Mes sondages</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div> 
					 <table>
						<thead>
							<tr>
								<th>image</th>
								<th>titre</th>
								<th>nombre de questions</th>
								<th>operations</th>
							</tr>
						</thead>
						<tbody>
                            <?php foreach($surveys as $survey){ ?>
                                <tr>
                                
								<td>
									<a href="ans.page.php?token=<?=$survey['token']?>"><img src="../assets/img/survey/<?=$survey['img_path']?>"></a>
								</td>
								<td><?=$survey['title']?></td>
								<td><span class="status completed"><?= getCountQuestion($survey['idsurvey']) ?></span></td>
								<td><span id="stat" class="status stat pending"><a href="survey_stat.page.php?id=<?=$survey['idsurvey']?>" style="color: inherit; " ><i class='bx bxs-notepad'></i></a></span></td>
							</tr>

                            
							<?php } ?>
                            <style>
                                #stat:hover{
                                    color: black !important;
                                    background: white !important;
                                }
                            </style>
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