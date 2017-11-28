# adopt1Nerd

## Mini projet Symfony ( avec restitution Mardi ou Mercredi de la semaine prochaine)

### Manière de travailler:

- Par groupe de 3 avec un lead technique
    - Phase de conception:
        - Diagramme des classes UML
        - Wireframes
        - Partage du travail ( Eventuellement élection d'un scrum master)

- Propostions, à vous de choisir un sujet parmi:

    - Site d'annonce (Projet choisi)
    - Bibliotheque
    - Ecommerce

- Fonctionalités du framework dont vous allez avoir besoin pour vos projets:

    - Gérer les connexions utilisateurs avec le FOSUserBundle

Installation : 

N'oubliez pas de paramétrer la base de données associée à votre projet (dans __parameters.yml__)

De générer la base de données : 
- __bin/console doctrine:database:create__

De générer la table User avec la commande
- __bin/console doctrine:schema:update --force__

De vous assurer que toutes les dépendances sont à jour : 
- __composer update__

Créer un utilisateur avec la ligne de commande

Regardez les routes proposées par FOSUserBundle :
- __bin/console debug:router__

Allez sur la route correspondant au login pour essayer de vous connecter

Gérer les relations entre entités:
- *Doc Symfony*
- *Openclassrooms*
- *Faire un formulaire simple avec gestion de validation*:
    - *Symfony*
    - *Open classrooms*

adopt1Nerd
==========

A Symfony project created on November 28, 2017, 3:18 pm.

