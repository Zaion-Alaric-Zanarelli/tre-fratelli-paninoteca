# 🍞 Tre Fratelli — Paninoteca Romana

## 📖 Visão Geral do Projeto

**Tre Fratelli — Paninoteca Romana** é um projeto didático de desenvolvimento web criado para alunos do ensino médio técnico, utilizando tecnologias modernas de Front-end e Back-end de forma simplificada e organizada.

O projeto simula o desenvolvimento de um sistema web real para uma paninoteca fictícia localizada em Roma, integrada ao contexto narrativo do Universo Zaion.

A proposta é aproximar os estudantes das práticas utilizadas no mercado profissional, mantendo uma estrutura acessível para aprendizado gradual.

---

# 🏛️ Conceito da Paninoteca

A **Tre Fratelli — Paninoteca Romana** é uma pequena paninoteca familiar situada no bairro fictício inspirado em **Trastevere**, em Roma.

📍 Endereço fictício:

```text
Via del Moro, 27
Trastevere — Roma, Itália
```

O estabelecimento possui ambiente acolhedor, moderno e voltado principalmente para:

* estudantes;
* moradores locais;
* turistas;
* trabalhadores da região.

A identidade da marca mistura:

* cafeteria italiana moderna;
* paninoteca artesanal;
* ambiente jovem e tecnológico.

O nome “Tre Fratelli” possui relação simbólica com os personagens:

* Zaion;
* Leo;
* Ryo.

---

# 🎯 Objetivo Inicial do Sistema

Inicialmente, o sistema será utilizado para:

* divulgação institucional da paninoteca;
* apresentação do cardápio;
* gerenciamento interno;
* controle de pedidos;
* controle de caixa;
* controle básico administrativo.

O sistema funcionará como:

* website institucional;
* sistema interno simplificado.

---

# 🚀 Expansão Futura

Futuramente, o projeto poderá evoluir para:

* sistema de delivery;
* autenticação de usuários;
* painel administrativo completo;
* integração com banco de dados avançado;
* pedidos online;
* integração com APIs;
* dashboard administrativo;
* relatórios;
* sistema de estoque.

Essa abordagem permite crescimento gradual do projeto conforme o avanço dos conteúdos estudados.

---

# 🌍 Idiomas do Sistema

O site será desenvolvido em:

| Idioma                | Código  |
| --------------------- | ------- |
| Italiano              | `it`    |
| Inglês Britânico      | `en-gb` |
| Português de Portugal | `pt-pt` |

O idioma padrão será:

```text
Italiano
```

Estrutura sugerida:

```text
/it/
/en-gb/
/pt-pt/
```

Essa organização ajuda os alunos a compreender:

* internacionalização;
* separação de conteúdo;
* organização de projetos multilíngues;
* reutilização de layouts.

---

# 📱 Metodologia Mobile First

O projeto utilizará a abordagem **Mobile First**.

O desenvolvimento começará inicialmente para telas pequenas e posteriormente será adaptado para tablets e desktops.

Essa abordagem foi escolhida porque:

* smartphones são amplamente utilizados;
* facilita a organização visual;
* melhora acessibilidade;
* aproxima os estudantes das práticas modernas do mercado.

O framework [Bootstrap](https://getbootstrap.com?utm_source=chatgpt.com) já utiliza essa filosofia naturalmente.

---

# 🛠️ Tecnologias Utilizadas

| Tecnologia    | Finalidade                   |
| ------------- | ---------------------------- |
| HTML5         | Estrutura semântica          |
| CSS3          | Personalização visual        |
| Bootstrap 5.3 | Responsividade e componentes |
| PHP           | Processamento Back-end       |
| MySQL/MariaDB | Banco de dados               |
| Git/GitHub    | Versionamento e documentação |

---

# 📚 Justificativas Técnicas

## HTML5 Semântico

Será utilizado HTML semântico para:

* melhorar organização;
* facilitar acessibilidade;
* aproximar do padrão profissional.

---

## Bootstrap

O Bootstrap foi escolhido porque:

* reduz complexidade inicial;
* facilita responsividade;
* permite foco na lógica do sistema;
* utiliza padrões modernos de interface.

---

## PHP

O PHP será utilizado por:

* simplicidade didática;
* ampla documentação;
* facilidade de hospedagem;
* integração simples com MySQL.

Quando houver banco de dados:

* utilizar PDO;
* prepared statements;
* organização em arquivos separados.

---

# 🎨 Identidade Visual

## Estilo Visual

A identidade visual seguirá:

* design minimalista;
* aparência moderna;
* inspiração em cafeterias italianas;
* interface limpa e organizada.

---

# 🎨 Paleta de Cores

| Elemento        | Cor       |
| --------------- | --------- |
| Verde oliva     | `#4E5B31` |
| Creme           | `#F5E9D8` |
| Vermelho vinho  | `#7A2E2E` |
| Marrom espresso | `#3B2A21` |

---

# 🍞 Cardápio Inicial

## Panini

| Produto              | Preço |
| -------------------- | ----: |
| Panino Classico      | €6,50 |
| Panino Caprese       | €6,00 |
| Panino Porchetta     | €7,50 |
| Focaccia Vegetariana | €7,00 |
| Pizza al Taglio      | €4,50 |

## Bebidas

| Produto        | Preço |
| -------------- | ----: |
| Espresso       | €1,50 |
| Cappuccino     | €2,00 |
| Acqua Minerale | €1,50 |
| Bibita         | €2,50 |

---

# 📂 Estrutura do Repositório

Nome do repositório:

```text
tre-fratelli-paninoteca
```

Estrutura recomendada:

```text
tre-fratelli-paninoteca/
├── README.md
├── index.php
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── img/
│   └── js/
│
├── includes/
│   ├── header.php
│   ├── navbar.php
│   ├── footer.php
│   └── language-selector.php
│
├── config/
│   └── database.php
│
├── pages/
│   ├── it/
│   ├── en-gb/
│   └── pt-pt/
│
├── admin/
│   ├── pedidos/
│   ├── caixa/
│   └── dashboard/
│
├── database/
│   └── scripts/
│
├── docs/
│   ├── didactic/
│   │   ├── 01-project-overview.md
│   │   ├── 02-mobile-first.md
│   │   ├── 03-bootstrap.md
│   │   ├── 04-php-backend.md
│   │   ├── 05-versioning.md
│   │   └── 06-git-github.md
│   │
│   ├── website/
│   │   ├── brand.md
│   │   ├── menu.md
│   │   ├── languages.md
│   │   ├── pages-structure.md
│   │   └── content-guidelines.md
│   │
│   └── releases/
│       ├── beta.md
│       ├── release-candidate.md
│       └── current-version.md
│
└── releases/
```

---

# 🔖 Organização das Versões

## Beta

Versão inicial:

* testes;
* protótipos;
* funcionalidades incompletas.

Exemplo:

```text
v0.1.0-beta
```

---

## Release Candidate

Versão quase final:

* layout consolidado;
* funcionalidades estáveis;
* revisão de idiomas.

Exemplo:

```text
v1.0.0-rc.1
```

---

## Versão Atual

Versão estável:

* publicada;
* documentada;
* pronta para uso.

Exemplo:

```text
v1.0.0
```

---

# 📘 Objetivos Pedagógicos

O projeto permitirá ensinar:

* HTML semântico;
* CSS moderno;
* Bootstrap;
* Mobile First;
* PHP;
* CRUD;
* organização de projetos;
* internacionalização;
* Git/GitHub;
* documentação técnica;
* separação Front-end e Back-end;
* versionamento;
* boas práticas de desenvolvimento.

---

# 🧠 Filosofia Didática

O projeto seguirá padrões próximos do mercado profissional, porém adaptados para:

* ensino médio técnico;
* aprendizado gradual;
* desenvolvimento incremental;
* clareza organizacional.

A ideia principal é mostrar aos estudantes como um sistema real pode ser construído em etapas, utilizando:

* organização;
* documentação;
* versionamento;
* modularização;
* padrões modernos de desenvolvimento web.
