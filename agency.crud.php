<?php
    require_once("php/conexao.php");
# Create
function cadastrarHome($imagem, $titulo, $subheading) 
{ 
$con = getConnection();

        $sql = "insert into servicos (imagem, titulo, subheading) values (:imagem, :titulo, :descricao)";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":imagem", $imagem);
        $stmt->bindParam(":titulo", $titulo);
        $stmt->bindParam(":descricao", $subheading);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true; # retorno quando ocorrer sucesso na inserção

        return false; # retorno padrão(default)
    }

function cadastrarpost( $postitle, $postsubtitle, $data) 
{
    $con = getConnection();

    $sql = "insert into post( postitle, postsubtitle, data) values (:titulo, :subtitulo, :data)";
    $stmt = $con->prepare($sql);

    $stmt->bindParam(":titulo", $postitle);
    $stmt->bindParam(":subtitulo", $postsubtitle);
    $stmt->bindParam(":data",$data);

    $status = $stmt->execute();
    unset($con);
    unset($stmt);

    if($status)
        return true;

    return false;
}
function cadastrarSobre( $descricao) 
{
    $con = getConnection();

    $sql = "insert into about(descricao) values (:descricao)";
    $stmt = $con->prepare($sql);

    $stmt->bindParam(":descricao", $descricao);

    $status = $stmt->execute();
    unset($con);
    unset($stmt);

    if($status)
        return true;

    return false;
}


    # Retrieve
    function listaHome()
    { 
    $con = getConnection();

        $sql = "select * from Home";

        $result = $con->query($sql);

        $listaServico = array();
        while($servico = $result->fetch(PDO::FETCH_OBJ))
        {
            array_push($listaHome, $Home);
        }

        unset($con);
        unset($result);
        return $listaHome;
    }

    function listapost()
    {
        $con = getConnection();
        $sql = "select * from post";

        $stmt = $con->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        unset($con);
        unset($stmt);
        return $result;
    }

    function listaAbout()
    {
        $con = getConnection();
        $sql = "select * from about";

        $stmt = $con->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        unset($con);
        unset($stmt);
        return $result;
    }
    # /Update
    function atualizarHome($id, $imagem, $titulo, $descricao)
    { 
        $con = getConnection();
        
                $sql = "update servicos set imagem = :imagem, titulo = :titulo, subheading = :descricao where id = :id";
                $stmt = $con->prepare($sql);

                $stmt->bindParam(":id", $id);
                $stmt->bindParam(":imagem", $imagem);
                $stmt->bindParam(":titulo", $titulo);
                $stmt->bindParam(":descricao", $subheading);
        
                $status = $stmt->execute();
                unset($con);
                unset($stmt);
        
                if($status)
                    return true; # retorno quando ocorrer sucesso na inserção
        
                return false; # retorno padrão(default)
            }
    function atualizarPost($id, $postitle, $postsubtitle, $data)
    {
        $con = getConnection();
    
        $sql = "update servicos set postitle = :titulo, postsubtitle = :subtitulo, data = :data where id = :id";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":titulo", $postitle);
        $stmt->bindParam(":subtitulo", $postsubtitle);
        $stmt->bindParam(":data",$data);
    
        $status = $stmt->execute();
        unset($con);
        unset($stmt);
    
        if($status)
            return true;
    
        return false;
    }
    function atualizarSobre($id, $descricao)
    {
        $con = getConnection();

        $sql = "update servicos set descricao = :descricao where id = :id";
        
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":descricao", $descricao);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    
    # /Update
    
    # /Delete
    function apagarHome($id) 
    {
        $con = getConnection();

        $sql = "delete from Home where id = :id";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":id", $id);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }


    function apagarPost($id) 
    {
        $con = getConnection();

        $sql = "delete from Sample Post where id = {$id}";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":id", $id);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }

    function apagarSobre($id) 
    {
        $con = getConnection();

        $sql = "delete from about where id = :id";
        $stmt = $con->prepare($sql);

        $stmt->bindParam(":id", $id);

        $status = $stmt->execute();
        unset($con);
        unset($stmt);

        if($status)
            return true;

        return false;
    }

    # /Delete

    function localizaHomePeloID($id)
    {
        $con = getConnection();

        $sql = "select * from Home where id = :id";
        
        $result = $con->query($sql);
        $servico = $result->fetch(PDO::FETCH_OBJ);

        unset($con);
        unset($result);
        return $Home;
    }

    function localizaPostPeloID($id)
    {
        $con = getConnection();

        $sql = "select * from sample post where id = :id";

        $result = $con->query($sql)->fetch(PDO::FETCH_OBJ);

        unset($con);
        unset($result);
        return $result;
    }
    function localizaSobrePeloID($id)
    {
        $con = getConnection();

        $sql = "select * from about where id = :id";

        $result = $con->query($sql)->fetch(PDO::FETCH_OBJ);

        unset($con);
        unset($result);
        return $result;
    }