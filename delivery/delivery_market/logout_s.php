<?php 
if(empty($_SESSION['username']) && empty($_SESSION['id'])) {
    header('Location:form_log.html');
}
?>