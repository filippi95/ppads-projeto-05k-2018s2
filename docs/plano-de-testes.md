# Plano de testes - Caso de Uso CDU002

## Teste 1 - Comentar um projeto utilizando até 140 caracteres.
Pré-requisitos: Deve existir um projeto cadastrado no sistema.
Objetivo: Garantir que o campo de comentários do projeto está funcionando como deveria, isto é, o sistema está armazenando as informações 
imputadas no campo de comentários.
Resultado esperado: O sistema deve informar ao usuário que o comentário foi salvo.

## Teste 2 - Listar o projeto em que o comentário foi submetido.
Pré-requisitos: Deve existir um projeto cadastrado no sistema; Ter realizado o teste 1.
Objetivo: Verificar se o comentário está sendo exibido corretamente.
Resultado esperado: Listar o comentário da mesma forma que ele foi enviado.

## Teste 3 - Comentar mais de uma vez o mesmo projeto
Pré-requisitos: Deve existir um projeto cadastrado no sistema; O projeto deve ter sido comentado anteriormente.
Objetivo: Garantir que o sistema permite que um projeto possa ter mais de um comentário.
Resultado esperado: O sistema deve informar ao usuário que o comentário foi salvo, permitindo que o usuário cadastre mais de um comentário.

## Teste 4 - Comentar um projeto utilizando mais de 140 caracteres.
Pré-requisitos: Deve existir um projeto cadastrado no sistema.
Objetivo: Verificar se o sistema está barrando o cadastro de comentários com mais de 140 caracteres.
