<?php
require('../../controller/ansController.php');
$page="sondage";
?>
<!-- head -->
<?php include('../layouts/head.php') ?>
    <!-- head -->

	<!-- SIDEBAR -->
    <section id="sidebar">
		<a href="#" class="brand">
			<img src="../assets/img/logo.png" height="40" alt="">
			<span class="text">survey Builder</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="dashboard.page.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Repondez!</span>
				</a>
			</li>
			
		</ul>
		
</section>
	<!-- SIDEBAR -->


    
	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<!-- TITLE -->
			<div class="head-title">
				<!-- <div class="left">
					<h1>Creer Un Sondage</h1> -->
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
                    <form class="form-create-survey" action="" method="post" enctype="multipart/form-data">
                        <div class="form-input">
                            <div class="preview">
                                <!-- <img src="assets/img/icon-logo-transparent.png" id="file-ip-1-preview"> -->
                            </div>
                            <label for="file-ip-1">
                                
                                <img src="../assets/img/survey/<?=$survey['img_path']?>" height="300" width="" style="width: 100%;" id="file-ip-1-preview" title="choisir une image" alt="" ><br>
                            </label>
                            <input style="display: none;" type="file" id="file-ip-1" accept="image/*" name="imgSurvey" disabled onchange="showPreview(event);">
                            
                        </div>
                        <div class="form-title">
                            <label for="">Titre Du Sondage</label>
                            <input name="title" value="<?=$survey['title']?>" id="title" type="text" disabled>
                        </div>
                        <div class="form-area">
                            <label for="">Description</label>
                            <textarea name="description" id="desc" disabled placeholder="decrivez votre sondage ici..." cols="30" rows="10"><?=$survey['description']?></textarea>
                        </div>
                       
                            
                    </form>
                    <style>
                        .form-create-survey{
                            margin-left: 5%;
                            margin-bottom: 15px;
                        }
                        .error{
                            text-align: center;
                            color: white;
                            background: var(--blue);
                            margin-left: 10%;
                            width: 80%;
                            height: 1.5rem;
                            font-style: italic;
                            text-decoration: underline;
                            font-size: 15px;
                        }
                        .form-button{
                            width: 95%;
                        }
                        .form-area, .form-title{
                            display: grid;
                            margin-left: 5%;
                            margin-bottom: 15px;
                        }
                        .form-create-survey label{
                            color: var(--blue);
                            
                            
                        }
                        .form-title input{
                            width: 95%;
                            height: 2rem;
                            outline: none;
                            background: transparent;
                            border: none;
                            border-bottom: 2px solid var(--blue);
                            font-size: 15px;
                            font-family: inherit;
                            font-weight: bold;
                        }
                        .form-area textarea{
                            width: 95%;
                            height: 5rem;
                            outline: none;
                            background: transparent;
                            font-size: 15px;
                            font-family: inherit;
                            border: none;
                            border-bottom: 2px solid var(--blue);
                        }
                        .form-button input, .form-button div{
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

					<!-- <div class="head">
						<h3>Mes sondages récents</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div> -->
					<!-- <table>
						<thead>
							<tr>
								<th>image</th>
								<th>titre</th>
								<th>code</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="../assets/img/people.png">
								</td>
								<td>Prospection produit</td>
								<td><span class="status completed">zwkdpr</span></td>
							</tr>
							<tr>
								<td>
									<img src="../assets/img/people.png">
								</td>
								<td>Prospection produit</td>
								<td><span class="status completed">zwkdpr</span></td>
							</tr>
							<tr>
								<td>
									<img src="../assets/img/people.png">
								</td>
								<td>Prospection produit</td>
								<td><span class="status completed">zwkdpr</span></td>
							</tr>
							<tr>
								<td>
									<img src="../assets/img/people.png">
								</td>
								<td>Prospection produit</td>
								<td><span class="status completed">zwkdpr</span></td>
							</tr>
						</tbody>
					</table> -->
                    <div class="todo" style="overflow-x: hidden;">
                        <div class="head">
                            <h3>Veuillez répondre</h3>
                             
                        </div>
                        <ul class="todo-list" id="list-question">
                    <form action="" method="POST">
                        <?php
                        $questions= $getQuestions->getQuestionsBySurvey($survey['idsurvey']);
                        if(isset($questions)){
                            foreach ($questions as $question) {
                            ?>
                            <li class="completed">
                                <p><?=$question['intitle']?></p>
                                <a style="color: inherit;" href="question.page.php?id=<?=$question['idquestion']?>"><i class='bx bx-check'></i></a>
                            </li>
                           <?php 
                            $getAnswers= new Answer();
                            $answers=$getAnswers->getAnswersByQuestion($question['idquestion']);
                            if(isset($answers)){
                                foreach($answers as $answer){ ?>
                                    <li class="" style="margin-left: 5%; border-left: 10px solid var(--active);">
                                        <label for="ans<?=$question['idquestion']?>" style="display: flex; width: 100%;">
                                        <p style="width: 92%;"><?=$answer['intitle']?></p>
                                        <input type="radio" id="ans" value="<?=$answer['idanswer']?>" style="float: right;" name="ans<?=$question['idquestion']?>" id="">
                                    </label>
                                    </li>
                                <?php }

                            }   
                        } }
                        ?>

                        <input type="submit" name="addAnswered" class="ans" value="répondre">
                        </form>
                            
                            
                       
                            <li class="completed" id="to-add" style="display: none;">
                            <form action="" method="POST" style="width: 100%">
                                <input placeholder="Intitulé..." name="intitle" type="text" style="background-color: transparent; outline: none; border: none; border-bottom: 1px solid var(--blue); width: 82%; padding: 0;">
                                <button class="addQ" type="submit" name="addQuestion"><i class='bx bx-plus' ></i></button>
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
                                .ans{
                                justify-content: space-around;
                                height: 30px;
                                padding: 0 16px;
                                border-radius: 0.2rem;
                                background: var(--blue);
                                color: var(--light);
                                font-size: 20px;
                                float: right;
                                justify-content: center;
                                align-items: center;
                                
                                font-weight: 500;
                                border: none;
                            
                                }
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
                            </style>
        
                            
                        </ul>
                    </div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
    
	<!-- FOOT -->
	<?php include('../layouts/foot.php') ?>
	<!-- FOOT -->