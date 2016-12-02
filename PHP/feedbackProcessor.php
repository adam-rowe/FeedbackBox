<?php
//php code goes here
if(isset($_POST['submit'])){
  
  //process the fedback form
  // put everything in variables
  $text =$_POST['text'];
  
  // load the existing xml file
  simplexml_load_file("./data/feedbacks.xml") or die("ERROR: cannot load file");
  
    //add the new feedback
  $feedback = $xml->addChild("feedback");
  $feedback->addChild('text',$text);
  
  //save the whole modified xml file
  $xml->asXML("./data/feedbacks.xml");
    
}
?>