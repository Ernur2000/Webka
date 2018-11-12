
<a href="index.php?category=sport">Sport news</a> | <a href="index.php?category=politics">Politic news</a><br/><br/>
<a href="index.php?category=sport&format=json">Sport news (JSON)</a> | <a href="index.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php


$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],"politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];


$catFromReq = $_REQUEST["category"];
if (isset($_REQUEST['format'])) {
    echo json_encode($news[$catFromReq]);

}
else {

  echo $news[$catFromReq][0] , '<br/>'; 
     echo $news[$catFromReq][1];
}

?>
