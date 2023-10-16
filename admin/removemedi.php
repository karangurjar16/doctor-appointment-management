<?php
include "sessionA.php";

                                        $aid = $_GET['aid'];             
                                        $pmid= $_GET['pmid'];
                                        $userid = $_GET['userid'];
                                        include "connect.php";
                                        $q = "delete from patient_medicine where pmid='$pmid'";
                                        $res = mysqli_query($cn, $q) or die(mysqli_error($cn));
                                        header("Location:writepresc.php?aid=".$aid."&userid=" . $userid . "");
?>