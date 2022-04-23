<?php
  session_start();

  if(isset($_SESSION['id'])) {
    ?>

<!DOCTYPE html >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studify</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="formappunti.css" rel="stylesheet">
    <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/797356307c.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  </head>

 <!-- Navigation -->
 <nav class="navbar navbar-expand-md navbar-light bg-light sticky top">
	<nav class="navbar navbar-light bg-light">
	  <div class="container">
		<a class="navbar-brand" href="index.php">
		  <img src="img/logo_small.png" height="50" alt="" loading="lazy"/>
		</a>
	  </div>
	</nav>

	<div class="collapse navbar-collapse" id="collapseResponsive"></div>
	<ul class="navbar-nav ml-auto"> <!--per fare le scritte vicino la home-->
		<li class="nav-item ">
			<a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
				
		<li class="nav-item ">
			<a class="nav-link" href="APPUNTI.php">Appunti</a></li>
		<li class="nav-item ">
			<a class="nav-link" href="chiSiamo.html">Chi Siamo</a></li>
			<?php
					if(isset($_SESSION['id'])) {
						
						?>
					    <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="profile.php" id="navbarDropdownAppunti" role="button" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"> <?php echo($_SESSION['username']) ?> </a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownAppunti">
							<a class="dropdown-item" href="profile.php"> Il tuo profilo </a>
						</li>
						<li class="nav-item active">
							  <form action="logout.php" method="post"> <input type="submit" value="Esci" class="btn btn-primary" style="background-color: navy;"/></form></li>
					<?php
					}
					else {
						?>
						<a class="nav-link" href="registrazione/index.html" > Registrati </a></li>
						<li class="nav-item active">
						<a class="btn btn-primary" style="background-color: navy;" href="login/index.php">Accedi</a></li>
						<?php
					}
					?>	
	</ul>
</nav>

  <br>
  <br>
  <br>
  <br>




<div class="container-fluid" style="margin: left 100px; margin-right: 100px">
  <div class="jumbotron">
    <br>
    <div class=" text-center">
    <h3> Carica i tuoi documenti!  &#8205; </h3>
  </div>

    </br>
    
      
   
   <!-- Form per caricare i libri/appunti -->
  <form method="POST" action="upload.php" enctype="multipart/form-data">
    
  <div class="mb-3">
      <label for="validationTextarea">Inserisci un titolo</label>
      <input type="text" name="nome_documento" placeholder="Nome" class="form-control"required>
      <div class="invalid-feedback">
        Titolo Richiesto
      </div>
    </div>

    <div class="form-group"> 
      <label for="validationTextarea">Seleziona la categoria</label>
      <select class="custom-select" name ="categoria" type=" text" required>
        <option value="">Categoria Documento </option>
        <option value="Libro">Libro</option>
        <option value="Appunti">Appunti</option>
      </select>
    </div>
   
    <div class="form-group"> 
      <label for="validationTextarea">Codice Corso di Caurea</label>
      <select class="custom-select" name ="codice_corso_laurea" type=" text" required>
        <option value=""> Codice Corso di Laurea </option>
        <option value="SNT/01 Classe delle lauree in professioni sanitarie infermieristiche e professione sanitaria ostetrica"> 
          SNT/01 Classe delle lauree in professioni sanitarie infermieristiche e professione sanitaria ostetrica          
        </option>
        <option value="SNT/02 Classe delle lauree in professioni sanitarie della riabilitazione">
           SNT/02 Classe delle lauree in professioni sanitarie della riabilitazione          
        </option>
        <option value="SNT/03 Classe delle lauree in professioni sanitarie tecniche">
           SNT/03 Classe delle lauree in professioni sanitarie tecniche          
        </option>
        <option value="SNT/04 Classe delle lauree in professioni sanitarie della prevenzion">
           SNT/04 Classe delle lauree in professioni sanitarie della prevenzione          
        </option>
        <option value="L-01 Classe delle Lauree in Beni Culturali">
           L-01 Classe delle Lauree in Beni Culturali
        </option>
        <option value="L-02 Classe delle Lauree in Biotecnologie">
           L-02 Classe delle Lauree in Biotecnologie
        </option>
        <option value="L-03 Classe delle Lauree in Discipline delle Arti Figurative, della Musica, dello Spettacolo e della Moda">
           L-03 Classe delle Lauree in Discipline delle Arti Figurative, della Musica, dello Spettacolo e della Moda
        </option>
        <option value="L-04 Classe delle Lauree in Disegno Industriale">
           L-04 Classe delle Lauree in Disegno Industriale
        </option>
        <option value="L-05 Classe delle Lauree in Filosofia">
           L-05 Classe delle Lauree in Filosofia
        </option>
        <option value="L-06 Classe delle Lauree in Geografia">
           L-06 Classe delle Lauree in Geografia
        </option>
        <option value="L-07 Classe delle Lauree in Ingegneria Civile e Ambientale">
           L-07 Classe delle Lauree in Ingegneria Civile e Ambientale
        </option>
        <option value="L-08 Classe delle Lauree in Ingegneria dell Informazione">
           L-08 Classe delle Lauree in Ingegneria dell'Informazione
        </option>
        <option value="L-09 Classe delle Lauree in Ingegneria Industriale">
           L-09 Classe delle Lauree in Ingegneria Industriale
        </option>
        <option value="L-10 Classe delle Lauree in Lettere">
           L-10 Classe delle Lauree in Lettere
        </option>
        <option value="L-11 Classe delle Lauree in Lingue e Culture Moderne">
           L-11 Classe delle Lauree in Lingue e Culture Moderne
        </option>
        <option value="L-12 Classe delle Lauree in Mediazione Linguistica">
           L-12 Classe delle Lauree in Mediazione Linguistica
        </option>
        <option value="L-13 Classe delle Lauree in Scienze Biologiche">
           L-13 Classe delle Lauree in Scienze Biologiche
        </option>
        <option value="L-14 Classe delle Lauree in Scienze dei Servizi Giuridici">
           L-14 Classe delle Lauree in Scienze dei Servizi Giuridici
        </option>
        <option value="L-15 Classe delle Lauree in Scienze del Turismo">
           L-15 Classe delle Lauree in Scienze del Turismo
        </option>
        <option value="L-16 Classe delle Lauree in Scienze dell Amministrazione e dell Organizzazione">
           L-16 Classe delle Lauree in Scienze dell'Amministrazione e dell'Organizzazione
        </option>
        <option value="L-17 Classe delle Lauree in Scienze dell Architettura">
           L-17 Classe delle Lauree in Scienze dell'Architettura
        </option>
        <option value="L-18 Classe delle Lauree in Scienze dell Economia e della Gestione Aziendale">
           L-18 Classe delle Lauree in Scienze dell'Economia e della Gestione Aziendale
        </option>
        <option value="L-19 Classe delle Lauree in Scienze dell Educazione e della Formazione">
           L-19 Classe delle Lauree in Scienze dell'Educazione e della Formazione
        </option>
        <option value="L-20 Classe delle Lauree in Scienze della Comunicazione">
           L-20 Classe delle Lauree in Scienze della Comunicazione
        </option>
        <option value="L-21 Classe delle Lauree in Scienze della Pianificazione Territoriale, Urbanistica, Paesaggistica e Ambientale">
           L-21 Classe delle Lauree in Scienze della Pianificazione Territoriale, Urbanistica, Paesaggistica e Ambientale
        </option>
        <option value="L-22 Classe delle Lauree in Scienze delle Attività Motorie e Sportive">
           L-22 Classe delle Lauree in Scienze delle Attività Motorie e Sportive
        </option>
        <option value="L-23 Classe delle Lauree in Scienze e Tecniche dell Edilizia">
           L-23 Classe delle Lauree in Scienze e Tecniche dell'Edilizia
        </option>
        <option value="L-24 Classe delle Lauree in Scienze e Tecniche Psicologiche">
           L-24 Classe delle Lauree in Scienze e Tecniche Psicologiche
        </option>
        <option value="L-25 Classe delle Lauree in Scienze e Tecnologie Agrarie e Forestali">
           L-25 Classe delle Lauree in Scienze e Tecnologie Agrarie e Forestali
        </option>
        <option value="L-26 Classe delle Lauree in Scienze e Tecnologie Agro-Alimentari">
           L-26 Classe delle Lauree in Scienze e Tecnologie Agro-Alimentari
        </option>
        <option value="L-27 Classe delle Lauree in Scienze e Tecnologie Chimiche">
           L-27 Classe delle Lauree in Scienze e Tecnologie Chimiche
        </option>
        <option value="L-28 Classe delle Lauree in Scienze e Tecnologie della Navigazione">
           L-28 Classe delle Lauree in Scienze e Tecnologie della Navigazione
        </option>
        <option value="L-29 Classe delle Lauree in Scienze e Tecnologie Farmaceutiche">
           L-29 Classe delle Lauree in Scienze e Tecnologie Farmaceutiche
        </option>
        <option value="L-30 Classe delle Lauree in Scienze e Tecnologie Fisiche">
           L-30 Classe delle Lauree in Scienze e Tecnologie Fisiche
        </option>
        <option value="L-31 Classe delle Lauree in Scienze e Tecnologie Informatiche">
           L-31 Classe delle Lauree in Scienze e Tecnologie Informatiche
        </option>
        <option value="L-32 Classe delle Lauree in Scienze e Tecnologie per l Ambiente e la Natura">
           L-32 Classe delle Lauree in Scienze e Tecnologie per l'Ambiente e la Natura
        </option>
        <option value="L-33 Classe delle Lauree in Scienze Economiche e Statistiche">
           L-33 Classe delle Lauree in Scienze Economiche e Statistiche
        </option>
        <option value="L-34 Classe delle Lauree in Scienze Geologiche">
           L-34 Classe delle Lauree in Scienze Geologiche
        </option>
        <option value="L-35 Classe delle Lauree in Scienze Matematiche">
           L-35 Classe delle Lauree in Scienze Matematiche
        </option>
        <option value="L-36 Classe delle Lauree in Scienze Politiche e delle Relazioni Internazionali">
           L-36 Classe delle Lauree in Scienze Politiche e delle Relazioni Internazionali
        </option>
        <option value="L-37 Classe delle Lauree in Scienze Sociali per la Cooperazione, lo Sviluppo e la Pace">
           L-37 Classe delle Lauree in Scienze Sociali per la Cooperazione, lo Sviluppo e la Pace
        </option>
        <option value="L-38 Classe delle Lauree in Scienze Zootecniche e Tecnologie delle Produzioni Animali">
           L-38 Classe delle Lauree in Scienze Zootecniche e Tecnologie delle Produzioni Animali
        </option>
        <option value="L-39 Classe delle Lauree in Servizio Sociale">
           L-39 Classe delle Lauree in Servizio Sociale
        </option>
        <option value="L-40 Classe delle Lauree in Sociologia">
           L-40 Classe delle Lauree in Sociologia
        </option>
        <option value="L-41 Classe delle Lauree in Statistica">
           L-41 Classe delle Lauree in Statistica
        </option>
        <option value="L-42 Classe delle Lauree in Storia">
           L-42 Classe delle Lauree in Storia
        </option>
        <option value="L-43 Classe delle Lauree in Diagnostica per la conservazione dei beni culturali">
           L-43 Classe delle Lauree in Diagnostica per la conservazione dei beni culturali
        </option>
        <option value="LMG-01 Classe delle Lauree Magistrali in Giurisprudenza">
           LMG-01 Classe delle Lauree Magistrali in Giurisprudenza
        </option>
        <option value="LMR-02 Classe delle Lauree Magistrali in Conservazione e Restauro dei Beni Culturali">
           LMR-02 Classe delle Lauree Magistrali in Conservazione e Restauro dei Beni Culturali
        </option>
        <option value="L/DS Classe delle Lauree in Scienze della Difesa e della Sicurezza">
           L/DS Classe delle Lauree in Scienze della Difesa e della Sicurezza
        </option>
        <option value="L/SC Classe delle Lauree in Scienze Criminologiche e della Sicurezza">
           L/SC Classe delle Lauree in Scienze Criminologiche e della Sicurezza
        </option>
        <option value="L/SNT01 Classe delle Lauree delle Professioni Sanitarie Infermieristiche e Professione Sanitaria Ostetrica">
           L/SNT01 Classe delle Lauree delle Professioni Sanitarie Infermieristiche e Professione Sanitaria Ostetrica
        </option>
        <option value="L/SNT02 Classe delle Lauree delle Professioni Sanitarie della Riabilitazione">
           L/SNT02 Classe delle Lauree delle Professioni Sanitarie della Riabilitazione
        </option>
        <option value="L/SNT03 Classe delle Lauree delle Professioni Sanitarie Tecniche">
           L/SNT03 Classe delle Lauree delle Professioni Sanitarie Tecniche
        </option>
        <option value="L/SNT04 Classe delle Lauree delle Professioni Sanitarie della Prevenzione">
           L/SNT04 Classe delle Lauree delle Professioni Sanitarie della Prevenzione
        </option>
        <option value="LM-1 Antropologia culturale ed etnologia">
           LM-1 Antropologia culturale ed etnologia
        </option>
        <option value="LM-2 Archeologia">
           LM-2 Archeologia
        </option>
        <option value="LM-3 Architettura del paesaggio">
           LM-3 Architettura del paesaggio
        </option>
        <option value="LM-4 Architettura e ingegneria edile-architettura">
           LM-4 Architettura e ingegneria edile-architettura
        </option>
        <option value="LM-5 Archivistica e biblioteconomia">
           LM-5 Archivistica e biblioteconomia
        </option>
        <option value="LM-6 Biologia">
           LM-6 Biologia
        </option>
        <option value="LM-7 Biotecnologie agrarie">
           LM-7 Biotecnologie agrarie
        </option>
        <option value="LM-8 Biotecnologie industriali">
           LM-8 Biotecnologie industriali
        </option>
        <option value="LM-9 Biotecnologie mediche, veterinarie e farmaceutiche">
           LM-9 Biotecnologie mediche, veterinarie e farmaceutiche
        </option>
        <option value="LM-10 Conservazione dei beni architettonici e ambientali">
           LM-10 Conservazione dei beni architettonici e ambientali
        </option>
        <option value=" LM-11 Scienze per la conservazione e restauro dei beni culturali">
           LM-11 Scienze per la conservazione e restauro dei beni culturali
        </option>
        <option value="LM-12 Design">
           LM-12 Design
        </option>
        <option value="LM-13 Farmacia e farmacia industriale">
           LM-13 Farmacia e farmacia industriale
        </option>
        <option value="LM-14 Filologia moderna">
           LM-14 Filologia moderna
        </option>
        <option value="LM-15 Filologia, letterature e storia dell'antichità">
           LM-15 Filologia, letterature e storia dell'antichità
        </option>
        <option value="LM-16 Finanza">
           LM-16 Finanza
        </option>
        <option value="LM-17 Fisica">
           LM-17 Fisica
        </option>
        <option value="LM-18 Informatica">
           LM-18 Informatica
        </option>
        <option value="LM-19 Informazione e sistemi editoriali">
           LM-19 Informazione e sistemi editoriali
        </option>
        <option value="LM-20 Ingegneria aerospaziale e astronautica">
           LM-20 Ingegneria aerospaziale e astronautica
        </option>
        <option value="LM-21 Ingegneria biomedica">
           LM-21 Ingegneria biomedica
        </option>
        <option value="LM-22 Ingegneria chimica">
           LM-22 Ingegneria chimica
        </option>
        <option value="LM-23 Ingegneria civile">
           LM-23 Ingegneria civile
        </option>
        <option value="LM-24 Ingegneria dei sistemi edilizi">
           LM-24 Ingegneria dei sistemi edilizi
        </option>
        <option value="LM-25 Ingegneria dell automazione">
           LM-25 Ingegneria dell'automazione
        </option>
        <option value="LM-26 Ingegneria della sicurezza">
           LM-26 Ingegneria della sicurezza
        </option>
        <option value="LM-27 Ingegneria delle telecomunicazioni">
           LM-27 Ingegneria delle telecomunicazioni
        </option>
        <option value="LM-28 Ingegneria elettrica">
           LM-28 Ingegneria elettrica
        </option>
        <option value="LM-29 Ingegneria elettronica">
           LM-29 Ingegneria elettronica
        </option>
        <option value="LM-30 Ingegneria energetica e nucleare">
           LM-30 Ingegneria energetica e nucleare
        </option>
        <option value="LM-31 Ingegneria gestionale">
           LM-31 Ingegneria gestionale
        </option>
        <option value="LM-32 Ingegneria informatica">
           LM-32 Ingegneria informatica
        </option>
        <option value="LM-33 Ingegneria meccanica">
           LM-33 Ingegneria meccanica
        </option>
        <option value="LM-34 Ingegneria navale">
           LM-34 Ingegneria navale
        </option>
        <option value="LM-35 Ingegneria per l ambiente e il territorio">
           LM-35 Ingegneria per l'ambiente e il territorio
        </option>
        <option value="LM-36 Lingue e letterature dell Africa e dell Asia">
           LM-36 Lingue e letterature dell'Africa e dell'Asia
        </option>
        <option value="LM-37 Lingue e letterature moderne europee e americane">
           LM-37 Lingue e letterature moderne europee e americane
        </option>
        <option value="LM-38 Lingue moderne per la comunicazione e la cooperazione internazionale">
           LM-38 Lingue moderne per la comunicazione e la cooperazione internazionale
        </option>
        <option value="LM-39 Linguistica">
           LM-39 Linguistica
        </option>
        <option value="LM-40 Matematica">
           LM-40 Matematica
        </option>
        <option value="LM-41 Medicina e Chirurgia">
           LM-41 Medicina e Chirurgia
        </option>
        <option value="LM-42 Medicina Veterinaria">
           LM-42 Medicina Veterinaria
        </option>
        <option value="LM-43 Metodologie informatiche per le discipline umanistiche">
           LM-43 Metodologie informatiche per le discipline umanistiche
        </option>
        <option value="LM-44 Modellistica matematico-fisica per l ingegneria">
           LM-44 Modellistica matematico-fisica per l'ingegneria
        </option>
        <option value="LM-45 Musicologia e beni musicali">
           LM-45 Musicologia e beni musicali
        </option>
        <option value="LM-46 Odontoiatria e protesi dentaria">
           LM-46 Odontoiatria e protesi dentaria
        </option>
        <option value="LM-47 Organizzazione e gestione dei servizi per lo sport e le attività motorie">
           LM-47 Organizzazione e gestione dei servizi per lo sport e le attività motorie
        </option>
        <option value="LM-48 Pianificazione territoriale urbanistica e ambientale">
           LM-48 Pianificazione territoriale urbanistica e ambientale
        </option>
        <option value="LM-49 Progettazione e gestione dei sistemi turistici">
           LM-49 Progettazione e gestione dei sistemi turistici
        </option>
        <option value="LM-50 Programmazione e gestione dei servizi educativi">
           LM-50 Programmazione e gestione dei servizi educativi
        </option>
        <option value="LM-51 Psicologia">
           LM-51 Psicologia
        </option>
        <option value="LM-52 Relazioni internazionali">
           LM-52 Relazioni internazionali
        </option>
        <option value="LM-53 Scienza e ingegneria dei materiali">
           LM-53 Scienza e ingegneria dei materiali
        </option>
        <option value="LM-54 Scienze chimiche">
           LM-54 Scienze chimiche
        </option>
        <option value="LM-55 Scienze cognitive">
           LM-55 Scienze cognitive
        </option>
        <option value="LM-56 Scienze dell economia">
           LM-56 Scienze dell'economia
        </option>
        <option value="LM-57 Scienze dell educazione degli adulti e della formazione continua">
           LM-57 Scienze dell'educazione degli adulti e della formazione continua
        </option>
        <option value="LM-58 Scienze dell universo">
           LM-58 Scienze dell'universo
        </option>
        <option value="LM-59 Scienze della comunicazione pubblica, d impresa e pubblicità">
           LM-59 Scienze della comunicazione pubblica, d'impresa e pubblicità
        </option>
        <option value="LM-60 Scienze della natura">
           LM-60 Scienze della natura
        </option>
        <option value="LM-61 Scienze della nutrizione umana">
           LM-61 Scienze della nutrizione umana
        </option>
        <option value="LM-62 Scienze della politica">
           LM-62 Scienze della politica
        </option>
        <option value="LM-63 Scienze delle pubbliche amministrazioni">
           LM-63 Scienze delle pubbliche amministrazioni
        </option>
        <option value="LM-64 Scienze delle religioni">
           LM-64 Scienze delle religioni
        </option>
        <option value="LM-65 Scienze dello spettacolo e produzione multimediale">
           LM-65 Scienze dello spettacolo e produzione multimediale
        </option>
        <option value="LM-66 Sicurezza informatica">
           LM-66 Sicurezza informatica
        </option>
        <option value="LM-67 Scienze e tecniche delle attività motorie preventive e adattate">
           LM-67 Scienze e tecniche delle attività motorie preventive e adattate
        </option>
        <option value="LM-68 Scienze e tecniche dello sport">
           LM-68 Scienze e tecniche dello sport
        </option>
        <option value="LM-69 Scienze e tecnologie agrarie">
           LM-69 Scienze e tecnologie agrarie
        </option>
        <option value="LM-70 Scienze e tecnologie alimentari">
           LM-70 Scienze e tecnologie alimentari
        </option>
        <option value="LM-71 Scienze e tecnologie della chimica industriale">
           LM-71 Scienze e tecnologie della chimica industriale
        </option>
        <option value="LM-72 Scienze e tecnologie della navigazione (80/M)">
           LM-72 Scienze e tecnologie della navigazione (80/M)
        </option>
        <option value="LM-73 Scienze e tecnologie forestali e ambientali">
           LM-73 Scienze e tecnologie forestali e ambientali
        </option>
        <option value="LM-74 Scienze e tecnologie geologiche">
           LM-74 Scienze e tecnologie geologiche
        </option>
        <option value="LM-75 Scienze e tecnologie per l ambiente e il territorio">
           LM-75 Scienze e tecnologie per l'ambiente e il territorio
        </option>
        <option value="LM-76 Scienze economiche per l ambiente e la cultura">
           LM-76 Scienze economiche per l'ambiente e la cultura
        </option>
        <option value="LM-77 Scienze economico-aziendali">
           LM-77 Scienze economico-aziendali
        </option>
        <option value="LM-78 Scienze filosofiche">
           LM-78 Scienze filosofiche
        </option>
        <option value="LM-79 Scienze geofisiche">
           LM-79 Scienze geofisiche
        </option>
        <option value="LM-80 Scienze geografiche">
           LM-80 Scienze geografiche
        </option>
        <option value="LM-81 Scienze per la cooperazione allo sviluppo">
           LM-81 Scienze per la cooperazione allo sviluppo
        </option>
        <option value="LM-82 Scienze statistiche">
           LM-82 Scienze statistiche
        </option>
        <option value="LM-83 Scienze statistiche attuariali e finanziarie">
           LM-83 Scienze statistiche attuariali e finanziarie
        </option>
        <option value="LM-84 Scienze storiche">
           LM-84 Scienze storiche
        </option>
        <option value="LM-85 Scienze pedagogiche">
           LM-85 Scienze pedagogiche
        </option>
        <option value="LM-86 Scienze zootecniche e tecnologie animali">
           LM-86 Scienze zootecniche e tecnologie animali
        </option>
        <option value="LM-87 Servizio sociale e politiche sociali">
           LM-87 Servizio sociale e politiche sociali
        </option>
        <option value="LM-88 Sociologia e ricerca sociale">
           LM-88 Sociologia e ricerca sociale
        </option>
        <option value="LM-89 Storia dell arte">
           LM-89 Storia dell'arte
        </option>
        <option value="LM-90 Studi europei">
           LM-90 Studi europei
        </option>
        <option value="LM-91 Tecniche e metodi per la società dell informazione">
           LM-91 Tecniche e metodi per la società dell'informazione
        </option>
        <option value="LM-92 Teorie della comunicazione">
           LM-92 Teorie della comunicazione
        </option>
        <option value="LM-93 Teorie e metodologie dell E-Learning e della media education">
           LM-93 Teorie e metodologie dell'E-Learning e della media education
        </option>
        <option value="LM-94 Traduzione specialistica e interpretariato">
           LM-94 Traduzione specialistica e interpretariato
        </option>
        <option value="LM/DS Scienze della Difesa e della Sicurezza">
           LM/DS Scienze della Difesa e della Sicurezza
        </option>
        <option value="LM/SC Scienze Criminologiche Applicate all'Investigazione e alla Sicurezza">
           LM/SC Scienze Criminologiche Applicate all'Investigazione e alla Sicurezza
        </option>
        <option value="LM SC-GIUR">
           LM SC-GIUR
        </option>
        <option value="LM/SNT01 Lauree Magistrali nelle Scienze Infermieristiche e Ostetriche">
           LM/SNT01 Lauree Magistrali nelle Scienze Infermieristiche e Ostetriche
        </option>
        <option value="LM/SNT02 Lauree Magistrali nelle Scienze delle Professioni Sanitarie della Riabilitazione">
           LM/SNT02 Lauree Magistrali nelle Scienze delle Professioni Sanitarie della Riabilitazione
        </option>
        <option value="LM/SNT03 Lauree Magistrali nelle Scienze delle Professioni Sanitarie Tecniche">
           LM/SNT03 Lauree Magistrali nelle Scienze delle Professioni Sanitarie Tecniche
        </option>
        <option value="LM/SNT04 Lauree Magistrali nelle Scienze delle Professioni Sanitarie della Prevenzione">
           LM/SNT04 Lauree Magistrali nelle Scienze delle Professioni Sanitarie della Prevenzione
        </option>
      </select>
    </div>

    <div class="mb-3">
      <label for="validationTextarea">Materia</label>
      <input type="text" name="materia" class="form-control" size="500" maxlength="500"  placeholder="Aggiungi una materia 150 parole max" required ></input>
      <div class="invalid-feedback">
      Aggiungi la materia, documenti con una materia vengono visionati 7 volte di più.
      </div>
    </div>
      
    <div class="mb-3">
      <label for="validationTextarea">Descrizione</label>
      <input type="text" name="descrizione_documento" class="form-control" size="500" maxlength="500"  placeholder="Aggiungi una descrizione 500 parole max" required ></input>
      <div class="invalid-feedback">
      Aggiungi una descrizione,documenti con una descrizione vengono visionati 7 volte di più.
      </div>
    </div>
    
    <div class="custom-control custom-checkbox mb-3">
      <input type="checkbox" name="term_e_cond" class="custom-control-input" id="customControlValidation1" required>
      <label class="custom-control-label" for="customControlValidation1">Accetta termini e condizioni </label>
      <div class="invalid-feedback"></div>
    </div>

    <input type="file" name="userfile">

    <input type="submit" name="submit" value="Carica file">

  </form>
</div>
</div>

<br>
  <br>
  <br>
  <br>
  
<!---                                   Footer                                     -->
<footer class="bg-light text-center text-black" style="background-color: antiquewhite;">
	<div class="container p-4">
	  <!-- Sezione: Social media -->
	  <section class="mb-4">
		<!-- Discord -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://discord.gg/hrwyUy7G9v" role="button"
		  ><i class="fab fa-discord"></i
		
		<!-- Facebook -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://www.facebook.com/" role="button"
		  ><i class="fab fa-facebook-f"></i
		></a>
  
		<!-- Twitter -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://twitter.com/?lang=it" role="button" 
		  ><i class="fab fa-twitter"></i
		></a>
  
		<!-- Google -->
		<a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button"
		  ><i class="fab fa-google"></i
		></a>
  
		<!-- Instagram -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://www.instagram.com/" role="button"
		  ><i class="fab fa-instagram"></i
		></a>
  
		<!-- Linkedin -->
		<a class="btn btn-outline-dark  btn-floating m-1" href="https://it.linkedin.com/" role="button"
		  ><i class="fab fa-linkedin-in"></i
		></a>
  
		<!-- Github -->
		<a class="btn btn-outline-dark btn-floating m-1" href="https://github.com/DdIUMmies/Studify" role="button"
		  ><i class="fab fa-github"></i
		></a>
	  </section>
  
<!--                  Newsletter                -->
	  <section class="">
		<form action=""> 
		  <div class="row d-flex justify-content-center">
			<div class="col-auto">
			  <p class="pt-2">
				<strong>Iscriviti alla newsletter!</strong>
			  </p>
			</div>

			<div class="col-md-5 col-12">
			  <div class="form-outline form-dark mb-4">
				<input type="email" id="form5Example2" class="form-control" />
				<label class="form-label" for="form5Example2">Email </label>
			  </div>
			</div>
  
			<div class="col-auto">
			  <button type="submit" class="btn btn-outline-dark mb-4">
				Iscriviti
			  </button>
			</div>
		  </div>
		</form>
	  </section>

	  <section class="mb-4">
		<p>
		  Questo sito è stato progettato per il corso di linguaggi e tecnologie per il web del corso di laurea in Ingegneria 
		  Informatica de La Sapienza di Roma. Anche se è stato fatto a scopo didattico, i contenuti sono proprietà intellettuale dei suoi creatori e ne è vietata la duplicazione 
		  (parziale o totale) senza l'esplicito consenso di essi.
		</p>
	  </section>

<!--             Copyright                 -->
	<div class="text-center p-3" >
	  © 2021 Copyright:
	  <a class="text-dark" href="https://mdbootstrap.com/">Studify.it</a>
	</div>
  </footer>
</body>
</html>

<?php

} else {
    header("Location: noAccess.html");
    ?>
    <form action="login/index.php" method="post">
    <input type="submit" value="Login"/>
    </form>
    <?php
}
?>