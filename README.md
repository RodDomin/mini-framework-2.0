# Mini-Framework 2.0

### bem-vindo ao mini-framework 2.0
O mini-framework foi atualizando, muitas mudanças foram feitas.

Updates:
- [x] MVC real
- [x] Roteamento atualizado
  - Com suporte a parametros de url
  - Suporte a parte de Api
- [x] Mini ORM para facilitar no tratamento dos dados
- [x] PHPUnit para fazer testes
- [x] Classe para facilitar retorno das views
- [x] Funções globais para facilitar o uso de url no sistema
  - Funciona com CSS caso queira
- [x] Interface para padronizar criação de utils no sistema
- [x] Util para carregamento dinâmico de css, imagens e js
- [x] Util para o carregamento dinâmico de arquivos do sistema
- [] Suporte a middlewares nas rotas
- [] Classe para facilitar processamento/arquivamento de imagem


### Como configurar?
Passos:
- Atualize os arquivos de configuração presentes na pasta Configs
  - Database para dados do seu banco de dados
  - General para alguma variável mais geral do sistema

### O que me levou a fazer uma versão 2.0?
O mini-framework 1.0 tinha fortes limitações que realmente chegavam a atrapalhar quem construía sistemas para web com ele, exemplo? Um sistema de rota falho e que atrapalhava muito.