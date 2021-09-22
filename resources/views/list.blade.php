<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   

    <form action="">
        <label>Cep:
        <input name="cep" type="text" id="cep" value="{{$dados->cep}}" size="10" maxlength="9" /><br />
        <label>Rua:
        <input name="rua" type="text" id="rua" value="{{$dados->logradouro}}" size="60" /></label><br />
        <label>Bairro:
        <input name="bairro" type="text" id="bairro" value="{{$dados->bairro}}" size="40" /></label><br />
        <label>Cidade:
        <input name="cidade" type="text" id="cidade" value="{{$dados->localidade}}" size="40" /></label><br />
        <label>Estado:
        <input name="uf" type="text" id="uf" value="{{$dados->uf}}" size="2" /></label><br />
        <label>IBGE:
        <input name="ibge" type="text" id="ibge" value="{{$dados->ibge}}" size="8" /></label><br />
    </form>
   
    
</body>
</html>