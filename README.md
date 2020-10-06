# pdfToKindleOnline
[![Docker Hub package][dockerhub-badge]][dockerhub-link]

[dockerhub-badge]: https://img.shields.io/badge/images%20on-Docker%20Hub-blue.svg
[dockerhub-link]: https://hub.docker.com/repository/docker/agusalex/pdftokindle "Docker Hub Image"


Really rough and basic php PDF to Kindle converter using k2pdfopt.


Try it out!
https://pdftokindle.herokuapp.com/
(Only small filesizes <100kb work on Heroku because of its RAM restrictions)


Running it is easy!

    docker run -d -p 8080:8080 agusalex/pdftokindle

**Default Max size for PDF is** : 300MB
To change this set:

    PHP_FPM_UPLOAD_MAX_FILESIZE=max_sizeM
    SERVER_MAX_BODY_SIZE=max_sizeM

For complete list of enviromental variables check [**behance/docker-php**](https://github.com/behance/docker-php?files=1#downstream-configuration) 


# Docker Image Available
https://hub.docker.com/repository/docker/agusalex/pdftokindle

