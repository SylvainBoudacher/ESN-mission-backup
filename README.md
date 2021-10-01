# Projet Git & Docker and co

Ce projet a pour but de mettre en place des bonnes pratiques de git ainsi que dockeriser l'ensemble de l'application pour que celle-ci soit plus facilement eccessible à ceux qui viennent de rejoindre le projet, dans un contexte de missions pour le client.

Des automatisation sont aussi à mettre en place afin de certificer la bonne qualité du code.

Un push to deploy heroku a été mis en place, notification via slack à chaque push de façons à ce que le client soit au courant de l'avancé du projet à chaque push.

Enfin gitflow a été appliqué à l'ensemble du projet.

## Sommaire

1. [Directives](#Directives)
   1. [Lancer le projet](#Pour_lancer_le_projet)
   2. [Pousser les changements](#Pour_interragir_avec_le_code)
2. [Auteurs](#Auteurs)

## Directives

### Pour lancer le projet

1. Copier `.env.example` en `env` et y remplacer les données sensibles. Faire de même dans le `.env` situé dans _blog/_

2. lancer

   ```bash
   docker compose up
   ```

3. lancer composer install dans le container php avec

   ```bash
   docker compose exec app composer install
   ```

4. lancer la migration et autre commandes artisan pour set up

   ```
   docker compose exec app php artisan migrate:refresh --seed
   ```

5. Aller sur `localhost:3000` pour tester l'application et obtenir un json de liste de film

### Pour interragir avec le code

Le projet étant hebergé sur 2 plateforme, il faut avant - et ce avant de push le projet - lancer une commande qui permettra à la fois de pousser le code avec une commande sur les 2 plateforme.

Voici la commande en question :

```bash
git remote set-url --add --push origin git@github.com:sulycate/ESN-mission-backup.git
git remote set-url --add --push origin git@gitlab.com:iw-intensive-week-1-2021/groupe-7-iw2.git
```

## Auteurs

Ci-dessous, la liste des personnes ayant participé au projet :

| Nom                      | Email                       |
| ------------------------ | --------------------------- |
| Coraline Esedji (4IW2)   | esedjicoraline@gmail.com    |
| Sylvain Boudacher (4IW2) | sylvain.boudacher@gmail.com |
| Romain Pierucci (4IW2)   | pierucci.romain@gmail.com   |
