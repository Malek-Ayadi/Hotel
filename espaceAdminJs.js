var nod=document.getElementById("enployee");
console.log(nod);
nod.addEventListener("click",function () {
    //document.location.href="ajouterPersonnel.php";
    document.write('<?php include("ajouterPersonnel.php") ?>');
});