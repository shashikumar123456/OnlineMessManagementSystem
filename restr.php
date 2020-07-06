<?php
if(isset($_POST['submit']))
{
 $FullName=$_POST['FullName'];
 $Branch=$_POST['Branch'];
 $Year=$_POST['Year'];
$BlockName=$_POST['BlockName'];
$RoomNo=$_POST['RoomNo'];
$PhoneNo=$_POST['PhoneNo'];
$ParentName=$_POST['ParentName'];
$ParentPhoneNo=$_POST['ParentPhoneNo'];

echo $FullName;
echo $Branch;
echo $Year;


if(empty($FullName))
 {
$error .=' Enter FullName<br />';

 }
 if(empty($Branch))
 {
$error .=' Enter Branch<br  />';

 }
if(empty($Year))
 {
$error .=' Enter Year<br />';

 }
if(empty($BlockName))
 {
$error .=' Enter BlockName<br />';

 }
if(empty($RoomNo))
 {
$error .=' Enter RoomNo<br />';

 }
if(empty($PhoneNo))
 {
$error .=' Enter PhoneNo<br />';

 }
if(empty($ParentName))
 {
$error .=' Enter ParentName<br />';

 }
if(empty($ParentPhoneNo))
 {
$error .=' Enter ParentPhoneNo<br />';

 }
if(isset($error))
{
  echo $error;

}

}
?>
