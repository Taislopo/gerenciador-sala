# Perguntas de desenvolvimento:

- objetivo:
    - sistema de gerenciamento de salas
- o que não era para ter
    - cores azul e preto
- cores, estilos e estetica
    - referencia
    - como seja exibido
- quais funções deveria ter?
    - poder cadastrar salas
    - editar salas
    - desativar salas
    - cadastrar professores
    - agendar uso de sala
    - visualizar estado das salas
    - cadastrar turmas

- qual tecnologia:
    - bootstrap
    - mysql
    - html/css/js
    - php

***
- qual o fluxo do sistema:
    - 1º pagina -> index.php
        - visualizar salas (demonstrar salas disponiveis para reserva ou as já reservadas)
        - no header devera ter botões de acesso (reservar salas, cad. docentes, cad. salas, cad. turmas) 
        - reservar sala.
        - cad. docentes:
            - nome
            - area do docente
            - RA docente
        - cad. salas
            - nº sala
            - qnts suporte de alunos
            - tipo sala
            - situação
        - cad. turmas
            - qnts alunos
            - tipo da turma
            - identificação da turma
            - horario da turma

# o que é .env?
📄 .env é um arquivo que guarda configurações do sistema, como:
 nome do banco
 usuário
 senha chaves secretas
 Ele serve para não deixar essas informações no código, facilitando mudanças e melhorando a segurança.

# o que é .env-exemplo?
serve para colocar as variaveis sem mostrar os valores delas quando for subir no git

# o que é o arquivo config.php?
Este arquivo armazena as configurações do banco de dados do seu site, como por exemplo, nome do banco de dados, nome do usuário, senha e host

# o que é .gitgnore?
guardar infomações do codigo que são sensiveis e faz com que não mostre no github

# aula 02/09/25
          ## deletar informações

requisição get chamar ela pelo link, para isso colocar o nome do arquivo e após o ? colocar as informações como o id do GET e a variavel que vai guardar ela, criar a arquivo que vai servir para deletar.
 
 No arquivo colocar o require codigo que sem ele o sistema não funciona onde nele no caso vai ter as configurações, onde lá se tem codigos globais que serve para o funcionamento do sistema como a conexão banco entre outros.

 const é uma variavel global que no caso do nosso codigo colocamos um magic numero que seria um numero que buga nossa logica e que temos que cirar uma variavel para especificalo

 Depois criamos uma a variavel id para guardar o id do GET e criamos a variavel para colocar o update do banco e outra variavel onde co
 
   


