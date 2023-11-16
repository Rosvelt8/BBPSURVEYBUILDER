<?php
require('../../controller/initSessionController.php');
require('../../controller/showSurveyStatController.php');
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
            <h3><?=getCountQuestion($_GET['id'])?></h3>
            <p>questions</p>
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
                        <div action="" method="post" style="width: 100%;">
                            <h1><?=$survey['title']?></h1>
</div>
						
					</div> 
					<div class="todo" style="overflow-x: hidden;">
					<div class="head">
						<h4>QUESTIONS</h4>
					
					</div>
					<ul class="todo-list" id="list-question">
                    <?php
                    if($questions){
                    foreach($questions as $question){ ?>
                        
						<li class="completed">
							<p><?=$question['intitle']?></p>
							<div>
                            <span class="status pending" style="margin-right: 8px"><?= getCountAnswers($question['idquestion']) ?></span>
                            <span class="status pending"><a href="question_stat.page.php?id=<?=$survey['idsurvey']?>&q=<?=$question['idquestion']?>" style="color: inherit; " ><i class='bx bxs-bar-chart-alt-2'></i></a></span>
                            
                            </div>
						</li>
                        
                    <?php } }else{
                        echo '<p style="text-align: center;">Aucune question...</p>';
                        } ?>
                        
                        <style>
                            .addQ{
                            height: 30px;
                            padding: 0 16px;
                            border-radius: 1.1rem;
                            background: var(--blue);
                            color: var(--light);
                            
                            justify-content: center;
                            align-items: center;
                            
                            font-weight: 500;
                            border: none;
                        
                            }
                            .intitleQ{
                            width: 90%;
                            height: 2rem;
                            outline: none;
                            background: transparent;
                            border: none;
                            border-bottom: 2px solid var(--blue);
                            font-size: 25px;
                            font-family: inherit;
                            font-weight: bold;
                        }
                            #edit, #send{
                            
                            height: 36px;

                            padding: 0 16px;
                            border-radius: 36px;
                            background: var(--blue);
                            color: var(--light);
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            grid-gap: 10px;
                            font-weight: 500;
                            border: none;
                            float: right;
                        }
                        </style>
	
						
					</ul>
				</div> 
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