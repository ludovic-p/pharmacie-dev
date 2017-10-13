# Env Service

## Déploiment
  * Créer une VM pour contenir le service <code>docker-machine create --driver virtualbox NAME_MACHINE</code>
  * Aller dans la *configuration* de virtualbox pour créer un *dossier partager*
  * Choisir la racine du service (contenant le dossier app et docker) et choisir comme nom *service* puis cochez les cases montage automatique et configuration permanante
  * Allez dans la *docker-machine en ssh* <code>docker-machine ssh NAME_MACHINE</code>
  * Ajouter le fichier bootlocal.sh : <code>sudo touch /var/lib/boot2docker/bootlocal.sh </code>
  * Entrer la commande <code>sudo vi /var/lib/boot2docker/bootlocal.sh</code> pour ajouter les lignes :
    * mkdir /home/docker/service/
    * mount -t vboxsf service /home/docker/service
  * Enregistrez et sortez pour redémarrer votre docker-machine (<code>docker-machine restart</code>). Celle-ci devrait avoir monté le volume service automatiquement.
  * Définissez dans le fichier *hosts* l'ip de votre docker machine (<code>docker-machine ls</code>) comme le DNS symfony3.dev
  * Lancer la commande <code>docker-machine env NAME_MACHINE</code> puis executer la commande commençant par *@FOR*
  * Lancez la commande <code>docker-compose up -d</code> dans le dossier comprenant le *docker-compose.yml*
  * Entrez dans le docker php <code>docker exec -it service_php bash</code>, et lancez composer (<code>composer install</code>) puis aller dans le dossier *var* pour lancer la commande <code>chmod -R 777 cache logs && chown -R www-data:www-data cache logs</code>
  * Si tout est bien fait vous devirez voir la page de bienvenue de Symfony !
