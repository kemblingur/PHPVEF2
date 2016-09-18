<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		Verkefni 2
	</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h3>Liður 1</h3>
	<p>Maður ætti að nota OOP í PHP þegar að það á við. Til dæmis þegar maður er að vinna við stórt verkefni þar sem þarf að ná fram mikilli virkni getur verið mjög hentugt að nota OOP hugsjónina til þess að brjóta vandamálið upp eftir þeim fítusum sem þarf að ná fram í verkefninu. OOP getur verið óhentugt þegar að verið er að vinna í eitthverju litlu verkefni því að þegar að kóðinn sem er notast við er lítill getur OOP kóðaform lengt kóðasafnið í staðinn fyrir að gera það sem OOP á að gera og stytta það. Procedural programming er í raun og ekkert annað en niðurbrot vandamáls frá öðru sjónarmiði en OOP. Þar sem OOP brýtur vandamálið niður frá sjónarmiði sameiginlegra eiginleika mismunandi virkni sem forritið þarf að bjóða uppá brýtur PP vandamálið í samansafn af breytum, gagnagrindum og aðferðum. Þetta tengist samt á endanum vegna þess að hver OOP biti af verkefninu notast almennt við eitthverskonar PP hugsun þegar að sá hluti er leystur.</p>
	<h3>Liður 2</h3>
	<h4>A)</h4>
	<p>Ef property er gert private er það aðeins sýnilegt inni í sínum eigin klasa og ekki neinstaðar annarstaðar. Ef property er public er það sýnilegt ekki aðeins inni í sínum eigin klasa heldur líka í öðrum klösum og tilfærslum af hlutum. Það er líka til protected skilyrði fyrir property sem gerir propertyið sýnilegt einungis gagnvart hlutnum sjálfum og öllum hlutum sem erfa þann hlut sem inniheldur protected propertyið</p>
	<h4>B)</h4>
	<p>Verndunarskilyrðin virka nákvæmlega eins fyrir aðferðir og properties</p>
	<h3>Liður 3</h3>
	Autoloader er kóði sem gerir PHP kleift að vita, án þess að þurfa að nota include eða requre, hvar klasaskilgreiningar manns eru geymdar og gerir manni þannig kleift að kalla í þessa klasa í kóðanum á einfaldari hátt en annars. Namespaces eru ekkert annað en annað stig af scope sem er hægt að nýta á aðeins annan hátt en klasa eða scope í öðru samhengi. Namespaces eru venjulega bara notuð til þess að geyma í sér marga mismunandi klasa, en þetta getur verið mjög hentugt ef maður er með marga mismunandi klasa sem heita t.d. cache en þá geta þeir verið geymdir allir undir sitthvoru namespace-inu og haldið samt áfram að heita einfaldlega cache. Það væri þá kallað í þá með NAFNÁNAMESPECE/cache.php.
	<h3>Liður 4</h3>
	Interfaces í sjálfu sér geta ekki gert neitt, en eru notuð til þess að halda utan um ákveðin munstur sem margir klasar geta átt sameiginlegt. Interface innhalda alltaf aðferðir sem klasar geta síðan erft og notað á þann hátt sem þeim hentar best.
	<h3>Liður 5</h3>
	<pre>
        //PHP er í sourcefæl
        class Book{
            //breytur skilgreindar
            var $verd;
            var $titill;
            // Get og set fyrir $verd
            function setPrice($thing){
               $this->verd = $thing;
            }
            function getPrice(){
               echo $this->verd;
            }
            // Get og set fyrir $titill
            function setTitle($thing){
               $this->titill = $thing;
            }
            function getTitle(){
               echo $this->titill;
            }
            //Smiðurinn fyrir klasann
            function Book( $thing, $thing2 ) {
               $this->titill = $thing;
			   $this->verd = $thing2;
            }
        }
	</pre>
	<h3>Liður 6</h3>
	<pre>
        //PHP er í sourcefæl
        $staerdfraedi = new Book("STÆ403", 5500 );
        $efnafraedi = new Book("Efnafræði fyrir lengra komna", 3000 );
        $islenska = new Book("Brennu-Njáls Saga", 4500 );
	</pre>
	<?php 
		$staerdfraedi = new Book("STÆ403", 5500 );
		$efnafraedi = new Book("Efnafræði fyrir lengra komna", 3000 );
		$islenska = new Book("Brennu-Njáls Saga", 4500 );
	?>
	<h3>Liður 7</h3>
	<pre>
        //PHP er í sourcefæl
        class MoreBook extends Book{
            //viðbætt breyta
            var $utgefandi;
            //Get og set fyrir viðbætta breytu
            function setPublisher($thing){
                $this->utgefandi = $thing;
            }
            function getPublisher(){
               echo $this->utgefandi;
            }
            //Smiður sem notar erfðan klasa
            function MoreBook($Titill, $Verd, $Utgefandi) {
                Book::Book($Titill, $Verd);
                $this->utgefandi = $Utgefandi;
            }
            //Prentar út allar upplýsingar um bókina
            function toString() {
                return($this->titill .", " .$this->verd.", " .$this->utgefandi);
            }
        }
	</pre>
	<?php 
		class Book{
			//breytur skilgreindar
			var $verd;
			var $titill;
			// Get og set fyrir $verd
			function setPrice($thing){
			   $this->verd = $thing;
			}
			function getPrice(){
			   echo $this->verd;
			}
			// Get og set fyrir $titill
			function setTitle($thing){
			   $this->titill = $thing;
			}
			function getTitle(){
			   echo $this->titill;
			}
			//Smiðurinn fyrir klasann
			function Book( $thing, $thing2 ) {
			   $this->titill = $thing;
			   $this->verd = $thing2;
			}
		}
		class MoreBook extends Book{
			//viðbætt breyta
			var $utgefandi;
			//Get og set fyrir viðbætta breytu
			function setPublisher($thing){
   			   $this->utgefandi = $thing;
   			}
   			function getPublisher(){
   			   echo $this->utgefandi;
   			}
   			//Smiður sem notar erfðan klasa
   			function MoreBook($Titill, $Verd, $Utgefandi) {
		    	Book::Book($Titill, $Verd);
		    	$this->utgefandi = $Utgefandi;
		   }
		   //Prentar út allar upplýsingar um bókina
		   function toString() {
		      return($this->titill .", " .$this->verd.", " .$this->utgefandi);
		   }
		}
	?>
	<h3>Liður 8</h3>
	<pre>
        class User{
            //breytur skilgreindar
            var $email;
            var $password;
            // Get og set fyrir $email
            function setEmail($thing){
                $this->email = $thing;
            }
            function getEmail(){
                echo $this->email;
            }
            // Get og set fyrir $password
            function setPass($thing){
                $this->password = $thing;
            }
            function getPass(){
                echo $this->password;
            }
            //Smiðurinn fyrir klasann
            function User( $array ) {
                $this->title = $array['email'];
                $this->price = $array['password'];
            }
        }
        $newGuy = new User($thing = array('email' => "eythormani@gmail.com", 'password' => "lykilord"));
	</pre>
	<?php
        class User{
            //breytur skilgreindar
            var $email;
            var $password;
            // Get og set fyrir $email
            function setEmail($thing){
                $this->email = $thing;
            }
            function getEmail(){
                echo $this->email;
            }
            // Get og set fyrir $password
            function setPass($thing){
                $this->password = $thing;
            }
            function getPass(){
                echo $this->password;
            }
            //Smiðurinn fyrir klasann
            function User( $array ) {
                $this->title = $array['email'];
                $this->price = $array['password'];
            }
        }
		$newGuy = new User($thing = array('email' => "eythormani@gmail.com", 'password' => "lykilord"));
	?>
</body>
</html>