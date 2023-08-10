# Extension Twig pour la Conversion de Nombres en Mots (Bundle Symfony)

Ce bundle Symfony fournit une extension Twig pour convertir les nombres en mots en français.
Voir la [librarie PHP](https://github.com/phpmike/MvNumberWordsFrConverter)

## Build status

[![Build Status](https://app.travis-ci.com/phpmike/MvNumberToWordsFrBundle.svg?branch=master)](https://app.travis-ci.com/phpmike/MvNumberToWordsFrBundle)

## Installation

1. Installez le bundle en utilisant Composer :

```bash
composer require mv/number-words-fr-bundle
composer recipe:install mv/number-words-fr-bundle
```

## Configuration

Ajouter au fichier config/services.yaml
```yaml
imports:
    # Your others imports
    - { resource: '@MvNumberWordsFrBundle/config/autowire.yaml' }
```

## Configuration requise

- PHP >= 7.4.30
- Symfony >= 5.4
- mv/number-words-fr >= 1.0

## Utilisation

Après avoir installé le bundle, vous pouvez utiliser la fonction Twig `number_to_words_fr` pour convertir un nombre en mots :

```twig
{{ number_to_words_fr(123) }} // affiche cent vingt-trois
```

## Auteur

Ce bundle a été créé par Michael VEROUX. Pour en savoir plus, visitez [son profil GitHub](https://github.com/phpmike).

## Contributing

Any contributions, suggestions, or bug reports are welcome! Here's how you can contribute:

1. Fork the repository.
2. Create a branch for your changes: `git checkout -b feature/my-feature`.
3. Make your changes and commit: `git commit -am 'Added my feature'`.
4. Push to the branch: `git push origin feature/my-feature`.
5. Create a pull request to the main branch of the repository.

## Licence

This project is licensed under the GNU General Public License v3.0. Voir le fichier [LICENSE](LICENSE) pour plus de détails.


