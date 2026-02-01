# Registro de pessoas de diversos planetas

Terra, Piltover e Olímpia (planeta dos Eternos). Inclui os personagens de Star Trek e Star Wars.

Uma demonstração arquitetônica *full stack* usando Laravel 11, Vue 3 e PostgreSQL.

Projetado para emular a estética dos Arquivos do Conselho de Piltover e dos Eternos (do filme *Eternos*).

## Arquitetura

- **Backend:** Laravel 11
- **Frontend:** Vue 3
- **Banco de dados:** PostgreSQL 15
- **Infraestrutura:** Docker (Laravel Sail)

# Início rápido à maneira piltovense e eterniana

Este projeto inclui um `Makefile` para implantação rápida.

1. **Inicialize o ambiente:**

```bash
make setup
```

Isso criará os contêineres de Docker para instalar as dependências, migrará o banco de dados e os inserirá.

Inicie a interface com este comando:

```bash
make start
```

Acesse ao registro com http://localhost:8000.

Execute os testes unitários:

```bash
make test
```