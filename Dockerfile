FROM nginx:alpine

# Supprimez la configuration par défaut de Nginx
RUN rm /etc/nginx/conf.d/default.conf

# Copiez les fichiers du projet dans le répertoire par défaut de Nginx
COPY . /usr/share/nginx/html

# Exposez le port sur lequel Nginx écoute (par défaut 80)
EXPOSE 80