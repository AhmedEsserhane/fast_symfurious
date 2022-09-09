# initialisation
* symfony new fast_furious --version=lts --full
# Phase 1
## Controller
* php bin/console make:controller Home
## Navbar
* base/nav.html.twig
## Users
* php bin/console make:user
* php bin/console make:auth 
# Phase 2
* Les Roles
** ROLE_PILOTE: ROLE_USER
** ROLE_ADMIN: ROLE_PILOTE
* php bin/console make:controller Admin
# Phase 3
* php bin/console make:entity Catégories
* php bin/console make:crud Catégories
* php bin/console make:entity Courses
* php bin/console make:crud Courses