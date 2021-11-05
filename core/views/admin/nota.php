if(in_array($extensao,$formatodeimagem)){
            $pasta = "../assets/musicas/";
            $temporario = $_FILES['cover']['temp_name'];
            $novonome = uniqid().".$extensao";

            move_uploaded_file($temporario, $pasta.$novonome);
                echo 'sucesso';
        }else{
            // $pasta = "assets/musicas/";
            // $temporario = $_FILES['cover']['temp_name'];
            echo '<hr>', 'ERRO';

        }

    // echo'<hr>';
    // echo $tamanho, '-', $titulo, '-', $artista ;
    echo'<hr>', $extensao;
    var_dump($_FILES['cover']);
   

}
echo '<hr> sads';
 // $parametro=[
 //     ':a'=>  $artista,
 //     ':t'=> $titulo,
 //     ':ta'=>$tamanho,
 //     ':img'=>$imagem,
 //     ':mus'=>$musica
 // ];
