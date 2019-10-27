<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
<HEAD>
<TITLE>Easy Tabs - Example 2</TITLE>
<LINK REL="stylesheet" TYPE="text/css" MEDIA="all" HREF="tabs.css">
<LINK REL="stylesheet" TYPE="text/css" MEDIA="all" HREF="forms.css">
</HEAD>
<BODY>
<CENTER>
<br/><br/>
<?php
include("tabs.php");
include("forms.php");

function Form1_Button1_Clicked(&$data,&$error){
	$error .= "You clicked button 1 on Form 1!<br/>";
	return true;
}

function Form2_Button1_Clicked(&$data,&$error){
	$error .= "You clicked button 1 on Form 2!<br/>";
	return true;
}


$tabs = new tabs("example2");

	$tabs->start("Form 1");
		$form = new form("form1");
			$element = new form_element_text("field1","Field 1","This is field 1");
			$form->add($element);
			$element = new form_element_text("field2","Field 2","This is field 2");
			$form->add($element);
			$element = new form_button("Button 1","Form1_Button1_Clicked");
			$form->add($element);
		$form->run();
		if ($form->submitted){ $tabs->active = "Form 1"; }
	$tabs->end();

	$tabs->start("Form 2");
		$form = new form("form2");
			$element = new form_element_text("field1","Field 1","This is field 1");
			$form->add($element);
			$element = new form_element_text("field2","Field 2","This is field 2");
			$form->add($element);
			$element = new form_element_text("field3","Field 3","This is field 3");
			$form->add($element);
			$element = new form_button("Button 1","Form2_Button1_Clicked");
			$form->add($element);
		$form->run();
		if ($form->submitted){ $tabs->active = "Form 2"; }
	$tabs->end();

$tabs->run();

?>
</CENTER>
</BODY>
</HTML>
