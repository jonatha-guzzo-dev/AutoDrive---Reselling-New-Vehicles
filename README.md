# 🚗 AutoDrive - Portal de Revenda de Veículos Novos

Bem-vindo ao repositório do **AutoDrive**, uma plataforma moderna e intuitiva para a exibição e comercialização de veículos novos de diversas marcas e categorias. O projeto foi desenvolvido com foco em alta performance, excelente experiência do usuário (UX) e facilidade na navegação e gerenciamento do catálogo de veículos.

## Demonstração


https://github.com/user-attachments/assets/f67256ee-c153-4a31-b1e5-8fa700086879



## 📋 Sumário

- [Sobre o Projeto](#-sobre-o-projeto)
- [Funcionalidades](#-funcionalidades)
- [Tecnologias Utilizadas](#-tecnologias-utilizadas)
- [Arquitetura e Uso dos Recursos](#-arquitetura-e-uso-dos-recursos)
- [Como Executar o Projeto](#-como-executar-o-projeto)
- [Contribuição](#-contribuição)

## 🎯 Sobre o Projeto

O **AutoDrive** é uma solução completa para concessionárias e revendedoras multimarcas que desejam destacar seus veículos novos no ambiente digital. A plataforma permite ao usuário explorar carros, SUVs, picapes e modelos elétricos, conferir especificações técnicas detalhadas e solicitar propostas diretas aos vendedores, contando com uma estrutura robusta de backend para o gerenciamento dos dados.

### Objetivos do Sistema:

- Apresentar um showroom digital interativo e moderno.
- Facilitar a busca e filtragem de veículos por marca, categoria e faixa de preço.
- Oferecer uma área de backend dinâmica para controle e gerenciamento dos veículos.
- Conectar potenciais compradores à equipe de vendas de forma eficiente.

## ✨ Funcionalidades

- 🚘 **Catálogo Completo:** Visualização dinâmica dos veículos cadastrados no sistema.
- 🔍 **Filtros Avançados:** Busca otimizada por marca, tipo (Sedan, SUV, Hatch, Elétrico), ano e faixa de preço.
- 📄 **Página do Veículo:** Ficha técnica detalhada, galeria de fotos em alta resolução e itens de série.
- 💬 **Formulário de Proposta/Interesse:** Envio direto de mensagens para a equipe de vendas.
- ⚙️ **Painel Administrativo / Backend:** Gerenciamento do estoque de veículos e propostas recebidas.
- 📱 **Layout Responsivo:** Experiência otimizada para smartphones, tablets e desktops.

## 🛠️ Tecnologias Utilizadas

O projeto utiliza uma stack robusta e moderna para aplicações web full-stack:

### Backend
- **PHP:** Linguagem principal do servidor.
- **Laravel:** Framework PHP para roteamento, autenticação, ORM (Eloquent) e lógica de negócios.

### Front-end & Estilização
- **Blade:** Engine de templates do Laravel para renderização dinâmica das views no servidor.
- **Tailwind CSS:** Framework CSS utilitário para design moderno, responsivo e de alta performance.
- **JavaScript (ES6+):** Interatividade e comportamento do cliente.

### Banco de Dados & Ferramentas
- **MySQL / PostgreSQL:** Banco de dados relacional para persistência do catálogo e propostas.
- **Composer & Node.js/NPM:** Gerenciadores de dependências para o backend e compilação de assets (Vite/Mix).
- **Git & GitHub:** Controle de versão.

## ⚙️ Arquitetura e Uso dos Recursos

O **AutoDrive** segue a arquitetura **MVC (Model-View-Controller)** fornecida pelo Laravel:

- **Models (Eloquent ORM):** Abstração do banco de dados para veículos, marcas, categorias e propostas.
- **Views (Blade PHP + Tailwind CSS):** Interface de usuário modularizada através de componentes Blade e estilizada com utilitários do Tailwind CSS.
- **Controllers:** Gerenciamento das requisições, aplicando regras de negócio e retornando as views ou dados necessários.
- **Migrations & Seeds:** Versionamento da estrutura do banco de dados e povoamento inicial para ambiente de desenvolvimento.

## 🚀 Como Executar o Projeto

### Pré-requisitos

Antes de começar, você precisará ter instalado em sua máquina:
- [Git](https://git-scm.com)
- [PHP](https://www.php.net) (v8.1 ou superior)
- [Composer](https://getcomposer.org)
- [Node.js & NPM](https://nodejs.org)
- Um servidor de banco de dados (MySQL, PostgreSQL ou SQLite)

### Passo a Passo

1. **Clone este repositório:**
   ```bash
   git clone https://github.com/seu-usuario/seu-repositorio.git
   cd seu-repositorio
   ```

2. **Instale as dependências do PHP (Composer):**
   ```bash
   composer install
   ```

3. **Instale as dependências do Front-end (NPM):**
   ```bash
   npm install
   ```

4. **Configure o arquivo de ambiente:**
   ```bash
   cp .env.example .env
   ```
   *Abra o arquivo `.env` e configure as credenciais do seu banco de dados (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).*

5. **Gere a chave da aplicação:**
   ```bash
   php artisan key:generate
   ```

6. **Execute as migrations e seeds:**
   ```bash
   php artisan migrate --seed
   ```

7. **Compile os assets com Tailwind CSS:**
   ```bash
   npm run dev
   ```

8. **Inicie o servidor local:**
   ```bash
   php artisan serve
   ```
   *Acesse `http://localhost:8000` no seu navegador.*

## 🤝 Contribuição

Contribuições são sempre bem-vindas! Se você deseja melhorar este projeto:

1. Faça um **Fork** do repositório.
2. Crie uma branch para a sua feature: `git checkout -b feature/MinhaNovaFeature`.
3. Faça commit das suas alterações: `git commit -m 'Adiciona nova feature'`.
4. Faça push para a branch: `git push origin feature/MinhaNovaFeature`.
5. Abra um **Pull Request**.

