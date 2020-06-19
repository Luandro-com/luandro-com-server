FROM node:10-alpine
RUN mkdir /app
WORKDIR /app
ADD tile-server/package.json /app/package.json
RUN npm install
ADD tile-server/ /app