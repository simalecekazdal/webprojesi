<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">

    <!-- Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Ikon Kutuphanesi -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans&display=swap" rel="stylesheet">
	
	<!-- Css -->
	<link rel="stylesheet" href="style.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ece'nin Web Sitesi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    
</head>
<body>
    <nav class="navbar navbar-expand-md fixed-top bg-dark navbar-white ">
    
        <div class="container">

            <a href="index.html" class="navbar-brand text-white">
                <i class="fas fa-hat-wizard"></i>
                Şimal Ece
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"><i class="fas fa-ellipsis-v"></i></span>
			</button>
            <div id="navbarCollapse" class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto ">

					<li class="nav-item">
						<a href="ilgialanlarım.html" class="nav-link active  text-white">
                            <i class="fas fa-home"></i>
	      				İlgi Alanlarım
	      				</a></li>

					<li class="nav-item">
						<a href="özgeçmiş.html" class="nav-link active  text-white">
                            <i class="fas fa-user"></i>
	      				Özgeçmiş
	      				</a></li>

	      			<li class="nav-item">
						<a href="sehrim.html" class="nav-link active  text-white">
                            <i class="fas fa-city"></i>
	      				Şehrim
	      				</a></li>	

					<li class="nav-item">
						<a href="mirasımız.html" class="nav-link active  text-white">
                            <i class="fas fa-landmark"></i>
	      				Mirasımız
	      				</a></li>

	      			<li class="nav-item">
						<a href="iletişim.html" class="nav-link active  text-white">
                            <i class="fas fa-comments"></i>
	      				İletişim
	      				</a></li>

	      			<li class="nav-item">
						<a href="login.php" class="nav-link active  text-white">
	      				<i class="fas fa-sign-in-alt"></i>
                        Log-in
	      				</a>
                    </li>				
				</ul>
			</div>
        </div>
    </nav>
    <header>
        <div class="bg-info text-light jumbotron">
            <div class="container">
            <div class="col-md-6 px-0">
					<h1 class="display-4 font-italic">
						Giriş Ekranı
					</h1>
				</div>
			</div>
		</div>
    </header>
    <main>

		<div class="container">
			
			<form action="git-Login.php" method="POST">

				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" placeholder="Email 'abc@sakarya.edu.tr'" required="required">
				</div>

				<div class="form-group">
					<label for="password">Şifre</label>
					<input type="password" name="password" class="form-control" placeholder="Şifre 'abc'" required="required">
				</div>

				<button class="btn btn btn-info" type="submit">Gönder</button>

				<br><br><br>

			</form>

		</div>

	</main>


	<footer class="py-5 bg-info text-white text-center">
		Web Teknolojileri Projesi © Şimal Ece Kazdal 2023
	</footer>

	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


	

</body>
</html>