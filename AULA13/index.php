<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Exemplo VueJS</title>
    </head>

    <body>
    <h1>Exemplo VueJS</h1>
    <hr>

    <div id="aula">
        <h2>Nome</h2>
        <h3>{{name}} {{lastName}}</h3>
        <h3>{{fullName}}</h3>
        <hr>

        <h3>Quantidade : {{quantity}}</h3>
        <button v-on:click="add">Adicionar</button>
        <button v-on:click="sub" v-show="quantity>0">Remover</button>
        <hr>

        <h2>Aluno</h2>
        <h3 v-show="situation">Aluno matriculado</h3>
        <h3>Nota 1: {{note1}}</h3>
        <h3>Nota 2: {{note2}}</h3>
        <h3>Média: {{average}}</h3>

        <h3 v-if="average>=9 && average<=10">Conceito A</h3>
        <h3 v-else-if="average>=8 && average<=9">Conceito B</h3>
        <h3 v-else-if="average>=6 && average<=8">Conceito C</h3>
        <h3 v-else-if="average>=0 && average<6">Conceito D</h3>
        <hr>

        <h2>Linguagens</h2>
        <ul>
        <li v-for="language in languages">{{language}}</li>
        </ul>
        
        <div v-for="person in people" :key="person.ID">
            <hr>
            <figure>
                <img v-bind:src="person.image" width="100" height="100" v-bind:alt="person.imageDeion">
            </figure>
            <h1>{{person.name}}</h1>
            <p>{{person.email}}</p>
        </div>
        <hr>

        <h2>Cadastro</h2>
        <form>
            <input type="text" name="nome" v-bind:placeholder="placeName">
            <div>
                <label>{{labelEstadoCivil}}</label>
                <select>
                    <option v-for="civil in estadoCivil" v-bind:value="civil">{{civil}}</option>
                    </select>
            </div>
            <div>
                <label>{{labelMes}}</label>
                <select>
                    <option v-for="m in mes" v-bind:value="m">{{m}}</option>
                </select>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="main.js"></script>
    </body>
</html>