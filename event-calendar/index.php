<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
IncludeModuleLangFile($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/intranet/public/about/calendar.php");
$APPLICATION->SetTitle(GetMessage("ABOUT_TITLE"));
?>

<?$APPLICATION->IncludeComponent(
	"homework:calendar.grid",
	"",
	Array(
		"CALENDAR_TYPE" => "event_calendar",
		"ALLOW_SUPERPOSE" => "Y",
		"ALLOW_RES_MEETING" => "Y"
	)
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
