# ThemeInstall

<p align="center" class="text-center" style="text-align:center;"><a href="https://i9w3b.github.io" target="_blank"><img src="https://i9w3b.github.io/i9w3b.png" width="200"></a></p>
<p align="center" class="text-center" style="text-align:center;">
<a href="https://github.com/i9w3b/theme-install/blob/master/LICENSE.md"><img src="https://img.shields.io/github/license/i9w3b/theme-install" alt="License"></a>
<a href="https://github.com/i9w3b/theme-install"><img src="https://img.shields.io/github/languages/count/i9w3b/theme-install" alt="GitHub Language Count"></a>
<a href="https://github.com/i9w3b/theme-install"><img src="https://img.shields.io/github/repo-size/i9w3b/theme-install" alt="GitHub Repo Size"></a>
<a href="https://github.com/i9w3b/theme-install/releases"><img src="https://img.shields.io/github/v/release/i9w3b/theme-install" alt="GitHub Release"></a>
<a href="https://github.com/i9w3b/theme-install"><img src="https://img.shields.io/github/downloads/i9w3b/theme-install/total" alt="Total Downloads"></a>
</p>

Instalar temas Laravel hospedados no GitHub

Cansou de digitar os comando abaixo só para criar as visualizações padrão em todos os projetos de desenvolvimento em Laravel?

```bash
$ composer require laravel/ui
$ php artisan ui bootstrap --auth
$ npm install && npm run dev
```

## Estrutura do tema padrão

```txt
layouts/
├── app.blade.php
└── shared/
    └── css.blade.php
home.blade.php
welcome.blade.php
```

## Instalação

Execute o seguinte comando:

```bash
composer require i9w3b/theme-install --dev
```

## Como Usar

O comando abaixo, fornece uma estrutura básica de views padrão para iniciar um projeto.

```bash
php artisan theme:install https://github.com/i9w3b/theme-laravel.git
```

>- ## Observação de uso:
>- `theme:install` é o comando artisan que faz todo o trabalho
>- `https://github.com/i9w3b/theme-laravel.git` fica a sua escolha

Você pode alterar a url como no exemplo:

```bash
php artisan theme:install https://github.com/sua_conta/repositorio_do_tema.git
```

## Configuração

Execute:

```bash
php artisan vendor:publish --provider="I9W3b\ThemeInstall\ThemeInstallServiceProvider"
```

Agora você pode personalizar algumas variáveis no arquivo publicado `config/themeinstall.php`

## Dúvidas/Sugestões

Se encontrar erros ou tiver sugestões de melhorias, acesse: [issues](https://github.com/i9w3b/theme-install/issues/new)

## Licença

[MIT](https://github.com/i9w3b/theme-install/blob/master/LICENSE.md) © [i9W3b](https://github.com/i9w3b)
