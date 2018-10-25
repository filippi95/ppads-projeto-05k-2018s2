# Plano de testes - Caso de Uso CDU002

Pré-requisitos:
- Usuário deve estar logado no sistema.

Os seguintes projetos devem estar cadastrados no sistema:
- Sistema de Gerenciamento de Estoque

- Sistema de locação de livros

- Sistema de Pedido de Comida

- Sistema de Aluguel de Carros

- Sistema de Gerencimento de Vendas



## Teste 1 - Comentar o projeto 'Gerenciamento de Estoque' utilizando menos de 140 caracteres.
Passo 1: Selecionar o projeto 'Gerenciamento de Estoque'.

Passo 2: Preencher o campo de comentário com a seguinte frase: "Gostei da home-page do projeto".

Passo 3: Clicar no botão de envio.

Objetivo: Garantir que o campo de comentários do projeto está funcionando como deveria, isto é, o sistema está armazenando as informações 
imputadas no campo de comentários.

Resultado esperado: O sistema recarrega a página listando o comentário realizado.

## Teste 2 - Tentar comentar o projeto 'Aluguel de Carros' utilizando mais de 140 caracteres.
Passo 1: Selecionar o projeto 'Aluguel de Carros'.

Passo 2: Tentar digitar a frase: "Cras accumsan, quam sit amet consectetur aliquet, justo mi viverra elit, ut venenatis purus nulla quis dui. Vivamus vel orci bibendum mauris sed."

Resultado esperado: O campo deve possuir uma validação impedindo que o texto inserido ultrapasse os 140 caracteres, fazendo com que ao digitar mais de 140 caracteres.

## Teste 3 - Tentar colar um comentário com mais de 140 caracteres no campo de comentário do projeto 'Aluguel de Carros'.
Passo 1: Selecionar o projeto 'Aluguel de Carros'.

Passo 2: Copiar a frase: "Phasellus consectetur metus eu enim porttitor sollicitudin. Aliquam eget placerat lorem. Nulla tincidunt feugiat pulvinar. Proin in pulvinar metus."

Passo 3: Colar a frase no campo de comentários.

Resultado esperado: O sistema deve permitir a "colagem" de apenas 140 caracteres no campo de comentários.

## Teste 4 - Comentar o projeto 'Locação de Livros' 5 vezes.
Passo 1: Realizar 10 comentários com a frase: "Etiam pulvinar sodales fermentum. Curabitur."

Resultado esperado: O sistema deve permitir e listar os 5 comentários.

## Teste 5 - Comentar o projeto 'Locação de Livros' mais 6 vezes.
Passo 1: Comentar mais 5 vezes a frase: "Etiam pulvinar sodales fermentum. Curabitur."

Passo 2: Após o projeto estar com 10 comentários, tentar comentar mais uma vez a frase: "Etiam pulvinar sodales fermentum. Curabitur."

Passo 3: Clicar no botão de envio do comentário.

Resultado esperado: O sistema deve apresentar a mensagem "Não foi possível enviar o comentário. Projeto já alcançou o limite máximo de comentários."
