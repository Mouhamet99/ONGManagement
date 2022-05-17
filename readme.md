
[//]: # ()
[//]: # (<p align="center">)

[//]: # (  <img src="https://img.shields.io/static/v1?label=PRs&message=welcome&style=for-the-badge&color=24B36B&labelColor=000000" alt="PRs welcome!" />)

[//]: # (  <img alt="License" src="https://img.shields.io/github/license/jkytoela/next-startd?style=for-the-badge&color=24B36B&labelColor=000000">)

[//]: # (  <img alt="GitHub Repo stars" src="https://img.shields.io/github/stars/jkytoela/next-startd?style=for-the-badge&color=24B36B&labelColor=000000">)

[//]: # (</p>)

<br>

<h1 align="center">
    PHP MVC PROJECT
  <a href="https://madeinsenegal.dev/" target="blank_"></a>
  <br/>
  <img src="https://raw.githubusercontent.com/GalsenDev221/made.in.senegal/master/assets/made.in.senegal.png" width="100px" />
  <br/>
</h1>

[![PHP from Packagist](https://img.shields.io/packagist/php-v/php-mvc-project/php-mvc.svg?style=flat)](http://php.net)
[![License](https://img.shields.io/github/license/php-mvc-project/php-mvc.svg?style=flat)](LICENSE)
[![GitHub release](https://img.shields.io/github/release/php-mvc-project/php-mvc.svg)](https://github.com/php-mvc-project/php-mvc/releases)

The best implementation of the **Model-View-Controller** architectural pattern in **PHP**!

## Features

* Routing
* Controller
* Model
* Templates(View)
* Validation
* Security

## Requirements
* PHP 7.x

Here is the <a href="https://www.loom.com/share/6f9489d26df443d984765718c794268f">Video demo</a>

[//]: # (- ⚡ **Next.js** — The React Framework)

[//]: # (- 🔥 **next-seo** — Manage SEO easily)

[//]: # (- 💡 **Twind** — The smallest, fastest, most feature complete Tailwind-in-JS solution in existence)

[//]: # (- 📏 **ESLint** — Pluggable JavaScript linter)

[//]: # (- 💖 **Prettier** — Opinionated Code Formatter)

[//]: # (- 🐶 **Husky** — Use git hooks with ease)

[//]: # (- 📄 **Commitizen** — Conventional commit messages CLI)

[//]: # (- 🚓 **Commitlint** — Lint commit messages)

[//]: # (- 🖌 **Renovate** — Dependency update tool)

[//]: # (- 🚫 **lint-staged** — Run linters against staged git files)

[//]: # (- 🗂 **Absolute import** — Import folders and files using the `@` prefix)

## 🚀 Getting started

Follow the step above inside the project folder:

### 🔌👉Clone Project
```Terminal```
```shell
git clone https://github.com/Mouhamet99/ONGManagement.git   
```
### 🔌👉Install dependency
```Terminal```
```shell
composer install  
```

### 👉Configure your one database in Model.php
Here is mine: 
```Terminal```
```php
  public function __construct()
    {
        self::$db = new DBConnection('localhost', 'ong_nous_les_femmes', 'root', '');
    }
```
###👉 Create database using Doctrine
```Terminal```
```shell
php bin/console doctrine:database:create
```
#That's it !!!!💥💥💥
Start Running your server and
Enjoy it!!!!💥💥💥
###🔎default user credentials
**login:** user@gmail.com

**password:**  passer123!


## 🤝 Contributing

1. Fork this repository
2. Create your branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -m 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`

Consider contributing to the original TypeScript Starter, which you can find [here](https://github.com/jpedroschmitz).

**After your pull request is merged**, you can safely delete your branch.
