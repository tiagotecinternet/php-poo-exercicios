# Desafio - Namespaces, Composer e Autoload de classes

## Faça uma pesquisa sobre os temas abaixo:

- Namespaces
- Composer
- Autoload de classes usando o Composer

## Após compreender os temas pesquisados, faça as tarefas a seguir em uma nova branch do seu exercício:

- Aplique pelo menos um namespace visando organizar o acesso às classes existentes
- Baixe e instale o Composer (a instalação deve ser feita em modo de usuário)
- Configure o composer para que permita o gerenciamento e carregamento automático (autoload) de todas as classes do seu exercício
- Faça os ajustes necessários no arquivo index.php para que seja possível usar o autoload de classes
- Crie uma nova classe chamada Web herdando os recursos da classe Programacao.
    - Coloque nela apenas um método construtor contendo um comando `echo 'Livros de Programação Web'`
    - Faça o Composer atualizar a lista de classes do autoload    
- Volte para a index.php, faça a chamada desta classe e crie um objeto para ela
- Dê um var_dump neste objeto
    