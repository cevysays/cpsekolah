<?PHP date_default_timezone_set("Asia/Jakarta"); 
$all_hits = 0;
$today = date('Y')."-".date('m')."-".date('d');

// Meminta ip dari server
$ip = $_SERVER['REMOTE_ADDR'];
// Meminta User agent dari server
$user = $_SERVER['USER_AGENT'];
// Mencatat waktu pengunjungan
$time = time();
// Tentukan waktu kadaluarsa atau timeout dalam detik contoh 60, 120
$timeout = 60;

#checking date----------------------------------------------------
$sql = mysql_query("select * from statistik where date='$today'");


$result = mysql_num_rows($sql);
#pemasukan data baru jika tanggal sekarang tidak ada di database--
if ($result==0){
$q = "insert into statistik values('1', '$today','1')";

mysql_query($q) or die(mysql_error());
}
else{
$data = mysql_fetch_array($sql);
$hits_today = $data['hits'];
$hits_today++;
$sql = mysql_query("update statistik set hits='$hits_today',online='1' where date='$today'");
}
#all history page--------------------------------------------------
$sql = mysql_query("select * from statistik");
while ($data = (mysql_fetch_array($sql))){
$all_hits +=$data['hits'];
}
#------------------------------------------------------------------
#today-------------------------------------------------------------
$sql = mysql_query("select * from statistik where date='$today'");
$data = mysql_fetch_array($sql);
$hits_today = $data['hits'];
#-------------------------------------------------------------------
#yesterday----------------------------------------------------------
$yesterday = date("Y-m-d", strtotime("-1 day"));
$sql= mysql_query("select * from statistik where date='$yesterday'");
$data = mysql_fetch_array($sql);
$hits_yesterday = $data['hits'];
if (empty($hits_yesterday)){
$hits_yesterday = 0;
}
 


//untuk pemasukan statistik Browser
function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
    }
    $i = count($matches['browser']);
    if ($i != 1) {
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }
    if ($version==null || $version=="") {$version="?";}
   
    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}
$ua=getBrowser();
$my_browser = strtolower($ua['name']." ".$ua['version']);
//echo $my_browser;
if (substr_count($my_browser,"firefox") > 0){
$input_ke_browser = "Firefox";
}
else if (substr_count($my_browser,"chrome") > 0){
$input_ke_browser = "Chrome";
}
else if (substr_count($my_browser,"opera") > 0){
$input_ke_browser = "Opera";
}
else if (substr_count($my_browser,"ie") > 0){
$input_ke_browser = "IE";
}
else if (substr_count($my_browser,"safari") > 0){
$input_ke_browser = "Safari";
}
else{
$input_ke_browser = "Others";
}
mysql_query("UPDATE `browser` SET `hits`=hits+1 where name='$input_ke_browser'");
?>



<!--Start Footer-->
<footer class="footer">
<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-3"  data-effect="slide-bottom">
<div class="widget_footer">
<div class="widget_title">
<h4>
<span>Galery Foto</span>
</h4>
</div>
<div class="wfoot_content">
<div class="galery">
<?PHP $galery= mysql_query("select * from galery_categories order by galery_categories.id") or die(mysql_error());
while ($post = mysql_fetch_array($galery)){
$title_galery = strip_tags($post['title']);
$categories = strip_tags($post['link_categories']);
$link_galery ="".MY_PATH."galery-foto/".strip_tags($post['link_categories'])."";
$query_galery = mysql_query("select * from galery where categories='$categories' order by rand () limit 5")or die(mysql_error());
$galery_post = mysql_fetch_array($query_galery);
$gambar_galery = $galery_post['gambar'];
?>
<li><a href="<?PHP echo $link_galery;?>" data-placement="top" data-toggle="tooltip" title="<?PHP echo $title_galery;?>">
<img src="<?PHP echo MY_PATH?>images/galery/<?PHP echo $gambar_galery;?>"/></a></li><?PHP }?>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3"  data-effect="slide-bottom">
<div class="widget_footer">
<div class="widget_title">
<h4><span>Statistik Web</span></h4></div>

<div class="wfoot_content">
<ul class="recent_posts">  
<li><p class="wrap">
<a href="#" class="rp_title"><i class="icon icon-signal"></i> Total page halaman</a>
<small class="rp_num"><?PHP $min_digits = 0; $count = $all_hits; $count = sprintf('%0'.$min_digits.'s',$count); $len = strlen($count); for ($i=0;$i<$len;$i++) echo ''. substr($count,$i,1) . ''; ?></small></p></li>

<li><p class="wrap">
<a href="#" class="rp_title"><i class="icon icon-eye-open"></i> Halaman hari ini</a>
<small class="rp_num"><?PHP $count = $hits_today;$count = sprintf('%0'.$min_digits.'s',$count); $len = strlen($count); for ($i=0;$i<$len;$i++)
echo ''. substr($count,$i,1) .''; ?></small></p></li>

<li><p class="wrap">
<a href="#" class="rp_title"><i class="icon icon-bar-chart"></i> Halaman kemarin</a>
<small class="rp_num"><?PHP $count = $hits_yesterday;$count = sprintf('%0'.$min_digits.'s',$count); $len = strlen($count); for ($i=0;$i<$len;$i++)
echo ''. substr($count,$i,1) .''; ?></small></p></li>

</ul>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3"  data-effect="slide-bottom">
<div class="widget_footer">
<div class="widget_title">
<h4><span>Recent Post </span></h4></div>
<ul class="f_recent">
<?PHP $f_article=mysql_query("select * from article order by article.id_article ASC LIMIT 5");
while($f_post=mysql_fetch_array($f_article)){
$f_title_article = strip_tags($f_post['title']);
$f_link_article ="".MY_PATH."post/". strip_tags($f_post['link_article']).".html";?> 
<li><a href="<?PHP echo $f_link_article;?>"><?PHP echo $f_title_article;?></a></li>
<?PHP }?>

</ul>
</div>
</div>
<div class="col-lg-3 col-md-3 col-sm-3"  data-effect="slide-bottom">
<div class="widget_footer">
<div class="widget_title">
<h4>
<span>Hubungi Kami</span>
</h4>
</div>

<ul class="contact-details-alt">
<li><i class="fa icon-phone"></i> <p><?PHP echo $no_hp1_admin;?></p></li>
<li><i class="fa icon-phone"></i> <p><?PHP echo $no_hp2_admin;?></p></li>
<li><i class="fa icon-tablet"></i> <p><?PHP echo $pin_admin;?></p></li>
<li><i class="fa icon-envelope"></i> <p><a href="mailto:<?PHP echo $email_admin;?>" data-placement="top" data-toggle="tooltip" title="<?PHP echo $email_admin;?>"><?PHP echo $email_admin;?></a></p></li>
<li><i class="fa icon-map-marker"></i> <p><?PHP echo $alamat_admin;?></p></li>
</ul>
<div class="social-widget">
<a href="<?PHP echo $my_facebook;?>" target="_blank"><div class="socialbox"><i class="icon-facebook"></i></div></a>
<a href="<?PHP echo $my_twitter;?>" target="_blank"><div class="socialbox"><i class="icon-twitter"></i></div></a>
<a href="<?PHP echo $my_google;?>" target="_blank"><div class="socialbox"><i class="icon-google-plus"></i></div></a>
<a href="<?PHP echo $my_pinterest?>" target="_blank"><div class="socialbox"><i class="icon-pinterest-sign"></i></div></a>
<a href="<?PHP echo $my_linkedin;?>" target="_blank"><div class="socialbox"><i class="icon-linkedin-sign"></i></div></a>
<a href="<?PHP echo $my_rss ;?>" target="_blank"><div class="socialbox"><i class="icon-rss"></i></div></a>
</div>
</div>
</div>
</div>
</div>
</footer>
<!--End Footer-->

<section class="footer_bottom">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6">
<p class="copyright">Copyright &copy; 2014 -  Development : s-widodo.com</p>
</div>
<div class="col-lg-4 col-md-4 col-sm-4">

</div>
</div></div>
</section>