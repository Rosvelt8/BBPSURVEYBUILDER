<?php
require('../../controller/initSessionController.php');
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
                <?php require('../../controller/surveyController.php');?>
                    <form class="form-create-survey" action="" method="post" enctype="multipart/form-data">
                        <div class="form-input">
                            <div class="preview" style="float: right; font-size: 2rem">
                            <a href="ans.page.php?token=<?=$survey['token']?>" id="link"></a>
                            <i class='bx bxs-share-alt' style="cursor: pointer" onclick="share()"></i>
                            <i class='bx bx-link' style="cursor: pointer;" onclick="copyLink()"></i>
                            </div>
                            <label for="file-ip-1">
                                
                                <img src="../assets/img/survey/<?=$survey['img_path']?>" height="300" width="auto" id="file-ip-1-preview" title="choisir une image" alt="" ><br>
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
                        <?php
                  if(isset($errorMessage)){
                    echo '<p class="error">'.$errorMessage.'</p>';
                    
                  }
                  ?>
                            <input type="hidden" name="idSurvey" value="<?=$survey['idsurvey']?>">
                            <input type="hidden" name="tokenSurvey" value="<?=$survey['token']?>">
                            <input type="hidden" name="img_path" value="<?=$survey['img_path']?>">
                        <div class="form-button"> 
                            <div id="edit" onclick="update()"><i class='bx bxs-edit'></i></div>
                            <input id="send" type="submit" style="display: none;" name="updateSurvey" value="Modifier">
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
				</div>
				<div class="todo" style="overflow-x: hidden;">
					<div class="head">
						<h3>Questions</h3>
						<i class='bx bx-plus' onclick="addQuestion()" id="addQuestion"></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list" id="list-question">
                    <?php
                    if($questions){
                    foreach($questions as $question){ ?>
                        
						<li class="completed">
							<p><?=$question['intitle']?></p>
							<a style="color: inherit;" href="question.page.php?id=<?=$question['idquestion']?>"><i class='bx bx-link'></i></a>
						</li>
                        
                    <?php } }else{
                        echo '<p style="text-align: center;">Aucune questions...</p>';
                        } ?>
                        <li class="completed" id="to-add" style="">
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
                        </style>
	
						
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	
    <script>
        let title= document.getElementById('title');
        let img= document.getElementById('file-ip-1');
        let description= document.getElementById('desc');
        let edit= document.getElementById('edit');
        let send= document.getElementById('send');
        let add= document.getElementById('to-add');
        let listQuestion= document.getElementById('list-question');


        function addQuestion(){
            add.style.display="flex";
        };

        function update(){
            send.style.display="block";
            title.removeAttribute('disabled');
            img.removeAttribute('disabled');
            description.removeAttribute('disabled');
            edit.style.display="none";
        };

        function showPreview(event){
            if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("file-ip-1-preview");
            preview.src = src;
            preview.style.display = "block";
            }
        }

        function copyLink(){
            let link= document.getElementById('link');
            let linkSurvey= link.href;
            navigator.clipboard.writeText(linkSurvey);
            this.title="copié";
        }

        function share(){
            let linkSurvey= link.href;
            if(window.navigator.share){
                navigator.share({
                    title: '+<?= $survey['title'] ?>+',
                    text: <?= $survey['description'] ?>,
                    text: linkSurvey,
                }).catch(function(){
                    alert('erreur non reconnue');
                });
            }else{
                alert('erreur incompatible');
            }
        }
    </script>
	<!-- FOOT -->
	<?php include('../layouts/foot.php') ?>
	<!-- FOOT -->