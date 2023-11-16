<?php
require('../../controller/initSessionController.php');
require('../../controller/questionController.php');
$page="sondage";
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
			
			<!-- BOX-INFOS -->


			<div class="table-data">
				<div class="order">
					<div class="head">
                        <form action="" method="post" style="width: 100%;">
                            <input type="text" value="<?=$question['intitle']?>" id="intitleQ" class="intitleQ" name="intitleQ" disabled>
                            <div id="edit" onclick="update()"><i class='bx bxs-edit'></i></div>
                            <input id="send" type="submit" style="display: none;" name="updateQuestion" value="Modifier">
                        </form>
						
					</div> 
					<div class="todo" style="overflow-x: hidden;">
					<div class="head">
						<h4>Réponses</h4>
						<i class='bx bx-plus' onclick="addQuestion()" id="addQuestion"></i>
					
					</div>
					<ul class="todo-list" id="list-question">
                    <?php
                    if($answers){
                    foreach($answers as $answer){ ?>
                        
						<li class="completed">
							<p><?=$answer['intitle']?></p>
							<i class='bx bx-caret-up-circle'></i>
						</li>
                        
                    <?php } }else{
                        echo '<p style="text-align: center;">Aucune reponse...</p>';
                        } ?>
                        <li class="completed" id="to-add" style="display: none;">
                        <form action="" method="POST" style="width: 100%">
							<input placeholder="Intitulé..." name="intitle" type="text" style="background-color: transparent; outline: none; border: none; border-bottom: 1px solid var(--blue); width: 92%; padding: 0;">
							<button class="addQ" type="submit" name="addAnswer"><i class='bx bx-plus' ></i></button>
                        </form>
						</li>
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
	<script>
        let title= document.getElementById('title');
        let img= document.getElementById('file-ip-1');
        let intitleQ= document.getElementById('intitleQ');
        let edit= document.getElementById('edit');
        let send= document.getElementById('send');
        let add= document.getElementById('to-add');
        let listQuestion= document.getElementById('list-question');


        function addQuestion(){
            add.style.display="flex";
        }

        function update(){
            send.style.display="block";
            intitleQ.removeAttribute('disabled');
            
            edit.style.display="none";
        };
    </script>
    
	<!-- FOOT -->
	<?php include('../layouts/foot.php') ?>
	<!-- FOOT -->