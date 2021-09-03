<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form.css" media="">
    <title>Cadastro</title>
</head>
<body>
    
    <div>
        <h1 id="titulo">Cadastro de DEV's</h1>
        <p id="subtitulo">Complete suas informações.</p>
        <br>
    </div>

    <form>
        <fieldset class=" grupo">
            <div class="campo">
                <label for="nome"><strong>Nome</strong></label>
                <input type="text" name ="nome" id="nome" required>
            </div>
   
            <div class="campo">
                <label for="sobrenome"><strong>Sobrenome</strong></label>
                <input type="text" name="sobrenome" id="sobrenome" required>
            </div>
        </fieldset>
        <div class="campo">
            <label for="email"><strong>E-mail</strong></label>
            <input type="email"name="email" id="email"required>
        </div>

        <div class="campo">
            <label><strong>De qual lado da aplicação você desenvolve?<strong></label>
            <label>
                <input type="radio" name="devweb" id="frontend"checked>Front-end
            </label>
            <label>
                <input type="radio" name="devweb" id="backend">Back-end
            </label>
            <label>
                <input type="radio" name="devweb" id="fullstack">Fullstack
            </label>
        </div>

        <div class="campo">
            <label for="senioridade"><strong>Grau de Experiência</strong></label>
                <select id="senioridade">
                    <option selected disabled value="">Selecione</option>
                    <option>Estágio</option>
                    <option>Júnior</option>
                    <option>Pleno</option>
                    <option>Sênior</option>
                </select>
        </div>

        <fieldset class=" grupo">
            <div id="check">
                <label><strong>Selecione as tecnologias que utiliza:</strong></label><br><br>
                <input type="checkbox" id="tecnologia1" nome="tecnologia1" value ="HTML">
                <label for="tecnologia1">HTML</label>
                <input type="checkbox" id="tecnologia2" nome="tecnologia2" value ="CSS">
                <label for="tecnologia2">CSS</label>
                <input type="checkbox"id="tecnologia3" nome="tecnologia3" value ="Javascript">
                <label for="tecnologia3">Javascript</label>
                <input type="checkbox" id="tecnologia4" nome="tecnologia4" value ="PHP">
                <label for="tecnologia4">PHP</label>
                <input type="checkbox" id="tecnologia5" nome="tecnologia6" value ="C#">
                <label for="tecnologia5">C#</label>
                <input type="checkbox" id="tecnologia6" nome="tecnologia6" value ="Python">
                <label for="tecnologia5">Python</label>
                <input type="checkbox" id="tecnologia6" nome="tecnologia6" value ="Java">
                <label for="tecnologia6">Java</label>
            </div>
        </fieldset>

        <div class="campo">
            <br>
            <label for="experiencia"><strong>Conte um pouco da sua experiência:</strong></label>
            <textarea rows="6" style="width: 26em" id="experiencia " name="experiencia"></textarea>
        </div>
        <button class="botao" type="submit">Concluido!</button>
    </form>
</body>
</html>