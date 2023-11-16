<?php
require('../../controller/initSessionController.php');
require('../../controller/createSurveyController.php');
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
				<div class="left">
					<h1>Creer Un Sondage</h1>
					<!-- <ul class="breadcrumb">
						<li>
							<a href="#">Creer Un Sondage</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Sondages</a>
						</li>
					</ul> -->
				</div>
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
                                
                                <img src="../assets/img/noimage.png" height="300" width="900" id="file-ip-1-preview" title="choisir une image" alt=""><br>
                            </label>
                            <input style="display: none;" type="file" id="file-ip-1" accept="image/*" name="imgSurvey" onchange="showPreview(event);">
                            
                        </div>
                        <div class="form-title">
                            <label for="">Titre Du Sondage</label>
                            <input name="title" type="text">
                        </div>
                        <div class="form-area">
                            <label for="">Description</label>
                            <textarea name="description" id="" placeholder="decrivez votre sondage ici..." cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-button">
                            <input type="submit" name="addSurvey" value="Envoyer">
                        </div>
                    </form>
                    <style>
                        .form-create-survey{
                            margin-left: 5%;
                            margin-bottom: 15px;
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
                            
                        }
                        .form-area textarea{
                            width: 95%;
                            height: 5rem;
                            outline: none;
                            background: transparent;
                            border: none;
                            border-bottom: 2px solid var(--blue);
                        }
                        .form-button input{
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
    function showPreview(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-ip-1-preview");
      preview.src = src;
      preview.style.display = "block";
    }
}
</script>
	<!-- FOOT -->
	<?php include('../layouts/foot.php') ?>
	<!-- FOOT -->