$(document).ready(function() {
	$(".brightspace").click(function() {
		window.open("https://byui.brightspace.com/d2l/login?noredirect=1", '_blank');
	}).css({'cursor': 'pointer'});
	
	$(".pathway").click(function() {
		window.open("https://pathway.brightspace.com/d2l/login?noredirect=true", '_blank');
	}).css({'cursor': 'pointer'});
	
	$(".equella").click(function() {
		window.open("https://secure.byui.edu/cas/login?service=https%3A%2F%2Fcontent.byui.edu%2Flogon.do%3F.page%3Dhome.do", '_blank');
	}).css({'cursor': 'pointer'});
	
	$(".outlook").click(function() {
		window.open("https://secure.byui.edu/cas/login?entityId=urn:federation:MicrosoftOnline&service=https://shib.byui.edu/idp/Authn/Cas", '_blank');
	}).css({'cursor': 'pointer'});
	
	$(".teamdynamix").click(function() {
		window.open("https://secure.byui.edu/cas/login?entityId=https://td.byui.edu/shibboleth&service=https://shib.byui.edu/idp/Authn/Cas", '_blank');
	}).css({'cursor': 'pointer'});
	
	$(".workplace").click(function() {
		window.open("https://byuidaho.facebook.com/work/landing/input", '_blank');
	}).css({'cursor': 'pointer'});
	
	$(".coursecouncil").click(function() {
		window.open("https://reports.byui.edu/Reports/Pages/Report.aspx?ItemPath=%2fOnline+Learning%2fCourse+Improvement%2fCourse+Councils%2fOCR-CourseLeadReport", '_blank');
	}).css({'cursor': 'pointer'});
	
	
	$(".workday").click(function() { 							
		window.open("https://samlproxy.byui.edu/simplesaml/module.php/authbyui/selectsource.php?AuthState=_6495b146ccdccfe3f67b2eb13786d5aefb24b27251%3Ahttps%3A%2F%2Fsamlproxy.byui.edu%2Fsimplesaml%2Fsaml2%2Fidp%2FSSOService.php%3Fspentityid%3Dhttp%253A%252F%252Fwww.workday.com%252Fbyuhi%26cookieTime%3D1479505734", '_blank');
	}).css({'cursor': 'pointer'});
	
	$(".portfolio").click(function() {
		window.open("https://docs.google.com/spreadsheets/d/1dPLexv7zqRRbt9SjV2wsRbl7WR-e7FBVrESFPbhBiJM/edit#gid=615052671", '_blank');
	}).css({'cursor': 'pointer'});
});