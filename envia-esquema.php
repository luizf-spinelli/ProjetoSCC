<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo ("<script>alert('O arquivo é uma imagem - " . $check['mime'] . "); location.href='./esquema.php';</script>");
        $uploadOk = 1;
    } else {
        echo ("<script>alert('Erro: O arquivo deve ser uma imagem.'); location.href='./esquema.php';</script>");
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo ("<script>alert('Erro: Um arquivo com este nome já existe. Por favor, renomeie-o.'); location.href='./esquema.php';</script>");
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo ("<script>alert('Erro: O arquivo deve ter tamanho máximo de 1 mb.'); location.href='./esquema.php';</script>");
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo ("<script>alert('Erro: Apenas arquivos JPG, JPEG, PNG & GIF são permitidos.'); location.href='./esquema.php';</script>");
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo ("<script>alert('Erro: Ocorreu um erro no envio. Por favor, tente novamente.'); location.href='./esquema.php';</script>");
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {        
        if ($_SERVER["REQUEST_METHOD"]=="POST") {

		include_once("./admin/functions/conexao.php");
		$con=abreConexao();
		$pu=mysqli_prepare($con,"INSERT INTO esquema(nome, email, descricao, imagem) VALUES(?,?,?,?)");
		mysqli_stmt_bind_param($pu,"ssss",$nome,$email,$desc,$img);
		$nome=$_POST["nome"];
		$email=$_POST["email"];
		$desc=$_POST["desc"];
                $img= basename($_FILES["fileToUpload"]["name"]);
                mysqli_stmt_execute($pu);
                echo ("<script>alert('Sucesso!! O arquivo ". basename($_FILES["fileToUpload"]["name"]). " foi anexado com sucesso.'); location.href='./esquema.php';</script>");
        
        }
    } else {
        echo ("<script>alert('Erro: Ocorreu um erro no envio. Por favor, tente novamente.'); location.href='./esquema.php';</script>");
    }
}
?>