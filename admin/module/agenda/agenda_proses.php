<?PHP session_start();
$config_='aW5jbHVkZSAoJy4uLy4uLy4uL2NvbmZpZy5waHAnKTsNCmluY2x1ZGUgKCcuLi8uLi9wcml2YXQvYWN0aXZhc2ktbG9naW4ucGhwJyk7ICAgDQppbmNsdWRlKCIuLi8uLi9pbi9yZXBsYWNlX2NoYXJhY3Rlci5waHAiKTs=';
eval(base64_decode($config_));?>

<?PHP if (isset($_POST['addagenda'])) {//
// ========SESSION=======================================
$title = addslashes(trim(strip_tags($_POST['title'])));
$_SESSION['title']=$title;
//=========================================================
 $location =strip_tags(trim($_POST['location']));
 $_SESSION['location']=$location;
//=========================================================
$content = htmlentities ($_POST['content']);
$_SESSION['content']=$content;

$title=$_SESSION['title'];
$location=$_SESSION['location'];
$content=$_SESSION['content'];
//=========================================================
$add_a_='JGVycm9yID0gYXJyYXkoKTsNCmlmIChlbXB0eSgkX1BPU1RbJ3RpdGxlJ10pKSB7Ly9pZiBubyBuYW1lIGhhcyBiZWVuIHN1cHBsaWVkIA0KICAgICAgICAkZXJyb3JbXSA9ICd0aWRhayBib2xlaCBrb3NvbmcnOy8vYWRkIHRvIGFycmF5ICJlcnJvciINCiAgICB9IGVsc2Ugew0KJHRpdGxlID0gYWRkc2xhc2hlcyh0cmltKHN0cmlwX3RhZ3MoJF9QT1NUWyd0aXRsZSddKSkpOw0KICAgIH0NCg0KaWYgKGVtcHR5KCRfUE9TVFsnbG9jYXRpb24nXSkpIHsNCiAgICAgICAgJGVycm9yW10gPSAndGlkYWsgYm9sZWgga29zb25nJzsvL2FkZCB0byBhcnJheSAiZXJyb3IiDQogICAgfSBlbHNlIHsgJGxvY2F0aW9uID1zdHJpcF90YWdzKHRyaW0oJF9QT1NUWydsb2NhdGlvbiddKSk7IA0KCX0NCg0KDQppZiAoZW1wdHkoJF9QT1NUWydjb250ZW50J10pKSB7DQogICAgICAgICRlcnJvcltdID0gJyc7Ly9hZGQgdG8gYXJyYXkgImVycm9yIg0KICAgIH0gZWxzZSB7ICRjb250ZW50ID1teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJF9QT1NUWydjb250ZW50J10pOyB9DQoNCmlmIChlbXB0eSgkX1BPU1RbJ3RpbWUnXSkpIHsNCiAgICAgICAgJGVycm9yW10gPSAnJzsvL2FkZCB0byBhcnJheSAiZXJyb3IiDQogICAgfSBlbHNlIHsNCiR0aW1lID0gc3RyaXBfdGFncygkX1BPU1RbJ3RpbWUnXSk7IH0NCg0KaWYgKGVtcHR5KCRfUE9TVFsnZGF0ZSddKSkgey8vaWYgbm8gbmFtZSBoYXMgYmVlbiBzdXBwbGllZCANCiAgICAgICAgJGVycm9yW10gPSAnJzsvL2FkZCB0byBhcnJheSAiZXJyb3IiDQogICAgfSBlbHNlIHsgJGRhdGUgPXN0cmlwX3RhZ3MoJF9QT1NUWydkYXRlJ10pOyB9DQoNCiRsaW5rX2FnZW5kYSA9IHN0cnRvbG93ZXIoJHRpdGxlKTsNCiRsaW5rX2FnZW5kYSA9IHN0cl9yZXBsYWNlKCcgJywgJy0nLCAkbGlua19hZ2VuZGEpOw0KJGxpbmtfYWdlbmRhID0gcmVwbGFjZV9jaGFyYWN0ZXIoJGxpbmtfYWdlbmRhKTsNCiRsaW5rX2FnZW5kYSA9IHN0cl9yZXBsYWNlKCItLS0tLSIsICItIiwgJGxpbmtfYWdlbmRhKTsNCiRsaW5rX2FnZW5kYSA9IHN0cl9yZXBsYWNlKCItLS0iLCAiLSIsICRsaW5rX2FnZW5kYSk7DQokbGlua19hZ2VuZGEgPSBzdHJfcmVwbGFjZSgiLS0iLCAiLSIsICRsaW5rX2FnZW5kYSk7DQokbGlua19hZ2VuZGEgPSBzdHJfcmVwbGFjZSgiLiIsICIuIiwgJGxpbmtfYWdlbmRhKTsNCg0KaWYgKGVtcHR5KCRlcnJvcikpIHsgDQokc3FsPW15c3FsX3F1ZXJ5KCJpbnNlcnQgaW50byBhZ2VuZGEgdmFsdWVzKCcnLCckdGl0bGUnLCAnJGxpbmtfYWdlbmRhJywgJyRsb2NhdGlvbicsICckY29udGVudCcsICckZGF0ZScsICckdGltZScpIik7DQppZighJHNxbCkgIHsgDQpoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uIm5ldy9hZ2VuZGEvP2Vycm9yPTEiKTsvLyBlcm9yDQp9IGVsc2UgICB7DQpoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uInBvc3QvYWdlbmRhLz9yZWZmPTEiKTsvLyBzdWtzZXMNCn0gfQ0KDQplbHNleyANCmZvcmVhY2ggKCRlcnJvciBhcyAka2V5ID0+ICR2YWx1ZXMpIHsgICAgICAgICAgICANCmhlYWRlcigibG9jYXRpb246Ii5NWV9BRE1JTi4ibmV3L2FnZW5kYS8/ZXJyb3I9MiIpOy8vIGVyb3IgYWxsDQp9fQ==';
eval(base64_decode($add_a_));
}
///================================================================
$up_a_='JGFjdD0gbXlzcWxfcmVhbF9lc2NhcGVfc3RyaW5nKCRfR0VUWydhY3QnXSk7aWYgKCRhY3Q9PSd1cGRhdGUnKXsNCiRyZWZmX2xpbmtfYWdlbmRhPSBzdHJpcF90YWdzKCRfUkVRVUVTVFsncmVmZl9saW5rX2FnZW5kYSddKTsNCiRyZWZpZD0gaHRtbGVudGl0aWVzKCRfR0VUWydyZWZpZCddKTsgDQokZXJyb3IgPSBhcnJheSgpOw0KaWYgKGVtcHR5KCRfUE9TVFsndGl0bGUnXSkpIHsNCiAgICAgICAgJGVycm9yW10gPSAndGlkYWsgYm9sZWgga29zb25nJzsvL2FkZCB0byBhcnJheSAiZXJyb3IiDQogICAgfSBlbHNlIHsNCiR0aXRsZSA9IGFkZHNsYXNoZXModHJpbShzdHJpcF90YWdzKCRfUE9TVFsndGl0bGUnXSkpKTsNCiAgICB9DQoNCmlmIChlbXB0eSgkX1BPU1RbJ2xvY2F0aW9uJ10pKSB7DQogICAgICAgICRlcnJvcltdID0gJ3RpZGFrIGJvbGVoIGtvc29uZyc7Ly9hZGQgdG8gYXJyYXkgImVycm9yIg0KICAgIH0gZWxzZSB7ICRsb2NhdGlvbiA9c3RyaXBfdGFncyh0cmltKCRfUE9TVFsnbG9jYXRpb24nXSkpOyANCgl9DQoNCg0KaWYgKGVtcHR5KCRfUE9TVFsnY29udGVudCddKSkgew0KICAgICAgICAkZXJyb3JbXSA9ICcnOy8vYWRkIHRvIGFycmF5ICJlcnJvciINCiAgICB9IGVsc2Ugew0KJGNvbnRlbnQgPW15c3FsX3JlYWxfZXNjYXBlX3N0cmluZygkX1BPU1RbJ2NvbnRlbnQnXSk7IH0NCg0KaWYgKGVtcHR5KCRfUE9TVFsndGltZSddKSkgew0KICAgICAgICAkZXJyb3JbXSA9ICcnOy8vYWRkIHRvIGFycmF5ICJlcnJvciINCiAgICB9IGVsc2Ugew0KJHRpbWUgPSBzdHJpcF90YWdzKCRfUE9TVFsndGltZSddKTsgfQ0KDQppZiAoZW1wdHkoJF9QT1NUWydkYXRlJ10pKSB7Ly9pZiBubyBuYW1lIGhhcyBiZWVuIHN1cHBsaWVkIA0KICAgICAgICAkZXJyb3JbXSA9ICdkYXRlIEJlcml0YSB0aWRhayBib2xlaCBrb3NvbmcnOy8vYWRkIHRvIGFycmF5ICJlcnJvciINCiAgICB9IGVsc2Ugew0KJGRhdGUgPXN0cmlwX3RhZ3MoJF9QT1NUWydkYXRlJ10pOyB9DQoNCiRsaW5rX2FnZW5kYSA9IHN0cnRvbG93ZXIoJHRpdGxlKTsNCiRsaW5rX2FnZW5kYSA9IHN0cl9yZXBsYWNlKCcgJywgJy0nLCAkbGlua19hZ2VuZGEpOw0KJGxpbmtfYWdlbmRhID0gcmVwbGFjZV9jaGFyYWN0ZXIoJGxpbmtfYWdlbmRhKTsNCiRsaW5rX2FnZW5kYSA9IHN0cl9yZXBsYWNlKCItLS0tLSIsICItIiwgJGxpbmtfYWdlbmRhKTsNCiRsaW5rX2FnZW5kYSA9IHN0cl9yZXBsYWNlKCItLS0iLCAiLSIsICRsaW5rX2FnZW5kYSk7DQokbGlua19hZ2VuZGEgPSBzdHJfcmVwbGFjZSgiLS0iLCAiLSIsICRsaW5rX2FnZW5kYSk7DQokbGlua19hZ2VuZGEgPSBzdHJfcmVwbGFjZSgiLiIsICIuIiwgJGxpbmtfYWdlbmRhKTsNCmlmIChlbXB0eSgkZXJyb3IpKSB7IA0KJGVkaXQ9bXlzcWxfcXVlcnkoIlVQREFURSBhZ2VuZGEgU0VUIHRpdGxlPSckdGl0bGUnLGxpbmtfYWdlbmRhPSckbGlua19hZ2VuZGEnLGxvY2F0aW9uPSckbG9jYXRpb24nLGNvbnRlbnQ9JyRjb250ZW50JyxkYXRlPSckZGF0ZScsdGltZT0nJHRpbWUnIFdIRVJFIGlkX2FnZW5kYT0nJHJlZmlkJyIpOw0KaWYoISRlZGl0KSB7IA0KaGVhZGVyKCJsb2NhdGlvbjoiLk1ZX0FETUlOLiJlZGl0L2FnZW5kYS8iLiRyZWZmX2xpbmtfYWdlbmRhLiImZXJyb3I9MyIpOy8vIEVycm9yDQoNCn0gZWxzZSAgIHsNCmhlYWRlcigibG9jYXRpb246Ii5NWV9BRE1JTi4icG9zdC9hZ2VuZGEvP3JlZmY9MiIpOy8vIFN1a3Nlcw0KfSB9IA0KDQplbHNley8vIGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LWVycm9yIj4nOw0KZm9yZWFjaCAoJGVycm9yIGFzICRrZXkgPT4gJHZhbHVlcykgeyAgICAgICAgICAgIA0KaGVhZGVyKCJsb2NhdGlvbjoiLk1ZX0FETUlOLiJlZGl0L2FnZW5kYS8iLiRyZWZmX2xpbmtfYWdlbmRhLiImZXJyb3I9MiIpOy8vIEVycm9yIGFsbA0KDQp9fQ0KfQ==';
eval(base64_decode($up_a_));
//====================================================================================
$del_a_='JGFjdGlvbj1teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJF9HRVRbJ2FjdGlvbiddKTsvL1VOVFVLIE1FTkhBUFVTDQokcmVmaWQgPSBodG1sZW50aXRpZXMoJF9SRVFVRVNUWydyZWZpZCddKTsgDQppZiAoJGFjdGlvbj09J2RlbGV0ZScpeyBpZiAoZW1wdHkoJHJlZmlkKSl7DQpoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uInBvc3QvYWdlbmRhLz9yZWZmPTQiKTsvLyBmYWlsZWQNCmV4aXQoKTt9DQokc3FsID0gbXlzcWxfcXVlcnkoImRlbGV0ZSBmcm9tIGFnZW5kYSB3aGVyZSBpZF9hZ2VuZGE9JyRyZWZpZCciKTsNCmlmKCEkc3FsKXsgDQpoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uInBvc3QvYWdlbmRhLz9yZWZmPTUiKTsgLy9lb3JvDQp9DQpoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uInBvc3QvYWdlbmRhLz9yZWZmPTMiKTsgLy9zdWtzZXMNCiB9';
eval(base64_decode($del_a_)); ?>


<!doctype html><html lang="en"><head><title>Proses Agenda</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<h2>Sorry script is not running..</2>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back(-1)">Go Back</h3></body></html>