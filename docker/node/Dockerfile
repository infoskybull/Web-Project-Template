FROM node:alpine

WORKDIR /var/www/html
COPY ./docker/laravel/package*.json ./

COPY ./docker/laravel ./

RUN npm install

EXPOSE 5173

CMD [ "npm","run", "build" ]