<?php
include_once('config.php');
include_once('BibleDAO.php');

$books = BibleDAO::getBooks();
$defaultChapters = BibleDAO::getChapterNumbers(1);
$defaultVerses = BibleDAO::getVerseNumbers(1, 1);
$defaultVerseText = BibleDAO::getVerseText(1, 1, 1);
?>
<body style = "background-image:url(design10.jpg);background-size:1000px;background-attachment:fixed">
<div>
	<div class = "span" id = "header4">
		<div  id = "header4" class = "page-header span12">
			
			<h2 id= "nav">KING JAMES VERSION</h2>
		</div>

	</div>
		<div class = "span" id = "back2">
			<div class = "span" id = "header">
				<div id = "cat">

			<font class = "Book">Books :</font>
			<select name="books" id="books">
				<?php foreach($books as $id => $book): ?>
					<option value="<?= $id ?>"><?= $book ?></option>
				<?php endforeach ?>
			</select>

			<font class = "Book">Chapters :</font>
			<select name="chapters" id="chapters">
				<?php for($i = 1; $i <= $defaultChapters; $i++): ?>
					<option value="<?= $i ?>"><?= $i ?></option>
				<?php endfor ?>
			</select>

			<font class = "Book">Verses :</font>
			<select name="verses" id="verses">
				<?php for($i = 1; $i <= $defaultVerses; $i++): ?>
					<option value="<?= $i ?>"><?= $i ?></option>
				<?php endfor ?>
			</select>
				</div>
			

		</div>
		<div class = "span" id = "header">
			<textarea id = "verse_text" disabled><?= $defaultVerseText ?></textarea>
		</div>

		</div>
		
	<div class = "span" id = "header">
		<div class = "span pull-left">
			<table>
				<tr>
					<td><h3 id= "nav" class = "Book"><center>Search</center></h3></td>
					<td><input type = "text" class = "span"  id = "key" placeholder = "Search Word"></td>
				</tr>
			</table>
		</div>
		<div>
			<div id = "search"></div>
		</div>
	</div>

</div>

</body>

<script type="text/javascript" src="jquery.1.10.2.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src = "bible.js">

</script>