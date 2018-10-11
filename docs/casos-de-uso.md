# Casos de uso

## CDU001
  Cadastrar projeto:
  
### Fluxo principal 1: O funcionário preenche um formulário com as informações do projeto como nome, descrição, estimativa de duração, departamento(s) envolvido(s) e resultados esperados e opcionalmente adiciona colaboradores do projeto.
  O sistema exibe uma mensagem de que o o projeto foi cadastrado com sucesso
  
  Fluxo alternativo 1: Caso o funcionário não preencha as informações obrigatórias (nome, descrição, estimativa, departamento, e resultados esperados) o sistema exibe uma mensagem de que não foi possivel cadastrar o projeto.
  
  Fluxo alternativo 2: Atribuir tarefas aos colaboradores do projeto. Caso o usuário atribuido a uma tarefa ainda não esteja cadastrado no sitema uma mensagem de erro é exibida informando que o usuário não está cadastrado no sistema e que não foi possível realizar a atribuição.
  
    
## CDU002
  Comentar um projeto
  
### Fluxo principal: comentar o comentário de outros funcionario para agregar mais ideias ao projeto.
  
  Fluxo alternativo 1: Caso tenha mais de 140 caracteres, o sistema exibe uma mensagem de que não foi possível comentar pois excede o número de caracteres permitido.
  
  Fluxo alternativo 2: Se um pojeto já possui mais de 10 comentários, o sistema exibe que não é possível adicionar mais comentários. 

## CDU003
  Submeter projeto para aprovação
  
### Fluxo principal: Após a criação do projeto, e todas as caracteristicas definidas, submeter o projeto para aprovação.
  
## CDU004
  Gerenciar tarefas
  
### Fluxo principal: Após o usuário entrar no sistema, ele pode selecionar um dos projetos a ele atribuído. Após selecionar o projeto o sistema apresenta ao usuário as tarefas a ele atribuídas sobre o determinado projeto, podendo realizar inclusão ou exclusão de arquivos.
  
