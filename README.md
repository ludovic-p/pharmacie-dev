# Env Service

## Déploiment
  * Créer une VM pour contenir le service <code>docker-machine create --driver virtualbox NAME_MACHINE</code>
  * Aller dans la *configuration* de virtualbox pour créer un *dossier partager*
  * Choisir la racine du service (contenant le dossier app et docker) et choisir comme nom *service* puis cochez les cases montage automatique et configuration permanante 
  * Allez dans la *docker-machine en ssh* <code>docker-machine ssh NAME_MACHINE</code>
  * Ajouter le fichier bootlocal.sh : <code>sudo touch /var/lib/boot2docker/bootlocal.sh </code>
  * Entrer la commande <code>sudo vi /var/lib/boot2docker/bootlocal.sh</code> pour ajouter les lignes :
    * mkdir /home/docker/app/
    * mount -t vboxsf app /home/docker/app
  * Enregistrez et sortez pour redémarrer votre docker-machine (*docker-machine restart*). Celle-ci devrait avoir monté le volume service automatiquement.
  * Définissez dans le fichier hosts l'ip de votre docker machine (*docker-machine ls*) comme le dns symfony3.dev
  * Si tout est bien fait vous devirez voir la page de bienvenue de Symfony !
