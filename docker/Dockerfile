# WEBSERVER
FROM php:7.4-apache

RUN apt-get clean
RUN apt-get update

#install some basic tools
RUN apt-get install -y \
        git \
        tree \
        vim \
        wget \
        subversion

RUN apt-get update
RUN apt-get -y install libzip-dev
RUN docker-php-ext-install zip