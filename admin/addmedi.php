<?php
include "sessionA.php";



                                        $aid = $_GET['aid'];
                                        $mid = $_GET['mid'];
                                        $userid = $_GET['userid'];
                                        include "connect.php";
                                        $q = "insert into patient_medicine(aid,mid) values('$aid','$mid')";
                                        $res = mysqli_query($cn, $q) or die(mysqli_error($cn));
                                        header("Location:writepresc.php?aid=".$aid."&userid=".$userid."");
?>