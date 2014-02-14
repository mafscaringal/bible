<?php 
require_once('config.php');
require_once('BibleDAO.php');

$keyword = (isset($_POST['key']) ? $_POST['key']:false);
$key = addslashes($keyword);
// $result = BibleDAO::search($keyword);
global $db;
$sql = "SELECT * FROM kjv_english c INNER JOIN books s ON c.book_id = s.id WHERE verse_text LIKE '%$key%'";
$result = $db->query($sql);
$count = 0;
if ($result) {
	while($row = $result->fetch_assoc()){
	$count++;
	$bookname = $row['book_name'];
	$chapter = $row['chapter_number'];
	$verse = $row['verse_number'];
	$text = $row['verse_text'];
	
	if($count <= 30){
	?>
		<div class="show<?php echo $book_id; ?> font8" style = "margin-left:0px">
			<div class="table span2">
				<tr>
					<td><i class = "icon-book"></i>&nbsp;<a onclick="getVerseText(1, 1, 1)"><b><?php echo $bookname; ?></b></a></td>
					<td><a><?php echo $chapter; ?></a></td>
					<td>:</td>
					<td><a><?php echo $verse; ?></a></td>
		    		<td><?php echo "<p style = 'color:white'>".$text."</p>"; ?></td>
		    	</tr>
		    </div>
		</div>
	<?php }}
		if($count==""){
			echo "<p class = 'Error'>No Word/s or Phrase/s Found!</p>";
		}else{
		
		}
}
 ?>