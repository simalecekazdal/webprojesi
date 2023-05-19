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
        <div class="bg-dark text-light jumbotron">
            <div class="container">
            <div class="col-md-6 px-0">
					<h1 class="display-4 font-italic">
						Giriş Ekranı
					</h1>
				</div>
			</div>
		</div>
    </header>


	<div class="container" >
        <form id="formid" action="git-login.html" method="post" onsubmit="return control()">

				<div class="form-group">
					<label for="name">Email</label>
					<input type="email" name="name" class="form-control" placeholder="Email 'abc@sakarya.edu.tr'" required="required">
					<small class="form-text text-muted">Doldurulması zorunlu alan</small>
				</div>

				<div class="form-group">
					<label for="password">Şifre</label>
					<input type="password" name="password" class="form-control" placeholder="Şifre 'abc'" required="required">
					<small class="form-text text-muted">Doldurulması zorunlu alan</small>
				</div>
				<button class="btn btn btn-dark" type="submit">Gönder</button>

				<br><br><br>

			</form>
        <div class="php">
         <?php
    $color = "#FF0000";
    $color2 = "#FFFFFF";

     if(isset($_POST['name']) =="" || isset($_POST['sifre'])=="" )
     {
        
         echo"<font color = $color2>*Lütfen Tüm Alanları Doldurun</font>";	
     }
     else
     {
         if ($_POST['name']=="abc@sakarya.edu.tr" && $_POST['password']=="abc")
         {
             echo "<font color=$color2> Hoşgeldiniz</font>".$_POST['name']."<br>" ;
             header("Refresh: 10; url=index.html");
             echo "<font color=$color>10 saniye sonra ANA SAYFAYA yönlendirileceksiniz.Beklememek için </font>".'<a href="index.html">TIKLAYINIZ</a>';
            
         }
         else
         {
             echo "<font color =$color>Hatalı Kullanıcı Adı veya Şifre Girdiniz.</font>";	
         }
    
         }
        
    ?>  
    </div>
    </div>  
    </div>
	<footer class="py-5 bg-dark text-white text-center">
		Web Teknolojileri Projesi © Şimal Ece Kazdal 2023
	</footer>
	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>