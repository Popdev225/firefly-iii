#!/usr/bin/env bash

# build image
echo "$DOCKER_PASSWORD" | docker login -u "$DOCKER_USERNAME" --password-stdin

if [ "$TRAVIS_BRANCH" == "develop" ]; then
    echo "Build develop amd64"
    docker build -t jc5x/firefly-iii:develop -f Dockerfile .
    docker push jc5x/firefly-iii:develop
fi

if [ "$TRAVIS_BRANCH" == "master" ]; then
    echo "Build master amd64"
    docker build -t jc5x/firefly-iii:latest -f Dockerfile .
    docker tag jc5x/firefly-iii:latest jc5x/firefly-iii:release-$VERSION
    docker push jc5x/firefly-iii:latest
    docker push jc5x/firefly-iii:release-$VERSION
fi