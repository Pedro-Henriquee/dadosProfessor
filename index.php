<?php

include_once 'class_professor.php';
$oProfessor = new ProfessorHorista(12, 'Pedro', 15, 2000);
echo $oProfessor->calculaSalario();
?>